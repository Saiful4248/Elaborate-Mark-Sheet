<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Sheet Result</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        h1{
            text-align: center;
        }
        
    </style>
</head>
<body>
    <h1>Noakhali Science And Technology University</h1>
    <h1>Elaborate Mark Sheet</h1>
    <table border="1">
            <tr>
                <th rowspan="2">Student Roll</th>
                <th colspan="4">1</th>
                <th colspan="4">2</th>
                <th colspan="4">3</th>
                <th colspan="4">4</th>
                <th colspan="4">5</th>
                <th colspan="4">6</th>
                <th colspan="4">7</th>
                <th colspan="4">8</th>
                <th colspan="4">9</th>
                <th rowspan="2">Totall Marks</th>
            </tr>
            <tr>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>               
            </tr>

        <?php
        // Database connection
        $servername = "localhost";
        $username = "root"; // MySQL username
        $password = "";     // MySQL password
        $dbname = "marksheet";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve data from database
        $sql = "SELECT * FROM StudentMarks";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo '<td rowspan="2">' . $row["Id"] . "</td>";
                echo "<td>" . $row["a1"] . "</td>";
                echo "<td>" . $row["b1"] . "</td>";
                echo "<td>" . $row["c1"] . "</td>";
                echo "<td>" . $row["d1"] . "</td>";

                echo "<td>" . $row["a2"] . "</td>";
                echo "<td>" . $row["b2"] . "</td>";
                echo "<td>" . $row["c2"] . "</td>";
                echo "<td>" . $row["d2"] . "</td>";

                echo "<td>" . $row["a3"] . "</td>";
                echo "<td>" . $row["b3"] . "</td>";
                echo "<td>" . $row["c3"] . "</td>";
                echo "<td>" . $row["d3"] . "</td>";

                echo "<td>" . $row["a4"] . "</td>";
                echo "<td>" . $row["b4"] . "</td>";
                echo "<td>" . $row["c4"] . "</td>";
                echo "<td>" . $row["d4"] . "</td>";

                echo "<td>" . $row["a5"] . "</td>";
                echo "<td>" . $row["b5"] . "</td>";
                echo "<td>" . $row["c5"] . "</td>";
                echo "<td>" . $row["d5"] . "</td>";

                echo "<td>" . $row["a6"] . "</td>";
                echo "<td>" . $row["b6"] . "</td>";
                echo "<td>" . $row["c6"] . "</td>";
                echo "<td>" . $row["d6"] . "</td>";

                echo "<td>" . $row["a7"] . "</td>";
                echo "<td>" . $row["b7"] . "</td>";
                echo "<td>" . $row["c7"] . "</td>";
                echo "<td>" . $row["d7"] . "</td>";

                echo "<td>" . $row["a8"] . "</td>";
                echo "<td>" . $row["b8"] . "</td>";
                echo "<td>" . $row["c8"] . "</td>";
                echo "<td>" . $row["d8"] . "</td>";

                echo "<td>" . $row["a9"] . "</td>";
                echo "<td>" . $row["b9"] . "</td>";
                echo "<td>" . $row["c9"] . "</td>";
                echo "<td>" . $row["d9"] . "</td>";

                echo '<th rowspan="2">' . $row["Total"] . "</th>";
                echo "</tr>";

                echo "<tr>";
        
                echo '<th colspan="4">' . $row["Question1"] . "</th>";
                echo '<th colspan="4">' . $row["Question2"] . "</th>";
                echo '<th colspan="4">' . $row["Question3"] . "</th>";
                echo '<th colspan="4">' . $row["Question4"] . "</th>";
                echo '<th colspan="4">' . $row["Question5"] . "</th>";
                echo '<th colspan="4">' . $row["Question6"] . "</th>";
                echo '<th colspan="4">' . $row["Question7"] . "</th>";
                echo '<th colspan="4">' . $row["Question8"] . "</th>";
                echo '<th colspan="4">' . $row["Question9"] . "</th>";

            
                echo "</tr>";



            }
        } else {
            echo "<tr><td colspan='5'>No data found.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>