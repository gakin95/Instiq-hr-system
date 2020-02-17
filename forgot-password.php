
<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Code for change password 
if(isset($_POST['change']))
    {
$newpassword=md5($_POST['newpassword']);
$empid=$_SESSION['empid'];

$con="update tblemployees set Password=:newpassword where id=:empid";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':empid', $empid, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}

?><!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>ELMS | Password Recovery</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">       

        	
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="index.css" rel="stylesheet" type="text/css"/>
  <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
        
    </head>
    <body>
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="test">
                <nav class="nav">
                    <div class="nav-wrapper">
                        <a href="index.php" class="brand-logo" id="nav">
                            <img src="img/instiq-logo.png" alt="instiq logo">
                        </a>
                        <ul id="nav-mobile" class="right ">
                            <li><a href="admin/" class="admin-login-link">Admin login</a></li>
                        </ul>
                    </div>
                </nav>
                    <div class="white-text flow-text">
                        <h3 class="center wow wobble delay-2s ">Employee Password Recovery</h3> 
                        <!-- <h3 class="center wow fadeInDown delay-2s">Instiq management system</h3>  -->
                    </div>
            </div> 
            <svg  viewBox="0 0 500 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <path d="M0,0.8828125 C0,0.8828125 21.5375284,2.70107724 30.175,8.11815895 C70.4419893,33.3720274 173.689709,104.747595 239.525,104.747595 C306.457042,104.747595 408.933103,43.7500826 451.921875,21.6893757 C494.910647,-0.371331192 500,8.11815895 500,8.11815895 L500,200.882812 L0,200.882812 L0,0.8828125 Z" id="Rectangle" fill="#D64747"></path>
                </g>
            </svg>
        </section>
        <section class="sec2">
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                          <div class="col s12 m6 l8 offset-l2 offset-m3">
                              <div class="card white darken-1 card-large-screen">

                                  <div class="card-content ">
                                      <span class="card-title" style="font-size:20px;">Employee details</span>
                                         <?php if($msg){?><div class="succWrap"><strong>Success </strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
                                       <div class="row">
                                           <form class="col s12" name="signin" method="post">
                                               <div class="input-field col s12">
                                                   <input id="empid" type="text" name="empid" class="validate" autocomplete="off" required >
                                                   <label for="email">Employee Id</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="password" type="text" class="validate" name="emailid" autocomplete="off" required>
                                                   <label for="password">Email id</label>
                                               </div>
                                               <div class="col s12 right-align m-t-sm">
                                                
                                                   <input type="submit" name="submit" value="Sign in" class="btn red darken-4">
                                               </div>
                                           </form>
                                      </div>
                                  </div>
<?php if(isset($_POST['submit']))
{
$empid=$_POST['empid'];
$email=$_POST['emailid'];
$sql ="SELECT id FROM tblemployees WHERE EmailId=:email and EmpId=:empid";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':empid', $empid, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach ($results as $result) {
    $_SESSION['empid']=$result->id;
  } 
    ?>

 <div class="row">
          <span class="card-title" style="font-size:20px;">change your password </span>                                     
    <form class="col s12" name="udatepwd" method="post">
  <div class="input-field col s12">
 <input id="password" type="password" name="newpassword" class="validate" autocomplete="off" required>
                                                <label for="password">New Password</label>
                                            </div>

<div class="input-field col s12">
<input id="password" type="password" name="confirmpassword" class="validate" autocomplete="off" required>
 <label for="password">Confirm Password</label>
</div>


<div class="input-field col s12">
<button type="submit" name="change" class="btn red darken-4" onclick="return valid();">Change</button>

</div>
</div>
</form>
<?php } else{ ?>
<div class="errorWrap" style="margin-left: 2%; font-size:22px;">
 <strong>ERROR</strong> : <?php echo htmlentities("Invalid details");
}?></div>
<?php } ?>






                              </div>
                          </div>
                    </div>
                </div>
            </main>
            </section>
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js'></script>
        <script src="index.js"></script>
        
    </body>
</html>