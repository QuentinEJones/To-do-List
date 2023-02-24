<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php';



if ($_GET['search'] == 'yes'){
    $usableTaskData = $_SESSION['searchResults'];
  } else {
    $usableTaskData = $combinedData;
  }



$categories = array();
  foreach ($combinedData as $cat) {
      $categories[] = $cat['categories'];
  }
  $uniqueCats = array_unique($categories);

  // echo '<pre>';
  // var_dump( );
  // echo '</pre>';
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
                        <h1 class="display-5 fw-bold">Filtered Tasks</h1>
                        <p class="fs-4">Form goes here</p>
                        <form action="/redirects/search.php" method="post">
                          <select class="form-select" name="fliterCategory">
                            <option selected>Choose Category</option>
                            <?php
                              foreach($uniqueCats as $category) {
                                echo '<option value="'.$category.'">'.$category.'</option>';
                              }
                            ?>
                          </select>
                          <br>
                          <input class="btn btn-primary btn-lg" type="submit" value="Search" name="btnSearch" id="btnSearch">
                        </form>
                    </div>
                </div>
            </div>
        </header>


      
 <!-- Page Content-->
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

foreach($combinedData as $key => $value)
echo '

    <tr>
      <td>'.$value['dateDeadline'].'</td>
      <td>'.$value['title'].'</td>
      <td>'.$value['fName'].' '.$value['lName'].'</td>
      <td>'.$value['categories'].'</td>
      <td>'.$value['reward'].'</td>
    </tr>


';

?>

                     
                   
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