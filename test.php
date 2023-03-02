<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php';





function sortByReward($a, $b){
  if ($a['reward'] == $b['reward']){
    return 0;
}
return ($a['reward'] < $b['reward']) ? 1: -1;
}

usort($taskData, 'sortByReward');






foreach ($taskData as $task){
  echo $task['reward']. "<BR>";
}

//   echo '<pre>' ,
// var_dump($tasksData) , 
// '</pre>';


?>