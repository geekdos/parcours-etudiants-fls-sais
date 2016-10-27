<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Scolarite FLS</title>
</head>
<body background ="fls.jpg">
<br/><br/>
<table width="500" border="0" align="center">
  <tr>
      <td height="10" colspan="2">
			<div align="center">
			<h3><u><font size ="6" color="#0000CC" > معلومات الطالب </font></u></h3>
			<h3><u><font size ="4" color="#0000CC" >INFORMATION D ETUDIANT</font></u></h3>	
			</div>
	</td>
  </tr>
  
</table>
 <?php
session_start();
if(file_exists('compteur_visitesnote.txt'))
{
        $compteur_f = fopen('compteur_visitesnote.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_visitesnote.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visitenote']))
{
        $_SESSION['compteur_de_visitenote'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
}
fclose($compteur_f);
echo '<strong>'.$compte.'</strong> visites jusqu au ';
?>
<?php
$date = date("d-m-Y");
$heure = date("H:i");
if (setlocale(LC_TIME, 'fr_FR') == '') {
    setlocale(LC_TIME, 'FRA');  
    $format_jour = '%#d';
} else {
    $format_jour = '%e';
}

echo strftime("%A $format_jour %B %Y", strtotime($date));
// affiche : vendredi 18 avril 2008

?>
<div id="center">
  <fieldset>
  <legend></legend>
<form id="form1" name="form1" method="post" action="ninscription.php">
   <table width="50%"align="center">
  <tr>
  <td align="left"> <font size ="4">Entrez votre CNE : </font></td>
  <td align="center"><input type="text" name="CNE" size="30" value="" maxlength="35">
  <input type="submit" value="Afficher" name="Afficher"></td>
</tr>
</table>
  <p align="right">&nbsp;</p>
</body>

 </html>