<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Users Address</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/my-style.css" rel="stylesheet" type="text/css">
<link href="css/all.css" rel="stylesheet" type="text/css">

</head>
<body>

<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col"><a href="reg_form.php" target="_blank"><img class="img" src="images/add.png"></a></th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Address1</th>
        <th scope="col">Address2</th>
        <th scope="col">City</th>
        <th scope="col">County</th>
        <th scope="col">PostCode</th>
        <th scope="col">Notes</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
<?php
    include_once "Users.php";
    $user=new Users();
    $urows=$user->GettAll();
    while($rs=mysqli_fetch_assoc($urows))
    {
?>

        <tr>
        <th scope="row"><?php echo($rs['userID']); ?></th>
        <td><?php echo($rs['FristName']); ?></td>
        <td><?php echo($rs['LastName']); ?></td>
        <td><?php echo($rs['Phone']); ?></td>
        <td><?php echo($rs['Email']); ?></td>
        <td><?php echo($rs['Address1']); ?></td>
        <td><?php echo($rs['Address2']); ?></td>
        <td><?php echo($rs['City']); ?></td>
        <td><?php echo($rs['Country']); ?></td>
        <td><?php echo($rs['PostCode']); ?></td>
        <td><?php echo($rs['Notes']); ?></td>
        <td><a href="update_form.php?id=<?php echo $rs['userID'];?>"><img class="img" src="images/update.svg"></a></td>
        <td><a href="delete.php?id=<?php echo $rs['userID'];?>"><img class="img" src="images/delete.png"></a></td>
        </tr>
        
        
    </tbody>
    <?php  } ?>
    </table>

    
    
    </table>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>


</body>

</html> 