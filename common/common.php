<?php

    function connectDB()
    {
        $link = mysql_connect(
            'localhost',
            'root',
            'gojiro123'
        );
        mysql_select_db('genkakeisan');

        return $link;
    }

    //DBから全てのデータを取得しておく

    $db = connectDB();
    mysql_query('SET NAMES utf8');

    $sql = "SELECT * FROM categories";
    $result = mysql_query($sql);

 
    $items = [];
    while ($cat = mysql_fetch_array($result)) {
        $sql = "SELECT * FROM items WHERE category_id=".$cat['id'].";";
        $items[$cat['id']]['name']  = $cat['name'];
        $items[$cat['id']]['items'] = [];

        $items_data = mysql_query($sql);
        while ($data = mysql_fetch_array($items_data)) {
            $items[$cat['id']]['items'][$data['id']] = $data;
        }
    }
