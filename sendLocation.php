<?php 
	//open connection 
    $inputID = $_GET['input'];
    $conn = new mysqli("localhost","root","","bookstore");

    if (!$conn)
    {
        die("Could not connect: ".$conn->connect_error);
    }

    $sql = "SELECT location FROM booklocation WHERE bookID = ".$inputID;
    
    $result = $conn->query($sql);

    $output = array();

    if($result == True){

	    while($row = mysqli_fetch_array($result))
	    {
	        // print_r($row['title']);
	        array_push($output,$row['location']);
	   	}

		echo "<h1>Book List</h1>";
		echo "<table><tr><th>location</th></tr>"; 
		// print_r($output);
		foreach ($output as $value){   
	        echo "<tr><td>" . $value . "</td></tr>";
		}

		echo "</table><br/><br/><br/>";
	}
	else{
		echo "Wrong Input!!! Please input Book ID again<br/><br/><br/><br/>";
	}


	$conn->close();

 ?>
