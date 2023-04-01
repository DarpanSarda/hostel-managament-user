<?php include 'controller.php' ?>
<?php include 'connection.php' ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>VGEC | Vishwakarma Government Engineering College</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/dist/style.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="assets/dist/responsive.css">

     <!-- Favicon and Touch Icons  -->
     <link rel="shortcut icon" href="assets/images/home/vgec1.jpg">
    <link rel="apple-touch-icon-precomposed" href="assets/home/vgec1.jpg">

</head>
<body class="body header-fixed">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
<?php 
            include 'navbar.php' ?>                
           <section class="flat-title-page inner"> 
                <img class="absolute mark-page" src="assets/images/mark/mark-header-04.png" alt=""> 
                    <img class="absolute mark-page2 animate-rotate" src="assets/images/mark/mark-header-01.png" alt="">
                    <img class="absolute mark-page3" src="assets/images/mark/mark-header-02.png" alt="">
                    <img class="absolute mark-page4" src="assets/images/mark/mark-header-03.png" alt="">
                    <img class="absolute mark-page5" src="assets/images/mark/mark-header-05.png" alt="">      
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title-heading">
                                <h1 class="heading">Your Profile<span class="text-color-3">.</span></h1>
                            </div>                        
                        </div>
                    </div>
                </div>                    
            </section>
<?php
    $email = $_SESSION['email'];
    $query="select * from student where email='$email'";
    $result = mysqli_query($con,$query);
    while($row=$result->fetch_assoc())
    {
        $sno=$row["id"];
        $sname=$row["Name"];
        $semail=$row["email"];
        $senroll=$row["enrollment_no"];
        $status=$row["status"];
    }
    
?>
<table BORDER="0">
    <tr>
        <td>
            Name
        </td>
        <td>
            <?php echo $sname; ?>
        </td>
    </tr>
    <tr>
        <td>
            Email Id
        </td>
        <td>
            <?php echo $semail; ?>
        </td>
    </tr>
    <tr>
        <td>
            Enrollment No
        </td>
        <td>
            <?php echo $senroll; ?>
        </td>
    </tr>
</table>

<div>
    <?php 
    $email = $_SESSION['email'];
        $query="select * from registration where email='$email'";
        $result1 = mysqli_query($con,$query);
        // if($row!=null)
        // {
            while($row=$result1->fetch_assoc())
            {
                $rno=$row[0];
                $rname=$row["name"];
                $remail=$row["email"];
                $rmobile=$row["mobile_no"];
                $raddress=$row["address"];
                $caste=$row["caste"];
                $subcaste=$row["sub-caste"];
                $city=$row["city"];
                $state=$row["state"];
                $marks=$row["Gender"];
                $cate=$row["category"];
                $addtype=$row["addmission-type"];
                echo $rno;
            }
        // }
        // else
        // {
        //     echo "Not Registered :)";
        // }
    ?>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<?php include 'footer1.php' ?>
        <?php include 'footer.php' ?>
    <a id="scroll-top"></a>

    <!-- Javascript -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>

    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/count-down.js"></script>
    <script src="assets/js/shortcodes.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/switchmode.js"></script>

</body>

</html>