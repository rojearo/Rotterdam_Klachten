<?php

error_reporting(E_ALL);

require_once "Klachten/dbConnect.php";

class User {

    private $dbase;

    public function __constructor() {

        $this->dbase = new Connect();
        $this->dbase = $this->dbase->dbConnect();

    }

    public function gebruiker($Naam, $Wachtwoord) {

        try {

            $st = $dbase->prepare("INSERT INTO users(Naam, Wachtwoord) VALUES (:Naam, :Wachtwoord,)");

            $st->bindparam(":Naam", $Naam);
            $st->bindparam(":password", $Wachtwoord);

            if($st->execute()) {

                echo 'Successful Toegevoegd';
            }

        } catch (PDOException $e) {

            echo 'Iets ging verkeerd :' . $e->getMessage;
        }

    }

}


?>