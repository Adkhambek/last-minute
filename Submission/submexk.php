<?php
if(isset($_POST['submit'])){
$shaxar=$_POST['shaxar'];    
$sanadan=$_POST['sanadan'];
$sanagacha=$_POST['sanagacha'];
$son=$_POST['son']; 
$tel=$_POST['tel'];
$more=$_POST['more'];
$chat_id = "@lastminute_uz"; 
 
    define ('url',"https://api.telegram.org/bot1116608658:AAGuTkYn68AEuXr97NImZMzOWxKdilEQUoY"); //botiyonidan bot tokenizi yozsiz
$message = urlencode("#ПОИСК_ОТЕЛЕЙ"."\n \n <b>Город: </b>".$shaxar."\n <b>Дата с: </b>".$sanadan."\n <b>Дата до:</b> ".$sanagacha."\n <b>Кол-во мест:</b> ".$son."\n <b>Тел:</b> ".$tel."\n <b>Дополнительно:</b> ".$more."\n \n <b>Дать объявление:</b>"."\n lastminut.uz"); //ch
$send=file_get_contents(url."/sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
    
 
      header("location: https://skillsoft.uz/lastminut/menu.php?success"); 
      exit();
 
            
}

?>