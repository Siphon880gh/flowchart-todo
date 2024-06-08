<?php
    if (!headers_sent()) {
        if (!in_array('Access-Control-Allow-Origin', headers_list())) {
            header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Headers: Content-Type");
            // header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
            header('Access-Control-Allow-Methods: GET, POST, PUT');
        }
    }
    
    if(isset($_GET["checkmarks"])) {
        $prepared = [
            "checkmarks"=>[]
        ];
    
        $checkmarksBody = @file_get_contents("../data/checkmarks.json");
        if($checkmarksBody===false) $checkmarksBody = [];
        else $prepared["checkmarks"] = $checkmarksBody;
    }

    if(isset($_GET["texts"])) {
        $prepared = [
            "texts"=>[]
        ];
    
        $textsBody = @file_get_contents("../data/texts.json");
        if($textsBody===false) $textsBody = [];
        else $prepared["texts"] = $textsBody;
    }

    echo json_encode($prepared);
?>