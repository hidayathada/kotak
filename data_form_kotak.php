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
<a href="form_kotak.php">Kembali</a><br>
<?php

$start = microtime(true);
// constanta dideklarasikan dengan define 
    $baris = $_POST['bil1'];
    $kolom = $_POST['bil2'];
    $no=0;

    echo "<table border='1'>";
    for($i=1; $i<=$baris; $i++){
        echo "<tr>";
        for($j=1; $j<=$kolom; $j++){
            if($no % 2 == 0){
                $style = "genap"; 
            }else{
                $style = "ganjil"; 
            }
                $no++;
                echo "<td class='". $style ."'>";
                echo $no;
                echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


$end = microtime(true);
$lama = $start - $end;
echo $lama;
?>
</html>