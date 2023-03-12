<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

// echo '<pre>';
//   var_dump($_POST);
//  echo  '</pre>';


if(isset($_POST['BTN_create']) && $_POST['user'] != "0") {
  
  
   
 $date = date_create($_POST['datedeadline']);
 $deadlineReformatted = date_format($date, "Y/m/d");
  
     $largest_uid = 0;
    foreach ($taskData as $item) {
        if ($item['uid'] > $largest_uid) {
            $largest_uid = $item['uid'];
            $newUID = $largest_uid+1;
        }
    }
  $newFormData = array(
    "uid"=> $newUID,
    "userUID"=> $_POST['user'],
    "dateCreate"=>date("Y/m/d"),
    "dateDeadline"=> $deadlineReformatted, 
    "dateComplete"=> NULL,  
    "title"=> $_POST['title'],
    "description"=> $_POST['description'],
    "status"=> "created",
     "reward"=> $_POST['reward'],
     "timerequiered"=> $_POST['timerequiered'],
     "categories"=> $_POST['categories']
  );




array_push($taskData, $newFormData);
$taskDataJSON = json_encode($taskData, JSON_PRETTY_PRINT);
  file_put_contents($taskDataFile, $taskDataJSON); 

 //  echo '<pre>';
 //  var_dump($taskData);
 // echo  '</pre>';


  



}




header('Location: /index.php');



?>