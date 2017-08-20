<?php
//Making a connection to database
    $conn = mysqli_connect('localhost', 'root',"");
//checking if the connection was successful and if not, end the connection
    if(!$conn){
        die('Error connecting to database'.mysql_error());
    }

//select a database to use
    $db_select = mysqli_select_db($conn,"hng_intern");

//Query the database, internship table to retrieve all the records
    $result = mysqli_query($conn, "select * from internship_program");
//Checking if the records were found
if($result){
    //Looping through the records to show on the page
    echo '<table><tr><th>S/N</th><th>Name</th><th>Programme type</th><th>Institution</th></tr>';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>'.$row['ID'].'</td>';
        echo  '<td>'.$row['Name'].'</td>';
        echo '<td>'.$row['Programme type'].'</td>';
        echo '<td>'.$row['Institution'].'</td></tr>';
    }
        echo '</table>';
}

?>

	<head>
		<title>hng internship</title>
	</head>

	<body>
		<div id="banner">
		</div>
		<div>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">HNG News</a></li>
				<li><a href="">Internship</a></li>
			</ul>
		</div>

		<section>
			<article>
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</article>
		</section>
	</body>
<?>
