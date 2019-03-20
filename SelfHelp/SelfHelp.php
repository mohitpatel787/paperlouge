<?php 
$con = mysqli_connect("localhost","root","","db1");
    $res = $con->query("select * from selfhelp ");
    if($res->num_rows==0){
        $message = " NO Search Result found";
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Self-Help</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="shortcut icon" href="http://laoblogger.com/images/reading-clipart-black-and-white-icon-9.jpg" type="image/x-icon" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="StyleCateg.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Crushed|Gruppo|Nixie+One" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .jumbotron {
    margin-bottom: 10px;
    background-color: black;
  /*  background-image: url("https://webdesign619.com/wp-content/uploads/2016/08/blog-header-background.jpg");*/
    background-size: cover;
}
</style>
</head>
<body class="bgsh">
    
    <nav class="navbar navbar-default" data-spy="affix" data-offset-top="197" style="margin: 0px">
  <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#" style=" font-family: 'Crushed', cursive;font-size: 35px"><strong>PaperLouge</strong></a>
        </div>
         <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="../Home/Temp.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#thefooter">Contact</a></li>
            <li><a href="../Home/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        
            <li style="padding-right: 50px; ">
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse3">
            <form style="padding-right: 60px;"class="navbar-form navbar-right" role="search">
              <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Here" name="" style="padding-right: 40px;">
            <div class="input-group-btn">
              <button type="submit" class="btn btn-danger">
          <i class="glyphicon glyphicon-search"></i>
        </button>
            </div>
          </div>
            </form>
          </div>
        </div>
  
</nav>
        <div class="jumbotron" style="padding: 30px;margin-top: 0px;">
    <h1 style="font-family: 'Permanent Marker', cursive; padding-left: 50px;padding-bottom: 0px; padding-top: 0px; font-size: 70px;color: white">♦ Self-Help</h1>
</div>


   <div class="container-fluid" style="margin-top: 70px;">
    
        <div class="row">
            <?php $count= 0;
             while($result = $res->fetch_assoc()){
                if($count%4==0){
                    echo '</div>';
                    echo '<div class="row">';
                }
            ?>            
                <div class="col-md-3">
                    <div class="well" style="width: 95%;">
                        <?php echo '<img style="width: 80%;height: 80%;" src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';?>
                        <div class="caption">
                            <h5 style="font-weight: bold;"><?php echo $result['Book_Name'].$result['author'];?></h5>
                            <p class="text-justify"><?php echo substr($result['describe'],0,150).'...';?></p>
                            <p><a href="bookdetails.php?SelfHelp=<?php echo  $result['id'];?>" class="btn btn-primary">View</a>  <a href="<?php echo $result['buy'] ?>" class="btn btn-default">Read</a></p>
                        </div>
                    </div>
                </div>
            <?php $count++; 
            }?>
            </div>
        
    </div> 
    </div>
      <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<footer class="page-footer" id ="thefooter" style="background-color: #333333">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row-compact">
    <hr class="clearfix w-100 d-md-none pb-3" style="max-width: 97%">
           <div class="col-md-4">

               <h1 style="font-family: 'Crushed', cursive;font-size: 40px; padding-top: 70px; color: white"><strong><center>PaperLouge</center></strong></h1>
        </div>

        <!-- Grid column -->
       
        <!-- Grid column -->

     

        <!-- Grid column -->
        <div class="col-md-4">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold;" style="color: white;font-size: 20px;">CONTACTS</h5><br>
          <p style="color: white;"> <strong>Address </strong><br>Indore, India<br><br><strong>Email :</strong><br>paperlouge@gmail.com<br><br>
              <strong>Phone No. :</strong><br>
              7389885126
            </p>

        </div>
           <div class="col-md-4">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold;" style="color: white;font-size: 20px;">FIND US ON</h5><br><br>
          <a class="fb-ic" href="https://www.facebook.com/profile.php?id=100006026012728">
              <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x" style="color: white"> </i>
            </a>
               <br><br><br>
               <a class="ins-ic" href="https://www.instagram.com/mohit_554/">
              <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x" style="color: white"> </i>
            </a>
              <br><br><br>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x" style="color: white"> </i>
            </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Text -->


    
    <div class="footer-copyright text-center py-3" style="padding-bottom: 10px;color: white"><center> © 2018 <a href="#">PaperLouge</a></center>
        
    </div>
  
    <!-- Copyright -->

  </footer>   
  <div data-toggle="modal" class="modal fade" id="login">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
          <h2 class="modal-title" style="font-family: 'Nixie One', cursive; font-size: 40px;"><center><strong>Login</strong></center></h2>
      </div>
    

      <div class="modal-body">
<div class="form-group"> 
    <label for="email" style="font-family: 'Gruppo', cursive; font-size: 20px;"><strong>Email address:</strong></label>
    <input type="email" class="form-control" id="email">
  </div>
 <div class="form-group">
     <label for="pwd" style="font-family: 'Gruppo', cursive; font-size: 20px;"><strong>Password:</strong></label>
    <input type="password" class="form-control" id="pwd">
          </div>
          <div>
    <a href="#">Forgot Password?</a>
      </div>
      <div class="modal-footer">
<button type="submit" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

      </div>


    </div>
  </div>
  </div>
  </div> 
</body>
</html>