<?php
include('config.php');
?>
<html>
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
    <div class="container-fluid  col-lg-12 sign">
        <div class="col-lg-offset-3 col-lg-6 pt-10 pg">
            <div class="row">
                <div class="col-lg-2">
                    <img src="image/logoweb.png" width="300px" height="70px">
    
                </div>
                <div class="col-lg-4">
                    
                </div>
            </div>
            <form action="log.php" method="POST" enctype="multipart/form-data">
            <div class="frmgrp">
              <div class="form-group">
                <label for="eml">email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your registered email">
              </div>
              <div class="form-group">
                <label for="pswrd">Password:</label>
                <input type="password" class="form-control" id="pswrd" name="pswrd" placeholder="Enter your password">
              </div>
              <button type="submit" class="btn btn-primary lgnbtn">LOGIN  </button>
            </div>
            </form>
            
            
            <div class="lgn">
                <h1>
                    or
                </h1>
                <div class="row">
                    <p> Don't Have An Account ? <a href="signup.php">signup</a></p>
                </div>
                    
            </div>
    </div>   
    </div>
    </div>    
        
        

    
        
        

        
  
        
            
                
                
                
                
            

  
</body>    
</html>
