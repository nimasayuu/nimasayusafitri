<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color: rgb(182, 209, 228);
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ucapan</title>
</head>
    <body>

    <h1 style="color:rgb(35, 45, 105);text-align:center;">SELAMAT DATANG!</h1>
    <h2 style="color:rgb(35, 45, 105);text-align:center;">
    Welcome <?php echo $_POST["fname"];
    ?> <?php echo $_POST["lname"];
    ?>!<br />
    Your Gender Is <?php echo $_POST["fav_language"];
    ?> <br />
    Your Nationality Is <?php echo $_POST["negara"];
    ?> <br />
    Your Language Spoken Is <?php echo $_POST["buatbox"];
    ?> <br />
    Your Biodata Is <?php echo $_POST["massage"];
    ?> <br /> </h2>
    <h3 style="color:rgb(179, 78, 78);text-align:center;">Terima kasih telah bergabung di Website kami. Media belajar kita bersama!</h3>
    
    </body>
</html>