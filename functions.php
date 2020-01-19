<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = 'root';
    $DATABASE_NAME = 'polls';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } 
    catch(PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	die('Failed to connect to database!');
    }
}

// Template header
function template_header() {
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <nav class="navtop">
        <div>
            <h1>Voting & Poll System</h1>
        </div>
    </nav>
<?php
}

// Template footer
function template_footer() {
?>
    </body>
</html>
<?php
}
