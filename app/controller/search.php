<?php
   $db = new mysqli('localhost', 'root' ,'', 'sc_db');

	if(!$db) {

        echo 'Could not connect to the database.';
    } else {

        if(isset($_POST['queryString'])) {
            $queryString = $db->real_escape_string($_POST['queryString']);

            if(strlen($queryString) >0) {

                $query = $db->query("SELECT * FROM projects WHERE p_name LIKE '%$queryString%' LIMIT 10");
                if($query) {
                    echo '<ul>';
                    while ($result = $query ->fetch_object()) {
                        echo '<li onClick="fill(\''.addslashes($result->p_name).'\');">'.$result->p_name.'&nbsp;
<span style="font-size:9px; color:#999999">(' .$result->c_company. ')</span></li>';

                    }

                    echo '</ul>';

                } else {
                    echo 'OOPS we had a problem :(';
                }
            } else {
                // do nothing
            }
            $query = $db->query("SELECT * FROM projects WHERE p_name='%$queryString%' LIMIT 10");
        } else {
            echo 'There should be no direct access to this script!';
        }
    }
