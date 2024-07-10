<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="5"><h2>Order History</h2></th> 
		</tr> 
			  <th> Name </th> 
			  <th> Phone_No </th> 
			  <th> Data </th> 
			  <th> Service </th> 
			  <th> Weight </th>
			  
		</tr> 
		
		<?php while($rows=mysql_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['name']; ?></td> 
		<td><?php echo $rows['phone_no']; ?></td> 
		<td><?php echo $rows['data']; ?></td> 
		<td><?php echo $rows['service']; ?></td> 
		<td><?php echo $rows['weight']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>