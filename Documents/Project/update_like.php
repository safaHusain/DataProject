<?php

// update_like.php

$db = new Connection();
$connection = $db->getConnection();

if (isset($_POST['article_id']) && isset($_POST['action'])) {
    $articleId = $_POST['article_id'];
    $action = $_POST['action'];

    // Validate and sanitize the input (e.g., using mysqli_real_escape_string)
    $articleId = mysqli_real_escape_string($connection, $articleId);
    $action = mysqli_real_escape_string($connection, $action);

    if ($action === 'like') {
        // Update the like count in the database
        $query = "UPDATE projectArticles SET likes = likes + 1 WHERE articleID = $articleId";
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo 'success';
        } else {
            echo 'error';
        }
    } else {
        echo 'Invalid action.';
    }
} else {
    echo 'Invalid request.';
}

// Close the database connection
mysqli_close($connection);
