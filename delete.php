<?php

include 'conn.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $ids = $_GET['id'];

    // Prepare the DELETE statement
    $stmt = $conn->prepare("DELETE FROM `status` WHERE id = ?");
    $stmt->bind_param("i", $ids);  // "i" means integer

    // Execute the query
    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid ID.";
}

?>
