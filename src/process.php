<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    $errors = [];

    if (empty($firstname)) {
        $errors[] = "Du måste ange ett förnamn";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Du måste ange en korrekt e-post";
    }

    if (empty($message)) {
        $errors[] = "Du måste ange ett meddelande";
    }

    if (empty($errors)) {
        //Här kan vi posta till databas eller nåt...
        $success_message = "Tack för ditt meddelande, " . $firstname . "!";
        header("Location: index.php?message=" . urlencode($success_message));
    } else {
        $error_message = "Fel uppstod: " . implode(", ", $errors);
        header("Location: index.php?message=" . urlencode($error_message));
    }



    echo $firstname;
}
