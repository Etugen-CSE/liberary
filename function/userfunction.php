<?php
include('config/dbcon.php');
function getAllactive($table)
{
    global $conn;
    $query = "SELECT * FROM $table WHERE status='0'";
    return $query_run = mysqli_query($conn, $query);
}
function getSlugActive($table, $slug)
{
    global $conn;
    $query = "SELECT * FROM $table WHERE slug ='$slug' AND status='0' LIMIT 1";
    return $query_run = mysqli_query($conn, $query);
}
function getProdByCategory($category_id)
{
    global $conn;
    $query = "SELECT * FROM products WHERE category_id ='$category_id' AND status='0'";
    return $query_run = mysqli_query($conn, $query);
}
function getIDActive($table, $id)
{
    global $conn;
    $query = "SELECT * FROM $table WHERE id ='$id' AND status='0'";
    return $query_run = mysqli_query($conn, $query);
}
function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('location: ' . $url);
    exit();
}
