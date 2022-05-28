<?php 

# server name
$sName = "sql111.epizy.com";
# user name
$uName = "epiz_31810470";
# password
$pass = "WjHN67b5Gx1";

# database name
$db_name = "epiz_31810470_npchat";

#creating database connection
try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}
