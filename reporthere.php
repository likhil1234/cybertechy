<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybercrime Incident Reporting</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Link to CSS file -->
</head>
<body>
    <h1>Report Cybercrime Incident</h1>
    <form action="submit.php" method="POST">
        <label for="name">Your Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Your Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="description">Incident Description:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>

        <input type="submit" value="Submit Report">
    </form>
</body>
</html>
