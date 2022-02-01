<?php
if(isset($_POST['submit'])){
$son=$_POST['son'];   
$marka=$_POST['marka'];
$qayerdan=$_POST['qayerdan'];
$qayerga=$_POST['qayerga'];
$sana=$_POST['sana'];
$tel=$_POST['tel'];
$more=$_POST['more'];
$chat_id = "@lastminute_uz"; 
 
    define ('url',"https://api.telegram.org/bot1116608658:AAGuTkYn68AEuXr97NImZMzOWxKdilEQUoY"); //botiyonidan bot tokenizi yozsiz
$message = urlencode("#ПОИСК_ТРАНСПОРТА"."\n \n <b>Кол-во мест: </b>".$son."\n <b>Марка машины: </b>".$marka."\n <b>Откуда:</b> ".$qayerdan."\n <b>Куда:</b> ".$qayerga."\n <b>Дата:</b> ".$sana."\n <b>Тел:</b> ".$tel."\n <b>Дополнительно:</b> ".$more."\n \n <b>Дать объявление:</b>"."\n lastminut.uz"); //ch
$send=file_get_contents(url."/sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
    
 
     header("location: https://skillsoft.uz/lastminut/menu.php?success"); 
      exit();
 
            
}

?>