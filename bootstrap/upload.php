<?php

// print_r($_POST);


include 'db/db.php';

$sql="INSERT INTO recipes (RecipeName,Username, Email,Recipe,Created)

VALUES ('$_POST[recipeName]','$_POST[username]','$_POST[email]','$_POST[recipe]', '".date("l jS \of F Y h:i:s A")."')";
// printf ($sql);





if ($conn->query($sql) === TRUE) {
    $msg= "New record created successfully";

  } else {
    $msg= "Error: " . $sql . "<br>" . $conn->error;
  }




  include 'parts/header.php';

  echo '<div class="container " style="margin:20% 30%";>
         <h1> '.$msg.'</h1>
        </div>';
        include 'parts/footer.php';


  
  
?>
