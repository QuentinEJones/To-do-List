<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 



  $result = array();
foreach($taskData as $task) {
  foreach ($userData as $user){
    if($item["userUID"] == $user["uid"]) {
      unset($user )
      $result[] = array_merge($task, $user)
    }
  }
}


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
      <div class="col-md-6">
        <label for="Title" class="form-label">Email</label>
        <input type="text" class="form-control" name="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="Catagory" class="form-label">Tasks Catagory</label>
         <select name="Catagory" class="form-select">
          <option selected>Choose</option>
          <option>Events </option>
          <option>HomeWork </option>
          <option>Chores </option>
         </select>
      </div>
      <div class="col-12">
        <label for="Project" class="form-label">Project Type</label>
        <input type="text" class="form-control" name="inputAddress" placeholder="HW Type/ Where / What chore">
      </div>
      <div class="col-12">
        <label for="time" class="form-label">Required Time</label>
        <input type="text" class="form-control" name="time" placeholder="How much time will it take">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Reward/Cost</label>
        <input type="text" class="form-control" name="reward">
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
