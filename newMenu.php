<?php
require_once 'connection.php';

try {
    $menu_name = $_POST['menu_name'];
    $menu_desc = $_POST['menu_desc'];
    

    $query = "INSERT INTO ref_menu (menu_name, menu_desc) VALUES (:menu_name, :menu_desc)";
    $stmt = $database->prepare($query);
    $stmt->bindParam(':menu_name', $menu_name);
    $stmt->bindParam(':menu_desc', $menu_desc);
    
    $stmt->execute();

    
    session_start();
    $_SESSION['success_message'] = "Data has been successfully inserted.";

    header("Location: Activity3.php");
    exit;

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>