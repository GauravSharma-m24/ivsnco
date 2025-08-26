<?php
$apiUrl = "https://admin.ivsnco.com/api/sliders";
$response = @file_get_contents($apiUrl);

if ($response === false) {
    echo "Failed to fetch API. Try enabling allow_url_fopen or use cURL.";
} else {
    echo "<pre>";
    print_r(json_decode($response, true));
    echo "</pre>";
}
