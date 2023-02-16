<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edukate - Online Education Website Template</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></head>
<body>
    <div class="container-fluid one" style="background-color: rgb(19, 18, 17);">
        <div class="row">
                <div class="col-lg-4 ">
                    <i class="fa fa-phone"></i>+0123456789
                    |
                    <i class="fa fa-envelope"></i>info@example.com
                </div>
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4 two">
                    <a href="https://www.facebook.com/login/"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    <a href="https://in.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                </div>
        </div>
    </div>
    <div class="container-fluid three">
        <div class="row">
            <div class="col-lg-4">
                <img src="image/logoweb.png" width="300pt" height="90pt"/>
            </div>
            <div class="col-lg-6">
                <nav class="navbar navbar-default">
                
                      
                      <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="coursedet.php?id=1">Courses</a></li>
                        <li><a href="features.php">Features</a></li>
                        <li><a href="instructors.php?id=1">Instructors</a></li>
                      
                      
                      <li><a href="contact.php">Contact</a></li>
                    </ul>  
                    
                  </nav>
            </div>
            <div class="col-lg-2  four">
                <a href="login.php" role="button" class="btn btn-primary">LOGIN</a>
            </div>
        </div>
    </div>
    <div class="container-fluid eleven" style="margin-left:1%; margin-right: 1%;">
        <p class="six">CONTACT</p>
        <p class="seven">Home <i class="glyphicon glyphicon-chevron-right"></i><i class="glyphicon glyphicon-chevron-right"></i> Contact </p>
        
    </div>
    <div class="col-lg-12 contact" style="margin-top:5%;">
        <div class="row ">
            <div class="col-lg-5 col-lg-offset-1 aaa">
                <p class="z">contact us</p>
                <div class="row ">
                    <div class="ddd col-lg-2">
                        <i class="fa fa-map-marker" style="font-size:20px;color:blue;float:right;"></i>
                    </div>
                    <div class="eee col-lg-3 ">
                        <p style="font-size: 20px;text-align:left;">location</p>
                    </div>
                </div>
                <div class="row">
                    <div class=" ddd col-lg-2">
                        <i class="fa fa-phone" style="font-size:20px;color:blue;float:right;"></i>
                    </div>
                    <div class="eee col-lg-3">
                        <p style="font-size: 20px;text-align:left;">+0123456789</p>
                    </div>
                </div>
                <div class="row">
                    <div class="ddd col-lg-2 ">
                        <i class="fa fa-envelope" style="font-size:20px;color:blue;float:right;"></i>
                    </div>
                    <div class="eee col-lg-3 ">
                        <p style="font-size: 20px;text-align:left;">info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 bbb ">
            
                    <p id="a">need help ?</p>
                    <h1 id="b">
                        Send Us A Message
                    </h1>
                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" id="usr">
                      </div>
                      <div class="form-group">
                        <label for="eml">email:</label>
                        <input type="email" class="form-control" id="pwd">
                      </div>
                      <div class="form-group">
                        <label for="Message">Message:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                      </div>
                      <button type="button" class="btn btn-primary">SEND  </button>
               
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
    <div class="container-fluid col-lg-12 yyyy" style="background-color: rgb(19, 18, 17);">
        <div class="row">
                <div class="col-lg-6 xxxx">
                    <img src="image/logoweb.png" width="250pt" height="90pt"/><br>
                    <p class="text-justify">Accusam nonumy clita sed rebum kasd eirmod elitr. Ipsum ea lorem at et diam est, tempor rebum ipsum sit ea tempor stet et consetetur dolores. Justo stet diam ipsum lorem vero clita diam</p>
                </div>
                <div class="col-lg-2 xxxx">
                    
                        <h3>Our Courses</h3>
                        
                        <div class="justify-content-start">
                            <a class="text-primary nnnn mb-2" href="coursedet.php?id=1"><i class="fa fa-angle-right mr-2"></i>Web Design</a><br>
                            <a class="text-primary nnnn mb-2" href="coursedet.php?id=1"><i class="fa fa-angle-right mr-2"></i>Apps Design</a><br>
                            <a class="text-primary  nnnn mb-2" href="coursedet.php?id=1"><i class="fa fa-angle-right mr-2"></i>Marketing</a><br>
                            <a class="text-primary  nnnn mb-2" href="coursedet.php?id=1"><i class="fa fa-angle-right mr-2"></i>Research</a><br>
                            <a class="text-primary  nnnn mb-2" href="coursedet.php?id=1"><i class="fa fa-angle-right mr-2"></i>SEO</a><br>
                        </div>
                    
                </div>
                <div class="col-lg-2 xxxx">
                    
                    <h3>Quick links</h3>
                        
                    <div class="justify-content-start">
                        <a class="text-primary nnnn mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a><br>
                        <a class="text-primary nnnn mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About</a><br>
                        <a class="text-primary nnnn mb-2" href="coursedet.php?id=1"><i class="fa fa-angle-right mr-2"></i>Course</a><br>
                        <a class="text-primary nnnn mb-2" href="features.php"><i class="fa fa-angle-right mr-2"></i>Features</a><br>
                        <a class="text-primary nnnn mb-2" href="instructors.php?id=1"><i class="fa fa-angle-right mr-2"></i>instructors</a><br>
                        <a class="text-primary nnnn mb-2" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact</a><br>
                    </div>
                </div>
                <div class="col-lg-2 xxxx">
                    <i class="fa fa-map-marker"></i>&nbsp;location<br><br>
                    <i class="fa fa-phone"></i>&nbsp;+0123456789<br><br>
                    <i class="fa fa-envelope"></i>&nbsp;info@example.com<br><br>
                    <a href="https://www.facebook.com/login/"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    <a href="https://in.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                </div>
        </div>
        <hr>
        <div class="fot">
            <i class="fa fa-copyright"></i>
        copyright:
        <a class="text-danger" href="#">www.example.com</a>
        </div>
    </div>
</body>