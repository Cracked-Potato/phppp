<?php
// Define the file path
$filename = 'MMessage.txt';


$fileContent = '';
$fileLines = [];

if (file_exists($filename)) {
   
    $fileContent = file_get_contents($filename);

    $fileLines = file($filename);
} else {
    
    $initialContent = "I am paul! \nI am Lorenz! \nI am Gab\nI am Jhercy!\nI am Adi!";
    file_put_contents($filename, $initialContent);
    $fileContent = $initialContent;
}


$newContent = "\n The Group 11!!!!!!!";
file_put_contents($filename, $newContent, FILE_APPEND);


$fileContent = file_get_contents($filename);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Operations in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: skyblue;
            margin: 0;
            padding: 0;
            color: darkgreen;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: darkgreen;
        }

        .file-content, .file-lines {
            margin-top: 20px;
            padding: 10px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            white-space: pre-wrap;
        }

        .file-lines li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>File Operations in PHP</h1>

    <h2>Mga KOnteksto sa Payls</h2>
    <div class="file-content">
        <?= nl2br(htmlspecialchars($fileContent)); ?>
    </div>

    <h2>mga bilang sa arrays:</h2>
    <ul class="file-lines">
        <?php foreach ($fileLines as $lineNumber => $line): ?>
            <li>Line <?= $lineNumber + 1; ?>: <?= htmlspecialchars($line); ?></li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>
