<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewRegisterBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$age = trim($_POST['age']);
	$contactNumber = trim($_POST['contactNumber']);
	$gender = trim($_POST['gender']);
	$emailAddress = trim($_POST['emailAddress']);
	$registerDate = trim($_POST['registerDate']);
    $registerTime = trim($_POST['registerTime']);

	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($yearLevel) && !empty($section)  && !empty($section)  && !empty($adviser) && !empty($religion)) {
			$query = insertIntoregister($pdo, $firstName, $lastName, 
			$gender, $yearLevel, $section, $adviser, $religion);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editRegisterBtn'])) {
	$Register_id = $_GET['student_id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$yearLevel = trim($_POST['yearLevel']);
	$section = trim($_POST['section']);
	$adviser = trim($_POST['adviser']);
	$religion = trim($_POST['religion']);

	if (!empty($student_id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($yearLevel) && !empty($section) && !empty($adviser) && !empty($religion)) {

		$query = updateAregister($pdo, $student_id, $firstName, $lastName, $gender, $yearLevel, $section, $adviser, $religion);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deleteStudentBtn'])) {

	$query = deleteAregister($pdo, $_GET['student_id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>