<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Update Data</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
   

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>

<body>
    <div class="page-wrapper font-robo" style="background-color: lightsteelblue" >
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div></div>
                <div class="card-body">
    <?php 
        include_once "Users.php";
        $user=new Users();
        $row=$user->showUser($_GET['id']);
        if($rs=mysqli_fetch_assoc($row))
        {
    ?>                       
                   <form method="post">
                       <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Frist Name" name="fname" value="<?php echo ($rs['FristName']); ?>" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="lname" value="<?php echo ($rs['LastName']); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                    <input class="input--style-1 " type="text" placeholder="Phone Number" name="phone" value="<?php echo ($rs['Phone']) ; ?>" required>
                             </div>
                        </div>
                             <div class="col-2">
                            <div class="input-group">
                                    <input class="input--style-1 " type="email" placeholder="Email Address" name="email" value="<?php echo ($rs['Email']); ?>" required>
                                
                                </div>
                        </div>
                        </div>
                        <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                    <input class="input--style-1 " type="text" placeholder="Address 1 " name="address1" value="<?php echo ($rs['Address1']); ?>" required>
                             </div>
                        </div>
                             <div class="col-2">
                            <div class="input-group">
                                    <input class="input--style-1 " type="text" placeholder="Address 2" name="address2" value="<?php echo ($rs['Address2']); ?>" required>
                                
                                </div>
                        </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="City" name="city" value="<?php echo ($rs['City']); ?>" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Country" name="country" value="<?php echo ($rs['Country']); ?>" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="PostCode" name="postcode" value="<?php echo ($rs['PostCode']); ?>" required>
                                </div>
                            </div>
                        </div>
                            <div class="row row-space">
                               <textarea  class="input-group" rows="3" cols="68" name="notes"  placeholder="Add Notes"><?php echo ($rs['Notes']); ?></textarea>
                            </div>
                       <div class="row row-space">    
                            <input type="submit" name="update" class="btn btn--radius" style="background-color: darkcyan;" value="Update Data" >
                         </div> </br>
                         <div class="row row-space">    
                            <input type="submit" name="cancel" class="btn btn--radius  btn--green"  value="Cancel" >
                         </div>    
                     <?php } ?>
                        </form>
          
           
     </div>
        </div>
    </div>
    
    <?php
include_once "Users.php";
if (isset($_POST["update"])) 
{
    $usr= new Users;
     $usr->setFname($_POST['fname']);
     $usr->setLname($_POST['lname']);
     $usr->setPhone($_POST['phone']);
     $usr->setEmail($_POST['email']);
     $usr->setAddress1($_POST['address1']);
     $usr->setAddress2($_POST['address2']);
     $usr->setCity($_POST['city']);
     $usr->setCountry($_POST['country']);
     $usr->setPostCode($_POST['postcode']);
     $usr->setNotes($_POST['notes']);
    
     
     $u=$usr->Update();
     echo '<script language="javascript">';
     echo 'alert("Address Updated successfully")';
     echo '</script>';
     //  echo("Data Updated");
     echo("<script> window.open('index.php','_parent'); </script>");
    
}
if(isset($_POST['cancel']))
{
    echo("<script> window.open('index.php','_parent'); </script>");
}
?>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>

