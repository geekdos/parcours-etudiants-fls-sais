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
			<h3><u><font size ="5" color="" >Année universitaire 2015-2016</font></u></h3>
			<h3><u><font size ="4" color="" >Information Générale</font></u></h3>
			<h3><u><font size ="4" color="" >(Dernière mise à jour le Mercredi 18 Decembre 2015 A 16H15)</font></u></h3>
		</div>
	</td>
  </tr>
  </table>

<?php
  $CNE=$_POST['CNE'];   
    // connexion a la base
    $db = @mysql_connect('localhost', 'root', 'fls%2016')  or die('Erreur de connexion '.mysql_error());
    // selection de la base  
    mysql_select_db('scolarite',$db)  or die('Erreur de selection '.mysql_error());
	mysql_query('SET NAMES `utf8`');
	$sql = "select * from email where email.cne like '$CNE'";//////////////////////////////////////***************************/
	$req = mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
	$data = mysql_fetch_array($req);
	$flag=$data;
	if($data!=null){
	//echo'not 0';
  ECHO '<div id="center">';
  ECHO '<fieldset>';
  ECHO ' <legend>INFORMATIONS GENERALES</legend>';
		
				ECHO '<table width="100%" border="1">';
				ECHO '<tr>';
ECHO '<td bgcolor="#FF6262">Vous disposez désormais de l adresse e-mail institutionnelle suivante:<b> <FONT size="4" COLOR="#EFEFEF">'.$data['email'].'</b></font>. Si vous n avez pas encore activé votre compte, <a href="http://messagerie.usmba.ac.ma/"> cliquez ici. </a></td>';

       ECHO ' </tr>';
     ECHO ' </table>';
		
		echo' <br></br>';
		echo'<table border=4>';
			echo '<tr>';
		     	ECHO '<td bgcolor="#EFEFEF" width="150"> Email   </td>' ;
				echo '<td bgcolor="#EFEFEF"><b>'.$data['email'].'</b></td></tr>';
				ECHO '<tr><td bgcolor="#C8DDF7" width="150"> CNE   </td>' ;
				echo '<td bgcolor="#C8DDF7">'.$data['cne'].'</td></tr>';
				ECHO '<tr><td bgcolor="#EFEFEF"width="150"> NOM & PRENOM </td>';
				ECHO'<td bgcolor="#EFEFEF">'. $data['np'].'</td></tr>' ;
				ECHO '<td bgcolor="#C8DDF7" width="150"> Nom PRENOM   </td>' ;
				echo '<td bgcolor="#C8DDF7">'.$data['npf'].'</b></td></tr>';
				ECHO '<tr><td bgcolor="#EFEFEF" width="150"> N EXAMEN </td>';
				echo '<td bgcolor="#EFEFEF">'.$data['nexam'].'</td>';
				ECHO '<tr><td bgcolor="#C8DDF7" width="150"> CIN</td>';
				echo '<td bgcolor="#C8DDF7">'.$data['cin'].'</td>';
				ECHO '<tr><td bgcolor="#EFEFEF" width="150"> Date de Naissance </td>';
				echo '<td bgcolor="#EFEFEF">'.$data['dtn'].'</td>';
				ECHO '<tr><td bgcolor="#C8DDF7" width="150"> Lieu de Naissance </td>';
				echo '<td bgcolor="#C8DDF7">'.$data['lin'].'</td>';
				ECHO '<tr><td bgcolor="#EFEFEF" width="150"> Filiere </td>';
				echo '<td bgcolor="#EFEFEF">'.$data['fil'].'</td>';
		echo '</table>';
	  ECHO '</fieldset>';
	 echo'</Br>';
	  mysql_free_result($req);
  
    }  
	else{
	
	echo' <br>code CNE inexistant veuiller inserer un code valide</br>';
	echo' <br>	الرقم الوطني غير صحيح او الطالب غير مسجل بالكلية</br>';

		echo' <br></br>';
 
	header('Location: email.php?i=0');
	}
	
	
    // on ferme la connexion
    mysql_close();
?>


</body>
</html>