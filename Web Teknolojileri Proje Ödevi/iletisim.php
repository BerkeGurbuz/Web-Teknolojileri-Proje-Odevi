<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = $_POST['ad'];
    $email = $_POST['email'];
    $mesaj = $_POST['mesaj'];

    // Burada mesajı işleyebilir veya başka bir işlem yapabilirsiniz
    // Örneğin, bir dosyaya yazdırabilir veya e-posta olarak gönderebilirsiniz

    // Örnek olarak, mesajı ekrana yazdıralım
    echo "<p>İsim: $ad</p>";
    echo "<p>E-posta: $email</p>";
    echo "<p>Mesaj: $mesaj</p>";
}
?>