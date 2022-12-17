<?php
require_once(__DIR__ . "/../../lib/functions.php");

    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }
    if (isset($_SESSION["game"])) {
        $game = $_SESSION["game"];
        $_SESSION["game"] = null;
        require_once(__DIR__ . "/save_score.php");
        save_score($game["player"]["score"]);
        unset($_SESSION["game"]);
        $resp = ["status" => 200, "message" => "Success (maybe?)"];
        $resp = array();
        echo json_encode($resp);
        die();
    }
