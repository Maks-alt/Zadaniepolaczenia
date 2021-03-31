    <?php

    $mysql_host = 'localhost';
    $port = '3306';
    $username = 'root';
    $password = '';
    $database = 'maksymilianrembiasz';

    try{
        $pdo = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database . ';port=' . $port . ";charset=utf8", $username, $password );
        echo('Połączono z bazą pomyślnie');
    }catch(PDOException $e){
        echo('Błąd połączenia z bazą danych');
        die();
    }
    ?>
