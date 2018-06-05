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

include('dbconnect1.php');

#$query = "SELECT `Student ID` as `StuID`,`Last Name` as `LN`,`First Name` as `FN` FROM `gradorder2018` LIMIT 10";
$query = "SELECT `Student ID` as `StuID`,`Last Name` as `LN`,`First Name` as `FN` FROM `gradorder2018` ORDER BY `Class_Rank`";
  print "<textarea>$query</textarea>";
        $results = mysqli_query($db, $query);   
        $letter = 'A';
        $counter = 0;
        print "<table cellpadding=3 cellspacing=3><TR>";
        while ($stuff =  mysqli_fetch_assoc($results))
        {
         # print $stuff['StuID'];
        $student_id[$stuff['StuID']] = $stuff['StuID'];


        $key = $stuff['StuID'];


        #$firstname[$temp] = $stuff[`LN`];
        $firstname[$stuff['StuID']] = $stuff['FN'];

        $lastname[$stuff['StuID']] = $stuff['LN'];
      
        #$othervalue[$stuff['StuID']] = strtolower(substr($stuff['LN'], 0, 7) . substr($stuff['First Name'], 0, 1));
        #print "<BR>I'm in the while loop<BR>";

        $counter = $counter + 1;
        if($counter == 21)
          {$letter++;$counter = 1;print "</TR><TR>";}
        
        if($counter < 10)
        {
          $counter="0". $counter;
        }
        $seat = "$letter$counter";


        #print "<p><strong>$seat $firstname[$key]</strong> $lastname[$key] ($student_id[$key])</p> <br>";
        print "<td><div style=\"background:#5060F0; color:#FFFFFF; font-family:Tahoma; text-decoration:bold; font-size:14px; padding:5px; margin:5px;\" title=\"$firstname[$key] $lastname[$key]\">$seat</div></td>\r\n";
        }
        print "</TR></table>";

  print "<P><B>All Users:</B>\r\n";
  print "<BR>\r\n";

  $value = 1 . 3;
  $value = $value . "5";
  $value = $value * 2;

  $length = strlen($value);
  
  print "<P>value = $value (length: $length)<P>";
 
  
  #print"<pre>";
  #$arr = get_defined_vars();
  #print_r($arr);print"</pre>";


//   foreach( $student_id as $key => $value )
// {
//   print "$firstname[$key] $lastname[$key] ($student_id[$key]) <br>";
  
// }

  ?>
<div>

</DIV>
</DIV>

</body>
</html>