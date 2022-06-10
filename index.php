<?php

$agent=$_SERVER['https://rooi21.github.io/DMML/'];
if(!preg_match('/com.payr/i', $agent) ) {
 exit("HALAMAN INI HANYA BISA DIBUKA DI APLIKASI KAMI, TERIMAH KASIH");
}
?>
