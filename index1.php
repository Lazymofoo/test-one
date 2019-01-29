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
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <script src="main.js"></script>
    <link rel="icon" href="favicon.png" type="image">
</head>
<style>
body{
    background-color:black;
}

.container-fluid{
    background: #3ebac6 ;
    background: -moz-linear-gradient(left, #3ebac6 0%, #8b539e 50%, #e53782 100%);
    background: -webkit-gradient(linear, left top, right top, color-stop(0%, #3ebac6), color-stop(50%, #8b539e), color-stop(100%, #e53782));
    background: -webkit-linear-gradient(left, #3ebac6 0%, #8b539e 50%, #e53782 100%);
    background: -o-linear-gradient(left, #3ebac6 0%, #8b539e 50%, #e53782 100%);
    background: -ms-linear-gradient(left, #3ebac6 0%, #8b539e 50%, #e53782 100%);
    background: linear-gradient(to right, #3ebac6 0%, #8b539e 50%, #e53782 100%);
}
.jumbotron{
    background-color:transparent;
}
.vl {
  border-left: 1px solid #3ebac6;
  
}
@media (max-width: 767px) {
  body { 
    padding-right: -20px; 
    padding-left: -20px;
  }
}
@media screen and (max-width: 480px) {
  #delamate_logo{
    font-size:79px;
  }
  #jumbo_width{
      width:100%;
  }
  .container{
      max-width:375px;
  }
}
@media screen and (min-width: 576px) and (max-width:610px){
   #build_button{
       display:none !important;
   }
}

</style>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:#0a0b0c;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- add div and collapsable -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link"  style="color:white;" href="#"><i class="fas fa-home"></i> Home</a>
                </li>
                <div class="vl"></div>
                <li class="nav-item">
                <a class="nav-link" href="#" ><i class="fab fa-wpexplorer" style="color:#3ebac6;"></i> Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-bell" style="color:#8b539e;"></i> Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-comment" style="color:#e53782;"></i> Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cog" style="color:#8b539e6;"></i> Settings</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button class="btn btn-sm btn-primary" id="build_button">Build <i class="fas fa-plus"></i></button>
                </li>
            </ul>
        </div>
    </nav>



    <!-- Body -->
    <div class="container-fluid" style="background-color:white;">
        <div class="jumbotron jumbotron-fluid" id="jumbo_width" style="margin-top:55px;">

            <div class="row">
                <div class="col-lg-7 col-xs-7">
                    <h1 class="display-1" id="delamate_logo" style="font-family: 'Poppins', sans-serif;color:white;letter-spacing:-7px;">Delamate</h1>
                    <h1 class="display-4" style="font-family: 'Poppins', sans-serif;color:#d6d6d6;font-size:35px;">Build Communities based on your Interest or Simply Join one.</h1>
                </div>
                <!-- dummy container -->
                <div class="col-lg-1 col-xs-1"></div>

                <div class="col-lg-4 col-xs-4">
                    <div class="container text-left">
                        <br/><br/>
                        <h1 class="display-4" style="font-family: 'Poppins', sans-serif;color:#d6d6d6;font-size:35px;">Get Started</h1>
                        <button type="button" class="btn btn-secondary btn-lg" style="color:black;background-color:#ffffff;border:#a44eba;margin-right:20px;" data-toggle="modal" data-target="#myModal">Login <i class="fas fa-sign-in-alt"></i></button>
                        <button type="button" class="btn btn-primary btn-lg"  style="color:black;background-color:#ffffff;border:#a44eba;">Sign Up <i class="fas fa-user-plus"></i></button>
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
      
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Account Login  <i class="fas fa-sign-in-alt"></i></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
        
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form action="/action_page.php">
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">Password:</label>
                                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                            </div>
                                            <div class="form-group form-check">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary" style="width:100%;">Login</button>
                                            </form>
                                        </div>
                                    </div>
        
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        
                                    </div>
        
                                </div>
                            </div>
                        </div>
  
                    </div>
                </div>
          </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container-fluid">
        <div class="row" style="color:white;">
            <div class="col-md-4 text-center" style="background-color:black;padding:20px;">
                <i class="fab fa-wpexplorer display-1" style="color:#595555;"></i>
                <h1 class="display-5">Explore.</h1>
                <h6 style="color:#d8d4d4;">Existing Communities and post fun things.</h6>
            </div>
            <div class="col-md-4 text-center" style="background-color:black;padding:20px;">
                <i class="far fa-building display-1" style="color:#595555;"></i>
                <h1 class="display-5">Build.</h1>
                <h6 style="color:#d8d4d4;">Your own Communities to share and help others.</h6>
            </div>
            <div class="col-md-4 text-center" style="background-color:black;padding:20px;">
                <i class="fas fa-handshake display-1" style="color:#595555;"></i>
                <h1 class="display-5">Connect.</h1>
                <h6 style="color:#d8d4d4;"> With peers or make new friends.</h6>
            </div>
        </div>
    </div>

    <br/><br/>
    <div class="line text-left container-fluid" style="height:50px; width:100%; margin:auto; letter-spacing:-2px;"><h1 style="color:white;">Communities</h1></div>
 
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-4" style="background-color:red;">
                    <div class="card" style="width:320px;">
                        <img class="card-img-top" src="https://www.airtel.in/assets/images/digitaltv-hdchannels.png" alt="Card image" style="width:100%">

                        <div class="card-body">
                            <h4 class="card-title">Music</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                            <div class="container text-right"><a href="#" class="btn btn-success">Join <i class="fas fa-plus-circle"></i></a></div>
                        </div>

                    </div>
            </div>    
<br/><br/>
            <div class="col-md-4" style="background-color:red;">
                    <div class="card" style="width:320px">
                        <img class="card-img-top" src="https://www.airtel.in/assets/images/digitaltv-hdchannels.png" alt="Card image" style="width:100%">

                        <div class="card-body">
                            <h4 class="card-title">Music</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                            <div class="container text-right"><a href="#" class="btn btn-success">Join <i class="fas fa-plus-circle"></i></a></div>
                        </div>

                    </div>
            </div>
            <br/><br/>
            <div class="col-md-4" style="background-color:red;">
                    <div class="card" style="width:320px">
                        <img class="card-img-top" src="https://www.airtel.in/assets/images/digitaltv-hdchannels.png" alt="Card image" style="width:100%">

                        <div class="card-body">
                            <h4 class="card-title">Music</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                            <div class="container text-right"><a href="#" class="btn btn-success">Join <i class="fas fa-plus-circle"></i></a></div>
                        </div>

                    </div>
                </div>
        </div>
    </div>
</body>
</html>
