<?php

$payload = json_encode([
    "title" => "Update Title"
]);

$options = [
    "http" => [
        "method" => "PATCH",
        "header" => "Content-type: application/jason; charset=UTF-8",
        "content" => $payload
    ]
    ];

    $context = stream_context_create($options);

$data = file_get_contents("https://jsonplaceholder.typicode.com/users/1/albums", false, $context); 

var_dump($data);

print_r($http_response_header);
?>