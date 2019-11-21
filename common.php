<?php
include_once('settings.php');
$db_charset = "utf8";

$db_options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
        
// Create a database connection string using the above
$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$db_charset";

// Try and estabilish a database connection handle $dbh
try {
    $dbh = new PDO($dsn, $db_username, $db_password, $db_options);
}
catch (PDOException $e) {
    print "Error creating a connection: " . $e->getMessage() . "<br/>";
    die();
}

// End of common.php
