<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Zpracování dat z formuláře
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Adresa pro příjem e-mailů
    $to = 'example@example.com'; // Zde nahraďte skutečnou e-mailovou adresou

    // Vytvoření hlaviček e-mailu
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Odeslání e-mailu
    if (mail($to, $subject, $message, $headers)) {
        // Pokud se e-mail úspěšně odeslal
        echo "OK";
    } else {
        // Pokud se e-mail neodeslal
        echo "Error";
    }
} else {
    // Pokud byl formulář odeslán jinou metodou než POST
    echo "Method not allowed";
}

?>
