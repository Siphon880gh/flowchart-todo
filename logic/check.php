<?php

// Start the session
session_start();
$results = array();

function check_checkmarks() {
    global $results;

    $filename = '../data/checkmarks.json';
    $file_id = "checkmarks_last_modified";
    $FLAG_CHANGED = "CHECKMARKS_CHANGED";
    $FLAG_UNCHANGED = "CHECKMARKS_UNCHANGED";
    
    if (file_exists($filename)) {
        $lastModifiedTime = filemtime($filename);
    
        if (!isset($_SESSION[$file_id])) {
            // Set the 'first_time_init' to the current timestamp
            $_SESSION[$file_id] = $lastModifiedTime;  // time() returns the current time as a Unix timestamp
        } else {
            if ($_SESSION[$file_id] != $lastModifiedTime) {
                $_SESSION[$file_id] = $lastModifiedTime;
                array_push($results, array('status' => $FLAG_CHANGED));
                return;
            }
        }
    }
    array_push($results, array('status' => $FLAG_UNCHANGED));
} // check_checkmarks()

function check_texts() {
    global $results;

    $filename = '../data/texts.json';
    $file_id = "texts_last_modified";
    $FLAG_CHANGED = "TEXTS_CHANGED";
    $FLAG_UNCHANGED = "TEXTS_UNCHANGED";
    
    if (file_exists($filename)) {
        $lastModifiedTime = filemtime($filename);
    
        if (!isset($_SESSION[$file_id])) {
            // Set the 'first_time_init' to the current timestamp
            $_SESSION[$file_id] = $lastModifiedTime;  // time() returns the current time as a Unix timestamp
        } else {
            if ($_SESSION[$file_id] != $lastModifiedTime) {
                $_SESSION[$file_id] = $lastModifiedTime;
                array_push($results, array('status' => $FLAG_CHANGED));
                return;
            }
        }
    }
    array_push($results, array('status' => $FLAG_UNCHANGED));
} // check_texts()

check_checkmarks();
check_texts();

echo json_encode($results);
// [{"status":"CHECKMARKS_CHANGED"},{"status":"TEXTS_UNCHANGED"}]
?>