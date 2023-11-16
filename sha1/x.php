<html>
<body>

 
<?php
    $login=$_GET["login"];
    $haslo=$_GET["haslo"];
    $hash=sha1($haslo);

    $con = new mysqli("127.0.0.1","root","","tak");
    $q="INSERT INTO tabelka (login, haslo) VALUES ('".$login."', '".$hash."'); ";
    $wynik = $con->query($q);
?>
Login: <?php echo $_GET["login"]; ?><br>
Haslo: <?php echo $_GET["haslo"]; ?><br>
Poprawne Hash: <?php echo "40bd001563085fc35165329ea1ff5c5ecbdbbeef"; ?><br>
Hash: <?php echo sha1($haslo); ?><br>
<?php

   $con = new mysqli("127.0.0.1","root","","tak");
   if($hash=="40bd001563085fc35165329ea1ff5c5ecbdbbeef"){
       echo "haslo jest dobre";}
       else 
       {echo "haslo jest zle";}
?>

</body>
</html>

