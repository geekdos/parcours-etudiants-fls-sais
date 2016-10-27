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
			<h3><u><font size ="4" color="" > Archive pédagogique</font></u></h3>
			<h3><u><font size ="4" color="" >(Dernière mise à jour le Mercredi 04 Novembre 2015 A 16H15)</font></u></h3>
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
	$sql = "select * from archive where archive.cne like '$CNE'";//////////////////////////////////////***************************/
	$req = mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
	$data = mysql_fetch_array($req);
	$flag=$data;
	if($data!=null){
	//echo'not 0';
  ECHO '<div id="center">';
  ECHO '<fieldset>';
  ECHO ' <legend>INFORMATIONS GENERALES</legend>';
		echo'<table border=4>';
			echo '<tr>';
				ECHO '<td bgcolor="#ABC8E2" width="150"> CNE   </td>' ;
				echo '<td bgcolor="#ABC8E2">'.$data['cne'].'</b></td></tr>';
				ECHO '<tr><td bgcolor="#8CC6D7"width="150"> NOM & PRENOM </td>';
				ECHO'<td bgcolor="#8CC6D7"><b>'. $data['np'].'</b></td></tr>' ;
				ECHO '<tr><td bgcolor="#ABC8E2" width="150"> N EXAMEN </td>';
				echo '<td bgcolor="#ABC8E2">'.$data['nexam'].'</td>';
				ECHO '<tr><td bgcolor="#8CC6D7" width="150"> Filiere </td>';
				echo '<td bgcolor="#8CC6D7">'.$data['fil'].'</td>';
		echo '</table>';
	  ECHO '</fieldset>';
	 echo'</Br>';
	
	$sql1 = "select * from archive where archive.cne=$CNE";//////////////////////////////////////***************************/
    $req = mysql_query($sql1) or die('Erreur SQL !'.$sql1.'<br>tEST</br>'.mysql_error());
	
	$data = mysql_fetch_array($req);
	echo'<center>';
				echo'<table border=4  width =33% >';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Session d Automne</center></u></b></td>';
						echo '</table>';


			if($data['N11']!=NULL OR $data['N12']!=NULL OR $data['N13']!=NULL OR $data['N14']!=NULL OR $data['N15']!=NULL OR $data['N16']!=NULL OR $data['N17']!=NULL OR $data['MOY11']!=NULL){
			echo'<table border=3 width =33% >';
			 	        echo '<tr>';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Semestre 1</center></u></b></td>';
	        echo '</tr>'."\n";
			 			echo '<tr>';
				//echo '<td bgcolor="#33AA0F"><b><u>           </u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Numero MODULE</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Intitulé MODULE</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>validation</u></b></td>';
			echo '</tr>'."\n";
			if($data['N11']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#4EA9A0"> MODULE 1</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['N11'].'</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['T11'].'</td>';

								echo '</tr>'."\n";
								
						}
						if($data['N12']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#4EA9A0"> MODULE 2</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['N12'].'</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['T12'].'</td>';

								echo '</tr>'."\n";
								
						}
							if($data['N13']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#4EA9A0"> MODULE 3</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['N13'].'</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['T13'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N14']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#4EA9A0"> MODULE 4</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['N14'].'</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['T14'].'</td>';
							
								echo '</tr>'."\n";
								
						}
							if($data['N15']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#4EA9A0"> MODULE 5</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['N15'].'</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['T15'].'</td>';

								echo '</tr>'."\n";
								
						}
							if($data['N16']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#4EA9A0"> MODULE 6</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['N16'].'</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['T16'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N17']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#4EA9A0"> MODULE 7</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['N17'].'</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['T17'].'</td>';
						
								echo '</tr>'."\n";
								
								
						}
						if($data['MOY11']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#4EA9A0"> Résultat Semestre 1</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['MOY11'].'</td>';
								echo '<td bgcolor="#4EA9A0">'.$data['TYPE11'].'</td>';
						
								echo '</tr>'."\n";
								
								
						}

	}

						if($data['N31']!=NULL OR $data['N32']!=NULL OR $data['N33']!=NULL OR $data['N34']!=NULL OR $data['N35']!=NULL OR $data['N36']!=NULL OR $data['MOY31']!=NULL){
			echo'<table border=3 width =33% >';
	        echo '<tr>';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Semestre 3</center></u></b></td>';
	        echo '</tr>'."\n";
			echo '<tr>';
				//echo '<td bgcolor="#33AA0F"><b><u>           </u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Numero MODULE</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Intitulé MODULE</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>validation</u></b></td>';
			echo '</tr>'."\n";
			if($data['N31']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF73BF"> MODULE 1</td>';
								echo '<td bgcolor="#FF73BF">'.$data['N31'].'</td>';
								echo '<td bgcolor="#FF73BF">'.$data['T31'].'</td>';						
								echo '</tr>'."\n";
								
						}
						if($data['N32']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF73BF"> MODULE 2</td>';
								echo '<td bgcolor="#FF73BF">'.$data['N32'].'</td>';
								echo '<td bgcolor="#FF73BF">'.$data['T32'].'</td>';							
								echo '</tr>'."\n";
								
						}
							if($data['N33']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF73BF"> MODULE 3</td>';
								echo '<td bgcolor="#FF73BF">'.$data['N33'].'</td>';
								echo '<td bgcolor="#FF73BF">'.$data['T33'].'</td>';						
								echo '</tr>'."\n";
								
						}
							if($data['N34']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF73BF"> MODULE 4</td>';
								echo '<td bgcolor="#FF73BF">'.$data['N34'].'</td>';
								echo '<td bgcolor="#FF73BF">'.$data['T34'].'</td>';								
								echo '</tr>'."\n";
								
						}
							if($data['N35']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF73BF"> MODULE 5</td>';
								echo '<td bgcolor="#FF73BF">'.$data['N35'].'</td>';
								echo '<td bgcolor="#FF73BF">'.$data['T35'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N36']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF73BF"> MODULE 6</td>';
								echo '<td bgcolor="#FF73BF">'.$data['N36'].'</td>';
								echo '<td bgcolor="#FF73BF">'.$data['T36'].'</td>';							
								echo '</tr>'."\n";
								
						}
						if($data['MOY31']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF73BF"> Résultat Semestre 3</td>';
								echo '<td bgcolor="#FF73BF">'.$data['MOY31'].'</td>';
								echo '<td bgcolor="#FF73BF">'.$data['TYPE31'].'</td>';
						
								echo '</tr>'."\n";
								
								
						}
							

	}
	if($data['N51']!=NULL OR $data['N52']!=NULL OR $data['N53']!=NULL OR $data['N54']!=NULL OR $data['N55']!=NULL OR $data['N56']!=NULL OR $data['MOY51']!=NULL){
			echo'<table border=3 width =33% >';
	        echo '<tr>';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Semestre 5</center></u></b></td>';
	        echo '</tr>'."\n";
			echo '<tr>';
				//echo '<td bgcolor="#33AA0F"><b><u>           </u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Numero MODULE</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Intitulé MODULE</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>validation</u></b></td>';
			echo '</tr>'."\n";
			if($data['N51']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#E2CA1A"> MODULE 1</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['N51'].'</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['T51'].'</td>';														
								echo '</tr>'."\n";
								
						}
						if($data['N52']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#E2CA1A"> MODULE 2</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['N52'].'</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['T52'].'</td>';																						
								echo '</tr>'."\n";
								
						}
							if($data['N53']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#E2CA1A"> MODULE 3</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['N53'].'</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['T53'].'</td>';														

								echo '</tr>'."\n";
								
						}
							if($data['N54']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#E2CA1A"> MODULE 4</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['N54'].'</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['T54'].'</td>';								
								echo '</tr>'."\n";
								
						}
							if($data['N55']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#E2CA1A"> MODULE 5</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['N55'].'</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['T55'].'</td>';								
								echo '</tr>'."\n";
								
						}
							if($data['N56']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#E2CA1A"> MODULE 6</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['N56'].'</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['T56'].'</td>';															
								echo '</tr>'."\n";
								
						}
						if($data['MOY51']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#E2CA1A"> Résultat Semestre 5</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['MOY51'].'</td>';
								echo '<td bgcolor="#E2CA1A">'.$data['TYPE51'].'</td>';
						
								echo '</tr>'."\n";
								
								
						}
							

	}
						echo '</table>';
						
		echo'<table border=4 width =33% >';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Session de Printemps</center></u></b></td>';
						echo '</table>';



			if($data['N21']!=NULL OR $data['N22']!=NULL OR $data['N23']!=NULL OR $data['N24']!=NULL OR $data['N25']!=NULL OR $data['N26']!=NULL OR $data['N27']!=NULL OR $data['MOY21']!=NULL){
			echo'<table border=3 width =33% >';
			 echo '<tr>';
	        echo '</tr>'."\n";
	        echo '<tr>';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Semestre 2</center></u></b></td>';
	        echo '</tr>'."\n";
			 			echo '<tr>';
				//echo '<td bgcolor="#33AA0F"><b><u>           </u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Numero MODULE</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Intitulé MODULE</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>validation</u></b></td>';
			echo '</tr>'."\n";
			if($data['N21']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF321D"> MODULE 1</td>';
								echo '<td bgcolor="#FF321D">'.$data['N21'].'</td>';
								echo '<td bgcolor="#FF321D">'.$data['T21'].'</td>';
								
								echo '</tr>'."\n";
								
						}
						if($data['N22']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF321D"> MODULE 2</td>';
								echo '<td bgcolor="#FF321D">'.$data['N22'].'</td>';
								echo '<td bgcolor="#FF321D">'.$data['T22'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N23']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF321D"> MODULE 3</td>';
								echo '<td bgcolor="#FF321D">'.$data['N23'].'</td>';
								echo '<td bgcolor="#FF321D">'.$data['T23'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N24']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF321D"> MODULE 4</td>';
								echo '<td bgcolor="#FF321D">'.$data['N24'].'</td>';
								echo '<td bgcolor="#FF321D">'.$data['T24'].'</td>';
							
								echo '</tr>'."\n";
								
						}
							if($data['N25']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF321D"> MODULE 5</td>';
								echo '<td bgcolor="#FF321D">'.$data['N25'].'</td>';
								echo '<td bgcolor="#FF321D">'.$data['T25'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N26']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF321D"> MODULE 6</td>';
								echo '<td bgcolor="#FF321D">'.$data['N26'].'</td>';
								echo '<td bgcolor="#FF321D">'.$data['T26'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N27']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF321D"> MODULE 7</td>';
								echo '<td bgcolor="#FF321D">'.$data['N27'].'</td>';
								echo '<td bgcolor="#FF321D">'.$data['T27'].'</td>';
								
								echo '</tr>'."\n";
								
						}
						if($data['MOY21']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#FF321D"> Résultat Semestre 2</td>';
								echo '<td bgcolor="#FF321D">'.$data['MOY21'].'</td>';
								echo '<td bgcolor="#FF321D">'.$data['TYPE21'].'</td>';
						
								echo '</tr>'."\n";
								
								
						}

	}

						if($data['N41']!=NULL OR $data['N42']!=NULL OR $data['N43']!=NULL OR $data['N44']!=NULL OR $data['N45']!=NULL OR $data['N46']!=NULL OR $data['MOY41']!=NULL){
			echo'<table border=3 width =33% >';
	        echo '<tr>';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Semestre 4</center></u></b></td>';
	        echo '</tr>'."\n";
			echo '<tr>';
				//echo '<td bgcolor="#33AA0F"><b><u>           </u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Numero MODULE</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Intitulé MODULE</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>validation</u></b></td>';
			echo '</tr>'."\n";
			if($data['N41']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#EACFB8"> MODULE 1</td>';
								echo '<td bgcolor="#EACFB8">'.$data['N41'].'</td>';
								echo '<td bgcolor="#EACFB8">'.$data['T41'].'</td>';
								
								echo '</tr>'."\n";
								
						}
						if($data['N42']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#EACFB8"> MODULE 2</td>';
								echo '<td bgcolor="#EACFB8">'.$data['N42'].'</td>';
								echo '<td bgcolor="#EACFB8">'.$data['T42'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N43']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#EACFB8"> MODULE 3</td>';
								echo '<td bgcolor="#EACFB8">'.$data['N43'].'</td>';
								echo '<td bgcolor="#EACFB8">'.$data['T43'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N44']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#EACFB8"> MODULE 4</td>';
								echo '<td bgcolor="#EACFB8">'.$data['N44'].'</td>';
								echo '<td bgcolor="#EACFB8">'.$data['T44'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N45']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#EACFB8"> MODULE 5</td>';
								echo '<td bgcolor="#EACFB8">'.$data['N45'].'</td>';
								echo '<td bgcolor="#EACFB8">'.$data['T45'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N46']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#EACFB8"> MODULE 6</td>';
								echo '<td bgcolor="#EACFB8">'.$data['N46'].'</td>';
								echo '<td bgcolor="#EACFB8">'.$data['T46'].'</td>';
								
								echo '</tr>'."\n";
								
						}
						if($data['MOY41']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#EACFB8"> Résultat Semestre 4</td>';
								echo '<td bgcolor="#EACFB8">'.$data['MOY41'].'</td>';
								echo '<td bgcolor="#EACFB8">'.$data['TYPE41'].'</td>';
						
								echo '</tr>'."\n";
								
								
						}
							

	}
	if($data['N61']!=NULL OR $data['N62']!=NULL OR $data['N63']!=NULL OR $data['N64']!=NULL OR $data['N65']!=NULL OR $data['N66']!=NULL OR $data['MOY61']!=NULL){
			echo'<table border=3 width =33% >';
	        echo '<tr>';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Semestre 6</center></u></b></td>';
	        echo '</tr>'."\n";
			echo '<tr>';
				//echo '<td bgcolor="#33AA0F"><b><u>           </u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Numero MODULE</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Intitulé MODULE</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>validation</u></b></td>';
			echo '</tr>'."\n";
			if($data['N61']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#8FA3AD"> MODULE 1</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['N61'].'</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['T61'].'</td>';
								
								echo '</tr>'."\n";
								
						}
						if($data['N62']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#8FA3AD"> MODULE 2</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['N62'].'</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['T62'].'</td>';

								echo '</tr>'."\n";
								
						}
							if($data['N63']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#8FA3AD"> MODULE 3</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['N63'].'</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['T63'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N64']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#8FA3AD"> MODULE 4</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['N64'].'</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['T64'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N65']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#8FA3AD"> MODULE 5</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['N65'].'</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['T65'].'</td>';
								
								echo '</tr>'."\n";
								
						}
							if($data['N66']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#8FA3AD"> MODULE 6</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['N66'].'</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['T66'].'</td>';
								
								echo '</tr>'."\n";
								
						}
						if($data['MOY61']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#8FA3AD"> Résultat Semestre 6</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['MOY61'].'</td>';
								echo '<td bgcolor="#8FA3AD">'.$data['TYPE61'].'</td>';
						
								echo '</tr>'."\n";
								
								
						}
							

	}
  mysql_free_result($req);
  
    }  
	else{
	
	echo' <br>code CNE inexistant veuiller inserer un code valide</br>';
	echo' <br>	الرقم الوطني غير صحيح او الطالب غير مسجل بالكلية</br>';

		echo' <br></br>';
 
	header('Location: archive.php?i=0');
	}
	
	
    // on ferme la connexion
    mysql_close();
?>


</body>
</html>