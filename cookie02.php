<?php
if(isset($_COOKIE["username"])){
    echo "<h1>Cookie'username'TIDAk ada. Isinya :" .$_COOKIE
    ['username']."</h1>";
}else{
    echo "<h1>Cookie 'username' Tidak ada.</h1>";
}
if(isset($_COOKIE["namalengkap"])){
    echo "<h1>Cookie'namalengkap'TIDAk ada. Isinya :" .$_COOKIE
    ['namalengkap']."</h1>";
}else{
    echo "<h1>Cookie 'namalengkap' Tidak ada.</h1>";
}

echo "<h2>Klik <a href='cookie01.php'>di sini</a>untuk pencitaan cookies</h2>";

?>