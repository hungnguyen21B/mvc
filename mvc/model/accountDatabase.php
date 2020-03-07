<?php
function checkLogin($username, $password)
{
    global $db;
    $sql = "select * from account where username = '" . $username . "' and password ='" . $password . "';";
    $result = $db->query($sql)->fetch_all();
    if (count($result) > 0) {
        $acc = new Account($result[0][0], $result[0][1], $result[0][2], $result[0][3]);
        if ($acc->isRole()) {
            header('Location: ../View/Admin/adminForm.php');
        } else {
            header('Location: ../View/Cus/cusForm.php');
        }
    }
}
