<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Lands</title>
<!--

Template 2085 Neuron

http://www.tooplate.com/view/2085-neuron

-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

</head>
<body>
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $conn = mysql_connect($servername, $username, $password);
    
    if(!$conn)
    {
    die("failed".mysql_error());
    }
    
    //echo "success <br>";
    
    
    
    $sql=mysql_select_db('agro',$conn);
    
    if(!$conn)
    {
    die("failed".mysql_error());
    }
    
    //echo "success <br>";
    
?>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="index.html" class="navbar-brand">LANDS YOU CAN INVEST IN</a>
          </div>
          
  </div>
</div>



<!-- Blog Section -->

<section id="blog">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/farm1.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3>Gokulam Estates, Vengad, Guruvayur, Thrissur, Kerala, 680101, India</h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#">Jen Lopez</a></span>
                              <span><i class="fa fa-date"></i> July 22, 2017</span>
                              <span><a href="#">9872341657</a></span>
                         </div>
                         <div class="blog-post-des">
                              <p>वह पशुपालन भी करता है । लेकिन भारतीय किसान की आर्थिक स्थिति अच्छी नहीं है । स्वतंत्रता के 50 से अधिक वर्षो के बाद भी वह गरीब, अशिक्षित और शक्तिहीन है । उसे कठोर परिश्रम करना पड़ता है । उसके परिवार के सदस्य भी दिन-रात खेत-खलिहान में जुटे रहते हैं । बड़ी कठिनाई से वह अपना और अपने बाल-बच्चों का पेट भर पाता है ।</p>
                              
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/farm2.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3>Ponda Goa, 403401, India</h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#">Leo Dennis</a></span>
                              <span><i class="fa fa-date"></i> June 10, 2017</span>
                              <span><a href="#">9012435231</a></span>
                         </div>
                         <div class="blog-post-des">
                              <p>वह पशुपालन भी करता है । लेकिन भारतीय किसान की आर्थिक स्थिति अच्छी नहीं है । स्वतंत्रता के 50 से अधिक वर्षो के बाद भी वह गरीब, अशिक्षित और शक्तिहीन है । उसे कठोर परिश्रम करना पड़ता है । उसके परिवार के सदस्य भी दिन-रात खेत-खलिहान में जुटे रहते हैं । बड़ी कठिनाई से वह अपना और अपने बाल-बच्चों का पेट भर पाता है ।</p>
                              
                         </div>
                    </div>


                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/farm3.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3>P O Kolbong, Via Bijanbari, Dist Darjeeling, Darjeeling, India</h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#">Leo Dennis</a></span>
                              <span><i class="fa fa-date"></i> April 18, 2017</span>
                              <span><a href="#">8907618253</a></span>
                         </div>
                         <div class="blog-post-des">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              
                         </div>
                    </div>

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/farm1.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3>Yercaud-636601, Tamil Nadu, India</h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#">Jen Lopez</a></span>
                              <span><i class="fa fa-date"></i> March 12, 2017</span>
                              <span><a href="#">9124736574</a></span>
                         </div>
                         <div class="blog-post-des">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              
                         </div>
                    </div>
                    <?php
                    $sq = "select crop,price,address,image,hinditext from invest";

                    
                //    if($conn->query($sq))
                //     echo"succes";
                //     else
                //     echo"fail"

                    $result = $conn->query($sq);
                   if ($result->num_rows > 0) {
                                  
                    while($row = $result->fetch_assoc()) {
                        echo "<div class=\"blog-post-thumb\">
                            <div class=\"blog-post-image\">
                                <a href=\"single-post.html\">
                                    <img src=".$row['images']." class=\"img-responsive\" alt=\"Blog Image\">
                                </a>
                            </div>
                            <div class=\"blog-post-title\">
                                <h3>".$row['price']." ".$row['location']."</h3>
                            </div>
                            <div class=\"blog-post-format\">
                                <span><a href=\"#\">Jen Lopez</a></span>
                                <span><i class=\"fa fa-date\"></i> March 12, 2017</span>
                                <span><a href=\"#\">9124736574</a></span>
                            </div>
                            <div class=\"blog-post-des\">
                                <p>".$row['hinditext']."</p>
                                
                            </div>
                            </div>";
                        }
                    }  
                    ?>
               </div>

          </div>
     </div>
</section>



<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>