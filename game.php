<?php
  // Default values
  $color = "";
  $plural = "";
  $celebrity = "";
  $message = "";
  $pluralWord = "";

  // Function to handle pluralization
  function getPlural($word) {
    // Simple plural rule (just adds 's' for most words)
    if (substr($word, -1) == 'y') {
      // If it ends in 'y', replace 'y' with 'ies'
      return substr($word, 0, -1) . 'ies';
    } else {
      // Otherwise, just add 's'
      return $word . 's';
    }
  }

  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered values from the form
    $color = $_POST['color'];
    $plural = $_POST['plural'];
    $celebrity = $_POST['celebrity'];

    // Use the pluralization function
    if (!empty($plural)) {
      $pluralWord = getPlural($plural);
    }

    // Generate different outputs based on the input
    $message = "Here's what we've got based on your entries:<br><br>";

    // Check if color was provided and add it to the message
    if (!empty($color)) {
      $message .= "<b>Color:</b> The message is now in <span style='color: $color;'>$color</span>!<br><br>";
    }

    // Check if plural noun was provided and add it to the message
    if (!empty($plural)) {
      $message .= "<b>Plural Noun:</b> The word \"$plural\" is pluralized to: <b>$pluralWord</b>!<br><br>";
    }

    // Check if celebrity was provided and add it to the message
    if (!empty($celebrity)) {
      $message .= "<b>Celebrities:</b> You picked the amazing <b>$celebrity</b>, one of the most popular celebrities today!<br><br>";
    }

    // Dynamic ending message if all values are provided
    if (!empty($color) && !empty($plural) && !empty($celebrity)) {
      $message .= "Just imagine: $celebrity wearing $color $pluralWord on the red carpet!";
    } elseif (!empty($celebrity) && !empty($color)) {
      $message .= "Can you picture $celebrity wearing a stunning $color outfit?";
    } elseif (!empty($celebrity) && !empty($plural)) {
      $message .= "$celebrity is surrounded by a bunch of $pluralWord!";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game: Choose Your Values</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      color: #333;
      margin: 0;
      padding: 0;
      text-align: center;
    }

    header {
      background-color: #4CAF50;
      color: white;
      padding: 20px;
    }

    h1 {
      font-size: 2.5em;
      margin: 0;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 80%;
      max-width: 500px;
      margin: 30px auto;
    }

    input, button {
      font-size: 1.1em;
      padding: 10px;
      margin: 10px 0;
      width: 100%;
      border-radius: 5px;
      border: 1px solid #ccc;
      background-color: #f9f9f9;
    }

    button {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
      border: none;
    }

    button:hover {
      background-color: #45a049;
    }

    h2 {
      font-size: 1.8em;
      margin-top: 30px;
    }

    p {
      font-size: 1.2em;
      font-weight: bold;
      color: #4CAF50;
    }

    .output {
      font-size: 1.5em;
      margin-top: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <header>
    <h1>Game: Choose Your Values</h1>
  </header>

  <form method="POST" action="">
    <label for="color">Enter a Color:</label><br>
    <input type="text" id="color" name="color" value="<?php echo $color; ?>"><br><br>

    <label for="plural">Enter a Plural Noun:</label><br>
    <input type="text" id="plural" name="plural" value="<?php echo $plural; ?>"><br><br>

    <label for="celebrity">Enter a Celebrity:</label><br>
    <input type="text" id="celebrity" name="celebrity" value="<?php echo $celebrity; ?>"><br><br>

    <button type="submit">Generate Message</button>
  </form>

  <?php if ($message): ?>
    <h2>Generated Message:</h2>
    <div class="output"><?php echo $message; ?></div>
  <?php endif; ?>

</body>
</html>
