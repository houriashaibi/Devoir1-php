<html>
<head>
<title>Centrale d'achats</title>
</head>
<body>

   
    <h2>Commande clients</h2>

<?php 
	
	$rec=fopen("commande1.txt","rb");
    
	$rec1=fgets($rec);
	$rec2=fgets($rec);
	$rec3=fgets($rec);
	
	$line1=explode("|",$rec1);
	$line2=explode("|",$rec2);
	$line3=explode("|",$rec3);
    
	echo '<table border="red 2px solid">';
		
		echo'<tr bgcolor="aqua">';
			echo'<th>Numéro de commmandes</td>';
			echo'<th>Numéro Clients</th>';
			echo'<th>Date de commandes</th>';
			echo'<th>Designation</th>';
			echo'<th>Date de commandes</th>';
			echo'<th>Prix unitaires(Dh)</th>';
			echo'<th>Adresse clients</th>';
		echo'</tr>';	
		
		echo'<tr>';
			echo'<td>'.$line1[0].'</td>';
			echo'<td>'.$line1[1].'</td>';
			echo'<td>'.$line1[2].'</td>';
			echo'<td>'.$line1[3].'</td>';
			echo'<td>'.$line1[4].'</td>';
			echo'<td>'.$line1[5].'</td>';
			echo'<td>'.$line1[6].'</td>';
		echo'</tr>';	
		
		
		echo'<tr>';
			echo'<td>'.$line2[0].'</td>';
			echo'<td>'.$line2[1].'</td>';
			echo'<td>'.$line2[2].'</td>';
			echo'<td>'.$line2[3].'</td>';
			echo'<td>'.$line2[4].'</td>';
			echo'<td>'.$line2[5].'</td>';
			echo'<td>'.$line2[6].'</td>';
		echo'</tr>';	
		
		echo'<tr>';
			echo'<td>'.$line3[0].'</td>';
			echo'<td>'.$line3[1].'</td>';
			echo'<td>'.$line3[2].'</td>';
			echo'<td>'.$line3[3].'</td>';
			echo'<td>'.$line3[4].'</td>';
			echo'<td>'.$line3[5].'</td>';
			echo'<td>'.$line3[6].'</td>';
		echo'</tr>';	
		
		
		
		echo'</table>';	
		
	?>
	
	
</body>

</html>