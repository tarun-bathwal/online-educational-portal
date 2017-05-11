    <?php

        include"dbconn.php";

    ?>

<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Mobile Specific Metas -->

    <!-- Title -->
    <title>Academy</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/Favicon.ico">

    <!-- CSS Stylesheet -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="css/subjects/bootstrap.css" rel="stylesheet"><!-- bootstrap css -->
    <link href="css/owl.carousel.css" rel="stylesheet"><!-- carousel Slider -->
    <link href="css/font-awesome.css" rel="stylesheet"><!-- font awesome -->
    <link href="css/loader.css" rel="stylesheet"><!--  loader css -->
    <link href="css/docs.css" rel="stylesheet"><!--  template structure css -->
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:100,200,300,400,500,700,800,900%7CPT+Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
        

    <style>
        html,body{
            padding: 0px;
            margin: 0px;
            min-height: 100%;
            width:100%;
        }
       
    </style>
    <!--toggle script-->

</head>

<body>
<div class="wapper">
    <header id="header">
        <div class="container-fluid" style="background-color: white; width: 100%">
            <nav id="nav-main">
                <div class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand"><img src="images/logo.png" alt=""></a>
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
                                        <li><a href="briefs.php">Case Law Briefs</a></li>

                                        <li><a href="testimonial.html">Expert View</a></li>

                                        <li><a href="testimonial.html">Bare Acts</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                            
                                <li><a href="index.php#contact">Contact Us </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>
<hr style="color: #0b0b0b;">
<div style="background-color: #31c5f0; height: 180px; width: 100%;">
    <br><br><br>
    <p style="font-size: 20px; text-align: center; padding: 10px; color: white;">
        <i class="fa fa-arrow-left"></i> <span id="sub">
        <?php 
                if(isset($_GET['sub']))
                { 
                    echo $_GET['sub']; 
                }
               
        ?>
        </span> | <span id="sub2"></span> | <span id="sub3"></span>
    </p>
    <p style="text-align: center; color: white; font-size: 40px; font-weight: bold; padding: 0px " id="subj">
        <span id="subject">
            <?php 
                if(isset($_GET['sub']))
                { 
                    echo $_GET['sub']; 
                }
                
        ?>
        </span>
    </p>
</div>
<br>
<div>
    <div class="conainer" >

        <div class="row">
            <form>
                <div class="col-md-4">
                
                    <select  name="sub_dropdown"  id="sub_dropdown" style=" position: relative; width: 70%; height: 30px; margin-left: 12.5%;  border-color:#31c5f0; border-radius: 2px; border-width: 2px;">
                    
                        <?php
                            $sql = " SELECT topic_name from topics ";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            $result=$stmt->fetchAll();
                            if($result){
                              foreach($result as $row){
                                echo "<option>".$row["topic_name"]."</option>";
                              }
                            }
                        ?>
                        
                    </select>
                
                </div>
                <div class="col-md-4" >
                    <select  name="sub_sub_dropdown" id="sub_sub_dropdown" style="position: relative; width: 70%; height: 30px; margin-left: 12.5%; border-color:#31c5f0; border-radius: 2px; border-width: 2px">
                        
                    </select>
                </div>
                <div class="col-md-4" >
                    <select  name="sub_sub_sub_dropdown" id="sub_sub_sub_dropdown" style="position: relative; width: 70%; height: 30px; margin-left: 12.5%; border-color:#31c5f0; border-radius: 2px; border-width: 2px">
                        
                    </select>
                </div>
            </form>
        </div>
    </div>


   <!-- <form id="myform" method="post">
        <select onchange="change()" name="sub_subject" style="position: relative; width: 33%; height: 30px; margin-left: 33%; border-color:#31c5f0; border-radius: 2px; border-width: 2px">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
       </select>
    </form>-->
   
