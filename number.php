<?php
  // Initial value of the number
  $number = 10;

  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform the appropriate operation based on the button clicked
    if (isset($_POST['increment'])) {
      $number++;
    } elseif (isset($_POST['decrement'])) {
      $number--;
    } elseif (isset($_POST['setMax'])) {
      $number = max($number, 100); // Set to maximum between 10 and 100
    } elseif (isset($_POST['setMin'])) {
      $number = min($number, 0); // Set to minimum between 10 and 0
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Number Operations</title>
</head>
<body>
  <h1>Number Operations</h1>

  <form method="POST" action="">
    <label for="number">Current Number: <?php echo $number; ?></label><br><br>
    
    <button type="submit" name="increment">Increment (+1)</button>
    <button type="submit" name="decrement">Decrement (-1)</button><br><br>

    <button type="submit" name="setMax">Set Maximum (100)</button>
    <button type="submit" name="setMin">Set Minimum (0)</button>
  </form>

  <h2>Result:</h2>
  <p>Current value: <?php echo $number; ?></p>
  
</body>
</html>
