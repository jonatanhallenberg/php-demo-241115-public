<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
}

$username = $_SESSION["username"];

$page_title = "Skyddad sida";

include 'includes/header.php';
?>

<main class="container p-4">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-header">
            <h3>Välkommen <?php echo $username ?>!</h3>
        </div>
        <div class="card-body">
            <p>Detta är en skyddad sida som bara kan ses av inloggade användare.</p>
            <a href="logout.php" class="btn btn-danger">Logga ut</a>
        </div>
    </div>
</main>

<?php

include 'includes/footer.php';
