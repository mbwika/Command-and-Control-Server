
<!-- db.php -->
    <?php
        // Database constants
        define('DB_HOST', '127.0.0.1');
        define('DB_USER', 'root'); 
        define('DB_PASSWORD', ''); 
        define('DB_DATABASE', 'backup_db'); 

    class Database {
        function getDbConnection() {
            //Connecting to the database
            $link = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
            //Checking whether connection was successful
            if ($link->connect_error) {
                die("Connection failed: " . $link->connect_error);
            }
            return $link;
        }}

    ?>

