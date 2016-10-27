<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Scolarite FLS</title>
<body background ="fls.jpg">
<br/><br/>
<table width="500" border="0" align="center">
<tr>
<td>
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
if (isset($_GET["i"])){
$page = $_GET["i"];
	
	if($page==0)
			echo '<b> <center><font size ="5" color ="red">	الرقم الوطني غير صحيح او الطالب غير مسجل في الموسم الحالي</center> </font><br/>';
    		echo '<b> <center><font size ="5" color ="red">CNE non valide ou étudiant non inscris</center> </font><br/>';

	}
$date = date("d-m-Y");
$heure = date("H:i");
if (setlocale(LC_TIME, 'fr_FR') == '') {
    setlocale(LC_TIME, 'FRA');  //correction probleme pour windows
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
  <br/>
  <form id="form1" name="form1" method="post" action="ninscription.php">
  <table width="50%"align="center">
  <tr>
  <td align="left"> <font size ="4">Entrez votre CNE : </font></td>
  <td align="center"><input type="text" name="CNE" size="30" value="" maxlength="35">
  <input type="submit" value="Afficher" name="Afficher"></td>
</tr>
</table>

</body>
</html>