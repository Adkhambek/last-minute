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
        <div class="container mt-5 mb-5">
            <div class="col-12">
            <h5 class="text-center mb-5 text-primary">LASTMINUTE: <span class="text-muted">ОТЕЛИ</span></h5>
                <?php
                      if(isset($_GET['error'])){
              $Msg="при загрузке вашего изображения возникла ошыбка";
              echo'<div class="alert alert-danger">'.$Msg.'</div>';
          }
          if(isset($_GET['format']))
          {
           $Msg="пожалуйста загрузите изображение в другом формате: JPG, PNG"; 
              echo'<div class="alert alert-danger">'.$Msg.'</div>';}
          if(isset($_GET['size']))
          {
           $Msg="Ваше изображение не должно превышать 2 мб"; 
              echo'<div class="alert alert-danger">'.$Msg.'</div>';}
                      ?>
                </div>
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active font-weight-bold" id="home-tab" data-toggle="tab" href="#gidq" role="tab" aria-controls="home" aria-selected="true">Поиск места</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" id="profile-tab" data-toggle="tab" href="#gidb" role="tab" aria-controls="profile" aria-selected="false">Есть свободное место</a>
                            </li>
                        </ul>
            <div class="card border-top-0 ">
                
      
                
               
         <div class="card-body">
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="gidq" role="tabpanel" aria-labelledby="home-tab">
             <form class="needs-validation"  action="Submission/submexk.php" method="post" enctype="multipart/form-data" novalidate>
                 <div class="form-group ">
                     <label class="font-weight-bold text-muted">Адрес:<span class="text-danger">*</span></label>
                     
                      <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-map-marker-alt"></i></span>
  </div>
                    <input type="text" name="shaxar" class="form-control  shadow-none" placeholder="пример: Amir Temur Street, Узбекистан, Ташкент" required > 
                      <div class="invalid-feedback">
                        пустое поле   
                      </div>
                  </div>
                   
                     </div>
                 </div> 
                 <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="font-weight-bold text-muted">Дата заезда:<span class="text-danger">*</span></label>
                <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-calendar-day"></i></span>
  </div>      
    <input class="form-control clickable input-md shadow-none" name="sanadan" type="date" value="2020-01-01"  required>
                      <div class="invalid-feedback">
                        пустое поле  
                      </div>
                    </div>
                      </div>
                 </div>
<div class="form-group col-lg-6">
                    <label class="font-weight-bold text-muted">Дата отъезда:<span class="text-danger">*</span></label>
                <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-calendar-day"></i></span>
  </div>      
    <input class="form-control clickable input-md shadow-none" name="sanagacha" type="date" value="2020-01-01" required > 
                      <div class="invalid-feedback">
                        пустое поле  
                      </div>
                    </div>
                      </div>
  </div>
                     </div>
    <div class="form-group ">
                     <label class="font-weight-bold text-muted">Количество мест:<span class="text-danger">*</span></label>
                     
                      <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-hotel"></i></span>
  </div>
                    <input type="text" name="son" class="form-control  shadow-none" placeholder="пример: Стандартный двухместный номер с 1 кроватью"  required >
                      <div class="invalid-feedback">
                        пустое поле
                      </div>
                  </div>
                   
                     </div>
                 </div>             
      <div class="form-group ">
                     <label class="font-weight-bold text-muted">Звонить по номеру:<span class="text-danger">*</span></label>
                     <small class="text-red"> <span class="form__error text-grey"> В формате +998901234567</span> </small>
                      <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-phone-alt"></i></span>
  </div>
                    <input type="text" name="tel" pattern="^((8|\+998)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" value="+998" class="form-control  shadow-none" placeholder="+998(код)(номер) " required > 
                      <div class="invalid-feedback">
                       пустое поле
                      </div>
                  </div>
                   
                     </div>
                 </div>             

               
                 
                 <div class="form-group">
                    <label class="font-weight-bold text-muted">Дополнительная информация (не обязательно):</label>
                    <textarea class="form-control shadow-none" name="more" aria-label="With textarea"></textarea>
                  </div>
                <div class="row">
                     <div class="col-lg-6  mt-3">
                <button type="submit" name="submit" class="btn btn-primary btn-block shadow-none">
                     <i class="fas fa-paper-plane"></i> отправить
                 </button>
                         </div>
                      <div class="col-lg-6 mt-3">
                 <a href="menu.php" class="btn btn-warning btn-block text-white"><i class="fas fa-arrow-left"></i> меню </a> 
                          </div>
                 </div>
                </form>        
             </div> 
                
          <!--Bo'sh Mehmonxona -->   
                  
                  
               
                  <div class="tab-pane fade" id="gidb" role="tabpanel" aria-labelledby="home-tab"> 
                      
                   <form class="needs-validation"  action="Submission/submexb.php" method="post" enctype="multipart/form-data" novalidate>
                 <div class="form-group ">
                     <label class="font-weight-bold text-muted"> Название отеля/гостевого дома/хостела и т.д:<span class="text-danger">*</span></label>
                     
                      <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-hotel"></i></span>
  </div>
                    <input type="text" name="nom" class="form-control  shadow-none" placeholder="пример: Гостевой дом Манхеттан" required > 
                      <div class="invalid-feedback">
                        пустое поле  
                      </div>
                  </div>
                   
                     </div>
                 </div> 
                       <div class="form-group ">
                     <label class="font-weight-bold text-muted">Адрес:<span class="text-danger">*</span></label>
                     
                      <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-white bg-primary"><i class="fas fa-map-marker-alt"></i></span>
  </div>
                    <input type="text" name="shaxar" class="form-control  shadow-none" placeholder="пример: ул. А. Темура, 15, Ташкент" required > 
                      <div class="invalid-feedback">
                        пустое поле
                      </div>
                  </div>
                   
                     </div>
                 </div> 
                 <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="font-weight-bold text-muted">Даты(от):<span class="text-danger">*</span></label>
                <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-calendar-day"></i></span>
  </div>      
    <input name="sanadan" class="form-control clickable input-md shadow-none" type="date" value="2020-01-01"  required>
                      <div class="invalid-feedback">
                        пустое поле 
                      </div>
                    </div>
                      </div>
                 </div>
