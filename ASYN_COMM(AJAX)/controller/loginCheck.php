<?php
if (!isset($_REQUEST['data'])) {
    $response = ['error' => 'No data recieved'];
    echo json_encode($response);
} else {
    include_once('../models/personModel.php');
    $data = json_decode($_REQUEST['data']);
    echo json_encode(login($data));
}