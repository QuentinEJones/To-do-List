<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php';

$taskCount = 0;
$catCountProject = 0;
$sumOfreward = 0;
$time = 0;
$sumOfprojectrewards = 0;
$totalSuMofSUm = 0;
foreach($taskData as $task){

$sumOfreward = $sumOfreward + $task['reward'];
 
$time = $time + $task['timeNeeded']; 

$totalSuMofSUm  =  $time / $sumOfreward;



  
  $reward = $task['reward']+10;
// echo $reward."<br>";



  
  if($task['categories'] = "project"){
    $sumOfprojectrewards = $sumOfprojectrewards + $task['reward'];
    $catCountProject++;
  }
}

if ( strtotime($task['dateDeadline'])    <  strtotime(Date("h:i:sa"))   ){
// echo "deadline";
  
}


  $dateTest = $task['dateDeadline'];
{
  $taskCount++;
}

$userCount = 0;
foreach($userData as $user){
  $userCount++;
}
 
$sortedTaskData = $taskData;







usort($sortedTaskData, 'sortByReward');

$i=0;
$top3rewards = [];

while($i<=2){
  $top3rewards[$i] = $sortedTaskData[$i];
  $i++;
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
                <div class="p-4 p-lg-5 bg-light rounded-3 ">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold text-center">Form Code</h1>

            <!-- From Code-->
             <form method="post" action="/redirects/task.php" class="row g-3">
      <div class="col-md-6">
        <label for="user" class="form-label">User</label>
       <select name="user" class="form-select">
          <option selected>Choose User</option>
         <?php
        foreach($userData as $user) {
         echo '<option value ="'.$user["uid"].'">'.$user["fName"].' '.$user["lName"].'</option>';
         
        }
        ?>
         </select>
      </div>
     <div class="col-md-6">
        <label for="Title" class="form-label">Task Title</label>
        <input type="text" class="form-control" name="title">
      </div>
   <div class="col-md-6">
        <label for="Catagory" class="form-label">Task Catagory</label>
         <select name="Catagory" class="form-select">
          <option selected>Choose</option>
          <option>Events </option>
          <option>HomeWork </option>
          <option>Chores </option>
           <option>Health </option>
         </select>
      </div>
               <div class="col-md-3">
        <label for="datedeadline" class="form-label">Task Due Date</label>
         <br>
        <input type="date">
      </div>

     <div class="col-md-6">
        <label for="description" class="form-label">Description</label>
       <br>
       <textarea name="description" rows="4" cols="110" placeholder="Type Your Desc Here"></textarea>
      </div>
       <br>
      <div class="col-md-7">
        <label for="Title" class="form-label">Reward/Cost</label>
        <input type="text" class="form-control" name="reward">
      </div>
        <div class="col-md-5">
        <label for="Title" class="form-label">Time Required</label>
        <input type="text" class="form-control" name="timerequiered">
      </div>
      <div class="col-12">
        <button type="submit"  name = "BTN_create" class="btn btn-primary">Create</button>
      </div>
    </form>
                         
                       
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <h2 class="fs-4 fw-bold">Count Data</h2>
                                <p class="mb-0">Total Tasks: <?php echo $taskCount; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold">Category Count</h2>
                                <p class="mb-0">Project Count: <?php echo $catCountProject; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                                <h2 class="fs-4 fw-bold">User Data</h2>
                                <p class="mb-0">Total Users: <?php echo $userCount; ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                                <h2 class="fs-4 fw-bold">Past Due Tasks</h2>
                                <p class="mb-0"> Date: <?php echo $dateTest; ?> </p>
                              <p class="mb-0"> Date Number : <?php echo strtotime($dateTest); ?> </p>
                              <p class="mb-0"> Date Now: <?php echo strtotime(Date("h:i:sa")); ?> </p>
                              
                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                                <h2 class="fs-4 fw-bold">Time and Reward Totals</h2>
                                <p class="mb-0">Total rewards <?php echo $sumOfreward ?></p>
                              
                               <p class="mb-0">Total time <?php echo $time?></p>
                              <p class="mb-0">Total project rewards  <?php echo  $sumOfprojectrewards?></p> 
                              <p class="mb-0">Total SUM OF SUMS  <?php echo  $totalSuMofSUm?></p>  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                                <h2 class="fs-4 fw-bold">Top 3 Rewards</h2>
                                <p class="mb-0">
                                  <?php
                                  foreach($top3rewards as $task){
                                    echo $task["title"].":".$task["reward"]."<br>";
                                  }

                                ?>
                                </p>
                              <p class="mb-0"></p>
                              <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
       <?php echo $footer ?>
        <?php echo $jsFiles ?>
    </body>
</html>