<?php
    if (!headers_sent()) {
        if (!in_array('Access-Control-Allow-Origin', headers_list())) {
            header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Headers: Content-Type");
            // header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
            header('Access-Control-Allow-Methods: GET, POST, PUT');
        }
    }
    
    $prepared = [
        "checkmarks"=>[]
    ];

    $checkmarksBody = @file_get_contents("../data/checkmarks.json");
    if($checkmarksBody===false) $checkmarks = [];
    else $prepared["checkmarks"] = $checkmarksBody;

    echo json_encode($prepared);
?>