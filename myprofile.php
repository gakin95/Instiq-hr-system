<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{
$eid=$_SESSION['emplogin'];
if(isset($_POST['update']))
{

$fname=$_POST['firstName'];
$lname=$_POST['lastName'];   
$gender=$_POST['gender']; 
$dob=$_POST['dob']; 
$department=$_POST['department']; 
$address=$_POST['address']; 
$city=$_POST['city']; 
$country=$_POST['country']; 
$mobileno=$_POST['mobileno'];
$bank=$_POST['bank'];
$acctname=$_POST['acctname'];
$acctnum=$_POST['acctnum'];
$nextkin=$_POST['kin'];
$marital=$_POST['marital'];
$kinaddr=$_POST['kinaddr'];
$kinphonenum=$_POST['kinnum'];

$sql="update tblemployees set FirstName=:fname,LastName=:lname,Gender=:gender,Dob=:dob,Department=:department,Address=:address,City=:city,Country=:country,Phonenumber=:mobileno,bank=:bank,AccountName=:acctname,AccountNo=:acctnum,NextOfKin=:nextkin,MaritalStatus=:marital,NextOfKinAddr=:kinaddr,NextOfKinPhoneNum=:kinphonenum where EmailId=:eid";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':department',$department,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':country',$country,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->bindParam(':bank',$bank,PDO::PARAM_STR);
$query->bindParam(':acctname',$acctname,PDO::PARAM_STR);
$query->bindParam(':acctnum',$acctnum,PDO::PARAM_STR);
$query->bindParam(':nextkin',$nextkin,PDO::PARAM_STR);
$query->bindParam(':marital',$marital,PDO::PARAM_STR);
$query->bindParam(':kinaddr',$kinaddr,PDO::PARAM_STR);
$query->bindParam(':kinphonenum',$kinphonenum,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$msg="Employee record updated Successfully";
}

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Admin | Update Employee</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet"> 
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
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
  <?php include('includes/header.php');?>
            
       <?php include('includes/sidebar.php');?>
   <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">Update profile</div>
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <form id="example-form" method="post" name="updatemp">
                                    <div>
                                        <h3>Update  Info</h3>
                                           <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
                                        <section>
                                            <div class="wizard-content">
                                                <div class="row">
                                                    <div class="col m6">
                                                        <div class="row">
<?php 
$eid=$_SESSION['emplogin'];
$sql = "SELECT * from  tblemployees where EmailId=:eid";
$query = $dbh -> prepare($sql);
$query -> bindParam(':eid',$eid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?> 
 

<div class="input-field col m12 s12 l6 ">
<label for="firstName">First name</label>
<input id="firstName" name="firstName" value="<?php echo htmlentities($result->FirstName);?>"  type="text" required>
</div>


<div class="input-field col m12 s12 l6">
<label for="lastName">Last name </label>
<input id="lastName" name="lastName" value="<?php echo htmlentities($result->LastName);?>" type="text" autocomplete="off" required>
</div>

<div class="input-field col m12 s12 l6">
<label for="empcode">Employee Code</label>
<input  name="empcode" id="empcode" value="<?php echo htmlentities($result->EmpId);?>" type="text" autocomplete="off" readonly required>
<span id="empid-availability" style="font-size:12px;"></span> 
</div>

<div class="input-field col m12 s12 l6">
<label for="email">Email</label>
<input  name="email" type="email" id="email" value="<?php echo htmlentities($result->EmailId);?>" readonly autocomplete="off" required>
<span id="emailid-availability" style="font-size:12px;"></span> 
</div>

<div class="input-field col m12 s12 l6">
<label for="phone">Mobile number</label>
<input id="phone" name="mobileno" type="tel" value="<?php echo htmlentities($result->Phonenumber);?>" maxlength="11" autocomplete="off" required>
 </div>

 <div class="input-field col m12 s12 l6">
<label for="address">Address</label>
<input id="address" name="address" type="text"  value="<?php echo htmlentities($result->Address);?>" autocomplete="off" required>
</div>

<div class="input-field col m12 s12 l6">
<label for="city">City/Town</label>
<input id="city" name="city" type="text"  value="<?php echo htmlentities($result->City);?>" autocomplete="off" required>
 </div>

 <div class="input-field col m12 s12 l6">
<label for="country">Country</label>
<input id="country" name="country" type="text"  value="<?php echo htmlentities($result->Country);?>" autocomplete="off" required>
</div> 

<div class="input-field col m12 s12 l12">
<label for="bank">Bank</label>
<input id="bank" name="bank" type="text" value="<?php echo htmlentities($result->bank);?>" autocomplete="off" required>
</div>


</div>
</div>
                                                    
<div class="col m6">
<div class="row">
<div class="input-field col m12 s12 l6">
<select  name="gender"  autocomplete="off" >
<option value="<?php echo htmlentities($result->Gender);?>"><?php if(htmlentities($result->Gender) == "") {echo 'Select Gender'; }else {echo htmlentities($result->Gender);}?></option>                                         
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
 <!-- <label for="birthdate">Date of Birth</label>  -->
<div class="input-field col m12 s12 l6">
<input id="birthdate" name="dob" placeholder="date of birth" class="datepicker" value="<?php echo htmlentities($result->Dob);?>" >
</div>

                                                    

<div class="input-field col m12 s12 l6">

<select  name="department" autocomplete="off">
<option value="<?php echo htmlentities($result->Department);?>"><?php if(htmlentities($result->Department) == "") {echo 'Select department'; }else {echo htmlentities($result->Department);}?></option>
<?php $sql = "SELECT DepartmentName from tbldepartments";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $resultt)
{   ?>                                            
<option value="<?php echo htmlentities($resultt->DepartmentName);?>"><?php echo htmlentities($resultt->DepartmentName);?></option>
<?php }} ?>
</select>
</div>



<div class="input-field col m12 s12 l6">
<label for="next-of-kin">Account number</label>
<input id="acctnum" name="acctnum" type="text" value="<?php echo htmlentities($result->AccountNo);?>" autocomplete="off" required>
</div>

<div class="input-field col m12 s12 l6">
<label for="next-of-kin">next of kin</label>
<input id="kin" name="kin" type="text" value="<?php echo htmlentities($result->NextOfKin);?>" autocomplete="off" required>
</div>

<div class="input-field col m12 s12 l6">
<label for="marital">marital status</label>
<input id="kin" name="marital" type="text" value="<?php echo htmlentities($result->MaritalStatus);?>" autocomplete="off" required>
</div>

<div class="input-field col m12 s12 l6">
<label for="next-of-kin-addr">next of kin address </label>
<input id="kin" name="kinaddr" type="text" value="<?php echo htmlentities($result->NextOfKinAddr);?>" autocomplete="off" required>
</div>

<div class="input-field col m12 s12 l6">
<label for="next-of-kin-num">next of kin phone number</label>
<input id="kin" name="kinnum" type="text" maxlength="11" value="<?php echo htmlentities($result->NextOfKinPhoneNum);?>" autocomplete="off" required>
</div>

<div class="input-field col m12 s12 l12">
<label for="account-name">Account name</label>
<input id="acctn" name="acctname" type="text" value="<?php echo htmlentities($result->AccountName);?>" autocomplete="off" required>
</div>

                                                            

<?php }}?>
                                                        
<div class="input-field col s12">
<button type="submit" name="update"  id="update" class="btn red darken-4">UPDATE</button>

</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                     
                                    
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/form_elements.js"></script>
        
    </body>
</html>
<?php } ?> 