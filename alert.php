<?php
    if(isset($success_msg)) {
        foreach ($success_msg as $success_msg) {
            echo '<sctipt>swal(" ' .$success_msg. '", "", "success");</script>';
        }
    }

    if(isset($warning_msg)) {
        foreach ($warning_msg as $warning_msg) {
            echo '<sctipt>swal(" ' .$warning_msg. '", "", "success");</script>';
        }
    }
    if(isset($info_msg)) {
        foreach ($info_msg as $info_msg) {
            echo '<sctipt>swal(" ' .$info_msg. '", "", "success");</script>';
        }
    }
    if(isset($error_msg)) {
        foreach ($error_msg as $error_msg) {
            echo '<sctipt>swal(" ' .$error_msg. '", "", "success");</script>';
        }
    }
    

?>