<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project 1 - Test Page</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <h1>Welcome to project 1</h1>

    <p>Here you can implement the functionality needed for project 1</p>
    <p>The table below indicates the status of the dependencies that are neede to run project 1</p>
    <h3>Status:</h3>
    <div class="status">
        <span>Apache</span><span class="success">Working &#128526</span>
        <span>PHP</span><span class="success">Working &#128526</span>
        <span>Database</span>
        <?php
            try{
                $username = getenv("POSTGRES_USER");
                $password = getenv("POSTGRES_PASSWORD");
                $db_name = getenv("POSTGRES_DB");
                $port = getenv("POSTGRES_PORT");
                $dsn = "pgsql:host=db;port=$port;dbname=$db_name";
                $db = new PDO($dsn, $username, $password);
                print('<span class="success">Working &#128526</span>');
            }catch(PDOException $e){
                print('<span class="error">Not working &#128557</span>');
                print('<span>Error message</span>');
                print('<pre class="error">' . $e->getMessage() . '</pre>');
            }
        ?>
    </div>

</body>
</html>