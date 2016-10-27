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
			<h3><u><font size ="4" color="" > Situation pédagogique</font></u></h3>
			<h3><u><font size ="4" color="" >(Dernière mise à jour le Mercredi 18 Février 2016 A 11H15)</font></u></h3>
		</div>
	</td>
  </tr>
  </table>

<?php
 $CNE = (isset($_POST['CNE']) ? $_POST['CNE'] : '');
 // $CNE=$_POST['CNE'];   
    // connexion a la base
    $db = @mysql_connect('localhost', 'root', 'fls%2016')  or die('Erreur de connexion '.mysql_error());
    // selection de la base  
    mysql_select_db('scolarite',$db)  or die('Erreur de selection '.mysql_error());
	mysql_query('SET NAMES `utf8`');
	$sql = "select * from massar where massar.cne like '$CNE'";//////////////////////////////////////***************************/
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
		echo'<table border=4>';
					echo '<tr>';
		     	ECHO '<td bgcolor="#EFEFEF" width="150"> Email   </td>' ;
				echo '<td bgcolor="#EFEFEF"><b>'.$data['email'].'</b></td></tr>';
			echo '<tr>';
				ECHO '<td bgcolor="#ABC8E2" width="150"> CNE   </td>' ;
				echo '<td bgcolor="#ABC8E2">'.$data['cne'].'</b></td></tr>';
				ECHO '<tr><td bgcolor="#8CC6D7"width="150"> NOM & PRENOM </td>';
				ECHO'<td bgcolor="#8CC6D7"><b>'. $data['np'].'</b></td></tr>' ;
				ECHO '<td bgcolor="#ABC8E2" width="150"> Nom PRENOM   </td>' ;
				echo '<td bgcolor="#ABC8E2">'.$data['npf'].'</b></td></tr>';
				ECHO '<tr><td bgcolor="#ABC8E2" width="150"> N EXAMEN </td>';
				echo '<td bgcolor="#ABC8E2">'.$data['nexam'].'</td>';
				ECHO '<tr><td bgcolor="#ABC8E2" width="150"> CIN</td>';
				echo '<td bgcolor="#ABC8E2">'.$data['cin'].'</td>';
				ECHO '<tr><td bgcolor="#ABC8E2" width="150"> Date de Naissance </td>';
				echo '<td bgcolor="#ABC8E2">'.$data['dtn'].'</td>';
				ECHO '<tr><td bgcolor="#ABC8E2" width="150"> Lieu de Naissance </td>';
				echo '<td bgcolor="#ABC8E2">'.$data['lin'].'</td>';
				ECHO '<tr><td bgcolor="#8CC6D7" width="150"> Filiere </td>';
				echo '<td bgcolor="#8CC6D7">'.$data['fil'].'</td>';
		echo '</table>';
	  ECHO '</fieldset>';
	 echo'</Br>';
	
	$sql1 = "select * from massar where massar.cne=$CNE";//////////////////////////////////////***************************/
    $req = mysql_query($sql1) or die('Erreur SQL !'.$sql1.'<br>tEST</br>'.mysql_error());
	
	$data = mysql_fetch_array($req);
	echo'<center>';
				echo'<table border=4  width =33% >';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Session d Automne</center></u></b></td>';
						echo '</table>';


			if($data['mod11']!=NULL OR $data['mod12']!=NULL OR $data['mod13']!=NULL OR $data['mod14']!=NULL OR $data['mod15']!=NULL OR $data['mod16']!=NULL OR $data['mod17']!=NULL){
			echo'<table border=3 width =33% >';
			 	        echo '<tr>';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Semestre 1</center></u></b></td>';
	        echo '</tr>'."\n";
			 			echo '<tr>';
				//echo '<td bgcolor="#33AA0F"><b><u>           </u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Numero module</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Intitulé module</u></b></td>';
				//echo '<td bgcolor="#33AA0F"><b><u>validation</u></b></td>';
			echo '</tr>'."\n";
			if($data['mod11']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 1</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod11'].'</td>';
								echo '</tr>'."\n";
								
						}
						if($data['mod12']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 2</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod12'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod13']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 3</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod13'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod14']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 4</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod14'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod15']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 5</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod15'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod16']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 6</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod16'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod17']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 7</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod17'].'</td>';
								echo '</tr>'."\n";
								
						}

	}

						if($data['mod31']!=NULL OR $data['mod32']!=NULL OR $data['mod33']!=NULL OR $data['mod34']!=NULL OR $data['mod35']!=NULL OR $data['mod36']!=NULL){
			echo'<table border=3 width =33% >';
	        echo '<tr>';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Semestre 3</center></u></b></td>';
	        echo '</tr>'."\n";
			echo '<tr>';
				//echo '<td bgcolor="#33AA0F"><b><u>           </u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Numero module</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Intitulé module</u></b></td>';
				//echo '<td bgcolor="#33AA0F"><b><u>validation</u></b></td>';
			echo '</tr>'."\n";
			if($data['mod31']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 1</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod31'].'</td>';
								echo '</tr>'."\n";
								
						}
						if($data['mod32']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 2</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod32'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod33']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 3</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod33'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod34']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 4</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod34'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod35']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 5</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod35'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod36']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 6</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod36'].'</td>';
								echo '</tr>'."\n";
								
						}
							

	}
	if($data['mod51']!=NULL OR $data['mod52']!=NULL OR $data['mod53']!=NULL OR $data['mod54']!=NULL OR $data['mod55']!=NULL OR $data['mod56']!=NULL){
			echo'<table border=3 width =33% >';
	        echo '<tr>';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Semestre 5</center></u></b></td>';
	        echo '</tr>'."\n";
			echo '<tr>';
				//echo '<td bgcolor="#33AA0F"><b><u>           </u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Numero module</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Intitulé module</u></b></td>';
				//echo '<td bgcolor="#33AA0F"><b><u>validation</u></b></td>';
			echo '</tr>'."\n";
			if($data['mod51']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 1</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod51'].'</td>';
								echo '</tr>'."\n";
								
						}
						if($data['mod52']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 2</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod52'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod53']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 3</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod53'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod54']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 4</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod54'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod55']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 5</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod55'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod56']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 6</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod56'].'</td>';
								echo '</tr>'."\n";
								
						}
							

	}
						echo '</table>';
						
		echo'<table border=4 width =33% >';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Session de Printemps</center></u></b></td>';
						echo '</table>';



			if($data['mod21']!=NULL OR $data['mod22']!=NULL OR $data['mod23']!=NULL OR $data['mod24']!=NULL OR $data['mod25']!=NULL OR $data['mod26']!=NULL OR $data['mod27']!=NULL){
			echo'<table border=3 width =33% >';
			 echo '<tr>';
	        echo '</tr>'."\n";
	        echo '<tr>';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Semestre 2</center></u></b></td>';
	        echo '</tr>'."\n";
			 			echo '<tr>';
				//echo '<td bgcolor="#33AA0F"><b><u>           </u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Numero module</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Intitulé module</u></b></td>';
				//echo '<td bgcolor="#33AA0F"><b><u>validation</u></b></td>';
			echo '</tr>'."\n";
			if($data['mod21']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 1</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod21'].'</td>';
								echo '</tr>'."\n";
								
						}
						if($data['mod22']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 2</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod22'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod23']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 3</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod23'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod24']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 4</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod24'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod25']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 5</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod25'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod26']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 6</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod26'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod27']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 7</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod27'].'</td>';
								echo '</tr>'."\n";
								
						}

	}

						if($data['mod41']!=NULL OR $data['mod42']!=NULL OR $data['mod43']!=NULL OR $data['mod44']!=NULL OR $data['mod45']!=NULL OR $data['mod46']!=NULL){
			echo'<table border=3 width =33% >';
	        echo '<tr>';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Semestre 4</center></u></b></td>';
	        echo '</tr>'."\n";
			echo '<tr>';
				//echo '<td bgcolor="#33AA0F"><b><u>           </u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Numero module</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Intitulé module</u></b></td>';
				//echo '<td bgcolor="#33AA0F"><b><u>validation</u></b></td>';
			echo '</tr>'."\n";
			if($data['mod41']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 1</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod41'].'</td>';
								echo '</tr>'."\n";
								
						}
						if($data['mod42']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 2</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod42'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod43']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 3</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod43'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod44']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 4</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod44'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod45']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 5</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod45'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod46']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 6</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod46'].'</td>';
								echo '</tr>'."\n";
								
						}
							

	}
	if($data['mod61']!=NULL OR $data['mod62']!=NULL OR $data['mod63']!=NULL OR $data['mod64']!=NULL OR $data['mod65']!=NULL OR $data['mod66']!=NULL){
			echo'<table border=3 width =33% >';
	        echo '<tr>';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Semestre 6</center></u></b></td>';
	        echo '</tr>'."\n";
			echo '<tr>';
				//echo '<td bgcolor="#33AA0F"><b><u>           </u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Numero module</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Intitulé module</u></b></td>';
				//echo '<td bgcolor="#33AA0F"><b><u>validation</u></b></td>';
			echo '</tr>'."\n";
			if($data['mod61']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 1</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod61'].'</td>';
								echo '</tr>'."\n";
								
						}
						if($data['mod62']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 2</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod62'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod63']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 3</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod63'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod64']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 4</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod64'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod65']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 5</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod65'].'</td>';
								echo '</tr>'."\n";
								
						}
							if($data['mod66']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2"> Module 6</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['mod66'].'</td>';
								echo '</tr>'."\n";
								
						}
							

	}
  mysql_free_result($req);
  
    }  
	else{
	
	echo' <br>code CNE inexistant veuiller inserer un code valide</br>';
	echo' <br>	الرقم الوطني غير صحيح او الطالب غير مسجل بالكلية</br>';

		echo' <br></br>';
 
	header('Location: massar.php?i=0');
	}
	
	
    // on ferme la connexion
    mysql_close();
?>


</body>
</html>