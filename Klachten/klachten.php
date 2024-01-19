<?php
require "dbConnect2.php";

// Adonaï Baraketse

class  klachten
{
    private $id;
    private $Soort;
    private $Beschrijving;

    private $latitude;

    private $longitude;

    function __construct($Soort =NULL, $Beschrijving =NULL, $latitude =NULL, $longitude =NULL)
    {
        $this->Soort = $Soort;
        $this->Beschrijving = $Beschrijving;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    function set_Soort($Soort)
    {
        return $this->Soort = $Soort;
    }

    function set_Beschrijving($Beschrijving)
    {
        return $this->Beschrijving = $Beschrijving;
    }

    function set_latitude($latitude)
    {
        return $this->latitude = $latitude;
    }

    function set_longitude($longitude)
    {
        return $this->longitude = $longitude;
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

    function get_latitude()
    {
        return $this->latitude;
    }

    function get_longitude()
    {
        return $this->longitude;
    }

    public function afdrukken()
    {
        echo $this->get_id();
        echo "<br/>";
        echo $this->get_Soort();
        echo "<br/>";
        echo $this->get_Beschrijving();
        echo "<br/>";
        echo $this->get_latitude();
        echo "<br/>";
        echo $this->get_longitude();
    }

    public function create()
    {
        global $conn;
        $Soort = $this->get_Soort();
        $Beschrijving = $this->get_Beschrijving();
        $latitude = $this->get_latitude();
        $longitude = $this->get_longitude();

            $sql = $conn->prepare("insert into klachten (Soort, Beschrijving, latitude, longitude) values (:Soort, :Beschrijving, :latitude, :longitude)");
            $sql->bindParam(":Soort", $Soort);
            $sql->bindParam(":Beschrijving", $Beschrijving);
            $sql->bindParam(":latitude" , $latitude);
            $sql->bindParam(":longitude" , $longitude);
            $sql->execute();
        echo "Uw klacht is verstuurd";
    }

    public function update($Soort)
    {
        global $conn;
        $Soort = $this->get_Soort();
        $Beschrijving = $this->get_Beschrijving();
        $latitude = $this->get_latitude();
        $longitude = $this->get_longitude();

        $sql = $conn->prepare("update klachten set  Soort=:Soort, Beschrijving=:Beschrijving, latitude=:latitude, longitude=:longitude where id=:id");

        $sql->bindParam("id", $id);
        $sql->bindParam("Soort", $Soort);
        $sql->bindParam("Beschrijving", $Beschrijving);
        $sql->bindParam("latitude" , $latitude);
        $sql->bindParam("longitude" , $longitude);
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
            echo $klachten["Beschrijving"] . "-";
            $this->set_latitude($klachten["latitude"]);
            echo $klachten["latitude"] . "-";
            $this->set_longitude($klachten["longitude"]);
            echo $klachten["longitude"] . "<br>";
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
            echo $this->latitude = $klachten["latitude"] . "";
            echo $this->longitude = $klachten["longitude"] . "";
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