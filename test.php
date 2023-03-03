<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php';


$sortedTaskData = $taskData


function sortByReward($a, $b){
  if ($a['reward'] == $b['reward']){
    return 0;
}
return ($a['reward'] < $b['reward']) ? 1: -1;
}

usort($sortedTaskData, 'sortByReward');

$i=0;
$top3rewards = [];

while($i<=4){
  echo $sortedTaskData[$i]['reward']."<BR>";
  $top3rewards[$i] = $sortedTaskData[$i];



    
  $i++;
  
}






// foreach ($taskData as $task){
//   echo $task['reward']. "<BR>";
// }

  echo '<pre>' ,
var_dump($top3rewards) , 
'</pre>';


?>