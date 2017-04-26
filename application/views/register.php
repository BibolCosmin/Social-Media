<!DOCTYPE html>
<html ng-app="app" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/registerstyle.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register</title>

    <!-- Bootstrap -->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
  </head>
  <body>
      <div class="container-fluid">
          
          

                          
          <div class="row">
              

          <!--    <div id="theCarousel" class="carousel  carousel-fade"  data-ride="carousel">

                  <div class="carousel-inner"> -->
          <img  id="top-header" class="img-responsive" src="http://localhost/Project/assets/photos/amicus.jpg"  alt="...">

                      <div class="col-lg-offset-1 col-lg-4 col-lg-offset-7 col-md-offset1 col-md-8  col-sm-offset-1 col-sm-8 col-sm-offset-3 overlay ">
                          
                         
                          <?php echo validation_errors(); ?>
                          <?php echo form_open('form'); ?>
                          <form action="process.php" method="POST">
                              
                                  
                                      <div class="form-group h3  log">
                                          Register to be AMiCUS! 
                                      </div> 
                                 
                                  
                                      <div class="form-group-lg username">
                                          <label for="username" class="label-default " ></label>
                                          <input class="form-control" name="username" placeholder="Username" type="text" value="<?php echo set_value('username'); ?>">
                                      </div>
                                 
                                  
                                      <div class="form-group-lg email">
                                          <label for="email" class="label-default " ></label>
                                          <input class="form-control" name="email" placeholder="E-mail" type="text" value="<?php echo set_value('email'); ?>">
                                      </div>
                                  
                                  

                                      <div class="form-group-lg password">
                                          <label for="password" class="label-default" ></label>
                                          <input class="form-control" name="password" placeholder="Password" type="text" value="<?php echo set_value('password'); ?>">
                                      </div>
                                  
                                  
                                      <div class="form-group-lg password1">
                                          <label for="passconf" class="label-default" ></label>
                                          <input class="form-control" name="passconf" placeholder="Confirm Password" type="text" value="<?php echo set_value('passconf'); ?>">
                                      </div>
                                  
                                      <div class="form-group-lg gender">
                                          <label for="gender" class="label-default" ></label>
                                          <select class="form-control" id="Gender" name="gender" type="text" value="<?php echo set_value('gender'); ?>">
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                          </select>
                                      </div>
                                 
                                      <div class="form-group-lg phone">
                                          <label for="phone" class="label-default" ></label>
                                          <input class="form-control" name="phone" placeholder="Phone" type="text" value="<?php echo set_value('phone'); ?>">
                                      </div>
                                  
                                      <div class="form-group-lg ">
                                          <button class="btn-lg btn-primary login">REGISTER</button>
                                      </div>
                                 
                          </form>
                      </div>

                   <!--   <div class="item active" >
                          <div class ="slide1">
                              <img class="img-responsive" src="http://localhost/Project/assets/photos/amicus.jpg"  alt="...">

                          </div>

                      </div>
                    

                     
                      <div class="item">
                          <div class="slide1">
                              <img class="img-responsive" src="http://localhost/Project/assets/photos/nature-best-wallpapers-images-landscape-195743.jpg"  alt="...">
                          </div>

                      </div>


                  </div>   -->
          </div>
             
          </div>
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
 
    <script>
    $('.carousel').carousel();
    </script>
   
  </body>
</html>