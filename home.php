<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<script src="https://raw.github.com/LeaVerou/prefixfree/gh-pages/prefixfree.min.js"></script>

<style>
	div #description{
    left: 50px;
    color: #F3F39E;
    font-size: 21px;
    transform: rotate(0deg);
    line-height: 40px;
	}
	div #desc{
		font-size:18px;
		color: white;
		line-height: 30px;
		
	}
	div #desc2{
		font-size:18px;
		color: white;
		line-height: 30px;
		
	}
	div #desc3{
		font-size:18px;
		color: white;
		line-height: 30px;
		
	}
	div #desc4{
		font-size:18px;
		color: white;
		line-height: 30px;
		
	}
	div #instruction{
    left: 50px;
    color: #F3F39E;
    font-size: 21px;
    transform: rotate(0deg);
    line-height: 40px;
	}
	div #instructDetail{
		font-size:18px;
		color: white;
		line-height: 30px;
		
	}
	div #in1{
		font-size:18px;
		color: white;
		line-height: 20px;
	}
	div #in2{
		font-size:18px;
		color: white;
		line-height: 30px;
		
	}
	div #in2cont{
		font-size:18px;
		color: white;
		line-height: 30px;
		
	}
	div #in3{
		font-size:18px;
		color: white;
		line-height: 30px;
		
	}
	div #in3cont{
		font-size:18px;
		color: white;
		line-height: 30px;
		
	}
	div #hint{
    left: 50px;
    color: #F3F39E;
    font-size: 20px;
    transform: rotate(0deg);
    line-height: 40px;
	}
	div #hintDetail{
		font-size:18px;
		color: white;
		line-height: 30px;		
	}
	div #hintDetail2{
		font-size:18px;
		color: white;
		line-height: 30px;		
	}
	div #hintDetail3{
		font-size:18px;
		color: white;
		line-height: 30px;		
	}
div#theatre {
    height: 1200px;
    width: 1580px;
    
    line-height: 120px;
    font-size: 40px;
    position: relative;
    overflow: hidden;
    background: black;
    color: rgba(255,255,255, 0.3);
  font-family: Arial;
}

div#theatre #curtain-left, div#theatre #curtain-right {
    content: '';
    position: absolute;
    z-index: 2;
    top: -30px;
    bottom: -30px;
    width: 61%;
    transform: rotate(0deg);
    background-color: #7c0e18;
    background-image: linear-gradient(90deg,  transparent 10%, rgba(255,255,255,.25) 50% ,transparent 65% );
    background-repeat: repeat;
   
    background-size: 80px;
}

#curtain-left { left: -10% }

#curtain-right { right: -10% }

div#theatre:hover #curtain-right, div#theatre:hover #curtain-left {
    width: 0;
    background-size: 1px;
    transition: all 3s ease;
    transform: rotate(15deg);
}

div#theatre:hover #curtain-right {
    transition: all 3s ease;
    transform: rotate(-15deg);
}

#theatre p {
    width: 50%;
    margin: 0.5em auto;
    position: relative;
    z-index: 3;
}

#theatre p:first-of-type:before {
    content: '';
    position: absolute;
    border-radius: 150px;
    height: 0.1px;
    width: 3px;
    top: 6.5em;
    left: 49%;
    transform: rotate(25deg) skew(15deg,5deg);
}

</style>
<body>
<div id="theatre">
	<em id="curtain-left"></em>
	<em id="curtain-right"></em>
	<p><center>TEAM 1</center></p>

	<div id = "description"> <p align="center">DESCRIPTION</p></div>
	<pre id = "desc">	
		The MUICT Book website is the book searching website which is specifically designed for MUICT exceptional student to search and buy college
	books. Students are also able to search for places where a specified book can be bought physically. In addition to online buying services, students 
	could use the promotion code to get a special promotion by redeeming a code given by an instructor. 
	</pre>
	<pre id = "desc" style="color: red;">
	WARNING: Please be noted that only specified students are able to use The MUICT Book website.</pre>

	<div id = "instruction"> <p align="center">INSTRUCTION</p></div>
	<pre id = "instructDetail">
	The instruction of how to use the MUICT Book website is provided below.</pre>

	<pre id= "in1">
	1. Student logins using studentID and password.
	2. Student searches for the desired book by input the word and clicks a search button. 
	   Then, the list of relevant books with information would appear. 
	3. After clicking a search button, the location searching would appear. Students could search for places where a 
	   specified book can be bought by using an ID of a book from the previous searching as an input of a search field.
	</pre>


	<div id = "hint"><p align="center">HINT</p></div>
	<pre id = "hintDetail">
		The MUICT Book website is implemented using HTML, PHP, and Javascript with a phpMyAdmin database and it is vulnerable for only to SQL injection. 
	The database consists of 4 tables which are book, booklocation, promotion, and user. The rough structure of each table is provided below.
		Your mission is to find special promotion code and redeem it to get book for free.

	book(id, title, author, genre, year)
	booklocation(bookID, location)
	promotion(id, description, code)
	user(studentID, password, firstName, lastName, section)</pre>

	<pre id ="hintDetail" style="color:green">
	PLEASE DON'T DROP OUR TABLES IN OUR DATABASE, THANK YOU :)</pre>
	<center><a href="index.php" style="font-size: 20px; color: yellow;">CLICK HERE FOR ACCESS VULNERABLE WEBSITE</a></center>
	
</div>



</body>
</html>
