<?php
require_once(__DIR__ . "/../../lib/functions.php");

//handle the potentially incoming post request
$score = (int)se($_POST, "score", 0, false);
save_score($score/*llw , $level, $rescued*/ );

function save_score($score, $echo = true)
{
    $response = ["status" => 400, "message" => "Unhandled error"];
    http_response_code(400);
    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }
    if (is_logged_in()) {
        //todo save
        if ($score >0) {
            $db = getDB();
            $stmt = $db->prepare("INSERT INTO Scores(score, userID) VALUES (:s, :uid)");
            try {
                $stmt->execute([":s" => $score,  ":uid" => get_user_id()]);
                $response["status"] = 200;
                $response["message"] = "Saved Score";
                http_response_code(200);
            } catch (PDOException $e) {
                error_log("Error saving score: " . var_export($e, true));
                $response["message"] = "Error saving score details";
            }
        }else {
            $response["status"] = 200;
            $response["message"] = "Zero scores are not saved";
            http_response_code(200);
        }
    } else {
        $response["message"] = "Not logged in";
        http_response_code(403);
    }
    if ($echo) {
        echo json_encode($response);
        die();
    }
    return $response;
}
