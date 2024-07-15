<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the decryption is correct (you can modify this part to validate the input)
    $decryptionInput = $_POST["decryptionInput"]; // Change this line based on your input field name
    $expectedDecryption = "Turning the Tables: Allies Fight Back and Win!"; // Replace with the correct decryption

    if ($decryptionInput === $expectedDecryption) {
        // If validation is successful, redirect to the next layer
        header("Location: next_layer.html");
        exit;
    } else {
        // If validation fails, you can handle it here, e.g., display an error message
        echo "Incorrect decryption. Try again.";
    }
}
?>