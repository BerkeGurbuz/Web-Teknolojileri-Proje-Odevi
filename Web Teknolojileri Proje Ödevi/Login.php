<?php
// Kullanıcı bilgilerini burada tanımlayın (Örnek)
$valid_username = 'g231210390@sakarya.edu.tr';
$valid_password = 'g231210390';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Kullanıcı bilgilerini kontrol edin
    if ($username === $valid_username && $password === $valid_password) {
        echo 'Hoş geldiniz, ' . htmlspecialchars($username) . '!';
    } else {
        echo 'Hatalı giriş';
    }
}
?>
