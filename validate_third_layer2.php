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
// Validate the second decoded part
$expected_message = "Treaty of Versailles, signed on June 28, 1919, in Versailles, France";

if(isset($_POST['decoded_part2'])) {
    $user_input = trim($_POST['decoded_part2']);

    if($user_input === $expected_message) {
        // Valid input, provide a success message
        echo '<br>' ;
        echo '<br>' ;
        echo '<br>' ;
        echo '<br>' ;
        echo '<br>' ;
        echo '<div class="container">';
        echo '<p><h1>Congratulations! You have successfully completed the challenge.</h1></p>';
        echo '<p><h1>Well done! YOU HAVE CAPTURED THE FLAG</h1></p>';
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