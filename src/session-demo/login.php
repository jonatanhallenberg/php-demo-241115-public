<?php

session_start();

if (isset($_SESSION["username"])) {
    header("Location: index.php");
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $correct_username = "admin";
    $correct_password = "pass123";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $correct_username && $password == $correct_password) {
        $_SESSION["username"] = $username;
        header('Location: index.php');
    }
}

$page_title = "Logga in";
include "includes/header.php";

?>

<main class="container p-4">
    <div class="card mx-auto" style="max-width: 400px;">
        <div class="card-header">
            <h3 class="text-center mb-0">Logga in</h3>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Användarnamn</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Lösenord</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Logga in</button>
            </form>
        </div>
    </div>
</main>

<?php
include "includes/footer.php";
