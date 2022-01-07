<?php 
    //baze podataka
    $jela = [
        1 => ["ID" => 1, "name" => "Suhomesnato", "price" => "990", "description" => "Svinjska pršuta, goveđa pečenica, kulen i goveđa pršuta", "type" => "Hladna predjela"],
        2 => ["ID" => 2, "name" => "", "price" => "", "description" => "", "type" => "Hladna predjela"],
        3 => ["ID" => 3, "name" => "", "price" => "", "description" => "", "type" => "Hladna predjela"],
        4 => ["ID" => 4, "name" => "", "price" => "", "description" => "", "type" => "Topla predjela"],
        5 => ["ID" => 5, "name" => "", "price" => "", "description" => "", "type" => "Topla predjela"],
        6 => ["ID" => 6, "name" => "", "price" => "", "description" => "", "type" => "Topla predjela"],
        7 => ["ID" => 7, "name" => "", "price" => "", "description" => "", "type" => "Topla predjela"],
        8 => ["ID" => 8, "name" => "", "price" => "", "description" => "", "type" => "Topla predjela"],
        9 => ["ID" => 9, "name" => "", "price" => "", "description" => "", "type" => "Jela po porudzbini"],
        10 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Jela po porudzbini"],
        11 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Jela po porudzbini"],
        12 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Jela po porudzbini"],
        13 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Jela po porudzbini"],
        14 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Jela po porudzbini"],
        15 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Jela po porudzbini"],
        16 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Jela po porudzbini"],
        17 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Risotto"],
        18 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Risotto"],
        19 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Pizza"],
        20 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Pizza"],
        21 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Pizza"],
        22 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Pizza"],
        23 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Ribe i morski plodovi"],
        24 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Burrito"],
        25 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Burrito"],
        26 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Pasta"],
        27 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Pasta"],
        28 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Pasta"],
        29 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Pasta"],
        30 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Obrok salate"],
        31 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Obrok salate"],
        32 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Obrok salate"],
        33 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Obrok salate"],
        34 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Burgeri"],
        35 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Burgeri"],
        36 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Burgeri"],
        37 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Burgeri"],
        38 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Burgeri"],
        39 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Healthy food"],
        40 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Slana palačinka"],
        41 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Homemade sweets"],
        42 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Homemade sweets"],
        43 => ["ID" => "", "name" => "", "price" => "", "description" => "", "type" => "Homemade sweets"],
    ];

    //klase
    class Jela {
        private $ID;
        private $name;
        private $price;
        private $description;
        private $type;

        function __construct(int $ID, string $name, int $price, string $description, string $type) {
            $this->ID = $ID;
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->type = $type;
        }

        function getID() { 
            return $this->ID;
        }

        function getName() {
            return $this->name;
        }

        function getPrice() {
            return $this->price;
        }

        function getDescription() {
            return $this->description;
        }

        function getType() {
            return $this->type;
        }
    }
?>