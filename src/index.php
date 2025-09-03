<?php
// Database connection
$host = 'db';
$dbname = 'interview';
$username = 'web';
$password = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<div style='color: green;'>✅ Database connection successful!</div>";
} catch(PDOException $e) {
    echo "<div style='color: red;'>❌ Database connection failed: " . $e->getMessage() . "</div>";
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP/MySQL Interview Environment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .info-box {
            background: #e8f4fd;
            border: 1px solid #b8daff;
            border-radius: 4px;
            padding: 15px;
            margin: 10px 0;
        }
        .users-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .users-table th, .users-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .users-table th {
            background-color: #f2f2f2;
        }
        .status {
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🐘 PHP/MySQL Interview Environment</h1>
        
        <div class="info-box">
            <h3>Environment Information</h3>
            <ul>
                <li><strong>PHP Version:</strong> <?php echo phpversion(); ?></li>
                <li><strong>Server:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
                <li><strong>Database:</strong> MySQL 8.0</li>
                <li><strong>Current Time:</strong> <?php echo date('Y-m-d H:i:s'); ?></li>
            </ul>
        </div>

        <div class="status">
            <h3>Sample Database Query</h3>
            <?php
            try {
                // Fetch users with their post counts

                $sql1 = "SELECT * FROM orders";
                $stmt = $pdo->query($sql1);
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                echo '<pre>'. print_r($sql1, true) . '</pre>';
                echo '<pre>'. print_r($results, true) . '</pre>';

            } catch(PDOException $e) {
                echo "<div style='color: red;'>Error fetching data: " . $e->getMessage() . "</div>";
            }
            ?>
        </div>

        <div class="info-box">
            <h3>Quick Access Links</h3>
            <ul>
                <li><strong>Web Application:</strong> <a href="http://localhost:8080">http://localhost:8080</a></li>
                <li><strong>phpMyAdmin:</strong> <a href="http://localhost:8081">http://localhost:8081</a></li>
                <li><strong>Database:</strong> localhost:3309</li>
            </ul>
        </div>

        <div class="info-box">
            <h3>Database Credentials</h3>
            <ul>
                <li><strong>Host:</strong> db (or localhost from outside Docker)</li>
                <li><strong>Database:</strong> interview_db</li>
                <li><strong>Username:</strong> interview_user</li>
                <li><strong>Password:</strong> interview_pass</li>
                <li><strong>Root Password:</strong> rootpassword</li>
            </ul>
        </div>
    </div>
</body>
</html>
