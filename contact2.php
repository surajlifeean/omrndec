<?php
// uncomment bellow line inn production
// error_reporting(0);

// Include config file

echo "hi";

require_once "connection.php";



$name = $email = $subject = $msg = $service_type = $contact_no = "test2";


	// verify for not null values 
	if ($name == "" || $email == "") {
		echo json_encode(array(
			'status' => false,
			'message' => 'Please provide vavlid name and email.'
		));
	}

	// Check input errors before inserting in database
	$sql = "INSERT INTO contactus ( name, email, subject, msg,service_type,contact_no ) VALUES ('" . $name . "','" . $email . "','" . $subject . "','" . $msg . "','" . $service_type . "','" . $contact_no . "')";

	$pdo_statement = $conn->prepare($sql);

	$result = $pdo_statement->execute();

