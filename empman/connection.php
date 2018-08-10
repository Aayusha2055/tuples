<?php

$db_user = "tuples";

$db_pass = "tuples";

$db_host = "localhost";

$db_name ="tuples_db";

$con = mysqli_connect("$db_host", "$db_user", "$db_pass", $db_name);
if (!$con) {
    echo "Not Connected to MySQL<br>";
}