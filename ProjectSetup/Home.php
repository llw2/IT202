<?php
require(__DIR__ . "/../partials/nav.php");
?>
<h1>Home</h1>
<?php
//TODO 1  replace the following 2 lines with the current if (is_logged()) { and echo "Welcome statement
/*
if (isset($_SESSION["user"]) && isset($_SESSION["user"]["email"])){
    echo "Welcome, " . $_SESSION["user"]["email"]; 
*/
if (is_logged_in()) {
    echo "Welcome, " . get_user_email();
} else {
    echo "You're not logged in";
}
//shows session info
echo "<pre>" . var_export($_SESSION, true) . "</pre>";
?>
