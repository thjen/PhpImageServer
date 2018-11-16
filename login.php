<?php
    require "connect.php";

    $email = $_POST['account'];
    $pass = $_POST['pass'];
    //$email = "thjen";
    //$pass = "thjenit98";

    /** create struct json **/
    class Student {
        function Student($id, $user, $pass, $image) {
            $this -> Id = $id;
            $this -> Email = $user;
            $this -> Pass = $pass;
            $this -> Image = $image;
        }
    }

    if (strlen($email) > 0 && strlen($pass) > 0) {
        $arraystudent = array();
        $query = "SELECT * FROM student WHERE FIND_IN_SET('$email', account) AND          FIND_IN_SET('$pass', pass)";
        $data = mysqli_query($con, $query);
        if ($data) {
            while ($row = mysqli_fetch_assoc($data)) {
                array_push($arraystudent, new Student($row['id'], $row['account'], $row['pass'], $row['image']));
            }
            if (count($arraystudent) > 0) {
                echo json_encode($arraystudent);
            } else {
                echo "Fail";
            }
        }
    } else {
        echo "Null";
    }

?>
