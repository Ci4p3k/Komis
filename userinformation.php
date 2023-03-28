<html>
    <head>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div class="userinformation">
    <?php

$connection = mysqli_connect("localhost","root",);

mysqli_select_db($connection,"form");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user','$email','$message') ";

mysqli_query($connection,$query);


echo "Wiadomość została wysłana do naszej bazy danych, wkrótce się do Ciebie odezwiemy $user";



?>
</div>
    </body>
</html>

