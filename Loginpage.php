<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-box">
        <h1>Login</h1>
        <form method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the input values from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validate the input values
    if (empty($username) || empty($password)) {
        echo "<p class='error'>Please fill in all the required fields.</p>";
    } else {
        // Connect to the database
        // Replace the placeholders with your own database credentials
        $host = "localhost";
        $db_username = "your_username";
        $db_password = "your_password";
        $database = "your_database_name";
        
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database", $db_username, $db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Check if the username and password match in the database
            $query = "SELECT * FROM users WHERE username = :username AND password = :password";
            
            $statement = $pdo->prepare($query);
            
            $statement->bindValue(':username', $username);
            $statement->bindValue(':password', $password);
            
            $statement->execute();
            
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            
            if ($result) {
                // Redirect to the dashboard page
                header("Location: dashboard.php");
                exit();
            } else {
                echo "<p class='error'>Invalid username or password.</p>";
            }
        } catch (PDOException $e) {
            echo "<p class='error'>Error: " . $e->getMessage() . "</p>";
        }
    }
}

?>
