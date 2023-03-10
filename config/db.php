<?php 

$db = mysqli_connect("localhost","root","Loveisshit143","partner");
$query = "SET @autoid :=0";
mysqli_query($db, $query);
$query = "UPDATE tasks SET id = @autoid := (@autoid+1)";
mysqli_query($db, $query);
$query = "ALTER TABLE tasks AUTO_INCREMENT = 1";
mysqli_query($db, $query);

?>