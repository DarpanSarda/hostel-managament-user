<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        
<?php 
include 'controller.php';
require 'connection.php';

$name=$_POST['name'];
// echo $name;
$profile=$_POST['profile'];
// echo $profile;
$email=$_POST['email'];
// echo $email;
$caste=$_POST['caste'];
// echo $caste;
$subcaste=$_POST['subcaste'];
// echo $subcaste;
$gender=$_POST['gender'];
// echo $gender;
$state=$_POST['state'];
// echo $state;
$phone=$_POST['phone'];
// echo $phone;
$address=$_POST['address'];
// echo $address;
$marks=$_POST['marks'];
// echo $marks;
$city=$_POST['city'];
// echo $city;
$category=$_POST['category'];
// echo $category;
$pd=$_POST['pd'];
$edu=$_POST['edu'];
$dept=$_POST['dept'];
// echo $edu;
$check_email = "SELECT * FROM registration WHERE email = '$email'";
$res = mysqli_query($con, $check_email);
if(mysqli_num_rows($res) > 0){
    echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
    Your Data is already recorded <strong></strong>Please wait for our admin confirmation 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
else
{
    $ins_register=mysqli_query($con,"INSERT INTO `registration` (`name`, `email`, `mobile_no`, `address`, `caste`, `sub-caste`, `city`, `state`, `marks`, `Gender`, `category`, `addmission-type`,`pd`, `image`,`Department`) VALUES ('$name', '$email', '$phone','$address', '$caste', '$subcaste', '$city', '$state', '$marks', '$gender', '$category', '$edu','$pd', '$profile', '$dept')");
     if($ins_register)
        {
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            Your Data is recorded <strong>Successfully </strong>Please wait for our admin confirmation 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
    else
    {
        // echo mysqli_error($con);
        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>OOOPS!!!! Server error </strong>Please retry after sometime 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
}
// header("location:register_ins1.php");
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>