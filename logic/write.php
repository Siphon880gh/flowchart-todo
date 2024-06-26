<?php
    if (!headers_sent()) {
        if (!in_array('Access-Control-Allow-Origin', headers_list())) {
            header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Headers: Content-Type");
            // header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
            header('Access-Control-Allow-Methods: GET, POST, PUT');
        }
    }
    
    // Start the session
    session_start();

    $contentType = $_SERVER["CONTENT_TYPE"];
    if ($contentType === "application/json") {
        $data = json_decode(file_get_contents("php://input"), true);
        $_POST = array_merge($_POST, $data);
    } elseif ($contentType === "application/x-www-form-urlencoded") {
        parse_str(file_get_contents("php://input"), $data);
        $_POST = array_merge($_POST, $data);
    }
    // Now you can use $_POST as you normally would

    if(isset($_POST["checkmarks"])) {
        $checkmarks = $_POST["checkmarks"];
        
        @file_put_contents("../data/checkmarks.json", json_encode($checkmarks));
        echo json_encode(["post"=>"checkmarks"]);

        $lastModifiedTime = filemtime("../data/checkmarks.json");
        $_SESSION["checkmarks_last_modified"] = $lastModifiedTime;
    } 
    if(isset($_POST["texts"])) {
        $texts = $_POST["texts"];
        
        @file_put_contents("../data/texts.json", json_encode($texts));
        echo json_encode(["post"=>$texts]);

        $lastModifiedTime = filemtime("../data/texts.json");
        $_SESSION["texts_last_modified"] = $lastModifiedTime;
    } 
    
    // else {
    //     $data = json_decode(file_get_contents('php://input'), true);
    //     echo json_encode(["post"=>false, "debug_post"=>$_POST, "debug_php_input"=>$data, "debug_content_type"=>$_SERVER["CONTENT_TYPE"], "debug_request_method"=>$_SERVER['REQUEST_METHOD']]);
    // }

?>