 <?php
/*
Hostfree:
$servername = "mysql.hostfree.nl";
$username = "u931717183_jack";
$password = "Spratman01";
$dbname = "u931917183_db";
*/

//Create connection
//$conn = mysqli_connect('mysql.hostfree.nl', 'u931917183_jack', 'Spratman01', 'u931917183_db');



/*
Localhost Notebook:
$servername = "localhost";
$username = "tacocat";
$password = "Spratman01";
$dbname = "sitelink_db";
*/

//Create connection
//$conn = mysqli_connect('localhost', 'tacocat', 'Spratman01', 'sitelink_db');



/*
Localhost Desktop:
$servername = "localhost";
$username = "root";
$password = "Coupeville_1";
$dbname = "sitelink_db";
*/

//Create connection
//$conn = mysqli_connect('localhost', 'root', 'Coupeville_1', 'sitelink_db');



/*
CMShost:
$servername = "sql205.cmshost.nl";
$username = "cmsho_18646493";
$password = "Spratman01";
$dbname = "cmsho_18646493_sitelink";
*/

//Create connection
$conn = mysqli_connect('sql205.cmshost.nl', 'cmsho_18646493', 'Spratman01', 'cmsho_18646493_sitelink');

//Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
