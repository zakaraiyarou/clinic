<?php
    include ('../../database/pdo.php');

    if(isset($_POST['submit']))
    {  
        $dept = $_POST['department'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pos = $_POST['position'];
        $phone = $_POST['mnumber'];
        $purpose = $_POST['purpose'];
        $aname = $_POST['aname'];
        $type = $_POST['type'];
        $qty = $_POST['qty'];
        $brand = $_POST['brand'];
        // $height = $_POST['height'];
        // $width = $_POST['width'];
        // $depth = $_POST['depth'];
        // $color = $_POST['color'];
        // $design = $_POST['design'];
        $date = $_POST['date'];
        $ship = $_POST['shipping'];
        $id = generate_id(); // generate a new supply ID

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO prodian_apr_pen (id, dept, fname, lname, email, position, phone, purpose, a_name, type, a_qty, brand, a_hg, a_wd, a_dp, a_color, a_design, date, shipping) 
        VALUES ('$id','$dept','$fname','$lname','$email','$pos','$phone','$purpose','$aname','$type','$qty','$brand','$height','$width','$depth','$color','$design','$date','$ship')";

        $conn->exec($sql);
        session_start();
        $_SESSION['request'] = 1;
        header("Location:../../subsystem_folder/requisition/requisition.php");
    // }
    }
    // }
    function generate_id() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz9876543210';
        $length = 10;
        $random_string = '';
        for ($i = 0; $i < $length; $i++) {
            $random_string .= $characters[rand(0, strlen($characters) - 1)];
        }
        return 'req' . $random_string;
    }    
?>   