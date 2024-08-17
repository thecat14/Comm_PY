
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = htmlspecialchars($_POST['message']);
    echo "<p>Message reçu : " . $message . "</p>";
} else {
    echo "<p>Aucun message reçu.</p>";
}
?>
