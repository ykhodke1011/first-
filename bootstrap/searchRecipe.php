<?php
include 'parts/header.php'; 

include 'db/db.php';


if (isset($_POST['submit']))
{
  // print_r ($_POST);
$searchTerm=$_POST['search'];
$sql ="SELECT * FROM recipes WHERE RecipeName LIKE '%".$searchTerm."%' OR Username LIKE '%".$searchTerm."%' OR Email LIKE '%".$searchTerm."%'";
print_r($sql);
}
else{
  $sql ="SELECT * FROM recipes";
}

// WHERE CustomerName LIKE '%or%'


$result = $conn->query($sql);


?>


<div class="container newsearch">
<form class="d-flex" action="searchRecipe.php" method="POST">
             <input name="search" class="form-control me-2"   type="search" placeholder="Search" aria-label="Search" required>
             <button name="submit" class="button btn-danger" type="submit">Search</button>
 </form>
</div>

</div>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Recipe name</th>
      <th scope="col">Author</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>

  <?php
    while ($row = $result -> fetch_row()) {
    
        ?>
    <tr>
      <th scope="row"><a href="recipe.php?id=<?php printf ($row[0]); ?>"><?php printf ($row[1]);   ?> </a></th>
      <td><?php printf ($row[2]);   ?></td>
      <td><?php printf ($row[3]);   ?></td>
      <td><?php printf ($row[5]);   ?></td>

    </tr>
    <?php

}
?>
  </tbody>

</table>


</div>

<?php include 'parts/footer.php';
?>