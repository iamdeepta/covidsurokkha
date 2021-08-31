<?php
    require('db.inc.php');

    if(isset($_POST['faq_id'])){
        if(is_numeric($_POST['faq_id'])){
            $query = mysqli_query($dbc, "UPDATE tbl_faq SET faq_status = 1 where faq_id = '".$_POST['faq_id']."'");
            
            if(mysqli_affected_rows($dbc) > 0)
                echo json_encode(array('response' => 'success'));
            else
                echo json_encode(array('response' => 'error', 'result' => 'Could not delete your data'));
                
        } else {
            echo json_encode(array('response' => 'error', 'result' => 'There is a problem deleting data'));
        }
    } else {
        echo json_encode(array('response' => 'error', 'result' => 'Invalid Activity'));
    }
    