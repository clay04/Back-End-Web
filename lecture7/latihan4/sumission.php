<?php
    $data['name'] = $_POST['firstname'] . " " . $_POST['lastname'];
    $data['email'] = $_POST['email'];
    $data['message'] = $_POST['message'];

    echo json_encode($data);
    exit;
?>