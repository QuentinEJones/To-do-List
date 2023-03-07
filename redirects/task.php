<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

echo '<pre>';
  var_dump($_POST);
 echo  '</pre>';


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
    "uid"=> $newID,
    "userUID"=> $_POST['user'],
    "dateStart"=>date("Y/m/d"),
    "datedeadline"=> "$datedeadlineformated",
    "dateComplete"=> NULL,
    "title"=> $_POST['title'],
    "description"=> $_POST['description'],
    "staus"=> "created",
     "reward"=> $_POST['reward'],
     "timerequiered"=> $_POST['timerequiered'],
     "Catagory"=> $_POST['Catagory'],
  );




array_push($taskData, $newFormData);
$taskDataJSON = json_encode($taskData, JSON_PRETTY_PRINT);
  file_get_contents($taskDataFile, $taskDataJSON); 

 //  echo '<pre>';
 //  var_dump($_POST);
 // echo  '</pre>';


  



}








?>