
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LastMinute</title>
    <link rel="shortcut icon" href="img/123.jpg" type="image/gif" />  
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" >
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
     
     <!-- fontawesome -->
      <script src="https://kit.fontawesome.com/8c685f9586.js" crossorigin="anonymous"></script>
    
  </head> 
    <body>
      <div class="container mt-5">
       <div class="row">
           <div class="col-12">
            <h5 class="text-center mb-3 text-primary">LASTMINUTE: <span class="text-muted">МЕНЮ</span></h5>
              
               
                </div>
          
           
           
               
            <div class="col-md-6 mx-auto">
                <?php 
          $Msg="";
          
          
          if(isset($_GET['success'])){
              $Msg="Сообщение отправлено! Telegram:@lastminute_uz"; 
              echo'<div class="alert alert-success">'.$Msg.'</div>'; 
          } 
               ?>
              <div class="card rounded-0">
      <div class="card-header bg-primary text-white text-center font-weight-bold">ВЫБЕРИТЕ:</div>
         <div class="card-body">
          <div class="container">
          <div class="col-md-12 my-3">
            <a href="Gid.php" class="btn btn-warning text-white rounded-0 shadow-none btn-block"><i class="fas fa-address-book"></i> ГИД </a>  
          </div>
          <div class="col-md-12 my-3">
            <a href="hotel.php" class="btn btn-primary rounded-0 shadow-none btn-block"><i class="fas fa-hotel"></i> ОТЕЛИ</a>  
          </div>
              <div class="col-md-12 my-3">
            <a href="transport.php" class="btn btn-success rounded-0 shadow-none btn-block"><i class="fas fa-bus"></i> ТРАНСПОРТ</a>  
          </div>
		 <div class="col-12">
            <h5 class="text-center mb-3 text-dark">Telegram: <span class="text-muted"><a href="https://t.me/lastminute_uz" target="_blank">@lastminute_uz</a> </a> </span></h5>
              
               
                </div>
               
          </div>  
           
               
         </div>
    </div>
             </div>
          </div>  
      </div>
    </body>
</html>