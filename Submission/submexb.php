<?php
if(isset($_POST['submit'])){
$nom=$_POST['nom'];      
$shaxar=$_POST['shaxar'];    
$sanadan=$_POST['sanadan'];
$sanagacha=$_POST['sanagacha'];
$tel=$_POST['tel'];
$more=$_POST['more'];
$chat_id = "@lastminute_uz"; 
 
    define ('url',"https://api.telegram.org/bot1116608658:AAGuTkYn68AEuXr97NImZMzOWxKdilEQUoY"); //botiyonidan bot tokenizi yozsiz
$message = urlencode("#ЕСТЬ_НОМЕРА"."\n \n <b>Название отеля: </b>".$nom."\n <b>Город: </b>".$shaxar."\n <b>Дата с: </b>".$sanadan."\n <b>Дата до: </b> ".$sanagacha."\n <b>Тел:</b> ".$tel."\n <b>Дополнительно:</b> ".$more."\n \n <b>Дать объявление:</b>"."\n lastminut.uz"); 

    
 
$file= $_FILES['file'];
$fileName=$_FILES['file']['name'];
$fileTmpName=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileError=$_FILES['file']['error'];
$fileType=$_FILES['file']['type'];
$fileExt=explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));
$allowed=array('jpg','jpeg','png');

    if(in_array($fileActualExt, $allowed)){
        if($fileError===0){
            if($fileSize<2000000){
                $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination = '../uploads/'.$fileNameNew;
                $store=move_uploaded_file($fileTmpName, $fileDestination); 
                
                
                
                if($store){
                 
                 $photo= "http://lastminut.uz/uploads/".$fileNameNew; 
                 file_get_contents(url."/sendPhoto?photo=".$photo."&caption=".$message."&chat_id=".$chat_id."&parse_mode=HTML");    
                }
                
                
                 header("location: ../menu.php?success");
                
            }else{
                header("location: ../hotel.php?size");
            }
        } else{
            header("location: ../hotel.php?error");
        }
    }else{
        file_get_contents(url."/sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
              header("location: https://skillsoft.uz/lastminut/menu.php?success"); 
      exit();
            
    }
 
            
}

?>