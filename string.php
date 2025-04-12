<?php
  // Check if the form has been submitted
  $result = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input string from the form
    $inputString = $_POST['inputString'];

    // Check which button was clicked and convert accordingly
    if (isset($_POST['toUpperCase'])) {
      $result = strtoupper($inputString); // Convert to uppercase
    } elseif (isset($_POST['toLowerCase'])) {
      $result = strtolower($inputString); // Convert to lowercase
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Case Converter</title>
</head>
<body>
  <h1>String Case Converter</h1>
  
  <form method="POST" action="">
    <label for="inputString">Enter a String:</label><br>
    <input type="text" id="inputString" name="inputString" required><br><br>
    
    <button type="submit" name="toUpperCase">Convert to Uppercase</button>
    <button type="submit" name="toLowerCase">Convert to Lowercase</button>
  </form>

  <h2>Result:</h2>
  <p><?php echo $result; ?></p>
  
</body>
</html>
