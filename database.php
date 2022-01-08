<?php 
    //baze podataka
    $a_la_chef = "<strong style=\"color:#c49b63\">“a la Chef”</strong>";
    $jela = [
        1 => ["ID" => 1, "name" => "Suhomesnato", "price" => 990, "description" => "Svinjska pršuta, goveđa pečenica, kulen i goveđa pršuta", "type" => "Hladna predjela"],
        2 => ["ID" => 2, "name" => "Sirevi", "price" => 800, "description" => "Dimljeni kaonički, dimljena mozzarella, sir u vinu, hajdučki i gauda", "type" => "Hladna predjela"],
        3 => ["ID" => 3, "name" => "Daska The Hub", "price" => 1950, "description" => "Svinjska pršuta, goveđa pršuta, goveđa pečenica,
        dimljena mozzarella, gauda, sir u vinu, hajdučki,
        kulen, dimljeni kaonički i masline", "type" => "Hladna predjela"],
        4 => ["ID" => 4, "name" => "Brusketi caprese", "price" => 320, "description" => "Gorgonzola namaz, mozzarella, čeri paradajz i pesto", "type" => "Topla predjela"],
        5 => ["ID" => 5, "name" => "Brusketi masline", "price" => 320, "description" => "Gorgonzola namaz, crne i zelene masline i mirođija", "type" => "Topla predjela"],
        6 => ["ID" => 6, "name" => "Brusketi losos", "price" => 320, "description" => "Sirni namaz, dimljeni losos, čeri paradajz i mirođija", "type" => "Topla predjela"],
        7 => ["ID" => 7, "name" => "Brusketi vegan", "price" => 320, "description" => "Gvakamoli namaz, chia seme, kikiriki i čeri paradajz", "type" => "Topla predjela"],
        8 => ["ID" => 8, "name" => "Pohovani sir $a_la_chef", "price" => 350, "description" => "Pohovani sir sa cimetom, jabukom i sosom od višanja", "type" => "Topla predjela"],
        9 => ["ID" => 9, "name" => "Obsession (biftek)", "price" => 1500, "description" => "Biftek, krompir $a_la_chef, mlada boranija, povrće i gorgonzola", "type" => "Jela po porudzbini"],
        10 => ["ID" => 10, "name" => "The Hub (biftek)", "price" => 1500, "description" => "Biftek, mus od pršute, krompir $a_la_chef i povrće", "type" => "Jela po porudzbini"],
        11 => ["ID" => 11, "name" => "Lasagne", "price" => 790, "description" => "Mleveno juneće meso, pelat, gauda, beli, crni luk, biber, crveno vino i origano", "type" => "Jela po porudzbini"],
        12 => ["ID" => 12, "name" => "Piletina u belom sosu", "price" => 550, "description" => "Pileći file, dimljeni kaonički, gauda, pavlaka, parmezan i pomfrit", "type" => "Jela po porudzbini"],
        13 => ["ID" => 13, "name" => "Rebarca $a_la_chef", "price" => 790, "description" => "Marinirana rebra sa krompirom $a_la_chef, sos od pečuraka i onion rings", "type" => "Jela po porudzbini"],
        14 => ["ID" => 14, "name" => "Svinjski file $a_la_chef", "price" => 750, "description" => "Svinjski file sa sosom od pečuraka, krompir $a_la_chef i onion", "type" => "Jela po porudzbini"],
        15 => ["ID" => 15, "name" => "Selekcija kobasica", "price" => 750, "description" => "McCain krompir i kobasica", "type" => "Jela po porudzbini"],
        16 => ["ID" => 16, "name" => "Pileće fingersice", "price" => 530, "description" => "Pohovani pileći file, pomfrit, burger sos i parmezan", "type" => "Jela po porudzbini"],
        17 => ["ID" => 17, "name" => "Risotto sa piletinom", "price" => 550, "description" => "Piletina sa pirinčem, parmezanom, pavlakom i povrćem", "type" => "Risotto"],
        18 => ["ID" => 18, "name" => "Risotto sa povrćem", "price" => 520, "description" => "Pirinač sa povrćem, pavlakom i parmezanom", "type" => "Risotto"],
        19 => ["ID" => 19, "name" => "Margarita", "price" => 690, "description" => "Mozzarella, pelat i bosiljak", "type" => "Pizza"],
        20 => ["ID" => 20, "name" => "Capriciosa", "price" => 790, "description" => "Mozzarella, pelat, šunka i šampinjoni", "type" => "Pizza"],
        21 => ["ID" => 21, "name" => "Prosciutto", "price" => 890, "description" => "Mozzarella, pelat, goveđa pršuta i rukola", "type" => "Pizza"],
        22 => ["ID" => 22, "name" => "Porto Bane", "price" => 820, "description" => "Mozzarella, kozji sir, beli luk, rukola i bosiljak", "type" => "Pizza"],
        23 => ["ID" => 23, "name" => "Losos Mediteraneo", "price" => 1250, "description" => "File lososa na pireu sa sosom od gambora i povrća", "type" => "Ribe i morski plodovi"],
        24 => ["ID" => 24, "name" => "Meksica", "price" => 490, "description" => "Mleveno juneće meso, kukuruz šećerac, crveni pasulj, zeleni kupus, šargarepa, tortilja, pomfrit i chili", "type" => "Burrito"],
        25 => ["ID" => 25, "name" => "Chicken", "price" => 460, "description" => "Piletina, ljubičasti kupus, šargarepa, kukuruz šećerac, crveni pasulj, pomfrit i pavlaka", "type" => "Burrito"],
        26 => ["ID" => 26, "name" => "Beef tagliatelle", "price" => 690, "description" => "Tagliatelle, biftek, povrće, parmezan i čeri paradajz", "type" => "Pasta"],
        27 => ["ID" => 27, "name" => "Penne sa piletinom", "price" => 620, "description" => "Pene sa piletinom, goveđom pršutom, parmezanom i pavlakom", "type" => "Pasta"],
        28 => ["ID" => 28, "name" => "Bolognese", "price" => 590, "description" => "Fusili u bolognese sosu sa parmezanom i čeri paradajzom", "type" => "Pasta"],
        29 => ["ID" => 29, "name" => "Penne bianca", "price" => 690, "description" => "Pene u sosu od goveđe pršute, masline, pavlake i parmezana", "type" => "Pasta"],
        30 => ["ID" => 30, "name" => "Beef", "price" => 600, "description" => "Biftek, mix green, parmezan, čeri paradajz i burger sos", "type" => "Obrok salate"],
        31 => ["ID" => 31, "name" => "Chicken", "price" => 620, "description" => "Grilovani pileći file, mix green, slanina, sos, parmezan i čeri paradajz", "type" => "Obrok salate"],
        32 => ["ID" => 32, "name" => "Grčka", "price" => 490, "description" => "Crvena ili zelena paprika, krastavac, crveni luk, paradajz, masline, feta sir i origano", "type" => "Obrok salate"],
        33 => ["ID" => 33, "name" => "Vitaminska", "price" => 290, "description" => "Crveni i zeleni kupus, paprika, šargarepa, jabuka i lešnik", "type" => "Obrok salate"],
        34 => ["ID" => 34, "name" => "Burger The Hub", "price" => 560, "description" => "Juneći burger, burger sos, čedar, zelena salata, luk, paradajz, pomfrit i pohovani sir", "type" => "Burgeri"],
        35 => ["ID" => 35, "name" => "Burger France Aioli", "price" => 490, "description" => "Juneći burger, France Aioli dressing, zelena salata, paradajz, crveni luk, čedar i pomfrit", "type" => "Burgeri"],
        36 => ["ID" => 36, "name" => "Burger Traf Aioli", "price" => 490, "description" => "Juneći burger, krema od tartufa, čeder, pomfrit, paradajz, luk i zelena salata", "type" => "Burgeri"],
        37 => ["ID" => 37, "name" => "Burger Sambal", "price" => 490, "description" => "Juneći burger, Sambal dressing, zelena salata, paradajz, crveni luk, čedar i pomfrit", "type" => "Burgeri"],
        38 => ["ID" => 38, "name" => "Chicken burger", "price" => 490, "description" => "Piletina, tost kačkavalj, zelena salata i pomfrit", "type" => "Burgeri"],
        39 => ["ID" => 39, "name" => "Salata $a_la_chef", "price" => 550, "description" => "Green mix, šargarepa, celer, jabuka, mozzarella, krastavac, čeri paradajz i sok od narandže", "type" => "Healthy food"],
        40 => ["ID" => 40, "name" => "The Hub Pancake", "price" => 360, "description" => "Šunka, gauda, marinirane pečurke, kisela pavlaka", "type" => "Slana palačinka"],
        41 => ["ID" => 41, "name" => "The Hub Obsession", "price" => 320, "description" => "Dobro poznat, klasičan ukus čokoladne torte sa specijalnim dodatkom naše Hub magije", "type" => "Homemade sweets"],
        42 => ["ID" => 42, "name" => "Choco Orange", "price" => 290, "description" => "Narandža, nutela, plazma, šlag", "type" => "Homemade sweets"],
        43 => ["ID" => 43, "name" => "Sweet Cherry", "price" => 290, "description" => "Višnja, nutela, plazma, šlag", "type" => "Homemade sweets"],
        44 => ["ID" => 44, "name" => "Integralni trouglići sa maslinama", "price" => 80, "description" => "", "type" => "Dodaci"],
        45 => ["ID" => 45, "name" => "Grilovano povrće", "price" => 220, "description" => "", "type" => "Dodaci"],
        46 => ["ID" => 46, "name" => "Onion rings", "price" => 280, "description" => "", "type" => "Dodaci"],
        47 => ["ID" => 47, "name" => "Krompir $a_la_chef", "price" => 220, "description" => "", "type" => "Dodaci"],
        48 => ["ID" => 48, "name" => "Pavlaka", "price" => 50, "description" => "", "type" => "Dodaci"],
        49 => ["ID" => 49, "name" => "Pomfrit", "price" => 180, "description" => "", "type" => "Dodaci"],
    ];
    $pica = [
        // 1 => ["ID" => , "name" => "", "price" => , "description" => "", "type" => ""],
        1 => ["ID" => 1, "name" => "Espresso", "price" => 140,  "type" => "Costa Coffee"],
        2 => ["ID" => 2, "name" => "Espresso dopio", "price" => 210 ,  "type" => "Costa Coffee"],
        3 => ["ID" => 3, "name" => "Espresso sa mlekom", "price" => 210,  "type" => "Costa Coffee"],
        4 => ["ID" => 4, "name" => "Machiatto", "price" => 150,  "type" => "Costa Coffee"],
        5 => ["ID" => 5, "name" => "Cappuccino", "price" => 170,  "type" => "Costa Coffee"],
        6 => ["ID" => 6, "name" => "Double Cappuccino", "price" => 240,  "type" => "Costa Coffee"],
        7 => ["ID" => 7, "name" => "Coffeelatte", "price" => 180,  "type" => "Costa Coffee"],
        8 => ["ID" => 8, "name" => "Bailey's coffee", "price" =>220 ,  "type" => "Costa Coffee"],
        9 => ["ID" => 9, "name" => "Coffeefredo", "price" => 190,  "type" => "Costa Coffee"],
        10 => ["ID" => 10, "name" => "Nescafe topli", "price" => 160,  "type" => "Nescafe"],
        11 => ["ID" => 11, "name" => "Nescafe hladni", "price" => 160,  "type" => "Nescafe"],
        12 => ["ID" => 12, "name" => "Bailey's nescafe", "price" => 220,  "type" => "Nescafe"],
        13 => ["ID" => 13, "name" => "Ice coffee", "price" => 220,  "type" => "Nescafe"],
        14 => ["ID" => 14, "name" => "Irish coffee", "price" => 240,  "type" => "Nescafe"],
        15 => ["ID" => 15, "name" => "Topla čokolada crna", "price" => 200,  "type" => "Topla čokolada"],
        16 => ["ID" => 16, "name" => "Topla čokolada bela", "price" => 200,  "type" => "Topla čokolada"],
        17 => ["ID" => 17, "name" => "Topla čokolada extra dark", "price" => 200,  "type" => "Topla čokolada"],
        18 => ["ID" => 18, "name" => "Topla čokolada sa rumom", "price" => 270,  "type" => "Topla čokolada"],
        19 => ["ID" => 19, "name" => "English Breakfast Tea", "price" => 130,  "type" => "Čajevi"],
        20 => ["ID" => 20, "name" => "Earl Grey", "price" => 130,  "type" => "Čajevi"],
        21 => ["ID" => 21, "name" => "Christmas Tea", "price" => 130,  "type" => "Čajevi"],
        22 => ["ID" => 22, "name" => "Blackberry", "price" => 130,  "type" => "Čajevi"],
        23 => ["ID" => 23, "name" => "China Sencha", "price" => 130,  "type" => "Čajevi"],
        24 => ["ID" => 24, "name" => "Green Apple", "price" => 130,  "type" => "Čajevi"],
        25 => ["ID" => 25, "name" => "Sweet Mama", "price" => 130,  "type" => "Čajevi"],
        26 => ["ID" => 26, "name" => "Jasmine", "price" => 130,  "type" => "Čajevi"],
        27 => ["ID" => 27, "name" => "Manglo Flip", "price" => 130,  "type" => "Čajevi"],
        28 => ["ID" => 28, "name" => "Fruit Garden", "price" => 130,  "type" => "Čajevi"],
        29 => ["ID" => 29, "name" => "Pina Colada", "price" => 130,  "type" => "Čajevi"],
        30 => ["ID" => 30, "name" => "Sweet Fruit", "price" => 130,  "type" => "Čajevi"],
        31 => ["ID" => 31, "name" => "Wild Orange", "price" => 130,  "type" => "Čajevi"],
        32 => ["ID" => 32, "name" => "Wild Cherry", "price" => 130,  "type" => "Čajevi"],
        33 => ["ID" => 33, "name" => "Chamomile", "price" => 130,  "type" => "Biljni čaj"],
        34 => ["ID" => 34, "name" => "Nana", "price" => 130,  "type" => "Biljni čaj"],
        35 => ["ID" => 35, "name" => "Coca cola", "price" => 170, "description" => "", "type" => "Gazirani sokovi"],
        36 => ["ID" => 36, "name" => "Coca cola Zero", "price" => 170, "description" => "", "type" => "Gazirani sokovi"],
        37 => ["ID" => 37, "name" => "Sprite", "price" => 170, "description" => "", "type" => "Gazirani sokovi"],
        38 => ["ID" => 38, "name" => "Fanta orange", "price" => 170, "description" => "", "type" => "Gazirani sokovi"],
        39 => ["ID" => 39, "name" => "Schweppes bitter lemon", "price" => 170, "description" => "", "type" => "Gazirani sokovi"],
        40 => ["ID" => 40, "name" => "Schweppes tonic water", "price" => 170, "description" => "", "type" => "Gazirani sokovi"],
        41 => ["ID" => 41, "name" => "Schweppes tangerine", "price" => 170, "description" => "", "type" => "Gazirani sokovi"],
        42 => ["ID" => 42, "name" => "Next narandža", "price" => 170, "type" => "Negazirani sokovi"],
        43 => ["ID" => 43, "name" => "Next jabuka", "price" => 170, "type" => "Negazirani sokovi"],
        44 => ["ID" => 44, "name" => "Next jagoda", "price" => 170, "type" => "Negazirani sokovi"],
        45 => ["ID" => 45, "name" => "Next breskva", "price" => 170, "type" => "Negazirani sokovi"],
        46 => ["ID" => 46, "name" => "Next višnja", "price" => 170, "type" => "Negazirani sokovi"],
        47 => ["ID" => 47, "name" => "Next šumsko voće", "price" => 170, "type" => "Negazirani sokovi"],
        48 => ["ID" => 48, "name" => "Fuze Tea breskva & hibiskus (stevia)", "price" => 170, "type" => "Negazirani sokovi"],
        49 => ["ID" => 49, "name" => "Erdinger 0.3l", "price" => 320, "type" => "Točena piva"],
        50 => ["ID" => 50, "name" => "Erdinger 0.5l", "price" => 390, "type" => "Točena piva"],
        51 => ["ID" => 51, "name" => "Carslberg 0.3l", "price" => 260, "type" => "Točena piva"],
        52 => ["ID" => 52, "name" => "Carslberg 0.5l", "price" => 320, "type" => "Točena piva"],
        53 => ["ID" => 53, "name" => "Budwieser svetlo 0.3l", "price" => 260, "type" => "Točena piva"],
        54 => ["ID" => 54, "name" => "Budwieser svetlo 0.5l", "price" => 320, "type" => "Točena piva"],
        55 => ["ID" => 55, "name" => "Budwieser tamno 0.3l", "price" => 240, "type" => "Točena piva"],
        56 => ["ID" => 56, "name" => "Budwieser tamno 0.5l", "price" => 290, "type" => "Točena piva"],
        57 => ["ID" => 57, "name" => "Kronenbourg 0.3l", "price" => 250, "type" => "Točena piva"],
        58 => ["ID" => 58, "name" => "Kronenbourg 0.5l", "price" => 300, "type" => "Točena piva"],


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

        function stampajJela (string $tip_jela) {
            if ($this->type == $tip_jela) {
                echo "<div class=\"pricing-entry d-flex ftco-animate\">";
                echo "<div class=\"desc pl-3\">";
                echo "<div class=\"d-flex text align-items-center\">";
                echo "<h3><span>" . $this->name . "</span></h3>";
                echo "<span class=\"price\">" . $this->price . " rsd</span>";
                echo "</div>";
                if ($this->description != "") {
                    echo "<div class=\"d-block\">";
                    echo "<p>- " . $this->description . "</p>";
                    echo "</div>";
                }
                echo "</div>";
                echo "</div>";
            }
        }
    }
    class Pica {
        private $ID;
        private $name;
        private $price;
        private $type;

        function __construct(int $ID, string $name, int $price, string $type) {
            $this->ID = $ID;
            $this->name = $name;
            $this->price = $price;
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

        function getType() {
            return $this->type;
        }
    }

    $array_jela = array();
    for ($i = 1; $i <= count($jela); $i++) {
        ${"item_jela_".$i} = new Jela ($i,$jela[$i]["name"],$jela[$i]["price"],$jela[$i]["description"],$jela[$i]["type"]);
        array_push($array_jela,${"item_jela_".$i});
    }

    $array_pica = array();
    for ($i = 1; $i <= count($pica); $i++) {
        ${"item_pica_".$i} = new Pica ($i,$pica[$i]["name"],$pica[$i]["price"],$pica[$i]["type"]);
        array_push($array_pica,${"item_pica_".$i});
    }
?>

