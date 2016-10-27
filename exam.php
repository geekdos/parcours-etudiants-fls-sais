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
			<h3><u><font size ="4" color="" >(Dernière mise à jour le Lundi 06 Juin 2016 A 11H00)</font></u></h3>
		</div>
	</td>
  </tr>
  </table>
<?php
 $cne = (isset($_POST['cne']) ? $_POST['cne'] : '');
  //$cne=$_POST['cne'];   
    $db = mysql_connect('localhost', 'root', 'fls%2016')  or die('Erreur de connexion '.mysql_error());
    mysql_select_db('scolarite',$db)  or die('Erreur de selection '.mysql_error());
	mysql_query('SET NAMES `utf8`');
		$sql = "select * from bdsale where bdsale.cne like '$cne'";//////////////////////////////////////***************************/
		$req = mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
		$data = mysql_fetch_array($req);
			if($data!=0){
				ECHO '<div id="center">';
				ECHO '<fieldset>';
				ECHO ' <legend>INFORMATIONS GENERALES</legend>';
				ECHO '<table width="100%" border="1">';
				ECHO '<tr>';
ECHO '<td align="center"bgcolor="#FF6262">Vous disposez désormais de l adresse e-mail institutionnelle suivante:<b> <FONT size="4" COLOR="#EFEFEF">'.$data['email'].'</b></font>. Si vous n avez pas encore activé votre compte, <a href="http://messagerie.usmba.ac.ma/"> cliquez ici.</a></td>';

       ECHO ' </tr>';
ECHO '<tr>';

ECHO '<td align="center"bgcolor="#FF6262"> ستتوصلون من خلاله بنتائج الامتحانات المرجو تفعيل هذا البريد من خلال الرابط التالي <b> <FONT size="4" COLOR="#EFEFEF">'.$data['email'].'</b></font> تتوفرون حاليا على بريد إلكتروني جامعي هو </td>';


       ECHO ' </tr>';
	   	ECHO '<tr>';
ECHO '<td align="center"bgcolor="#FF6262">  <a href="http://messagerie.usmba.ac.ma/"> اضغط هنا </a></td>';

       ECHO ' </tr>';
     ECHO ' </table>';
	 	 echo'</Br>';
	 echo'</Br>';

						echo'<table align="right" border="2">';
							echo '<tr>';
									ECHO'<td align="center" bgcolor="#EFEFEF"><b><I>'. $data['np'].'</b></td>' ;
									ECHO '<td align="right" width="150" bgcolor="#EFEFEF"> <strong>الإسم الكامل</strong> </td></tr>';
									ECHO'<tr><td align="center"  bgcolor="#C8DDF7"><b><I>'. $data['cne'].'</b></td>' ;
									ECHO '<td align="right"  width="150" bgcolor="#C8DDF7"><strong> الرقم الوطني للطالب</strong> </td></tr>';
									echo '<tr><td align="center"  bgcolor="#EFEFEF"><b>'.$data['nexam'].'</td>';
									ECHO '<td align="right" width="150" bgcolor="#EFEFEF"><strong> رقم الإمتحان </strong></td></tr>';
									echo '<tr><td align="center"  bgcolor="#C8DDF7"><b>'.$data['fil'].'</td>';	
									ECHO '<td align="right" width="150" bgcolor="#C8DDF7"><strong> المسلك </strong></td></tr>';
									echo '<tr><td align="center"  bgcolor="#EFEFEF"><b>'.$data['email'].'</td>';	
									ECHO '<td align="right" width="150" bgcolor="#EFEFEF"><strong> البريد الالكتروني </strong></td></tr>';
									
						echo '</table>';
				ECHO '</fieldset>';
					echo '<br></br>';
		$sql1 = "SELECT  sale,nplace,sem FROM bdsale where bdsale.cne like '$cne'";//////////////////////////////////////***************************/
		$req = mysql_query($sql1) or die('Erreur SQL !'.$sql1.'<br>'.mysql_error());
			while($data = mysql_fetch_assoc($req))  
					{ 
							$tablo[]=$data;
									}
		$nb=count($tablo);
			for($i=0;$i<$nb;$i++){
					$valeur1=$tablo[$i]['sem'];
					$valeur2=$tablo[$i]['nplace'];
					$valeur3=$tablo[$i]['sale'];
							echo'<table border="2" align="center">';
							//ECHO '<tr><td width="150"> N EXAMEN </td>';
										//echo '<td bgcolor="#B5E655">'.$data['nexam'].'</td>';
								echo '<tr>';
										echo '<td align="center" bgcolor="#EFEFEF"><b>',$valeur1,'</b></td>';
										echo'<td align="right" width="150" bgcolor="#EFEFEF"><b> الفصل</td></tr>';
										echo '<tr>';
										echo '<td  align="center" bgcolor="#C8DDF7"><b>',$valeur3,'</b></td>';
										echo'<td align="right" width="150" bgcolor="#C8DDF7"><b> قاعة الإمتحان</td></tr>';
										echo '<tr>';
										echo '<td   align="center" bgcolor="#EFEFEF"><b>',$valeur2,'</b></td>';
										echo'<td align="right" width="150" bgcolor="#EFEFEF"><b> رقم المقعد</td></tr>';
										
																	
							echo '</table>';
	 echo'</Br>';
								}	
									 echo'</Br>';
	 echo'</Br>';
/*
								$sql3 = "select * from bdsale where bdsale.cne like '$cne'";
								$req = mysql_query($sql3) or die('Erreur SQL !'.$sql3.'<br>'.mysql_error());
								$data = mysql_fetch_array($req);
											echo'<table>';
												echo '<tr>';
											echo '<td><a href =',$data['calen'],'>pour consulter le calendrier cliquer ici   downolad|تحميل</td></a>';
													echo '</tr>' ;
											echo '</table>';
	 echo'</Br>';
*/
			
mysql_free_result($req);
}
  else{
		echo' <br>code CNE inexistant veuiller inserer un code valide</br>';
		echo' <br></br>';
		header('Location: repartition_salle.php?i=0');
	}
	   mysql_close();
?>
</body>
</html>