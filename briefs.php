<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from 120.72.91.53/themeforest/academy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Apr 2017 09:07:46 GMT -->
<head>
    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Mobile Specific Metas -->

    <!-- Title -->
    <title>Briefs</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/Favicon.ico">

    <!-- CSS Stylesheet -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="css/bootstrap.css" rel="stylesheet"><!-- bootstrap css -->
    <link href="css/owl.carousel.css" rel="stylesheet"><!-- carousel Slider -->
    <link href="css/font-awesome.css" rel="stylesheet"><!-- font awesome -->
    <link href="css/loader.css" rel="stylesheet"><!--  loader css -->
    <link href="css/docs.css" rel="stylesheet"><!--  template structure css -->
    <link href="css/download.css" rel="stylesheet"><!--download button-->
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:100,200,300,400,500,700,800,900%7CPT+Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/tilt.js@1.1.13/dest/tilt.jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style>
        *{
            padding: 0%;
            margin: 0%;
        }
        h2{
            font-family:Roboto;
        }
    </style>
    <!--toggle script-->

</head>

<body>

<?php




$briefs_id='1';
if (isset($_GET['briefs_id']))
{
    $briefs_id = $_GET['briefs_id'];
}
?>
<div class="wapper">
    <header id="header">
        <div class="container-fluid" style="background-color: white; width: 100%">
            <nav id="nav-main">
                <div class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand"><img src="images/logo.png" alt=""></a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                    <a href="index.php">Home </a>
                                </li>
                             
                                <li class="sub-menu">
                                    <a href="#">Resources</a>
                                    <ul>
                                        <li><a href="index.php#study-materials">Study Materials</a></li>

                                        <li><a href="index.php#dictionary">Legal Dictionary</a></li>
                                        <li><a href="index.php#maxims">Legal Maxims</a></li>
                                        <li><a href="#">Case Law Briefs</a></li>

                                        <li><a href="testimonial.html">Expert View</a></li>

                                        <li><a href="testimonial.html">Bare Acts</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                            
                                <li><a href="contact-us.html">Contact Us </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>
<hr style="color: #0b0b0b;">
<div style="background-color:  #00e600; height: 180px; width: 100%;">
    <br><br><br>
    <p style="font-size: 20px; text-align: center; padding: 10px; color: white;">
        <i class="fa fa-arrow-left"></i><span id="brief1"></span> | <span id="brief2"></span> | <span id="brief3"></span>
    </p>
    <p style="text-align: center; color: white; font-size: 40px; font-weight: bold; padding: 0px ">
        <span id="brief"></span>
    </p>
</div>
<br>
<div>
    <div class="conainer" >

        <div class="row">
            <form>
                <div class="col-md-4" >
                    <select onchange="change()" name="sub_subject"  style=" position: relative; width: 70%; height: 30px; margin-left: 12.5%;  border-color: #00e600; border-radius: 2px; border-width: 2px">
                         <?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=ezligy", $username, $password);
   
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

                            $sql= "SELECT briefs_title FROM  briefs";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach($result as $row){
                                echo "<option>".$row["briefs_title"]."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-4" >
                    <select onchange="change()" name="sub_subject" style="position: relative; width: 70%; height: 30px; margin-left: 12.5%; border-color: #00e600; border-radius: 2px; border-width: 2px">
                        
                    </select>
                </div>
                <div class="col-md-4" >
                    <select onchange="change()" name="sub_subject" style="position: relative; width: 70%; height: 30px; margin-left: 12.5%; border-color: #00e600; border-radius: 2px; border-width: 2px">
                        
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>

<br>
<div class="container-fluid" >
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
<!--            <div class="container">-->
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">Case Law Briefs</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <ul class="list-group">
                    <li class="list-group-item" ><a href="briefs.php?briefs_id=1">Cundy V Lindsay, (1878) 3 App Cas 458 HL</a></li>
                    <li class="list-group-item"><a href="briefs.php?briefs_id=2">Dennant V Skinner And Collom [1948] 2 KB 164 (KBD)</a></li>
                    <li class="list-group-item" ><a href="briefs.php?briefs_id=1">Cundy V Lindsay, (1878) 3 App Cas 458 HL</a></li>
                    <li class="list-group-item"><a href="briefs.php?briefs_id=2">Dennant V Skinner And Collom [1948] 2 KB 164 (KBD)</a></li>
                </ul>
        </div>

</div>
        </div>
        </div>
        </div>
    </div>
<br>
<?php

 $query = "SELECT * FROM briefs WHERE briefs_id='".$briefs_id."'";
    $result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$title=$row['briefs_title'];
$descr=$row['briefs_descr'];
?>
<div class="container-fluid" style="margin-right:20px;margin-left:20px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" id="case" style="background-color:#ccffb3; height: auto;font-family:Roboto; ">
            <?php
            echo "<h2 style='text-align: center; color: black;margin-top: 2%; font-family: Roboto;'>";
            echo ".$title.";
            echo "</h2>";
            echo"<br>";

            echo ".$descr.";

            ?>
        </div>
    </div>
</div>

<!--download button-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="briefs/pdf1.pdf" class="download_button" download>
                <div class="downloadicon">
                    <div class="cloud"><div class="arrowdown"></div></div>
                </div>
                <div class="filename"><span class="value">Save as PDF</span></div>
            </a>
        </div>
    </div>
</div>


<!--share button-->
<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="right:0px; top:250px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
    <a class="a2a_button_linkedin"></a>
</div>

<script async src="https://static.addtoany.com/menu/page.js"></script>
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
   
    <script type="text/javascript" src="js/jquery.form-validator.min.js"></script>
   
  
    <script type="text/javascript" src="js/placeholder.js"></script>
<script src="js/briefs_script.js"></script>

</body>
</html>