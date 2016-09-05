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
