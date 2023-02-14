<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

// echo '<pre>';
//   var_dump($_POST);
//  echo  '</pre>';


if(isset($_POST['BTN_create']) && $_POST['userUID'] > 0) {
  
}

 
 
   

$date = date_create($_POST['datedeadline']);
  $datedeadline = date_format($date, "Y/m/d");

 //Create a new LARGEST UID based on existing UIDs in an array.
    $largest_uid = 0;
    foreach ($taskData as $item) {
        if ($item['uid'] > $largest_uid) {
            $largest_uid = $item['uid'];
            $newUID = $largest_uid+1;
        }
    }
   
//turn data into php array
$newFormData = array(
          "uid"=> $newUID,
          "userUID"=> $_POST['user'],
          "dateDeadline"=> $_POST['datedeadline'],
          "dateCreate"=> date("Y-m-d"),
          "dateComplete"=> "NULL",
          "status"=> "XXXXX",
          "title" => $_POST["title"],
          "categories" => $_POST["categories"],
          "reward" => $_POST['reward'],
          "description" => $_POST['description'],
          "timeNeeded" => $_POST['timerequiered']
);



//push newform data (The php array we just made) into tasksData (the json data that was converted into a php array)
array_push($taskData, $newFormData);
//encode tasksData back into json
$tasksDataJSON = json_encode($taskData, JSON_PRETTY_PRINT);
file_put_contents($taskDataFile, $tasksDataJSON);




// echo out taksData
  echo '<pre>';
  var_dump($tasksDataJSON);
  echo '</pre>';



  
?>