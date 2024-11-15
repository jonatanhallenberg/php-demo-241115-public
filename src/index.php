<?php

if (isset($_GET["message"])) {
    $message = htmlspecialchars($_GET["message"]);
    echo $message;
}

?>

<form action="process.php" method="POST">

    Förnamn: <input type="text" name="firstname" /><br />
    E-post: <input type="email" name="email" /><br />
    Meddelande:
    <textarea name="message" rows="4"></textarea><br />

    <button type="submit">Skicka</button>

</form>