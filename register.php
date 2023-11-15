<?php

require_once "connect/dbConnectie.php";

$Naam = $wachtwoord = $bevestigWachtwoord = "";

$Naam_Err = $wachtwoord_Err = $bevestigWachtwoord_Err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["Naam"])) {

        $usermame_Err = "Vul uw naam in";

    } elseif (!preg_match('/^[a-zA-Z ]+$/', trim($_POST["Naam"]))) {

        $usermame_Err = "Vul alleen letters en spaties in";

    } else {

        $sql = "SELECT id FROM gebruiker WHERE Naam = ?";

        if ($stmt = mysqli->prepare($sql)) {

            $stmt->bind_param("s", $param_Naam);

            $param_Naam = trim($_POST["Naam"]);

            if ($stmt->execute()) {

                $stmt->store_result();

                if ($stmt->num_rows == 1) {

                    $Naam_Err = "Deze gebruiker bestaat al";

                } else {

                    $Naam = trim($_POST["Naam"]);
                }
            } else {
            echo "oops! Something went wrong. Please try again later.";
        }
        $stmt->close();
        }
    }
    if(empty(trim($_POST["Wachtwoord"]))){

        $wachtwoord_Err = "Vul uw wachtwoord in";

    }elseif (strlen(trim($_POST["Wachtwoord"])) < 6) {

        $wachtwoord_Err = "Wachtwoord moet minimaal 6 karakters lang zijn";

    }else{

        $wachtwoord = trim($_POST["Wachtwoord"]);

    }

    if(empty(trim($_POST["BevestigWachtwoord"]))){

        $confirmpassword_Err = "Vul uw bevestig wachtwoord in";

    } else{

        $bevestigWachtwoord = trim($_POST["BevestigWachtwoord"]);

        if (empty($password_Err) && ($wachtwoord!= $bevestigWachtwoord)){

            $confirmpassword_Err = "Wachtwoorden komen niet overeen";
        }

    }

    if (empty($usermame_Err) && empty($wachtwoord_Err) && empty($bevestigWachtwoord_Err)) {

        $sql = "INSERT INTO gebruiker (Naam, Wachtwoord) VALUES (?,?)";

        if ($stmt = mysqli->prepare($sql)) {

            $stmt->bind_param("ss", $param_Naam, $param_Wachtwoord);

            $param_Naam = $Naam;

            $param_Wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);
        }

        if ($stmt->execute()) {

            header("location:../index.php?success=1");

        } else {

            echo "Something went wrong. Please try again later.";

        }

        $stmt->close();
    }
}