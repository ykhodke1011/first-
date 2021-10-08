

<!Doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <title>Foodie Blogs</title>
   </head>
   <body>


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         
            <div class="container">
               <a class="navbar-brand" href="#"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="uploadRecipe.php">UploadRecipe</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="searchRecipe.php">SearchRecipe</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contactUs.php">ContactUs</a>
                     </li>
               
                           
                  </ul>
                  <form class="d-flex" action="searchRecipe.php" method="POST">
             <input name="search" class="form-control me-2"   type="search" placeholder="Search" aria-label="Search" required>
             <button name="submit" class="button btn-danger" type="submit">Search</button>
 </form>
               </div>
            </div>
         
      </nav>

      