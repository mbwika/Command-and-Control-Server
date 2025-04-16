<?php
include_once 'client_login.php';
class DB_Functions {

    private $db;

    //put your code here
    // constructor
    function __construct() {
        include_once 'db.php';
        // connecting to database
        $this->db = new Database();
        $this->db->getDbConnection();
    }

    // destructor
    function __destruct() {
        
    }
    
     /**
     * Getting device data
     */
    
    public function getPhoneInfo() {
        $imei = $_SESSION['password'];
        $link = new mysqli("127.0.0.1", "root", "", "backup_db");

	$sql = "SELECT * FROM device_info WHERE device_id = '$imei' ";
        $data = mysqli_query($link, $sql);
		
        return $data;
    }

}
