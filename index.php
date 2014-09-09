<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>harjutus-2 - PHP põhitõed</title>
</head>
  <body>



    <h3>See dokument on minu esimene katset</h3>
    <?php 
      echo "Tere!" . "Siin on tekst?" . "Siin ka";
      echo "<br>";
      echo "Järgmine rida";
    ?>

       <br>
       <h3>Siin on arvutamine</h3>
       <p>Siin on erinevaid tehteid</p>
       <?php
         echo "Nelja ja viie summa on" . (4+5); 
        ?>
        <br>
       <?php 
         echo 4 - 5; //Siin on php kommentaar
       ?>
       <br>
       <?php 
         echo 4 * 5; #Siin on korrutamine
       ?>
       <br>
       <?php 
         echo 4 / 5; /*See on jagamine. See on ainus
         				millega saab teha mitmerealisi kommentaare*/
       ?>
     <h3>PHP muutujad</h3>
       <?php
         $number = "Tekst";
         $Number = 5-4;
         $number2= 9;
         $text = "Kahe arvu summa on";


         echo $number;
         echo "<br>";
         echo $Number;
         echo "<br>";
         echo "<p>Siia tuleb list</p>
           <ul>
             <li>.$text.</li>
             <li>.($number + $number2).</li>
           </ul>"
           ;

       ?>
  </body>
</html>