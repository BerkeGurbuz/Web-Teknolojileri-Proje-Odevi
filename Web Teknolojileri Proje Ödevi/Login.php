<?php
$valid_credentials = array(
    "g231210390@sakarya.edu.tr" => "g231210390",
    
);

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($valid_credentials[$email]) == $email && $valid_credentials[$email] == $password) {
    echo "<div class='welcome-message background-div'> HOŞGELDİNİZ! " . $password . "</div>";
    echo "<script type='text/javascript'>
            setTimeout(function(){
                window.location.href = 'login.html';
            }, 10000);
          </script>";
} else {
    echo "<div class='error-message background-div'>KULLANICI ADI VEYA ŞİFRE HATALI!</div>";
    echo "<script type='text/javascript'>
            setTimeout(function(){
                window.location.href = '../login.html';
            }, 5000);
          </script>";
}
?>