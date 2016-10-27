<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Bureau d examen sais</title>

</head>
<br/><br/>
<br/><br/>
<table width="500" border="0" align="center">
  <tr>
      <td height="10" colspan="2">
			<div align="center">
			<h3><u><font size ="5" color="" >Ann�e universitaire 2015-2016</font></u></h3>
			<h3><u><font size ="4" color="" >Résultat de Session Rattrapage</font></u></h3>

		</div>
	</td>
  </tr>
  </table>
</BR></BR>
<?php
session_start();
if(file_exists('compteur_visites.txt'))
{
        $compteur_f = fopen('compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_visites.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite']))
{
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
}
fclose($compteur_f);
echo '<strong>'.$compte.'</strong> ' ; 
echo '<strong> visites jusqu au</strong>';
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

echo '<strong>'.strftime("%A $format_jour %B %Y", strtotime($date)).'</strong> ';
// affiche : vendredi 18 avril 2008

?>
<br/><br/>
<br/><br/>

<div id="center">
  <fieldset>
  <legend></legend>
  <br/>
  <form id="form1" name="form1" method="post" action="resautz5.php">
  <table width="100%">
  <tr>
	<td align="left"> <font size ="4">Entrez votre CNE :</font></td>
    <td align="center"><input type="text" name="CNE" size="30" value="" maxlength="35">
	<input type="submit" value="Envoyer" name="envoyer"></td>
	<td align="right"><font size ="5">المرجو إدخال الرقم الوطني  </td>
</tr>
</table>

</body>

 </html>