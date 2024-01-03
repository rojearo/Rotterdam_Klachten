<?php
require "dbConnect.php";

// Adonaï Baraketse

class  complimenten
{
    private $id;
    private $Soort;
    private $Beschrijving;

    function __construct($Soort =NULL, $Beschrijving =NULL)
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
            $sql = $conn->prepare("insert into complimenten (Soort, Beschrijving) values (:Soort, :Beschrijving)");
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

        $sql = $conn->prepare("update complimenten set  Soort=:Soort, Beschrijving=:Beschrijving where id=:id");

        $sql->bindParam("id", $id);
        $sql->bindParam("Soort", $Soort);
        $sql->bindParam("Beschrijving", $Beschrijving);
        $sql->execute();
    }

    public function read()
    {
        global $conn;
        $sql = $conn->prepare("SELECT * from complimenten");
        $sql->execute();
        foreach ($sql as $complimenten) {
            echo $complimenten ["id"] . "-";
            $this->set_Soort($complimenten["Soort"]);
            echo $complimenten["Soort"] . "-";
            $this->set_Beschrijving($complimenten["Beschrijving"]);
            echo $complimenten["Beschrijving"] . "<br>";
        }
    }

    public function search($id)
    {
        global $conn;
        $sql = $conn->prepare("select * from complimenten where id=:id");
        $sql->execute([":id" => $id]);
        foreach ($sql as $complimenten) {
            echo $complimenten["id"] . "";
            echo $this->Soort = $complimenten["Soort"] . "";
            echo $this->Beschrijving = $complimenten["Beschrijving"] . "";
        }
    }

    public function delete($id)
    {
        global $conn;
        $sql = $conn->prepare("delete from complimenten where id =:id");
        $sql->bindParam("id", $id);
        $sql->execute();
    }
}