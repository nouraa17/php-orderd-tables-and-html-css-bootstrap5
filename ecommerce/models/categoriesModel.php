<?php

include_once './helpers/db_connection.php';


function get_categories($order_dir = 'asc'){
    $conn = connectToDB();
    $order_dir = $order_dir === 'desc' ? 'desc' : 'asc';
    $data = $conn -> query("SELECT * FROM categories ORDER BY id $order_dir");
    return $data -> fetchAll();
}
