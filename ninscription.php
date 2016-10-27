<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Scolarite FLS</title>
<body background ="fls.jpg">
<table width="500" border="0" align="center">
  <tr>
      <td height="10" colspan="2">
			<div align="center">
			<h3><u><font size ="4" color="red" >INFORMATIONS GENERALES</font></u></h3>
					</div>
	</td>
  </tr>
</table>
<br></br>
<?php
  $CNE=$_POST['CNE'];   
    // connexion a la base
    $db = mysql_connect('localhost', 'root', 'fls00')  or die('Erreur de connexion '.mysql_error());
    // selection de la base  
    mysql_select_db('scolarite',$db)  or die('Erreur de selection '.mysql_error());
	mysql_query('SET NAMES `utf8`');
	$sql = "select * from ninsc where ninsc.CNE like '$CNE'";//////////////////////////////////////***************************/
	$req = mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
	$data = mysql_fetch_array($req);
	$flag=$data;
	if($data!=null){
	//echo'not 0';
  ECHO '<div id="center">';
  ECHO '<fieldset>';
  ECHO ' <legend></legend>';
		echo'<table align="center" border="2">';
			echo '<tr bgcolor="#E6E6E6">';
			    echo '<td align="center" bgcolor=""><b>'.$data['CNE'].'</b></td>';
				ECHO '<td align="right" width="230" bgcolor=""><I><B>  الرقم الوطني للطالب  </b></i> </td></font></tr>' ;
				echo '<tr bgcolor="#D8D8D8">';
			    echo '<td align="center" bgcolor=""><b>'.$data['filiere'].'</b></td>';
				ECHO '<td align="right" width="230" bgcolor=""> <I><B>الشعبة   </b></i></td></tr>' ;
			    echo '<tr bgcolor="#E6E6E6">';
			    echo '<td align="center" bgcolor=""><b>'.$data['cin'].'</b></td>';
				ECHO '<td align="right" width="230" bgcolor=""> <I><B>رقم بطاقة التعريف الوطنية  </b></i> </td></tr>' ;
				echo '<tr bgcolor="#D8D8D8">';
			    echo '<td align="center" bgcolor=""><b>'.$data['nexam'].'</b></td>';
				ECHO '<td align="right" width="230" bgcolor=""><I><B> رقم الامتحان  </b></i> </td></tr>' ;
			    echo '<tr bgcolor="#E6E6E6">';
			    echo '<td align="center" bgcolor=""><b>'.$data['npf'].'</b></td>';
				ECHO '<td align="right" width="230" bgcolor=""> <I><B>الاسم و النسب باللغة الفرنسية</b></i>  </td></tr>' ;
				echo '<tr bgcolor="#D8D8D8">';
			    echo '<td align="center" bgcolor=""><b>'.$data['npa'].'</b></td>';
				ECHO '<td align="right" width="230" bgcolor=""><I><B> الاسم و النسب باللغة العربية </b></i>  </td></tr>' ;
			    echo '<tr bgcolor="#E6E6E6">';
			    echo '<td align="center" bgcolor=""><b>'.$data['lieun'].'</b></td>';
				ECHO '<td align="right" width="230" bgcolor=""><I><B> مكان الازدياد  </b></i> </td></tr>' ;
				echo '<tr bgcolor="#D8D8D8">';
			    echo '<td align="center" bgcolor=""><b>'.$data['daten'].'</b></td>';
				ECHO '<td align="right" width="230" bgcolor=""> <I><B>تاريخ الازدياد </b></i> </td></tr>' ;
				
				
		echo '</table>';
	  ECHO '</fieldset>';
	 echo'</Br>';
			
		echo'<center><h3><font size ="4" color="red" > ملحوظة هامة:يجب على الطلبة التأكد من معلوماتهم  بعناية ودقة،في حالة وجود خطأ يجب الاتصال المباشر بمصلحة الشؤون الطلابية  لتصحيحه</font></h3>';
		echo '<br></br>';
				
			echo'</table>';
			echo'<img src ="usmba.jpg">';
			
  mysql_free_result($req);
  }
    // on ferme la connexion
	
	else{
		echo' <br>code CNE inexistant veuillez inserer un code valide</br>';
		echo' <br></br>';
		header('Location: inscription.php?i=0');
	}
    mysql_close();
?>


</body>
</html>