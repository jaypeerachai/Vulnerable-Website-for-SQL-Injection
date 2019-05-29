<!-- MySQL -->
<?php
	//open connection 
    $input = strtolower($_GET['input']);
    $conn = new mysqli("localhost","root","","bookstore");
    // $conn = new mysqli($servername, $username, $password, $dbname);

	if (!$conn)
	{
		die("Could not connect: ".$conn->connect_error);
	}

// Create connection

$sql = "SELECT title FROM book";
$result = $conn->query($sql);

$output = array();

while($row = mysqli_fetch_array($result))
{
    // print_r($row['title']);
    array_push($output,strtolower($row['title']));
}

$check = false;

echo "<h1>Book List</h1>";
echo "<table><tr><th>ID</th><th>Title</th><th>Author</th><th>Genre</th><th>Year</th><th>Buy</th></tr>"; 
// print_r($output);
foreach ($output as $value){ 
    // print($value);
    // print(explode(" ",$value));
    if(in_array($input,explode(" ",$value),TRUE)){
        $sql = "SELECT * FROM book WHERE title = '".$value."'";
        $newresult = $conn->query($sql);
        $row = $newresult->fetch_assoc();      
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["title"] . "</td><td>" . $row["author"]. "</td><td>" . $row["genre"] . "</td><td>" . $row["year"] . "</td><td><input style='color:blue;' type='button' value='Buy' id='buyBut' onclick='javascript:test()'></td></tr>";
        $check = true;
    }
}

if($check == false)
{
    echo "<h2> '".$_GET['input']."' Not Found!!! </h2>";
}
else{
    echo "</table>";
    echo "<br/><br/><br/>"; 
    echo "---------------------------- You can also purchase it at physical stores ----------------------------<br/><br/>";

    echo "<h2><b>Search for Store Location by BookID</b></h2><br/>";
    echo "<input id=\"inputID\" name=\"inputID\" style=\"width:30%; height:35px\" class=\"form-control\" placeholder=\"e.g. 1\" required autofocus></input><br><br>
        <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Search\" onclick=\"javascript:sendLocation()\"></input><br/><br/><br/>";
    echo "<div id=\"output2\"></div>";
}

// $output = ["Introduction to OOP","Information Retrieval","Algorithms","JAVA","Introduction to C"]

$conn->close();


?>

<style>
table, th, td {
    border: 1px solid black;
}
</style>
