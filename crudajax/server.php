<?php  

    $bdd = new pdo( 'mysql:host=localhost;dbname=crudajax', 'root', '');
	
	$action = $_POST['action'];

if ($action == 'add') {
	$name = $_POST['nm'];
	$email = $_POST['em'];
	$phone = $_POST['hp'];
	$address = $_POST['al'];
	$stmt = $bdd->prepare("INSERT INTO crud (name,email,phone,address) VALUES (?,?,?,?) ");
	$rs = $stmt->execute(array($name, $email, $phone, $address,));
	
	if($rs == 1){
		echo 'Success insert data';
	}else {
		echo 'Fail insert data';
	}
	
}elseif ($action == 'edit') {
	# code...
}elseif ($action == 'del') {
	# code...
}


?>