<div class="form-group col-lg-6">
                    <label class="font-weight-bold text-muted">Даты(до):<span class="text-danger">*</span></label>
                <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-calendar-day"></i></span>
  </div>      
    <input name="sanagacha" class="form-control clickable input-md shadow-none" type="date" value="2020-01-01" required > 
                      <div class="invalid-feedback">
                        пустое поле   
                      </div>
                    </div>
                      </div>
  </div>
                     </div>
                
      <div class="form-group ">
                     <label class="font-weight-bold text-muted"> Звонить по номеру:<span class="text-danger">*</span></label>
                     <small class="text-red"> <span class="form__error text-grey"> В формате +998901234567</span> </small>
                      <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-phone-alt"></i></span>
  </div>
                    <input type="text" name="tel" pattern="^((8|\+998)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" value="+998" class="form-control  shadow-none" placeholder="+998(код)(номер) " required > 
                      <div class="invalid-feedback">
                       пустое поле
                      </div>
                  </div>
                   
                     </div>
                 </div>             

          <div class="form-group">
              <label class="font-weight-bold text-muted">Загрузить фото:</label>
                   <div class="custom-file">
                 <input class="custom-file-input shadow-none" type="File" name="file" id="imageSelect" value="" >
                      
                     <label for="imageSelect" class="custom-file-label">Загрузить</label>
                 </div>
                    
                  </div>     
                 
                 <div class="form-group">
                    <label class="font-weight-bold text-muted">Дополнительная информация (пример: количество свободных мест и/или краткая информация):</label>
                    <textarea name="more" class="form-control shadow-none" aria-label="With textarea"></textarea>
                  </div>
                <div class="row">
                     <div class="col-lg-6  mt-3">
                <button type="submit" name="submit" class="btn btn-primary btn-block shadow-none">
                     <i class="fas fa-paper-plane"></i> отправить
                 </button>
                         </div>
                      <div class="col-lg-6 mt-3">
                 <a href="menu.php" class="btn btn-warning btn-block text-white"><i class="fas fa-arrow-left"></i> меню </a> 
                          </div>
                 </div>
                </form> 
             </div>   
                  
                  
             </div>      
         </div>
               
    </div>
             <br><p class="font-weight-bold"><span class="text-danger ">*</span> - обязательно заполнять!</p>
        </div>
        <script>
        (function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();
        </script>
    </body>
</html>