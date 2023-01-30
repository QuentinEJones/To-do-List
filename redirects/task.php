<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 





if(isset(['BTN_create']) && $_POST['user'] > 0) {
  
  
   

$date = date_create($_POST['datedeadline'])
  $datedeadline = date_format($date, "Y/m/d")

  $largest_uid = 0;
  foreach ($taskdata as $item) {
    if ($item['uid'] > $largest_uid){
      $largest_uid = $item['uid'];
      $newID = $largest_uid+;
    }
  }

  $newFormData = array(
    "uid"=> $newID,
  "userUID"=> $_POST['user'],
    "dateStart"=> date['Y/m/d'],
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

echo '<pre>' ,
  var_dump($taskData) , 
  '</pre>';
  



}








?>