<?php
require_once('../../../database.php');
require_once('../SiteSeo.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Sanitize and validate the ID if needed
    // Example: $id = filter_var($id, FILTER_VALIDATE_INT);

    $siteSeo = new SiteSeo($conn);
    $delete = $siteSeo->deleteById($id);

    if ($delete) {
        echo "success"; // Return a success response
    } else {
        echo "error"; // Return an error response
    }
}
?>
