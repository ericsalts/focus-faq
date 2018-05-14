Option Explicit
Dim sSystem As String

Private Sub chkSchoolWide_Click()
    If chkSchoolWide.Value = vbChecked Then
        tab1.Enabled = False
        gridTeach.Enabled = False
        gridCourse.Enabled = False
        gridTeacherCourse.Enabled = False
        mycnn.Execute "SchoolSystemsConfigModifySchoolWide '" & gs_SchlNum & "','" & gs_SchlYear & "','" & sSystem & "', 1"
    Else
        tab1.Enabled = True
        gridTeach.Enabled = True
        gridCourse.Enabled = True
        gridTeacherCourse.Enabled = True
        mycnn.Execute "SchoolSystemsConfigModifySchoolWide '" & gs_SchlNum & "','" & gs_SchlYear & "','" & sSystem & "', 0"
    End If
End Sub

Private Sub Form_Load()

    sSystem = "B"
    FillGrids "B"

End Sub

Private Sub FillTeachers(System As String)
    
    Dim rsFill As ADODB.Recordset
    Set rsFill = New ADODB.Recordset
    rsFill.Open "SchoolSystemsConfigGetTeachers '" & gs_SchlNum & "','" & gs_SchlYear & "','" & System & "'", mycnn, adOpenForwardOnly, adLockReadOnly
    
    gridTeach.RemoveAll
    
    Do While Not rsFill.eof
        gridTeach.AddItem rsFill("LocID").Value & vbTab & rsFill("SAP_ID").Value & vbTab & rsFill("Teacher_Name").Value & vbTab & rsFill("Participates").Value
        rsFill.MoveNext
    Loop
    
    rsFill.Close
    Set rsFill = Nothing
  
End Sub

Private Sub FillCourses(System As String)
    
    Dim rsFill As ADODB.Recordset
    Set rsFill = New ADODB.Recordset
    rsFill.Open "SchoolSystemsConfigGetCourses '" & gs_SchlNum & "','" & gs_SchlYear & "','" & System & "'", mycnn, adOpenForwardOnly, adLockReadOnly
    
    gridCourse.RemoveAll
    
    Do While Not rsFill.eof
        gridCourse.AddItem rsFill("CourseID").Value & vbTab & rsFill("CRSABBREV").Value & vbTab & rsFill("Participates").Value
        rsFill.MoveNext
    Loop
    
    rsFill.Close
    Set rsFill = Nothing
  
End Sub

Private Sub FillTeacherCourses(System As String)
    
    Dim rsFill As ADODB.Recordset
    Set rsFill = New ADODB.Recordset
    rsFill.Open "SchoolSystemsConfigGetTeacherCourses '" & gs_SchlNum & "','" & gs_SchlYear & "','" & System & "'", mycnn, adOpenForwardOnly, adLockReadOnly
    
    gridTeacherCourse.RemoveAll
    
    Do While Not rsFill.eof
        gridTeacherCourse.AddItem rsFill("LocID").Value & vbTab & rsFill("SAP_ID").Value & vbTab & rsFill("Teacher_Name").Value & vbTab & rsFill("CourseID").Value & vbTab & rsFill("CRSABBREV").Value & vbTab & rsFill("Participates").Value
        rsFill.MoveNext
    Loop
    
    rsFill.Close
    Set rsFill = Nothing
    
End Sub
Private Sub FillSchoolWide(System As String)
    
    Dim rsFill As ADODB.Recordset
    Set rsFill = New ADODB.Recordset
    rsFill.Open "SchoolSystemsConfigGetSchoolWide '" & gs_SchlNum & "','" & gs_SchlYear & "','" & System & "'", mycnn, adOpenForwardOnly, adLockReadOnly
    
    If Not rsFill.eof Then
        If CInt(rsFill(0).Value) > 0 Then
            chkSchoolWide.Value = vbChecked
            tab1.Enabled = False
            gridTeach.Enabled = False
            gridCourse.Enabled = False
            gridTeacherCourse.Enabled = False
        Else
            chkSchoolWide.Value = vbUnchecked
            tab1.Enabled = True
            gridTeach.Enabled = True
            gridCourse.Enabled = True
            gridTeacherCourse.Enabled = True
        End If
    End If
        
    rsFill.Close
    Set rsFill = Nothing
    
End Sub

Private Sub gridCourse_Change()
    If gridCourse.Columns(2).Value = True Then
            mycnn.Execute "SchoolSystemsConfigModifyCourse '" & gs_SchlNum & "','" & gs_SchlYear & "','" & gridCourse.Columns(0).Value & "','" & sSystem & "', 1"
        Else
            mycnn.Execute "SchoolSystemsConfigModifyCourse '" & gs_SchlNum & "','" & gs_SchlYear & "','" & gridCourse.Columns(0).Value & "','" & sSystem & "', 0"
    End If
End Sub

Private Sub gridTeach_Change()
    If gridTeach.Columns(3).Value = True Then
            mycnn.Execute "SchoolSystemsConfigModifyTeacher '" & gs_SchlNum & "','" & gs_SchlYear & "','" & gridTeach.Columns(0).Value & "','" & sSystem & "', 1"
        Else
            mycnn.Execute "SchoolSystemsConfigModifyTeacher '" & gs_SchlNum & "','" & gs_SchlYear & "','" & gridTeach.Columns(0).Value & "','" & sSystem & "', 0"
    End If
End Sub

Private Sub gridTeacherCourse_Change()
    If gridTeacherCourse.Columns(5).Value = True Then
            mycnn.Execute "SchoolSystemsConfigModifyTeacherCourse '" & gs_SchlNum & "','" & gs_SchlYear & "','" & gridTeacherCourse.Columns(0).Value & "','" & gridTeacherCourse.Columns(3).Value & "','" & sSystem & "', 1"
        Else
            mycnn.Execute "SchoolSystemsConfigModifyTeacherCourse '" & gs_SchlNum & "','" & gs_SchlYear & "','" & gridTeacherCourse.Columns(0).Value & "','" & gridTeacherCourse.Columns(3).Value & "','" & sSystem & "', 0"
    End If
End Sub

Private Sub rdoProgram_Click(Index As Integer, Value As Integer)
    Select Case Index
    Case 0
        sSystem = "G"
        FillGrids "G"
    Case 1
        sSystem = "B"
        FillGrids "B"
    End Select
End Sub

Private Sub FillGrids(System As String)
    FillTeachers System
    FillCourses System
    FillTeacherCourses System
    FillSchoolWide System
End Sub


