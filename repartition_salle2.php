<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<body background ="fls.jpg">
<table width="1000" border="0" align="center">
  <tr>
  <td><img src="tete.png"  /></td>
  </tr>
  </table>

<br/><br/>
<table width="500" border="0" align="center">
  <tr>
      <td height="10" colspan="2">
			<div align="center">
			<h3><u><font size ="5" color="" >Annee universitaire 2015-2016 Session Du Printemps</font></u></h3>
			<h3><u><font size ="4" color="" >Consultation des salles des examens et numeros de places.</font></u></h3>
			<h3><u><font size ="4" color="" >(DerniÃ¨re mise Ã  jour le Lundi 06 Juin 2016 A 11H00)</font></u></h3>

		</div>
	</td>
  </tr>
  </table>
</BR></BR>
</BR>
<?php
session_start();
if(file_exists('compteur_visites2.txt'))
{
        $compteur_f = fopen('compteur_visites2.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_visites2.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite2']))
{
        $_SESSION['compteur_de_visite2'] = 'visite';
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
<form id="form1" name="form1" method="post" action="exam.php">
  <table width="38%" align="center">
  <tr>
	<td align="left"> <font size ="4">Veuillez inserer votre CNE </font></td>
    <td align="center"><input type="text" name="cne" size="30" value="" maxlength="35">
	<input type="submit" value="Envoyer" name="envoyer"></td>
</tr>
</table>
</body>
</html>