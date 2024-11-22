<!-- reports.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Reports</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Link to CSS file -->
</head>
<body>
    <h1>Submitted Cybercrime Reports</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Description</th>
            <th>Submitted At</th>
        </tr>
        <?php
        $servername = "sql210.infinityfree.com";
        $username = "if0_37572388"; // default XAMPP username
        $password = "Homelight"; // default XAMPP password
        $dbname = "if0_37572388_cybercrime_db";

        $conn = new mysqli($servername, $username, $password, $dbname);
        $result = $conn->query("SELECT * FROM reports");

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['description']}</td>
                    <td>{$row['created_at']}</td>
                  </tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
