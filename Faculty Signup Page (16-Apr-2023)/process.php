 <?php
 require_once('config.php');
 ?>
 
<?php 
if(isset($_POST)){
    $Name 		= $_POST['Name'];
    $Initial 	= $_POST['Initial'];
    $Department = $_POST['Department'];
    $Phone      = $_POST['Phone'];
    $Email 		= $_POST['Email'];
    $Password 	= $_POST['Password'];

    $sql = "INSERT INTO faculty_data(Name, Initial, Department,Phone, Email, Password) VALUES(?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$Name,$Initial,$Department,$Phone, $Email,$Password]);
	if($result){
		echo 'Account Created Successfully!';}
	else{
		echo 'There were erros while saving the data.';}
	}
else{
	echo "DATA MISSING!!!";
}
?>