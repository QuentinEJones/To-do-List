<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php';


?>






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Heroic Features - Start Bootstrap Template</title>
        <?php echo $cssFiles ?>
    </head>
    <body>
        <!-- Responsive navbar-->
       <?php echo $nav ?>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Form Code</h1>
                         <form class="row g-3">
      <div class="col">
        <label for="Catagory" class="form-label">Tasks Catagory</label>
         <select name="Catagory" class="form-select">
          <option selected>Choose</option>
          <option>Status</option>
          <option>User</option>
          <option>Category</option>
         </select>
      </div>
     
     
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Filter Goes here</button>
      </div>
    </form>
                    </div>
                </div>
            </div>
        </header>

      <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Form Code</h1>
                         <p>
                 <table class="table table-dark table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Due Date:</th>
                        <th scope="col">Title:</th>
                        <th scope="col">Name:</th>
                        <th scope="col">Catagory:</th>
                        <th scope="col">Value:</th>
                      </tr>
                    </thead>
                    <tbody>

<?php

foreach($taskData as $key => $value)
echo '

    <tr>
      <th scope="row">1</th>
      <td>'.$task['uid'].'</td>
      <td>Otto</td>
      <td>'.$task['catagories'].'</td>
      <td>@mdo</td>
    </tr>


';

?>

                     
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                         <td>@mdo</td>
                      </tr>
                   
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </header>
        <!-- Footer-->
       <?php echo $footer ?>
        <?php echo $jsFiles ?>
    </body>
</html>