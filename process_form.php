<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $product = $_POST["urun"];
    $thickness = $_POST["kalinlik"];
    $size = $_POST["olcu"];
    $message = $_POST["message"];

    $to = "info@nevzateksi.com.tr"; // Replace with your email address
    $subject = "Fiyat Teklifi Talebi";

    $email_body = "İsim Soyisim: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Ürün: $product\n";
    $email_body .= "Kalınlık: $thickness\n";
    $email_body .= "Ölçü: $size\n";
    $email_body .= "Eklemek İstedikleriniz:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Form submitted successfully. We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
