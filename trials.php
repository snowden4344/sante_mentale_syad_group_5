<?php
    $my_conn = new mysqli("localhost", "root", "", "main_db");

    $my_sql = "SELECT * FROM story_tb WHERE `story_title` = 'Faith and Hope'";

    if ($my_conn->query($my_sql) == true)
        echo "Done";
    else
        var_dump( $my_conn->error_list);
