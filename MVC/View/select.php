
<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
   
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding:8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
img{
	height:100;
	width:100;
}
a{
	text-decoration: none;
}
a:link {
    color:red;
}
</style>
</head>
<body>

<table>
  <tr>
   	<th>Id</th>
    <th>Name</th>
    <th>Username</th>
    <th>Age</th>
    <th>City</th>
    <th>Date</th>
    <th>Img</th>
    <th>Hobby</th>
    <th>Gender</th>
    
  </tr>
  <?php
	while ($row = mysql_fetch_array($select)) 
	{ ?>
	    <tr>
		    <td><?php echo $row['id']; ?></td>
		    <td><?php echo $row['name']; ?></td>
		    <td><?php echo $row['username']; ?></td>
		    <td><?php echo $row['age']; ?></td>
		    <td><?php echo $row['city']; ?></td>
		    <td><?php echo $row['date']; ?></td>
		    <td><img src="uploads/<?php echo $row['image']; ?>"/></td>
		    <td><?php echo $row['hobby']; ?></td>
		    <td><?php echo $row['gender']; ?></td>
		</tr>

	<?php } ?>
  
 
</table>

</body>
</html>
