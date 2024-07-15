<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="last_layer_css.css">
    <title>CTF Challenge</title>
</head>
<body>
<?php
// Validate the first decoded part
$expected_message = "Dbokdi yp Fobcksvvoc, csqxon yx Texo 28, 1919, sx Fobcksvvoc, Pbkxmo";

if(isset($_POST['decoded_part1'])) {
    $user_input = trim($_POST['decoded_part1']);

    if($user_input === $expected_message) {
        // Valid input, provide a hint
        echo '<div class="container hint-container">';
        echo '<p>JUST THE LAST HIT </p>';


        // Display the additional message container
        echo '<div class="container message-container">';

        echo '<p>Dbokdi yp Fobcksvvoc, csqxon yx Texo 28, 1919, sx Fobcksvvoc, Pbkxmo</p>' ;
        echo '<br><br>' ;
        echo '<p>We said to you, "Nothing happens the way humans see things, just carry on in your journey" 😊.</p>';
        echo '<p>Just a gentle advice that the "CENTRAL POWER" would have liked us to give after that hostile defeat is:</p>';
        echo '<p>"Never underestimate your enemy; they might be ten times ahead of you in terms of planning and execution 😉."</p>';
        echo '<form action="validate_third_layer2.php" method="post">';
        echo '<label for="decoded_part2">Enter Second Decoded Part:</label>';
        echo '<input type="text" id="decoded_part2" name="decoded_part2" required>';
        echo '<button type="submit">Validate</button>';
        echo '</form>';
        echo '</div>';
    } else {
        // Invalid input
        echo '<div class="container">';
        echo '<p>Invalid input. Please try again.</p>';
        echo '</div>';
    }
} else {
    // Handle cases where form is not submitted
    header('Location: last_layer.php');
    exit();
}
?>
</body>
</html>
