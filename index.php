<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Delamate | Connecting Hobbies.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <link rel="icon" href="favicon.png" type="image">
</head>
<style>
body{
    background-color:black;
}
.outer {
  padding-top: 120px;
  width: 850px;
  margin: auto;
  display: block;
  /* set the font color here as a background color, in this case black
  background-color: black; */
 
}

.bg {
  text-align: center;
  width: 0%;
  transition: all 0.2s ease-out;
  background: #3ebac6 background: -moz-linear-gradient(left, #3ebac6 0%, #8b539e 50%, #e53782 100%);
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, #3ebac6), color-stop(50%, #8b539e), color-stop(100%, #e53782));
  background: -webkit-linear-gradient(left, #3ebac6 0%, #8b539e 50%, #e53782 100%);
  background: -o-linear-gradient(left, #3ebac6 0%, #8b539e 50%, #e53782 100%);
  background: -ms-linear-gradient(left, #3ebac6 0%, #8b539e 50%, #e53782 100%);
  background: linear-gradient(to right, #3ebac6 0%, #8b539e 50%, #e53782 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#3ebac6', endColorstr='#e53782', GradientType=1);
}

.inner {
  display: inline-block;
  background-color: white;
  mix-blend-mode: screen;
  padding: 5px;
  width: 850px;
}

h1 {
  color: black;
  font-size: 50px;
  letter-spacing: 5px;
}

.outer:hover .bg {
  width: 100%;
}
</style>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#0a0b0c;">
  
    <!-- add div and collapsable -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link"  style="color:white;" href="#"><i class="fas fa-home"></i></a>
            </li>
            <li class="nav-item">
               
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <button class="btn btn-sm btn-primary">Build <i class="fas fa-plus"></i></button>
            </li>
        </ul>
    </nav>
<!-- test for gradient -->
    <div class="outer">
        <div class="bg">
            <div class="inner">
                <h1> GRADIENT TEXT ON HOVER</h1>
            </div>
        </div>
    </div>


</body>
</html>