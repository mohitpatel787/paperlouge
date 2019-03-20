<?php
$con = mysqli_connect("localhost","root","","db1");
if(!empty($_GET['Biographies'])){
	$res = $con->query("select * from biographies where id='".$_GET['Biographies']."'");
    if($res->num_rows==0){
        header("location:Biographies.php");
    }else{
    	$result = $res->fetch_assoc();
    }
}else{
	header("location:Biographies.php");
}

?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $result['Book_Name']?></title>
  <link href="https://fonts.googleapis.com/css?family=Gruppo|Nixie+One" rel="stylesheet">
  <link rel="shortcut icon" href="http://laoblogger.com/images/reading-clipart-black-and-white-icon-9.jpg" type="image/x-icon" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="test.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Crushed|Montserrat|Gugi|Amatic+SC|Cinzel" rel="stylesheet">
</head>
<body class="bg2">
<div class = "container-fluid" style="font-family: 'Amatic SC', cursive;margin:0px !important; padding: 0px">
    <div class="row">
        <div class="col-md-12">
    <div class="active"><h1 style="font-size: 80px; margin-top: 0px;"><center><strong style="color: black">PaperLouge</strong></center></h1></div>
        </div>
        </div>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="margin-top: 0px">
  <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#" style="font-family: 'Crushed', cursive;font-size: 35px"><strong>PaperLouge</strong></a>
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
  
</nav><!-- /.navbar -->  

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        
        <!-- Categories -->
        <div class="col-md-2">

          
          <!-- Categories Widget -->
         <div class="container" id="cat">
              <h1 style="font-family: 'Nixie One', cursive; font-size: 30px; "><strong>Categories</strong></h1>
            
                  <ul class="list-unstyled">
                    <li >
                      <a style="color:black;"href="../Biographies/Biographies.php"> <span class="fa fa-angle-double-right text-primary"></span>   Biographies</a>
                    </li>
                    <li>
                      <a href="../Technology/Technology.php"> <span class="fa fa-angle-double-right text-primary"></span>   Technology</a>
                    </li>
                    <li>
                      <a href="../Novels/Novels.php"> <span class="fa fa-angle-double-right text-primary"></span>   Novels</a>
                    </li>
                     <li>
                      <a href="../Business/Business.php"> <span class="fa fa-angle-double-right text-primary"></span>   Buisness</a>
                    </li>
                    
                    <li>
                      <a href="../SelfHelp/SelfHelp.php"> <span class="fa fa-angle-double-right text-primary"></span>   Self-Help</a>
                    </li>
                   
                    <li>
                      <a href="../Science/Science.php"> <span class="fa fa-angle-double-right text-primary"></span>   Science</a>
                    </li>
                  </ul>
                
              </div>
            </div>

        <div class="col-lg-10">
<hr>
          <!-- Title -->
          <h1 class="mt-4"><?php echo $result['Book_Name'];?></h1>

          <!-- Author -->
          <p class="lead">
            <?php echo $result['author'];?>
          </p>

          <hr>

          
          <!-- Preview Image -->
          <?php echo '<img height="300px style="top:100px;" src="data:image/jpeg;base64,'.base64_encode(  $result['image'] ).'"/>';?>

         

     <hr>
          <!-- Post Content -->
          <p class="text-justify"><?php echo $result['describe'];?> </p>

        <!-- <blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in
              <cite title="Source Title">Source Title</cite>
            </footer>
          </blockquote>

          -->
          <hr>

       
</div>

        
        </div>
      </div>
      <!-- /.row -->

    
    <!-- /.container -->

    <!-- Footer -->
  

    <!-- Bootstrap core JavaScript -->
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
