<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cabin|Concert+One|Crete+Round|Indie+Flower|Lora|Pacifico|Patrick+Hand+SC|Permanent+Marker|Quicksand|Roboto+Slab" rel="stylesheet">
		<link rel="stylesheet" href="style.css">		
	</head>
	<body>
		<div class="header">
    		<a href="#default" class="logo">LOGO</a>
    		<div class="header-right">
      			<a href="#">Search Page</a>
    		</div>
  		</div> 
		<center>
			<div style="margin-top: 50px">
				<form class="form-signin" style="width:70%" method="get" onsubmit="return false;">
			    <h2><b>Search for Books</b></h2><br/><br/>
			    <label for="inputKeyword" class="sr-only"></label>
			    	<input id="inputKeyword" name="inputKeyword" style="width:50%; height:35px" class="form-control" placeholder="e.g. Java" required autofocus></input><br><br>
			     <input type="submit" name="submit" id="submit" value="Search" onclick="javascript:process()"></input>
			  	</form>
			</div><br/><br/>
			<div id="output"></div>
			<div id="redeemModal" class="modal">
				<div class="modal-content">
			    	<span class="close">&times;</span>
			    	<p>Redeem your promotion code</p>
			    	<div id="outputFlag">
					    <label for="inputKeyword" class="sr-only"></label>
					    <input id="inputCode" name="inputCode" style="width:50%; height:35px" class="form-control" placeholder="e.g. AAAAAAAA" required autofocus></input><br><br>
					    <input type="submit" name="submit" id="submit" value="Redeem" onclick="javascript:sendCode()"></input>
				    </div>
			  	</div>
			</div>
		</center>
	</body>
</html>

<script type="text/javascript">
    /* this fuction is AJAX that use send a request to a server and get the respond data. */
	    function process()
	    {	
	    	var input = document.getElementById("inputKeyword").value;
	    	if(input != ""){
	    		// Create a request obje ct.
		        xhttp = new XMLHttpRequest();
		        // defines a fuction to be called when the readyState property changes.
		        xhttp.onreadystatechange = function() 
		        {
		            // when readyState is 4 and status is 200, the response is ready.
		            if (this.readyState == 4 && this.status == 200) 
		            {
		                // display the respond data as a string.
		                document.getElementById("output").innerHTML = "";
						document.getElementById("output").innerHTML = this.responseText; 
			        }
		        };
		        var link = "output.php" + "?input=" + input;
		        // prepare and send GET request to the server
		        xhttp.open("GET", link , true);
		        xhttp.send();
	    	}
	    }

	    function sendLocation()
	    {   
	        var inputID = document.getElementById("inputID").value;

	        if(inputID != ""){
	            // Create a request obje ct.
	            xhttp = new XMLHttpRequest();
	            // defines a fuction to be called when the readyState property changes.
	            xhttp.onreadystatechange = function() 
	            {
	                // when readyState is 4 and status is 200, the response is ready.
	                if (this.readyState == 4 && this.status == 200) 
	                {
	                    // display the respond data as a string.
	                    document.getElementById("output2").innerHTML = "";
	                    document.getElementById("output2").innerHTML = this.responseText; 
	                }
	            };
	            var link = "sendLocation.php" + "?input=" + inputID;
	            // prepare and send GET request to the server
	            xhttp.open("GET", link , true);
	            xhttp.send();
	        }
	    }

	   	function sendCode()
	    {   
	        var inputCode = document.getElementById("inputCode").value;

	        if(inputCode != ""){
	            // Create a request obje ct.
	            xhttp = new XMLHttpRequest();
	            // defines a fuction to be called when the readyState property changes.
	            xhttp.onreadystatechange = function() 
	            {
	                // when readyState is 4 and status is 200, the response is ready.
	                if (this.readyState == 4 && this.status == 200) 
	                {
	                    // display the respond data as a string.
	                    console.log(this.responseText);
	                    document.getElementById("outputFlag").innerHTML = "";
	                    document.getElementById("outputFlag").innerHTML = this.responseText; 
	                }
	            };
	            var link = "sendFlag.php" + "	?input=" + inputCode;
	            // prepare and send GET request to the server
	            xhttp.open("GET", link , true);
	            xhttp.send();
	        }
	    }

	    var modal = document.getElementById("redeemModal");

		var span = document.getElementsByClassName("close")[0];

		function test() {
		  modal.style.display = "block";
		}

		span.onclick = function() {
		  modal.style.display = "none";
		}

		window.onclick = function(event) {
		  if (event.target == modal) {
		    modal.style.display = "none";
		  }
		}
</script>