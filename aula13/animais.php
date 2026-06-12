<?php
        // chamei a class do animal
        require "Animal.php";
        $novo_animal = new Animal;



        // Vou criar um animal
        $novo_animal->nome = "Tamandua";
        $novo_animal->patas = 4;
        $novo_animal->habitat = "Floresta";
        $novo_animal->comida_favorita = "Formigas";

     echo "Nome: " . $novo_animal->nome. "<br>".

        "Patas: " . $novo_animal->patas. "<br>".
        "Habitat: " . $novo_animal->habitat. "<br>".
        "Comida favorita: " . $novo_animal->comida_favorita. "<br>";


        ////////////////////////////////////////////////////////////////////////

        // Vou criar um animal
        $novo_animal->nome = "Tubarao";
        $novo_animal->patas = 0;
        $novo_animal->habitat = "Oceano";
        $novo_animal->comida_favorita = "Qualquer coisa com carne";

     echo "Nome: " . $novo_animal->nome. "<br>".

        "Patas: " . $novo_animal->patas. "<br>".
        "Habitat: " . $novo_animal->habitat. "<br>".
        "Comida favorita: " . $novo_animal->comida_favorita. "<br>";

        /////////////////////////////////////////////////////////////////////

        // Vou criar um animal
        $novo_animal->nome = "cachorro";
        $novo_animal->patas = 4;
        $novo_animal->habitat = "minha casa";
        $novo_animal->comida_favorita = "racao";

     echo "Nome: " . $novo_animal->nome. "<br>".

        "Patas: " . $novo_animal->patas. "<br>".
        "Habitat: " . $novo_animal->habitat. "<br>".
        "Comida favorita: " . $novo_animal->comida_favorita. "<br>";
?>