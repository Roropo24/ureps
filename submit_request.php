<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if itemName field is set and not empty
    if (isset($_POST["itemName"]) && !empty($_POST["itemName"])) {
        // Sanitize input data to prevent SQL injection or other attacks
        $itemName = htmlspecialchars($_POST["itemName"]);

        // Here you can process the submitted data further, such as saving it to a database or sending it via email
        // For demonstration purposes, let's just echo the submitted item name
        echo "Item Name: " . $itemName;
    } else {
        // Handle if itemName field is empty
        echo "Please enter the name of the item.";
    }
} else {
    // Handle if form is not submitted
    echo "Form submission failed.";
}
?>
