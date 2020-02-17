<?php
session_start();
include('includes/config.php');

$php_errormsg = '';

if(isset($_POST['username']) && isset($_POST['password'])){
    
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";


    $query= $dbh -> prepare($sql);
    $query-> bindParam(':uname', $uname, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);

    if($query->rowCount() > 0)
    {
        $_SESSION['alogin']=$_POST['username'];
        echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
        } else{
        
        //   echo "<script>alert('Invalid Details');</script>";
        $php_errormsg = "Your Username or Password is not correct";

        }

   
}
    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title> Admin Data Centre</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">   
        <!-- <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/> -->
        <link href="../index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="signin-page">
        <section>
            <div class="test">
                <nav class="nav">
                    <div class="nav-wrapper">
                        <a href="../index.php" class="brand-logo" id="nav">
                            <img src="../img/instiq-logo.png" alt="instiq logo">
                        </a>
                    </div>
                </nav>
            </div> 
            <svg id="hero-wave" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1416.99 174.01">
                    <path class="cls-1" d="M0,280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34v309.54H0v2280.8Z" 
                    transform="translate(0 -135.53)"/>
            </svg>
        </section>
        <section class="sec2">
        <div class="mn-content valign-wrapper">
            <main class="mn-inner container ">
            <div class="gbillz">
                <div class="valign">
                      <div class="row">
                     <div class="right">
                      <h4 align="center" class="wow rubberBand delay-2s white-text "> Data Centre | Admin Login</h4>
                          <div class="col s12 m10 l8 offset-l2 offset-m1 ">
                              <div class="card white darken-1 ">
                                  <div class="card-content ">
                                      <span class="card-title ">Sign In</span>
                                       <div class="row">
                                           <form class="col s12" name="signin" method="post">
                                               <div class="input-field col s12">
                                                   <input id="username" type="text" name="username" class="validate" autocomplete="off" required >
                                                   <label for="email">Username</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="password" type="password" class="validate" name="password" autocomplete="off" required>
                                                   <label for="password">Password</label>
                                               </div>
                                               <div>
                                               <span class="text-danger"><strong><?php echo htmlentities($php_errormsg )?></strong></span>
                                               </div>
                                               <div class="col s12 right-align m-t-sm">
                                                   <input type="submit" name="signin" value="Sign in" class="btn red darken-4">
                                               </div>
                                           </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          </div>
                    </div>
                </div>
                </div>
            </main>
        </div>
        </section>
        
        <!-- Javascripts -->
        <script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="../assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/js/alpha.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js'></script>
        <script src="../index.js"></script>
    </body>
</html>