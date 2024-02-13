<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["id"];
    $name1 = $_POST["name1"];
    $name2 = $_POST["name2"];
    $name3 = $_POST["name3"];
    $name4 = $_POST["name4"];
    $name5 = $_POST["name5"];
    $name6 = $_POST["name6"];
    $name7 = $_POST["name7"];
    $name8 = $_POST["name8"];
    $name9 = $_POST["name9"];
    $name10 = $_POST["name10"];
    $name11 = $_POST["name11"];
    $name12 = $_POST["name12"];
    $name13 = $_POST["name13"];
    $name14 = $_POST["name14"];
    $name15 = $_POST["name15"];
    $name16 = $_POST["name16"];
    $name17 = $_POST["name17"];
    $name18 = $_POST["name18"];
    $name19 = $_POST["name19"];
    $name20 = $_POST["name20"];
    $name21 = $_POST["name21"];
    $name22 = $_POST["name22"];
    $name23 = $_POST["name23"];
    $name24 = $_POST["name24"];
    $name25 = $_POST["name25"];
    $name26 = $_POST["name26"];
    $name27 = $_POST["name27"];
    $name28 = $_POST["name28"];
    $name29 = $_POST["name29"];
    $name30 = $_POST["name30"];
    $name31 = $_POST["name31"];
    $name32 = $_POST["name32"];
    $name33 = $_POST["name33"];
    $name34 = $_POST["name34"];
    $name35 = $_POST["name35"];
    $name36 = $_POST["name36"];


    $faka1=0;
    for ($i = 1; $i <= 4; $i++) {
        $inputName = "name" . $i;
        if (isset($_POST[$inputName]) && !empty($_POST[$inputName])) {
            $faka1+= floatval($_POST[$inputName]);
        }
    }

    $faka2=0;
    for ($i = 5; $i <= 8; $i++) {
        $inputName = "name" . $i;
        if (isset($_POST[$inputName]) && !empty($_POST[$inputName])) {
            $faka2+= floatval($_POST[$inputName]);
        }
    }
    $faka3=0;
    for ($i = 9; $i <= 12; $i++) {
        $inputName = "name" . $i;
        if (isset($_POST[$inputName]) && !empty($_POST[$inputName])) {
            $faka3+= floatval($_POST[$inputName]);
        }
    }
    $faka4=0;
    for ($i = 13; $i <= 16; $i++) {
        $inputName = "name" . $i;
        if (isset($_POST[$inputName]) && !empty($_POST[$inputName])) {
            $faka4+= floatval($_POST[$inputName]);
        }
    }

    $faka5=0;
    for ($i = 17; $i <= 20; $i++) {
        $inputName = "name" . $i;
        if (isset($_POST[$inputName]) && !empty($_POST[$inputName])) {
            $faka5+= floatval($_POST[$inputName]);
        }
    }
    $faka6=0;
    for ($i = 21; $i <= 24; $i++) {
        $inputName = "name" . $i;
        if (isset($_POST[$inputName]) && !empty($_POST[$inputName])) {
            $faka6+= floatval($_POST[$inputName]);
        }
    }

    $faka7=0;
    for ($i = 25; $i <= 28; $i++) {
        $inputName = "name" . $i;
        if (isset($_POST[$inputName]) && !empty($_POST[$inputName])) {
            $faka7+= floatval($_POST[$inputName]);
        }
    }

    $faka8=0;
    for ($i = 29; $i <= 32; $i++) {
        $inputName = "name" . $i;
        if (isset($_POST[$inputName]) && !empty($_POST[$inputName])) {
            $faka8+= floatval($_POST[$inputName]);
        }
    }
    $faka9=0;
    for ($i = 32; $i <= 36; $i++) {
        $inputName = "name" . $i;
        if (isset($_POST[$inputName]) && !empty($_POST[$inputName])) {
            $faka9+= floatval($_POST[$inputName]);
        }
    }


    $rowTotal = 0;
    for ($i = 1; $i <= 36; $i++) {
        $inputName = "name" . $i;
        if (isset($_POST[$inputName]) && !empty($_POST[$inputName])) {
            $rowTotal += floatval($_POST[$inputName]);
        }
    }

    // Database connection
    $servername = "localhost";
    $username = "root"; // MySQL username
    $password = "";     // MySQL password
    $dbname = "marksheet";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into database
    $sql = "INSERT INTO StudentMarks (Id, a1, b1,c1,d1,Question1,a2,b2,c2,d2,Question2,a3,b3,c3,d3,Question3,a4, b4,c4,d4,Question4,a5,b5,c5,d5,Question5,a6,b6,c6,d6,Question6,a7, b7,c7,d7,Question7,a8,b8,c8,d8,Question8,a9,b9,c9,d9,Question9,Total) VALUES ('$name', '$name1', '$name2','$name3', '$name4','$faka1','$name5','$name6', '$name7', '$name8','$faka2','$name9', '$name10', '$name11','$name12','$faka3','$name13', '$name14','$name15','$name16','$faka4','$name17', '$name18','$name19', '$name20','$faka5','$name21','$name22', '$name23', '$name24','$faka6','$name25', '$name26', '$name27','$name28','$faka7','$name29', '$name30','$name31', '$name32','$faka8','$name33','$name34', '$name35', '$name36','$faka9',$rowTotal)";
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>