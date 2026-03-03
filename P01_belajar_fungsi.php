<?php
function luas_fungsi($panjang,$lebar){ return $panjang * $lebar;
}


function luas_prosedur($panjang,$lebar){
echo "Luas Persegi Dengan Prosedur = " . ($panjang * $lebar);
}


$hasil = luas_fungsi(8,4);
echo "Luas Persegi Dengan Fungsi = " . $hasil; echo "<br>";

luas_prosedur(8,5);
?>
