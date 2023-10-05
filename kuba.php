<!DOCTYPE html>
<html lang="en">
<head> 

    <meta charset="UTF-8">
    <link rel="stylesheet" href="tabela.css">
    <title>tabela</title>
</head>
<body>
    




<div> 
 



<?php


//nazwa użytkownika
$a=$_GET["userName"];
echo $a;
echo "<br>";
//hasło użytkownika
$b=$_GET["userPassword"];
echo $b;
echo "<br>";
//Płeć
$c = $_GET['userGender'];  
if ($c == "Male") {          
    echo 'Mężczyzna';      
}
else {
    if ($c == "Female") {          
        echo 'Kobieta';  
} }

echo "<br>";
//Zainteresowania
$d1 = $_GET['interest1'];  
if ($d1 == "sport") {          
    echo 'Sport';      
}
echo "<br>";
$d2 = $_GET['interest2'];  
if ($d2 == "music") {          
    echo 'Muzyka';      
}
echo "<br>";
$d3 = $_GET['interest3'];  
if ($d3 == "history") {          
    echo 'historia';      
}


echo "<br>";
//zainteresowanie drugie
$e1 = $_GET['interestTwo1'];  
if ($e1 == "math") {          
    echo 'Matematyka';      
}
echo "<br>";
$e2 = $_GET['interestTwo2'];  
if ($e2 == "geography") {                    
    echo 'Geografia';            
}
echo "<br>";
$e3 = $_GET['interestTwo3'];  
if ($e3 == "painting") {          
    echo 'Malarstwo';      
}
echo "<br>";
//Warunki zainteresowania
$f=$_GET["tos"];
if ($f=="tosNo")
    {
        echo 'Warunki niezaakceptowane';
    }
    elseif($f=="tosYes")
    {
        echo 'Warunki zaakceptowane';
    }
    echo "<br>";






$con = new mysqli("127.0.0.1","root","","kuba");
$q="INSERT INTO `formularz` (`lp`, `nazwa`, `haslo`, `opis`) VALUES ('".rand(1,200)."', '".$a."', '".$b."', '".$c.','.$d1.','.$d2.','.$d3.','.$e1.','.$e2.','.$e3.','.$f."')";
$wynik=$con->query($q);


echo '<form method="POST" action="http://localhost/formularz.html">
<input type="submit"/>
</form>';






?>
</p>
</div>

</body>
</html>
