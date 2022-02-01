<?php
if(isset($_POST['submit'])){
$ism=$_POST['ism'];   
$til=$_POST['til'];
$sanadan=$_POST['sanadan'];
$sanagacha=$_POST['sanagacha'];
$shaxar=$_POST['shaxar'];
$tel=$_POST['tel'];
$more=$_POST['more'];
$chat_id = "@lastminute_uz"; 
 
    define ('url',"https://api.telegram.org/bot1116608658:AAGuTkYn68AEuXr97NImZMzOWxKdilEQUoY"); //botiyonidan bot tokenizi yozsiz
$message = urlencode("#СВОБОДНЫЙ_ГИД"."\n \n <b>Имя: </b>".$ism."\n <b>Язык: </b>".$til."\n <b>Дата с:</b> ".$sanadan."\n <b>Дата до:</b> ".$sanagacha."\n <b>Город:</b> ".$shaxar."\n <b>Тел:</b> ".$tel."\n <b>Дополнительно:</b> ".$more."\n \n <b>Дать объявление:</b>"."\n lastminut.uz"); //ch
$send=file_get_contents(url."/sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
    
 
     header("location: https://skillsoft.uz/lastminut/menu.php?success"); 
      exit();
 
            
}
?>