<?php
    $is_float = filter_var("esto no es un float", FILTER_VALIDATE_FLOAT);
    var_dump($is_float); 
    echo "<br>";
    $is_float = filter_var("674651.1502", FILTER_VALIDATE_FLOAT);
    var_dump($is_float);

    echo "<br>";
    $is_int = filter_var("esto no es un numero", FILTER_VALIDATE_INT);
    var_dump($is_int);
    echo "<br>";
    $is_int = filter_var("674651", FILTER_VALIDATE_INT);
    var_dump($is_int);

    echo "<br>";
    $is_ip = filter_var("0.0.0", FILTER_VALIDATE_IP);
    var_dump($is_ip);
    echo "<br>";
    $is_ip = filter_var("255.255.255.255", FILTER_VALIDATE_IP);
    var_dump($is_ip);

    echo "<br>";
    $is_url = filter_var("platzi.com", FILTER_VALIDATE_URL);
    var_dump($is_url);
    echo "<br>";
    $is_url = filter_var("https://platzi.com/home", FILTER_VALIDATE_URL);
    var_dump($is_url);

    echo "<br>";
    $is_email = filter_var("esto no es un email", FILTER_VALIDATE_EMAIL);
    var_dump($is_email);
    echo "<br>";
    $is_email = filter_var("cieloco99@gmail.com", FILTER_VALIDATE_EMAIL);
    var_dump($is_email);

?>