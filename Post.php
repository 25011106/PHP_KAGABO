<?php
  // Check if the form was submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get password from POST method
    $password = $_POST['password'];
  } else {
    $password = "";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password POST Example</title>
</head>
<body>

  <h1>Enter Your Password</h1>

  <!-- Form using POST method -->
  <form method="POST" action="post.php">
    <label for="password">Password:</label>
    <input type="text" id="password" name="password" required>
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
