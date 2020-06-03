<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP OOP</title>
  </head>
  <body>
    <?php
    // Provare a immaginare una classe come quella vista a lezione, definendo
    // le variabili d'ambiente per disegnare un ipotetico prodotto di magazzino;
    // Definire anche costruttore completo (tutti le variabili che avete
    // creato) + printMe per fare il log, nell'ottica di quanto visto questa
    // mattina a lezione

      class Prodotto {
        public $peso;
        public $fornitore;
        public $settore;

        public function __construct($peso, $fornitore, $settore) {
          $this -> peso = $peso;
          $this -> fornitore = $fornitore;
          $this -> settore = $settore;
        }

        public function printMe() {
          echo "Info Prodotto<br>"
              . "Peso: " . $this -> peso . " kg<br>"
              . "Fornitore: " . $this -> fornitore . "<br>"
              . "Settore: " . $this -> settore . "<br><br>";
        }
      }

      $prod1 = new Prodotto(10, 'Parmalat', 'Latticini');
      $prod1 -> printMe();

      $prod2 = new Prodotto(25, 'Barilla', 'Pasta');
      $prod2 -> printMe();

      $prod3 = new Prodotto(50, 'Beretta', 'Salumi');
      $prod3 -> printMe();

      ?>
  </body>
</html>
