<?php
function kotak($baris, $kolom){

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
}
?>