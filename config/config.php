
<?Php
$dbhost_name = "localhost";
$database = "backup_db";// database name
$username = "root"; // user name
$password = ""; // 

//////// Do not Edit below /////////
try {
$dbo = new PDO("mysql:host=$dbhost_name;dbname=".$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
