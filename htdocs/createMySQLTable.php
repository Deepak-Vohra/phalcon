<?php

// Connect to database
$host = '127.0.0.1';
$username = 'root';
$password = 'mysql';
$db = 'mysql';
$port = 3306;

$mysqli = new mysqli($host, $username, $password, $db, $port);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    echo "<br/>";
}

// Output and set current default database
if ($result = $mysqli->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    echo ("Default database is " . $row[0]);
    echo "<br/>";
    if ($row[0] != 'mysql') {
        $selectdb = $mysqli->select_db("mysql");
        if (! $selectdb) {

            echo "Error in selecting database." . $mysqli->error;
            echo "<br/>";
        }
    }
    $result->close();
}

// Drop Table if it exists
$droptable = $mysqli->query("DROP TABLE IF EXISTS Catalog");
if (! $droptable) {

    echo "Error in dropping Table." . $mysqli->error;
    echo "<br/>";
}

// Create table
$sql = "CREATE TABLE catalog(catalogid VARCHAR(25) PRIMARY KEY, journal VARCHAR(25),
publisher VARCHAR(25), edition VARCHAR(25), title VARCHAR(45), author VARCHAR(25))";
$createtable = $mysqli->query($sql);
if (! $createtable) {

    echo "Error in creating Table." . $mysqli->error;
    echo "<br/>";
}

// Add data
$sql = "INSERT INTO Catalog VALUES('catalog1', 'Oracle Magazine',  'Oracle Publishing',
    'Nov-Dec 2004', 'Database Resource Manager', 'Kimberly Floss');";
$sql .= "INSERT INTO Catalog VALUES('catalog2', 'Oracle Magazine',   'Oracle Publishing', 
'Nov-Dec 2004', 'From ADF UIX to JSF', 'Jonas Jacobi');";
 
if (! $mysqli->multi_query($sql)) {
    echo "Multi query failed: (" . $mysqli->errno . ") " . $mysqli->error;
    echo "<br/>";
} else
    echo "Database Table Created.";

?>

