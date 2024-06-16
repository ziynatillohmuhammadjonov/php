<?php
if (isset($_GET['name1']) && isset($_GET['email1'])) {
    $name = htmlspecialchars($_GET['name1']);
    $email = htmlspecialchars($_GET['email1']);
    echo "Ismingiz: " . $name . "<br>";
    echo "Emailingiz: " . $email . "<br>";
} else {
    echo "Ismingizni kiriting<br>";
    echo "Emailingizni kiriting<br>";
}
