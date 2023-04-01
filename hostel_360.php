<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VGEC | Vishwakarma Government Engineering College</title>
    <!-- Pannellum library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pannellum/2.5.6/pannellum.css"
        integrity="sha512-UoT/Ca6+2kRekuB1IDZgwtDt0ZUfsweWmyNhMqhG4hpnf7sFnhrLrO0zHJr2vFp7eZEvJ3FN58dhVx+YMJMt2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="assets/images/home/vgec1.jpg">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <style>
        * {
    padding: 0;
    margin: 0;
}

#panorama-360-view {
    width: 100vw;
    height: 100vh;
}
    </style>
</head>
<body>
    <?php
    // include 'navbar.php';
    include 'controller.php';
    include 'connection.php';
    ?>
<div id="panorama-360-view"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pannellum/2.5.6/pannellum.js"
        integrity="sha512-EmZuy6vd0ns9wP+3l1hETKq/vNGELFRuLfazPnKKBbDpgZL0sZ7qyao5KgVbGJKOWlAFPNn6G9naB/8WnKN43Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- End Pannellum library -->
<script src="main.js"></script>
</body>
</html>