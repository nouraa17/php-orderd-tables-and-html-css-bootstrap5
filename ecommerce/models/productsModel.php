<?php

include_once './helpers/db_connection.php';


function get_products($order_dir = 'asc'){
    $conn = connectToDB();
    $order_dir = $order_dir === 'desc' ? 'desc' : 'asc';
    $data = $conn -> query("SELECT * FROM products ORDER BY id $order_dir");
    return $data -> fetchAll();
}
