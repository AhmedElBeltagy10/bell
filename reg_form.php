<?php
include_once "Users.php";
if (isset($_POST["add"])) 
{
    $user=new Users();
     $user->setFname($_POST['fname']);
     $user->setLname($_POST['lname']);
     $user->setPhone($_POST['phone']);
     $user->setEmail($_POST['email']);
     $user->setAddress1($_POST['address1']);
     $user->setAddress2($_POST['address2']);
     $user->setCity($_POST['city']);
     $user->setCountry($_POST['country']);
     $user->setPostCode($_POST['postcode']);
     $user->setNotes($_POST['notes']);
    
     
     $msg=$user->Add();
     echo("<script> window.open('index.php','_parent'); </script>");
     
     if(strpos($msg,'PRIMARY'))
     echo("<h4 style='text-align:center'>This user is exist</h4>".$msg);
    else if(strpos($msg,'Phone'))
    echo("<h4 style='text-align:center'>This phone is exist</h4>".$msg);
    else if(strpos($msg,'Email'))
    echo("<h4 style='text-align:center'>This email is exist</h4>".$msg);
    

}
if(isset($_POST['cancel']))
{
    echo("<script> window.open('index.php','_parent'); </script>");
}
?>

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
    <title>Add New</title>

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
                    
                   <form method="post">
                       <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Frist Name" name="fname" value="<?php echo isset($_POST['fname'])?$_POST['fname']:''?>" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="lname" value="<?php echo isset($_POST['lname'])?$_POST['lname']:''?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                    <input class="input--style-1 " type="text" placeholder="Phone Number" name="phone" value="<?php echo isset($_POST['phone'])?$_POST['phone']:''?>" required>
                             </div>
                        </div>
                             <div class="col-2">
                            <div class="input-group">
                                    <input class="input--style-1 " type="email" placeholder="Email Address" name="email" value="<?php echo isset($_POST['email'])?$_POST['email']:''?>" required>
                                
                                </div>
                        </div>
                        </div>
                        <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                    <input class="input--style-1 " type="text" placeholder="Address 1 " name="address1" value="<?php echo isset($_POST['address1'])?$_POST['address1']:''?>" required>
                             </div>
                        </div>
                             <div class="col-2">
                            <div class="input-group">
                                    <input class="input--style-1 " type="text" placeholder="Address 2" name="address2" value="<?php echo isset($_POST['address2'])?$_POST['address2']:''?>" required>
                                
                                </div>
                        </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="City" name="city" value="<?php echo isset($_POST['city'])?$_POST['city']:''?>" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Country" name="country" value="<?php echo isset($_POST['country'])?$_POST['country']:''?>" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="PostCode" name="postcode" value="<?php echo isset($_POST['postcode'])?$_POST['postcode']:''?>" required>
                                </div>
                            </div>
                        </div>
                            <div class="row row-space">
                               <textarea  class="input-group" rows="3" cols="68" name="notes"  placeholder="Add Notes"><?php echo isset($_POST['notes'])?$_POST['notes']:''?></textarea>
                            </div>
                       <div class="row row-space">    
                            <input type="submit" name="add" class="btn btn--radius " style="background-color: darkslategrey;" value="Save Data" >
                         </div> </br>
                         <div class="row row-space">    
                            <input type="submit" name="cancel" class="btn btn--radius " style="background-color: crimson;" value="Cancel" >
                         </div>    
                    </form>

     </div>
        </div>
    </div>

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

