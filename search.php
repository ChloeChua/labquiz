<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
</head>
<body>
    <h1>Search Result</h1>
    
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the search term from the form and sanitize it
        $searchTerm = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);

        // Validate the search term (you may add more validation as needed)
        if (empty($searchTerm)) {
            echo "<p>Invalid search term. Please try again.</p>";
        } else {
            // Define the predefined search term (change this to your desired value)
            $predefinedTerm = "example";

            // Check if the search term matches the predefined term
            if (strtolower($searchTerm) === strtolower($predefinedTerm)) {
                echo "<p>Search successful! The term '$searchTerm' was found.</p>";
            } else {
                echo "<p>Search failed. Please try again.</p>";
            }
        }
    } else {
        // If the form is not submitted, display a message
        echo "<p>No search term entered. Please use the search form.</p>";
    }
    ?>

    <p><a href="index.php">Back to Search Form</a></p>
</body>
</html>
