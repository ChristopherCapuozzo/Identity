<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <p class="titre-menu">Mes Variable en PHP</p>
    <div class="box">
        <?php

            /**
             * New Methode the Get JSON
             */

            // List the name
            $data_JSON = file_get_contents("nameAll.json"); 
            $decode = json_decode($data_JSON, true);
            $gender_typy;
            $age = rand(5, 75);

            // Query input
            $random = shuffle($decode);
            $get_input = $decode[$random];

            $find = array_search($get_input["name"], array_column($decode, "name"));

            echo 'Prénom : ', $get_input["name"];
            echo '<br>';
            echo 'Genre : ', $find == 1 ? $get_input["genre"] : "No genre";;
            echo '<br>';
            echo 'Age : ', $age;
            echo '<br>';
            echo 'Majeur : ', $age > 17 ? "Oui" : "Non";


            //Prénom
           /* $prenom_M = array("Pierre", "Nicolas", "Jean Pascal", "Loris", "Guiotin", "Hugo", "Sacha", "Christopher");
            $prenom_F = array("Elise", "Ambre", "Sacha", "Natacha", "Thyphany", "Zina", "Lousia", "Sophie");
            $prenomAll = array_merge($prenom_F,$prenom_M);
            $value_name_test = $prenomAll[shuffle($prenomAll)]; 
            $gender_boolean;

            //Âge
            $age = rand(5, 75);
             
            if (in_array($value_name_test, $prenom_M)) {
                $gender_boolean = "Homme";
            } elseif (in_array($value_name_test, $prenom_F)) {
                $gender_boolean = "Femme";
            } else {
                $gender_boolean = "Non genre";
            }

            $majeur = $age > 17 ? "Oui" : "Non"; 

            echo 'Prénom : ', $value_name_test;
            echo '<br>';
            echo 'Genre : ', $gender_boolean;
            echo '<br>';
            echo 'Age : ', $age;
            echo '<br>';
            echo 'Majeur : ', $majeur;*/
            ?>
    </div>
</body>
</html>