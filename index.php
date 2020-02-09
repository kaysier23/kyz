<?php
$json = file_get_contents('https://jsssson.herokuapp.com/json.php');

$data = json_decode($json,true);
$list = $data['profile'];
?>
<h1> IZ*ONE PROFILE </h1>
<?php
foreach($list as $value){
    ?>
<ul>
            <h2>$Stage_Name</h2>
              <ul>
                  <li>Rank: $Rank</li>
                  <li>Birth_Name: $Birth_Name </li>
                  <li>Birthday:$Birthday </li>
                  <li>Position: $Position</li>
              </ul>
          </ul>
 
<?php
}
?>
