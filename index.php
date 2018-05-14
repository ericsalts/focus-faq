<!doctype html>
<html lang="en">
 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Focus Support</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #ffffff;
                color: #636b6f;
                font-family: 'Century Gothic', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                /*text-transform: lowercase;*/
            }

            .m-b-md {
                margin-bottom: 30px;
            }

  /* Icon when the collapsible content is shown 
  .panel-collapse:after {
    font-family: "Glyphicons Halflings";
    content: "\e114";
    float: right;
    margin-left: 15px;
  } */
  /* Icon when the collapsible content is hidden 
  .panel-collapse.collapse:after {
    content: "\e113";
  } */
</style>
    </head>

<body>


<DIV style="margin-top:50px;"></DIV>

<DIV align=center>
<DIV style="margin-top:20px; margin-bottom:10px; font-size:100px; color:#E0E4E8;"><span class="glyphicon glyphicon-education"></span> POLK COUNTY</DIV>
<DIV style="width: 800px; text-align:left;">

  <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse1"><span class="glyphicon glyphicon-plus"></span> Collapsible panel 1</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">Panel Body</div>
      <div class="panel-footer">Panel Footer</div>
    </div>
  </div>
</div> 

  <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse2"><span class="glyphicon glyphicon-plus"></span> Collapsible panel 2</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">Panel Body</div>
      <div class="panel-footer">Panel Footer</div>
    </div>
  </div>
</div> 






<div class="container">
  <h2>Expand and Collapse with different icons</h2>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#demo1">
      <span class="glyphicon glyphicon-plus"></span> Open
    </button>
  <div id="demo1" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
</div>

<div class="container">
  <h2>Expand and Collapse with different icons</h2>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#demo2">
      <span class="glyphicon glyphicon-plus"></span> Open
    </button>
  <div id="demo2" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
</div>


<script>
$(document).ready(function(){
  $("#demo1").on("hide.bs.collapse", function(){
    $(".btn").html('<span class="glyphicon glyphicon-plus"></span> Open');
  });
  $("#demo1").on("show.bs.collapse", function(){
    $(".btn").html('<span class="glyphicon glyphicon-minus"></span> Close');
  });
});
</script>

<BR><P>
<?

include('dbconnect.php');

$query = "SELECT id, username, lastname, firstname FROM users";
  #print "<textarea>$query</textarea>";
        $results = mysqli_query($db, $query);   
        while ($stuff =  mysqli_fetch_assoc($results))
        {
        $user_id[$stuff['id']] = $stuff['id'];
        $username[$stuff['id']] = $stuff['username'];
        $lastname[$stuff['id']] = $stuff['lastname'];
        $firstname[$stuff['id']] = $stuff['firstname'];
        $othervalue[$stuff['id']] = strtolower(substr($stuff['lastname'], 0, 7) . substr($stuff['firstname'], 0, 1));
        print "<BR>I'm in the while loop<BR>";
        }

  print "<P><B>All Users:</B>\r\n";
  print "<BR>\r\n";

  $value = 1 . 3;
  $value = $value . "5";
  $value = $value * 2;

  $length = strlen($value);
  
  print "<P>value = $value (length: $length)<P>";
 


  print "<TABLE border=0>";
  print "<TR><TD>Username</TD><TD>First Name</TD><TD>Last Name</TD><TD>Other</TD></TR>\r\n";
  foreach ($user_id as $key => $value)
  {
    print "<TR><TD><input type=text name=username value=\"$username[$key]\"></TD><TD><input type=text name=firstname value=\"$firstname[$key]\"></TD><TD><input type=text name=lastname value=\"$lastname[$key]\"></TD><TD>$othervalue[$key]</TR>\r\n";
  }
  print "</TABLE>";
  print "<BR>\r\n";        


  print "the username of 3 is $username[3]";


  ?>
<h3>User Preferences and Configuration</h3>
<ol>
  <li>User Preferences	</li>
  <li>Gradebook Configuration </li>	
  <li>Creating Categories--No Weighting	</li>
  <li>Creating Categories--With Weighting	
  <li>Delete a Category	</li>
</ol>

<h3>Attendance Procedures </h3>
<ol>
<li value=6> Combine Sections for Attendance</li>
<li> Take Attendance in List View</li>
<li> Take Attendance With a Seating Chart</li>
<li> Create a Seating Chart</li>
<li> Verify Attendance Was Sent</li>
<li> Update Attendance</li>
</ol>

<h3>User Preferences and Configuration</h3>
<ol>
  <li>User Preferences	</li>
  <li>Gradebook Configuration </li>	
  <li>Creating Categories--No Weighting	</li>
  <li>Creating Categories--With Weighting	
  <li>Delete a Category	</li>
</ol>

<h3>User Preferences and Configuration</h3>
<ol>
  <li>User Preferences	</li>
  <li>Gradebook Configuration </li>	
  <li>Creating Categories--No Weighting	</li>
  <li>Creating Categories--With Weighting	
  <li>Delete a Category	</li>
</ol>



14. Elementary School Reports (heading)
15. Print Mid-Term Elementary Progress Reports	
16. Post Elementary Standards-Based Grades	
17. Post Elementary Final Grades	

18. Secondary Gradebook Procedures (heading)
19. Create an Assignment	
20. Delete an Assignment	
21. Edit an Assignment	
22. Copy an Assignment	
23. Enter Assignment Grades	
24. Sort and Filter Assignments	
25. Combining Classes for Secondary Gradebooks	




</DIV>

</DIV>

</body>
</html>