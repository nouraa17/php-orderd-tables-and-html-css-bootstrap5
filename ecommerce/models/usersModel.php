<?php

include_once './helpers/db_connection.php';


function get_users($order_dir = 'asc'){
    $conn = connectToDB();
    $order_dir = $order_dir === 'desc' ? 'desc' : 'asc';
    $data = $conn -> query("SELECT * FROM users ORDER BY id $order_dir");
    return $data -> fetchAll();
}
