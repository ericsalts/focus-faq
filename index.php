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
                background-color: #fff;
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
        </style>
    </head>

<body>


<DIV style="margin-top:50px;"></DIV>

<DIV align=center>
<DIV style="margin-top:20px; margin-bottom:10px; font-size:100px; color:#E0E4E8;"><span class="glyphicon glyphicon-education"></span> <B>POLK COUNTY</B></DIV>
<DIV style="width: 800px; text-align:left;">

  <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading" style="background: #D0E8FF;">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse1"><span class="glyphicon glyphicon-plus"></span> Collapsible panel</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">Panel Body</div>
      <div class="panel-footer" style="background: #E4F0FF;">Panel Footer</div>
    </div>
  </div>
</div> 

  <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse2"><span class="glyphicon glyphicon-plus"></span> Collapsible panel</a>
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





</DIV>
</DIV>

</body>
</html>