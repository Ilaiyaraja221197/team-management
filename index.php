<?php
require_once "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Management System</title>
    <!-- Bootstrap style and scripts -->
    <link rel="stylesheet" href="./Assets/css/bootstrap.min.css">
    <script src="./Assets/js/bootstrap.bundle.min.js"></script>
    <!-- Style and script -->
    <link rel="stylesheet" href="./Assets/css/style.css">
    <script src="./Assets/js/script.js"></script>
    <script src="./Assets/js/jquery-3.-7-1.min.js"></script>
</head>
<body>
    <div id="team-management" class="container">
        <div>
            <h2>Team Management System</h2>
        </div>
        <div>
            <?php include_once("./App/Views/list.php"); ?>
        </div>
       
    </div>
    <!-- For popup -->
    <div id="overlay-section" class="overlay-section">
        <div class="overlay">
        </div>
    </div>
</body>
</html>

