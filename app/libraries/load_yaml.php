<?php 
function load_yaml_file($file_name){
    $data = array();
    $lines = file($file_name, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        if (preg_match('/^(\w+):(.*)$/', trim($line), $matches)) {
            $key = $matches[1];
            $value = trim($matches[2]);
            if (preg_match('/^(\'|")(.*)(\1)$/', $value, $matches)) {
                $value = $matches[2];
            }
            $data[$key] = $value;
        }
    }
    return $data;
}