<?php

$ini = @parse_ini_file(".env");
if (!$ini) {
    # missing the .env file
    if ($_SERVER['SERVER_NAME'] == "localhost")
        echo "Warning Missing Database Environment Variables<br>";
}

if($ini && isset($ini["DB_URL"])){
    //load local .env file
    $url = $ini["DB_URL"];
    $db_url = parse_url($url);
}
else{
    //load from heroku env variables  should not get here.
    $url = getenv("DB_URL");
    $db_url = parse_url($url);  
}
//attempts to handle a failure where parse_url doesn't parse properly (usually happens when special characters are included)
if (!$db_url || count($db_url) === 0) {
    $matches;
    $pattern = "/mysql:\/\/(\w+):(\w+)@([^:]+):(\d+)\/(\w+)/i";
    preg_match($pattern, $url, $matches);
    $db_url["host"] = $matches[3];
    $db_url["user"] = $matches[1];
    $db_url["pass"] = $matches[2];
    $db_url["path"] = "/" . $matches[5];
}

if (count($db_url) === 1) {
    echo "SETUP ERROR: Missing Database Setup Information. Contact developer of this app. <br>";
    exit();
} else {
    $dbhost   = $db_url["host"];
    $dbuser = $db_url["user"];
    $dbpass = $db_url["pass"];
    $dbdatabase       = substr($db_url["path"],1);
    config.php}
?>
