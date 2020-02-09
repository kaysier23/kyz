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
<h2> <?php echo $value['Stage_Name'];?> </h2>
    <ul>
        <li>Rank <?php echo $value['Rank'];?></li>
        <li>Birth_Name: <?php echo $value['Birth_Name'];?></li>
        <li>Birthday: <?php echo $value['Birthday'];?></li>
        <li>Position: <?php echo $value['Position'];?></li>
    </ul>
</ul>
<?php
}
?>