</div>
<br>
<!--Bootstrap pills-->
<div class="container">

    <ul class="nav nav-pills nav-justified" >
       <!--
        <div class="row">
        <div class="col-md-3" ></div>
        <div class="col-md-3" ><li class="active" ><a data-toggle="pill" href="#articles">Articles</a></li></div>
            <div class="col-md-3" > <li><a data-toggle="pill" href="#videos">Videos</a></li></div>
        <div class="col-md-3" ></div>
        </div>
        -->
        <li class="active" ><a data-toggle="pill" href="#articles">Articles</a></li>


        <li><a data-toggle="pill" href="#videos">Videos</a></li>
    </ul>
    <div class="tab-content">
        <div id="articles" class="tab-pane fade in active">

            <?php
           /*

             $dbh=new PDO("mysql:host=localhost;dbname=techon","root","");

            $sql = "SELECT COUNT(*) FROM users";
            $result = mysqli_query($connection,$sql) or trigger_error("SQL", E_USER_ERROR);
            $r = mysqli_fetch_row($result);
            $numrows = $r[0];

            // number of rows to show per page
            $rowsperpage = 2;
            // find out total pages
            $totalpages = ceil($numrows / $rowsperpage);

            // get the current page or set a default
            if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
            // cast var as int
            $currentpage = (int) $_GET['currentpage'];
            } else {
            // default page num
            $currentpage = 1;
            } // end if

            // if current page is greater than total pages...
            if ($currentpage > $totalpages) {
            // set current page to last page
            $currentpage = $totalpages;
            } // end if
            // if current page is less than first page...
            if ($currentpage < 1) {
            // set current page to first page
            $currentpage = 1;
            } // end if

            // the offset of the list, based on current page
            $offset = ($currentpage - 1) * $rowsperpage;

            // get the info from the db
            $sql = "SELECT username FROM users LIMIT $offset, $rowsperpage";
            $result = mysqli_query($connection,$sql) or trigger_error("SQL", E_USER_ERROR);

            // while there are rows to be fetched...
            while ($list = mysqli_fetch_array($result)) {
            // echo data
            echo $list['username'] . " : " . $list['username'] . "<br />";
            } // end while

            /******  build the pagination links ******
            // range of num links to show
            $range = 8;

            // if not on page 1, don't show back links
            if ($currentpage > 1) {
            // show << link to go back to page 1
            echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
            // get previous page num
            $prevpage = $currentpage - 1;
            // show < link to go back to 1 page
            echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
            } // end if

            // loop to show links to range of pages around current page
            for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
            // if it's a valid page number...
            if (($x > 0) && ($x <= $totalpages)) {
            // if we're on current page...
            if ($x == $currentpage) {
            // 'highlight' it but don't make a link
            echo " [<b>$x</b>] ";
            // if not current page...
            } else {
            // make it a link
            echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
            } // end else
            } // end if
            } // end for

            // if not on last page, show forward and last page links
            if ($currentpage != $totalpages) {
            // get next page
            $nextpage = $currentpage + 1;
            // echo forward link for next page
            echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'><i class=\"fa fa-arrow-right\"></i></a> ";
            // echo forward link for lastpage
            echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'><i class=\"fa fa-arrow-left\"></i></a> ";
            } // end if
            /****** end build pagination links ******
            */
            ?>


            <br>
                <br>
                <div style="margin-left:12%; margin-right: 12%;">
                    <!--Here should be a loop-->
                    <div class="well well-sm" style="margin-top: 2%;">
                        <p class="question1" style="cursor: pointer">This is an example question ?? <i class="fa fa-arrow-right" style="float:right;"></i></p>
                        <!--this is answer-->
                        <div style="margin-top: 2%; margin-left: 3%; display: none;" class="well well-sm" id="answer1">
                            This is a sample answer to an sample question
                        </div>
                    </div>

                    <div class="well well-sm" style="margin-top: 3%;">
                        <p class="question2" style="cursor: pointer">This is an example question ?? <i class="fa fa-arrow-right" style="float:right;"></i></p>
                        <!--this is answer-->
                        <div style="margin-top: 2%; margin-left: 3%; display: none;" class="well well-sm" id="answer2">
                            This is a sample answer to an sample question
                        </div>
                    </div>

                    <div class="well well-sm" style="margin-top: 3%;">
                        <p class="question2" style="cursor: pointer">This is an example question ?? <i class="fa fa-arrow-right" style="float:right;"></i></p>
                        <!--this is answer-->
                        <div style="margin-top: 2%; margin-left: 3%; display: none;" class="well well-sm" id="answer2">
                            This is a sample answer to an sample question
                        </div>
                    </div>

                    <div class="well well-sm" style="margin-top: 3%;">
                        <p class="question2" style="cursor: pointer">This is an example question ?? <i class="fa fa-arrow-right" style="float:right;"></i></p>
                        <!--this is answer-->
                        <div style="margin-top: 2%; margin-left: 3%; display: none;" class="well well-sm" id="answer2">
                            This is a sample answer to an sample question
                        </div>
                    </div>

                    <div class="well well-sm" style="margin-top: 3%;">
                        <p class="question2" style="cursor: pointer">This is an example question ?? <i class="fa fa-arrow-right" style="float:right;"></i></p>
                        <!--this is answer-->
                        <div style="margin-top: 2%; margin-left: 3%; display: none;" class="well well-sm" id="answer2">
                            This is a sample answer to an sample question
                        </div>
                    </div>

                    <div class="well well-sm" style="margin-top: 3%;">
                        <p class="question3" style="cursor: pointer">This is an example question ?? <i class="fa fa-arrow-right" style="float:right;"></i></p>
                        <!--this is answer-->
                        <div style="margin-top: 2%; margin-left: 3%; display: none;" class="well well-sm" id="answer3">
                            This is a sample answer to an sample question
                        </div>
                    </div>
                </div>
                <br><br>

        </div>
        <div id="videos" class="tab-pane fade">
            <br><br><br>
            <div class="conainer" >

                <div class="row">


                    <div class="col-md-6" >

                        <iframe src="http://www.youtube.com/embed/W7qWa52k-nE" height="270px" width="75%" style="margin-left: 10%; margin-right: 2%"
                                frameborder="0" allowfullscreen align="center"></iframe>
                        <br><br>

                    </div>

                    <div class="col-md-6" >
                        <div style="height: 270px;;">
                            <h3 style="text-align: left;padding: 4px;">This is Video Title</h3>
                            <p style="padding: 2px; text-align: left"> this is a short description about the above video</p>
                        </div>
                        <br><br>
                    </div>


                    <div class="col-md-6" >

                        <iframe src="http://www.youtube.com/embed/W7qWa52k-nE" height="270px" width="75%" style="margin-left: 10%; margin-right: 2%"
                                frameborder="0" allowfullscreen align="center"></iframe>
                        <br><br>

                    </div>

                    <div class="col-md-6" >
                        <div style="height:270px;">
                            <h3 style="text-align: left;padding: 4px;">This is Video Title</h3>
                            <p style="padding: 2px; text-align: left"> this is a short description about the above video</p>
                        </div>
                        <br><br>
                    </div>


                    <div class="col-md-6" >

                        <iframe src="http://www.youtube.com/embed/W7qWa52k-nE" height="270px" width="75%" style="margin-left: 10%; margin-right: 2%"
                                frameborder="0" allowfullscreen align="center"></iframe>
                        <br><br>

                    </div>

                    <div class="col-md-6" >
                        <div style="height:270px;">
                            <h3 style="text-align: left;padding: 4px;">This is Video Title</h3>
                            <p style="padding: 2px; text-align: left"> this is a short description about the above video</p>
                        </div>
                        <br><br>
                    </div>'
                 </div>
            </div>
         </div>
</div>
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
   
    <script type="text/javascript" src="js/jquery.form-validator.min.js"></script>
   
  
    <script type="text/javascript" src="js/placeholder.js"></script>
<script src="js/subjects_script.js"></script>

</body>
</html>