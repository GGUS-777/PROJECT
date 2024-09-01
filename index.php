<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir y Descargar Archivos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sube tus archivos y texto</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" accept=".pdf, .docx" required>
        <textarea name="textContent" rows="4" cols="50" placeholder="Ingresa tu párrafo de texto aquí"></textarea>
        <button type="submit">Subir</button>
    </form>
    <h2>Archivos Disponibles</h2>
    <ul>
        <?php
        include 'config.php';
        $result = $conn->query("SELECT * FROM files");
        while ($row = $result->fetch_assoc()) {
            echo '<li><a href="download.php?id=' . $row['id'] . '">' . htmlspecialchars($row['filename']) . '</a></li>';
        }
        ?>
    </ul>
</body>
</html>
