<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // chaine
    $mavariable="une chaine de caractere";

    // nombre
    $mavariable2=12;

    //tab
    $mavariable3=[12,43,34];
    var_dump($mavariable3);


    $tab=[34,45,24,45];

    echo $tab[0];
    echo $tab[1];
    echo $tab[2];
    echo $tab[3];

    var_dump($tab);

    for ($i=0;$i<count($tab);$i++) {
        echo $tab[$i]. " ";
    }
    echo "<hr>"; 

    foreach ( $tab as $t  ){

        echo $t." ";

    }

    echo "<hr>"; 

    foreach ( $tab as $key=>$value ){

        echo $key." ".$value."<br />";

    }

    //    // afficher les nombre de 0 à 100
    //    for ($i=0; $i< 100;$i++) {
    //        if ($i==5) {
    //            echo "je suis tunisien !";
    //        }
    //         // afficher du texte
    //         echo " ".$i;
    //    }
 
    ?>


</body>
</html>