<?php
include 'parts/header.php';

include 'db/db.php';


$sql ="SELECT * FROM recipes WHERE id='".$_GET['id']."'";
// printf ($sql);
$result = $conn->query($sql);
// print_r($result);
$row = $result->fetch_row();
    //  printf ($row[0]);
?>
<div class="container ">
      <div class="p-5 mb-4 bg-light rounded-3 bannerx">
         <div class="container-fluid py-5">
            
            <p class="col-md-8 fs-4">The best recipes from all over the world.</p>
            
         </div>
      </div>
<div class="container" style ="padding-left:10em";>
<div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
      <?php printf ($row[2]);   ?>
      </h3>
      <article class="blog-post">
        <h2 class="blog-post-title">
        <?php  printf ($row[1]); ?>
        </h2>
        <p class="blog-post-meta">  <?php  printf ($row[5]) ;
        ?> </p>
        <hr>
        <!-- <h3>Ingredients</h3>
        <ul>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ul>-->
        <h2>Recipe</h2> 
        <p>  <?php printf ($row[4]);   ?></p>
      </article>
<!-- 
      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav> -->
    </div>
    </div>
<?php include 'parts/footer.php';?>
