<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $name = 'Janusz';
    $_name1 = 'Janusz';
    $imię = 'Janusz';
    echo "$name";
    echo '$name';
    echo '<br>'.$name.'<hr>';
    echo '<br>',$name,'<hr>'; // to jest szybsze
    // typ integer
    $calkowita = 10;
    $hex = 0xA;
    $oct = 010;
    $bin = 0b1010;
    echo $bin,'<hr>';
    //skladnia heredoc
    $name = 'Kasia';
    $city = 'Poznań';
    $napis = <<< ETYKIETA
    Twoje imię: $name<br>
    Miasto: $city<hr>
ETYKIETA;
    echo $napis;
    echo <<< E
    pi papapa parapa<hr>
E;
    //skladnia nowdoc
        echo <<< 'E'
        Nowdoc<br>
        $napis
        Heredoc<hr>
E;
//nie mozna w nim uzywac zmiennych
    $city = "Gniezno";
    echo "Nazwa zmiennej: \$city, wartość: $city";
    echo 'Nazwa zmiennej: $city, wartość: ',$city;
     ?>
  </body>
</html>
