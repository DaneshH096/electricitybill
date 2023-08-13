<?php 
require_once("Includes/config.php");
require_once("Includes/session.php");
// if ($count===0) {
//     $err_login="There were some problem";
// }
if(isset($_SESSION['logged']))
{
    if ($_SESSION['logged'] == true)
    {
        if ($_SESSION['account']=="admin") {
                header("Location:admin/index.php");
            }
        elseif ($_SESSION['account']=="user") {
                header("Location:user/index.php");
            }
    }  
    else  {
        header("Location:../index.php");
      }  
}

if(isset($_POST['login_submit'])) {
    if(!(isset($_POST['email']))) {
        if(!(isset($_POST['pass']))) {
            header("Location:script.js");
            location('index.php');    
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://png2.cleanpng.com/sh/18e997746b1835da8ae84e943136154b/L0KzQYm3U8MxN518j5H0aYP2gLBuTfVtbZR5ittsaYT8PbT2jgB2fJZ3Rdtsb372PcTCjfJwdF5oh995YX78PbbzhfN1eppoRdd1ZXP3grrqTcViapVoSKJsOEG2R4eCTsg2Omg4SKcAMUW1QoSBVMkxQGY3UaU3cH7q/kisspng-electricity-computer-icons-symbol-company-electric-electric-5abdc00c813769.8527305515223849085293.png" rel="icon" type="image/x-icon" />

    <title>Ebill</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><b>Ebill</b></a>
            </div>
            <div class="navbar-collapse collapse" >
                <?php include("login.php"); ?>
            </div>
        </div>
    </div>

    <div id="headerwrap">
        <div class="darkhearderwrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 fa-align-center signup">
                        <h1>Electricity/Power Bill<br>Management System</h1>
                    </div>
                    <div class="col-lg-6">
                        <h1>Sign Up</h1>
                        <?php include("signup.php"); ?>
                    </div>
                </div>
            </div>
            </div>
    </div>
    </div>
    <?php 
    require_once("footer.php");
    ?>
    <script src="assets/js/jquery-1.11.0.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>

    function validateForm() {
            var x = document.forms["myForm"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
        }  </script> 

</body>

</html>
