<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Result</title>
</head>
<body>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Decrypt the input message (implement your decryption logic here)
    $decryptionInput = $_POST["decryptionInput"];
    
    // Define the expected message (update with your expected message)
    $expectedMessage = "United States Japan United Kingdom France Italy";

    // Check if the decrypted input matches the expected message
    if ($decryptionInput === $expectedMessage) {
        // Decryption successful, generate the "Next Layer" button
        echo '<a id="nextLayerLink" href="last_layer.php">
                  <button>Next Layer</button>
              </a>';
    } else {
        // Incorrect decryption, display an error message
        echo "<p style='color: red;'>Incorrect decryption. Try again.</p>";
    }
}
?>
</body>
</html>
