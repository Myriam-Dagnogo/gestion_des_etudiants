<?php
try {
    $conn = new PDO ("mysql: host=localhost; dbname=enregistrement;", "root","");

} catch (Exception  $e) {
    die ("Error:" .$e->getMessage());
}
?>