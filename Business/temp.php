<?php 
$con = mysqli_connect("localhost","root","","db1");
    $res = $con->query("select * from  bussiness ");
    if($res->num_rows==0){
        $message = " NO Search Result found";
    }
   
?>
<!DOCTYPE html>
<html>
<head>
<title>Business</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="StyleCateg.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron"> <div class="page-header"><h1 style="color: black;">Business</h1></div></div>
<div class="bs-example">
   <div class="container-fluid">
        <div class="row">
             <?php $count= 0;
             while($result = $res->fetch_assoc()){
                if($count%3==0){
                    echo '</div>';
                    echo '<div class="row">';
                }
            ?>            
                <div class="col-md-4">
                    <div class="well" >
                        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'class="img-responsive/>';?>
                        
                        <div class="caption">
                            <h5 style="font-weight: bold;"><?php echo $result['Book_Name'];?></h5>
                            <p class="text-justify"><?php echo substr($result['describe'],0,150).'...';?></p>
                            <p><a href="bookdetails.php?bussiness=<?php echo  $result['id'];?>" class="btn btn-primary">View</a>  <a href="#" class="btn btn-default">Buy</a></p>
                        </div>
                    </div>
                </div>
            <?php $count++; 
            }?>
            </div>
      
    </div> 
    </div>    
</body>
</html>