



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
            <h5 class="text-center mb-5 text-primary">LASTMINUTE: <span class="text-muted">ГИД</span></h5>
                </div>
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active font-weight-bold" id="home-tab" data-toggle="tab" href="#gidq" role="tab" aria-controls="home" aria-selected="true">Поиск гида</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" id="profile-tab" data-toggle="tab" href="#gidb" role="tab" aria-controls="profile" aria-selected="false">Свободный гид</a>
                            </li>
                        </ul>
            <div class="card border-top-0 ">
                
      
                
               
         <div class="card-body">
             
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="gidq" role="tabpanel" aria-labelledby="home-tab">
             <form class="needs-validation"  action="Submission/subgid.php" method="post" enctype="multipart/form-data" novalidate>
                 <div class="form-group ">
                     <label class="font-weight-bold text-muted">Язык:<span class="text-danger">*</span></label>
                     
                      <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-globe"></i></span>
  </div>
                    <input type="text" name="til" class="form-control  shadow-none" placeholder="пример: английский,русский" required > 
                      <div class="invalid-feedback">
                        пустое поле  
                      </div>
                  </div>
                   
                     </div>
                 </div> 
                 <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="font-weight-bold text-muted"> дата(от):<span class="text-danger">*</span></label>
                <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-calendar-day"></i></span>
  </div>      
    <input class="form-control clickable input-md shadow-none" type="date" name="sanadan" value="2020-01-01"  required>
                      <div class="invalid-feedback">
                        пустое поле 
                      </div>
                    </div>
                      </div>
                 </div>
<div class="form-group col-lg-6">
                    <label class="font-weight-bold text-muted">дата(до):<span class="text-danger">*</span></label>
                <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-calendar-day"></i></span>
  </div>      
    <input class="form-control clickable input-md shadow-none" type="date" name="sanagacha" value="2020-01-01" required > 
                      <div class="invalid-feedback">
                        пустое поле  
                      </div>
                    </div>
                      </div>
  </div>
                     </div>
    <div class="form-group ">
                     <label class="font-weight-bold text-muted"> Город:<span class="text-danger">*</span></label>
                     
                      <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-map-marker-alt"></i></span>
  </div>
  
  	 
       
         <select class="form-control" name="shaxar" > <!-- o'zgarish-->
             <option value="Ташкент">Ташкент</option>
             <option value="Андижан">Андижан</option>
             <option value="Бухара">Бухара</option>
             <option value="Фергана">Фергана</option>
             <option value="Джизак">Джизак</option>
             <option value="Хорезм">Хорезм</option>
             <option value="Наманган">Наманган</option>
             <option value="Навоий">Навоий</option>
             <option value="Кашкадарья">Кашкадарья</option>
             <option value="Самарканд">Самарканд</option>
             <option value="Сырдарья">Сырдарья</option>
             <option value="Сурхандарья">Сурхандарья</option>
                        
                        
         </select>
         

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
                    <input type="tel" name="tel" pattern="^((8|\+998)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" value="+998" class="form-control  shadow-none" placeholder="+998(код)(номер) " required > 
                      <div class="invalid-feedback">
                       неправильный номер
                      </div>
                  </div>
                   
                     </div>
                 </div>             

               
                 
                 <div class="form-group">
                    <label class="font-weight-bold text-muted"> Дополнительная информация (не обязательно):</label>
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
                
          <!--Bo'sh Gid -->   
                  
                  
               
                  <div class="tab-pane fade" id="gidb" role="tabpanel" aria-labelledby="home-tab">
                   <form class="needs-validation"  action="Submission/subgidchi.php" method="post" enctype="multipart/form-data" novalidate>
                 <div class="form-group ">
                     <label class="font-weight-bold text-muted">Фамилия имя:<span class="text-danger">*</span></label>
                     
                      <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-user"></i></span>
  </div>
                    <input type="text" name="ism" class="form-control  shadow-none" placeholder="пример: Ирина Исакова" required > 
                      <div class="invalid-feedback">
                        пустое поле  
                      </div>
                  </div>
                   
                     </div>
                 </div> 
                       <div class="form-group ">
                     <label class="font-weight-bold text-muted">Язык(и):<span class="text-danger">*</span></label>
                     
                      <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-globe"></i></span>
  </div>
                    <input type="text" name="til" class="form-control  shadow-none" placeholder="пример: английский,русский" required > 
                      <div class="invalid-feedback">
                        пустое поле  
                      </div>
                  </div>
                   
                     </div>
                 </div> 
                 <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="font-weight-bold text-muted">дата(от):<span class="text-danger">*</span></label>
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
                    <label class="font-weight-bold text-muted">дата(до):<span class="text-danger">*</span></label>
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
                     <label class="font-weight-bold text-muted">Город: <span class="text-danger">*</span></label>
                     
                      <div class=" inputGroupContainer">
                  <div class="input-group">
                    <div class="input-group-prepend">
    <span class="input-group-text text-white bg-primary"><i class="fas fa-map-marker-alt"></i></span>
  </div>
                      <select class="form-control" name="shaxar" > <!-- o'zgarish-->
             <option value="Ташкент">Ташкент</option>
             <option value="Андижан">Андижан</option>
             <option value="Бухара">Бухара</option>
             <option value="Фергана">Фергана</option>
             <option value="Джизак">Джизак</option>
             <option value="Хорезм">Хорезм</option>
             <option value="Наманган">Наманган</option>
             <option value="Навоий">Навоий</option>
             <option value="Кашкадарья">Кашкадарья</option>
             <option value="Самарканд">Самарканд</option>
             <option value="Сырдарья">Сырдарья</option>
             <option value="Сурхандарья">Сурхандарья</option>
                        
                        
         </select>
                      <div class="invalid-feedback">
                        пустое поле
                      </div>
                  </div>
                   
                     </div>
                 </div>             
      <div class="form-group ">
                     <label class="font-weight-bold text-muted"> Звонить по номеру :<span class="text-danger">*</span></label>
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
                    <label class="font-weight-bold text-muted"> Дополнительная информация (не обязательно):</label>
                    <textarea class="form-control shadow-none"  name="more" aria-label="With textarea"></textarea>
                  </div>
                <div class="row">
                     <div class="col-lg-6  mt-3">
                <button type="submit" name="submit" class="btn btn-primary btn-block shadow-none">
                     <i class="fas fa-paper-plane"></i> отправить
                 </button>
                         </div>
                      <div class="col-lg-6 mt-3">
                 <a href="menu.php" class="btn btn-warning btn-block text-white"><i class="fas fa-arrow-left"></i> меню</a> 
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