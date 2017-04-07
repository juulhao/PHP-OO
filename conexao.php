<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=cms_rufiz', 'root', '');	
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}