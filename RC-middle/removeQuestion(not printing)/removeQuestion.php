<?php
	$response = file_get_contents('php://input');
	$send = json_decode($response,true);
	
	$curl = curl_init();


	$send = json_encode($send,true);


	 $url="https://web.njit.edu/~mmp39/CS490/master/back/removeQuestion/removeQuestion.php";
	  
	  curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_POST => 1,
		CURLOPT_FOLLOWLOCATION => 1,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_POSTFIELDS => $send
	  ));
	$resp = curl_exec($curl);
	echo $resp;
	
?>