<?php // upload.php
echo <<<_END
<html><head><title>PHP-форма для загрузки файлов на сервер</title></head><body>
<form method='post' action='upload.php' enctype='multipart/form-data'>
Выберите файл: <input type='file' name='userfile' size='10'>
<input type='submit' value='Загрузить'>
</form>
_END;
if ($_FILES)
{
    $name = $_FILES['userfile']['name'];
    $lox = explode(".", $name);

 ($files = scandir("C:/OpenServer/domains/untitled2/photo/"));
        $j=0;
    $nevajno = explode (".", max ($files));
    foreach ($files as $key=>$values){

        $foo=(string) $values;
        $j=$values;
        $cifri=explode(".",$j);
        $l=$cifri[0];
        ($o=preg_replace('~\D+~','',$l));

       // echo $o .'est cifri';
            $massiv[]=$o;


         // print_r ($o);

//        $m[]=$j;
//        echo $m[7];
       //echo "<br>";
    }
   echo $h=max($massiv);

//print_r( max($m));
//
//echo $nevajno[0];
    $prov = end($files);

    $ale = explode(".", $prov);

        if ($ale[0] == false) {

            $lol = "1" . "." . $lox[1];
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'C:/openserver/domains/untitled2/photo/' . $lol);

        } elseif ($ale[0] >= "1") {

//            for ($i=0; $i < 15; $i++) {
//                if ($i == $ale[0]) {
//                   $a = $i + 1;

//                }
//            }

            $a=$h+1;
            $lol = $a . "." . $lox[1];
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'C:/openserver/domains/untitled2/photo/' . $lol);
        }
        }

echo "Загружаемое изображение $lol <br><img src= './photo/$lol'  ";

// else {echo "Загрузки изображения не произошло";
// print_r($_FILES['userfile']['error']);}
echo "</body></html>";
?>