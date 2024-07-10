
<?php 

    require_once("connection.php");
    $query = " select * from order_booking ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <th> Name </th> 
			                    <th> Phone_No </th> 
			                    <th> Data </th> 
			                    <th> Service </th> 
			                    <th> Weight </th>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $name = $row['name'];
                                        $phone_no = $row['phone_no'];
                                        $data = $row['data'];
										$service = $row['service'];
                                        $weight = $row['weight'];
                            ?>
                                    <tr>
                                        <td><?php echo  $name ?></td>
                                        <td><?php echo $phone_no ?></td>
                                        <td><?php echo $data ?></td>
                                        <td><?php echo $service ?></td>
										<td><?php echo  $weight ?></td>
                                        <td><a href="#" class="btn btn-pencil">Edit</a></td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>