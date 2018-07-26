<?php

$username = "tuples";

$password = "tuples";

$hostname = "localhost";

$db_name ="tuples_db";

$con = mysqli_connect("$hostname", "$username", "$password", 'tuples_db');
if (!$con) {
    echo " NOt Connected to MySQL<br>";
}