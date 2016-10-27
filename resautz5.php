<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Bureau d examen sais</title>

</head>
<br/><br/>
<table width="500" border="0" align="center">
  <tr>
      <td height="10" colspan="2">
			<div align="center">
			<h3><u><font size ="5" color="" >Année universitaire 2015-2016</font></u></h3>
			<h3><u><font size ="4" color="" >Résultat de Session Rattrapage</font></u></h3>

		</div>
	</td>
  </tr>
  </table>

<?php
  $CNE=$_POST['CNE'];   
    // connexion a la base
    $db = mysql_connect('localhost', 'root', 'fls%2016')  or die('Erreur de connexion '.mysql_error());
    // selection de la base  
    mysql_select_db('scolarite',$db)  or die('Erreur de selection '.mysql_error());
	mysql_query('SET NAMES `utf8`');
	$sql = "select * from resaut5 where resaut5.cne like '$CNE'";//////////////////////////////////////***************************/
	$req = mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
	$data = mysql_fetch_array($req);
	$flag=$data;
	if($data!=null){
	//echo'not 0';
  ECHO '<div id="center">';
  ECHO '<fieldset>';
  ECHO ' <legend>INFORMATIONS GENERALES</legend>';
		echo'<table>';
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
	
	$sql1 = "select * from resaut5 where resaut5.cne=$CNE";//////////////////////////////////////***************************/
    $req = mysql_query($sql1) or die('Erreur SQL !'.$sql1.'<br>tEST</br>'.mysql_error());
	
	$data = mysql_fetch_array($req);
	echo'<center>';
				echo'<table width =33% >';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Session de PRINTEMPS</center></u></b></td>';
						echo '</table>';


			if($data['N1']!=NULL OR $data['N2']!=NULL OR $data['N3']!=NULL OR $data['N4']!=NULL OR $data['N5']!=NULL OR $data['N6']!=NULL OR $data['N7']!=NULL){
			echo'<table width =33% >';
			 	        echo '<tr>';
				echo '<td colspan="4" bgcolor="#5F8CA3"><b><u><center>Semestre 6</center></u></b></td>';
	        echo '</tr>'."\n";
			 			echo '<tr>';
				//echo '<td bgcolor="#33AA0F"><b><u>           </u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Intitulé module</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Moyene module</u></b></td>';
				echo '<td bgcolor="#8CC6D7"><b><u>Type resultat</u></b></td>';
			echo '</tr>'."\n";
			if($data['N1']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2">'.$data['INTM1'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['N1'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['T1'].'</td>';

								echo '</tr>'."\n";
								
						}
						if($data['N2']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2">'.$data['INTM2'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['N2'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['T2'].'</td>';

								echo '</tr>'."\n";
								
						}
					if($data['N3']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2">'.$data['INTM3'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['N3'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['T3'].'</td>';

								echo '</tr>'."\n";
								
						}
						if($data['N4']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2">'.$data['INTM4'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['N4'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['T4'].'</td>';

								echo '</tr>'."\n";
								
						}
						if($data['N5']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2">'.$data['INTM5'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['N5'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['T5'].'</td>';

								echo '</tr>'."\n";
								
						}
					if($data['N6']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2">'.$data['INTM6'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['N6'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['T6'].'</td>';

								echo '</tr>'."\n";
								
						}	
                    if($data['N7']!=NULL){
							
							    echo '<tr>';   	
								echo '<td bgcolor="#ABC8E2">'.$data['INTM7'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['N7'].'</td>';
								echo '<td bgcolor="#ABC8E2">'.$data['T7'].'</td>';

								echo '</tr>'."\n";
								
						}	
     echo'</table>';
		
		echo'<table border="2" width =33% >';
	        echo '<tr>';
			echo '<td colspan="" bgcolor="#C4D7ED"> moyenne de semestre</td>';
			echo '<td colspan="" bgcolor="#C4D7ED"> validation de semestre</td>';
				 echo '</tr>'."\n";
							echo '<tr>';   		
								echo '<td bgcolor="#E1E6FA">'.$data['MOY1'].'</td>';
								echo '<td align="center" bgcolor="#E1E6FA">'.$data['TYPE'].'</td>';
				 echo '</tr>'."\n";
				 			echo'</table>';						

	}
  mysql_free_result($req);
  
    }
	else{
	
	echo' <br>code CNE inexistant veuiller inserer un code valide</br>';
	echo' <br>	الرقم الوطني غير صحيح او الطالب غير مسجل بالكلية</br>';

		echo' <br></br>';
 
	header('Location: resauto5.php?i=0');
	}
	
	
    // on ferme la connexion
    mysql_close();
?>
<br/><br/>
<h2><u>بيان الرموز</u></h2>
<h3>م	: فصل مستوفى </h3>
<h3>غ.م	: غير مستوفىً</h3>
<h3>غ	: غائب</h3>
<h3>س	: استدراك</h3> 
<h3>م.س : مستوفاة مع إمكانية الاستدراك</h3> 
<h3>***: معدل أقل من الحد الأدنى</h3> 
<h3>معدل تحته سطر: معدل من موسم جامعي سابق.</h3> 



</body>
</html>