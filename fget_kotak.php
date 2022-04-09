<html>
<head>
    <style type="text/css">
        .genap{
            background-color: white;
            color: black;
        }
        .ganjil{
            background-color: red;
            color:white;
        }

    </style>
</head>
<?php
// constanta dideklarasikan dengan define 

include("lib_kotak.php");

$file = fopen("kotak.txt","r");

while(! feof($file))
    {
        $data = fgets($file);
        $hasil_explode = explode("|",$data);
        // var_dump($hasil_explode);
        Kotak($hasil_explode['0'], $hasil_explode['1']);
    }

fclose($file);
?>
</html>