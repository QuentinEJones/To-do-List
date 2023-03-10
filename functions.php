<?php session_start();
$taskDataFile = $_SERVER['DOCUMENT_ROOT']."/data/tasks.json";
$usersDataFile = $_SERVER['DOCUMENT_ROOT']."/data/users.json";
//getting JSON data from Json files  
$jsonTasks = file_get_contents($taskDataFile);
$jsonUsers = file_get_contents($usersDataFile);

$taskData = json_decode($jsonTasks, True);
$userData = json_decode($jsonUsers,True);


function sortByReward($a, $b){
  if ($a['reward'] == $b['reward']){
    return 0;
}
return ($a['reward'] < $b['reward']) ? 1: -1;
}

$combinedData = array();
  foreach ($taskData as $tasks){
    foreach ($userData as $user){
      if ($tasks["userUID"] == $user["uid"]){
        unset($user["uid"]);
        $combinedData[] = array_merge($tasks, $user);
      }
    }
  }



// echo '<pre>' ,
//   var_dump($tasksData) , 
//   '</pre>';
  
$cssFiles = 
  '
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      <!-- Bootstrap icons-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="/resources/templateFiles/css/styles.css" rel="stylesheet" />
';

$jsFiles =
  '
<!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="templateFiles/js/scripts.js"></script>
';

$nav =

  
  
  '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!">To-Do List</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/tasks/index.php">Tasks</a></li>
                        <li class="nav-item"><a class="nav-link" href="/search.php">Search</a></li>
                    </ul>
                </div>
            </div>
        </nav>
';

$footer =
  '
 <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
';
?>