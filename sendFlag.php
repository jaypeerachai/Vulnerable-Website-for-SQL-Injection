<?php 
	//open connection 
    $inputCode = $_GET['input'];
    $conn = new mysqli("localhost","root","","bookstore");

    if (!$conn)
    {
        die("Could not connect: ".$conn->connect_error);
    }

    $sql = "SELECT code FROM promotion WHERE description = 'Free'";
    
    $result = $conn->query($sql);

    $output = array();

    if($result == True){
    	$row = mysqli_fetch_array($result);
    	// print_r($row['code']);
    	if($row['code'] == $inputCode){
    		    echo "<center><h1><b>Congrats!!! You win the book for free</b></h1></center><br/><br/>";
    	}
    	else{
    		echo "Wrong!!! Please try again later.<br/><br/>";
    	}
	}
	else{
		echo "Wrong!!! Please try again later.<br/><br/>";
	}


	$conn->close();

 ?>
