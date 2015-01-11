<?php

    //connect to DB
    msql_connect("10.0.0.3", "chat_bot", "letmein");
    mysql_select_db("tutorials");

    $stage = $_POST['stage'];

    // primary code
    if ($stage == "initial") {
        // check the username
        $user = $_POST['user'];

        $query = mysql_query("SELECT * FROM chat_active WHERE user='$user'");
        if(mysql_num_rows($query) != 0) {
            echo 'available';
        }
        else
            echo 'taken';
    }
    else
        echo 'error';