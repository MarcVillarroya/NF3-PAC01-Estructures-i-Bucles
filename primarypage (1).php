<?php
session_start();
echo " <br/>";
echo "Welcome to my kitchen ";
echo " <br/>";
echo $_SESSION["ingredientes"];
echo " <br/>";
echo $_SESSION["picante"];
echo " <br/>";
echo $_SESSION["chef"];
echo " <br/>";
?>
<html>


 <head>
  <title>My favourite food<?php echo $_GET['favfood'];?></title>
 </head>
 <body>
 
<?php
echo "Esto va a volar";
echo $_COOKIE["username"];
echo "<br>"
?>

<?php
echo "My favorite food is ";
echo $_GET['favfood'];
?>
 </body>
</html>


<p>el logeado: </p>
<?php
echo $_POST["user"];
echo "<br>";
echo $_POST["pass"];
echo "<br>";
echo $_POST["age"];
?>
<?php
$Abarth = urlencode("Abarth y ferrari");
echo "<a href='SecondaryPage.php?Abarth=$Abarth'>";
echo "Click here to see information about my favoutite car!";
echo"</a>";
?>

<?php
$no_existe = $_GET['monstruo'] ?? 'dracula';
echo $no_existe;
?>

<?php
echo date('l \t\h\e jS');
echo "<br>";
?>

<?php
echo "Yesterday it was " ;
echo date('d',strtotime("-1 days"));
echo "<br>";
echo "The previous month it was " ;
echo date("m",strtotime("-1 month"));
echo "<br>";
echo "There are " ;
$dias_restantes=date('t')-date('j');
echo $dias_restantes;
echo "days left in this month" ;
echo "<br>";
echo "There are ";
echo  12 - date("m");
echo "months left in this current year" ;
echo "<br>"
?>
<?php



    $mesActual  = date('n'); 
 
  
 
    
    if ( $mesActual == 3 || $mesActual == 4 || $mesActual == 5) {
        echo "Estamos en Primavera!";
 
    } elseif ( $mesActual == 6 || $mesActual == 7 || $mesActual == 8 )  {
        echo "Estamos en Veranito!";
 
    } elseif ( $mesActual == 9 || $mesActual == 10 || $mesActual == 11)  {
        echo "Estamos en Otoño!";
 
    } else {
        echo "Estamos en Invierno";

    }
    echo "<br>"
?>

<?php
$color= $_POST['color'];
$font= $_POST['font'];
$size= $_POST['size'];

echo '<div style="color:'.$color.'; font-family:'.$font.'; font-size:'.$size. ';">Tu prueba</div>';

?>
<?php

    if($_POST['ch_color'] == 1){
      setcookie("color",$_POST['color'],time()+5);
       echo $_COOKIE ["color"];
    }
   if($_POST['ch_font'] == 2){
       setcookie("font",$_POST['font'],time()+5);
       echo $_COOKIE ["font"];
    }
    if($_POST['ch_size'] == 3){
        setcookie("size",$_POST['size'],time()+5);
    echo $_COOKIE ["size"];
    }
?>
<?php
if(isset($_SESSION['contador']))
    $_SESSION['contador']++;
 else 
$_SESSION['contador'] = 1;
echo $_SESSION['contador'];
?>

<?php
include 'piedepagina.php';
?>



