<!--

Username:
$regex = "/^[a-z\D]{5,7}$/";
Password:
$regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@]).{9,9}$/";

tes:2.php
-->

<?php
$regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@]).{9,9}$/";
if (preg_match($regex,$_POST['text'])){
	$output="yes";}
else{
	$output="no";}
?>
<form method="POST">
<input type="text" name="text" autofocus/>
<?php if (isset($output)){echo $output;}

