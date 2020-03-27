<!DOCTYPE html>
<html lang="fr">

<head>
    <title>L'hôtel Bogdanoff</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="assets/css/style.min.css" />
</head>

<body>

    <?php require_once('header.php'); ?>

    <main>
        <?php
        $servername = "localhost";
        $username = "aboubacar";
        $password = "123456";
        $dbname = "hotel_menton";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM reservations";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo " <table>
            <tr>
                    <th>id</th>
                    <th>Email</th>
                    <th>Date arrivée</th>
                    <th>Date de sortie</th>
                    <th>Chambre</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Date de réservation</th>
                </tr> </table>";
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo " 
                        <table>
                            <tr>
                                <td> " . $row["id"] . " </td>
                                <td> " . $row["email"] . " </td>
                                <td> " . $row["date_entree"] . " </td>
                                <td> " . $row["date_depart"] . " </td>
                                <td> " . $row["chambre"] . " </td>
                                <td> " . $row["nom"] . " </td>
                                <td> " . $row["prenom"] . " </td>
                                <td> " . $row["phone"] . " </td>
                                <td> " . $row["adresse"] . " </td>
                                <td> " . $row["ville"] . " </td>
                                <td> " . $row["date_reservation"] . " </td>
                            </tr> 
                        </table>

                
                ";
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </main>
    <?php require_once('footer.php'); ?>
</body>

</html>