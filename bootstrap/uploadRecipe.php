<?php
include 'parts/header.php';
?>

<div class="container">
<div class="container contactme">
      <h1>Submit recipe</h1>
      <form action="upload.php" method="post">
        <div class="mb-3">

          <label for="name" class="form-label">Enter your name</label>
          <input type="text" name="username" class="form-control" id="name" required  >
          
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
       

        <label for="recipeName" class="form-label">Recipe Name</label>
          <input type="text" name="recipeName" class="form-control" id="recipeName" required  >

        <div class="mb-3">
          <label for="recipe" class="form-label">Recipe</label>
         <div> <textarea type="text" name="recipe"  class="form-control" id="recipe" required ></textarea></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </div>

<?php

    include 'parts/footer.php';
    ?>