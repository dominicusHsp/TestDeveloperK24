
<h1> Gambar Segitiga </h1> 
<?php
for ($i = 0; $i < 8; $i++) {
 for ($j = 8; $j > $i; $j--) {
 echo '&nbsp;';
 }
 for ($k = 0; $k-$i <= $i; $k++) {
 echo '*';
 }
 echo '<br/>';
 }
?>