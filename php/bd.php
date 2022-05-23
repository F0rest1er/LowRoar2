<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "img";
$link = new mysqli($host, $user, $password, $database);

function get_news_all() {
    global $link;
    $news = $link->query("SELECT * FROM news");
    return $news;
}

function get_item_by_id($id) {
    global $link;
    if(!$id){
        $id=1;
       }
    $news = $link->query("SELECT * FROM news WHERE id = $id");
    foreach ($news as $item) {
        return $item;
    }
}
?>