<?php
    require_once('../php/session_header.php');
	require_once('../service/userService.php');
	if(isset($_POST['get'])){
		$username = $_SESSION['username'];
		$details = getAllProfile($username);

		echo printAll($details);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $details) {
			$doc .= "<tr align='center'>".
			 			
					    "<td>{$details['username']}</td>".
					    "<td>{$details['email']}</td>".
					    "<td>{$details['picture']}</td>".
					   
					    
					"</tr>";
		}
		return $doc;
	}
?>

