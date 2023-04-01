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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/home/vgec1.jpg">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/Favicon.png">

</head>

<body class="body header-fixed">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->
                <?php
                include 'controller.php';
                require 'connection.php';
                include 'navbar.php';
                ?>
                
            <!-- title page -->
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
                                <h1 class="heading">Contact<span class="text-color-3">.</span></h1>
                            </div>                        
                        </div>
                    </div>
                </div>                    
            </section>

            <div class=" flat-contact flat-edit-profile">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrap-contact">
                                <div class="heading center">
                                    <h2 class="fw-6">Contact Us</h2>
                                    </div>
                                    <?php
    if ((isset($_POST['name'])) && (isset($_POST['email']))&& (isset($_POST['number']))&& (isset($_POST['address']))) {
        $name= $_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $address=$_POST['address'];
        $msg=$_POST['msg'];

        // echo $name;
        // echo $email;
        // echo $number;
        // echo $address;
        // echo $msg;
        $ins_contact=mysqli_query($con,"INSERT INTO `contact` (`name`, `email`, `phone`, `address`, `message`) VALUES ('$name', '$email', '$number', '$address', '$msg')");
    if($ins_contact)
    {
        // echo 'sucess';
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        Your Feedback is recorded <strong>Successfully </strong> We will contact you 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    else
    {
        // echo mysqli_error($con);
        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorryyy!!!!! </strong> Your feedback is not recorded 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
}
?>
                                <div class="form-upload-profile post"> 
                                    <form action="contact.php" method="post" class="form-profile">                     
                                        <div class="form-infor-profile">
                                            <div class="form-infor flex flat-form">
                                                <div class="info-account">                              
                                                    <fieldset>                                               
                                                        <input type="text" name="name" placeholder="Your Full Name" required>
                                                    </fieldset>
                                                    <fieldset>                                            
                                                        <input type="number" name="number" placeholder="+55 (121) 234 444" required>                                             
                                                    </fieldset>                                                                                                       
                                                </div>
                                                <div class="info-social">
                                                    <fieldset>                                                
                                                        <input type="email" placeholder="info.lawlead@gmail.com" value=<?php echo $_SESSION['email'] ?> readonly>
                                                        <input type="email" name="email" placeholder="info.lawlead@gmail.com" value=<?php echo $_SESSION['email'] ?> hidden>
                                                    </fieldset>                                  
                                                    
                                                    <fieldset>                                                   
                                                        <input type="text" name="address" placeholder="Enter Your Address" required>                                          
                                                    </fieldset>                                       
                                                </div>  
                                            </div> 
                                            <fieldset class="message">                           
                                                <input type="text" placeholder="Additional Message" name="msg" tabindex="4" rows="3" required>                           
                                            </fieldset>                                                              
                                        </div>
                                        <div class="button-contact center">
                                            <button class="submit" type="submit">
                                                Submit Now
                                            </button>     
                                        </div>                                      
                                    </form>              
                                </div> 
                            </div>                           
                        </div>
                    </div>               
                </div>
            </div>

           <!-- Footer -->
    <?php
    include 'footer1.php'; ?>       
        <?php
        include 'footer.php';
        ?>
        <!-- Bottom -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <a id="scroll-top"></a>
    
    <!-- Javascript -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/jquery-validate.js"></script>

    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/count-down.js"></script>
    <script src="assets/js/shortcodes.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/switchmode.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->


</body>

</html>