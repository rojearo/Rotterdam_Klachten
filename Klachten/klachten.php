<?php
require "dbConnect.php";

// Adonaï Baraketse

class  klachten
{
    private $id;
    private $Soort;
    private $Beschrijving;

    function __construct($Soort, $Beschrijving)
    {
        $this->Soort = $Soort;
        $this->Beschrijving = $Beschrijving;
    }

    function set_Soort($Soort)
    {
        return $this->Soort = $Soort;
    }

    function set_Beschrijving($Beschrijving)
    {
        return $this->Beschrijving = $Beschrijving;
    }

    function get_id()
    {
        return $this->id;
    }

    function get_Soort()
    {
        return $this->Soort;
    }

    function get_Beschrijving()
    {
        return $this->Beschrijving;
    }

    public function afdrukken()
    {
        echo $this->get_id();
        echo "<br/>";
        echo $this->get_Soort();
        echo "<br/>";
        echo $this->get_Beschrijving();
    }

    public function create()
    {
        global $conn;
        $Soort = $this->get_Soort();
        $Beschrijving = $this->get_Beschrijving();
        var_dump($Beschrijving);
        try {
            $sql = $conn->prepare("insert into klachten (Soort, Beschrijving) values (:Soort, :Beschrijving)");
            $sql->bindParam(":Soort", $Soort);
            $sql->bindParam(":Beschrijving", $Beschrijving);
            $sql->execute();
        } catch (PDOException $error) {
            echo $error->getMessage();
        }

        echo "Uw klacht is verstuurd";
    }

    public function update($id)
    {
        global $conn;
        $Soort = $this->get_Soort();
        $Beschrijving = $this->get_Beschrijving();

        $sql = $conn->prepare("update klachten set  Soort=:Soort, Beschrijving=:Beschrijving where id=:id");

        $sql->bindParam("id", $id);
        $sql->bindParam("Soort", $Soort);
        $sql->bindParam("Beschrijving", $Beschrijving);
        $sql->execute();
    }

    public function read()
    {
        global $conn;
        $sql = $conn->prepare("SELECT * from klachten");
        $sql->execute();
        foreach ($sql as $klachten) {
            echo $klachten ["id"] . "-";
            $this->set_Soort($klachten["Soort"]);
            echo $klachten["Soort"] . "-";
            $this->set_Beschrijving($klachten["Beschrijving"]);
            echo $klachten["Beschrijving"] . "<br>";
        }
    }

    public function search($id)
    {
        global $conn;
        $sql = $conn->prepare("select * from klachten where id=:id");
        $sql->execute([":id" => $id]);
        foreach ($sql as $klachten) {
            echo $klachten["id"] . "";
            echo $this->Soort = $klachten["Soort"] . "";
            echo $this->Beschrijving = $klachten["Beschrijving"] . "";
        }
    }

    public function delete($id)
    {
        global $conn;
        $sql = $conn->prepare("DELETE FROM kLACHTEN where id =:id");
        $sql->bindParam("id", $id);
        $sql->execute();
    }
}