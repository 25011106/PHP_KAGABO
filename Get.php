<?php
  // Check if password is passed through GET method
  if (isset($_GET['password'])) {
    $password = $_GET['password'];  // Get password from URL
  } else {
    $password = "";  // Default value if no password is entered
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password GET Example</title>
</head>
<body>

  <h1>Enter Your Password</h1>

  <!-- Simple form to send password via GET method -->
  <form method="GET">
    <label for="password">Password:</label>
    <input type="text" id="password" name="password">
    <button type="submit">Submit</button>
  </form>

  <?php
    // Display the password if it's entered
    if ($password) {
      echo "<h2>You entered the password: $password</h2>";
    }
  ?>

</body>
</html>
