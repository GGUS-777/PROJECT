<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = $_FILES['fileToUpload'];
    $text = $_POST['textContent'];

    if ($file['error'] === 0) {
        $filename = $file['name'];
        $destination = 'uploads/' . $filename;
        move_uploaded_file($file['tmp_name'], $destination);

        $stmt = $conn->prepare("INSERT INTO files (filename, textContent) VALUES (?, ?)");
        $stmt->bind_param("ss", $filename, $text);
        $stmt->execute();
        $stmt->close();
    }

    header("Location: index.php");
}
?>
