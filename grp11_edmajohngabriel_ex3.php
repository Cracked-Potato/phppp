<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Operations</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    body {
      width: 100%;
      height: 100%;
      position: relative;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    .container {
      border-radius: 20px;
      width: 500px;
      height: auto;
      border: 1px solid darkblue;
      margin: 50px auto;
      padding: 20px;
      text-align: center;
      background-color: skyblue;
    
    }
    .output {
      border: 1px solid darkgreen;
      border-radius: 25px;
      margin: 10px 0;
      padding: 10px;
      background-color: lightgreen;
      border-radius: 5px;
    }

  </style>
</head>
<body>

<div class="container">
  <h1>File Operations In PHP</h1>
  <?php
    $filename = "sample.txt";

    if (file_exists($filename)) {
        echo "<div class='output'>Ang File $filename ay nag eexists.</div>";
    } else {
        echo "<div class='output'>Ang File $filename ay di pa exist.</div>";
    }

    $content = "This is a new file content.\nHi im paul! \n Hi im  lorenz! \nHi im Gab! \nHi im jhercy! \nHi im adi! \n";
    $bytesWritten = file_put_contents($filename, $content);
    if ($bytesWritten !== false) {
        echo "<div class='output'> made a whooping $bytesWritten bytes to $filename.</div>";
    } else {
        echo "<div class='output'>Failed to write to $filename.</div>";
    }

    $fileContent = file_get_contents($filename);
    echo "<div class='output'>Kontents ng $filename:</div>";
    echo "<pre>$fileContent</pre>";

    $fileLines = file($filename, FILE_IGNORE_NEW_LINES);
    echo "<div class='output'>mga konntents pag array:</div>";
    echo "<pre>";
    print_r($fileLines);
    echo "</pre>";
  ?>
</div>

</body>
</html>
