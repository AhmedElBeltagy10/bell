<?php

include "Users.php";

if(isset($_POST['btndelete']))
{
    $user=new Users();
     
          
        echo($user->Deleteid($_GET['id']));
        echo '<script language="javascript">';
        echo 'alert("Address Deleted successfully")';
        echo '</script>';
   
        echo("<script> window.open('index.php','_parent'); </script>");
}
if(isset($_POST['cancel']))
{
    echo("<script> window.open('index.php','_parent'); </script>");
}
?>

<html>
<head>

<link href="css/bootstrap.css" rel="stylesheet" media="all">
</head>


<body>
  <div class="container">
      
  <form method="post">
  <h1 class="text-danger text-center"> Delete Your Account !!</h1>
  <div class="row">
  <div class="col-4">
  <div class="input-group order-sm-4">
   <input  type="submit" class="btn-danger b" name="btndelete" value="Delete"  />
     </div>
    </div>
        </br>
        <div class="col-4">
        <div class="input-group">
   <input type="submit" class="btn-success" name="cancel" value="Cancel"  />
   </div>
    </div>
        </div>
       
</form>
      </div>
  </div>      


</body>

</html>