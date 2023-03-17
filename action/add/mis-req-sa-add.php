<?php
    include ('../../conn/connection.php');

    if(isset($_POST['add']))
    {  
        $dept = $_POST['department'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pos = $_POST['position'];
        $phone = $_POST['mnumber'];
        $date = date("Y-m-d"); // Set $date to today's date in YYYY-MM-DD format
    
        $id = generate_id(); // generate a new supply ID
    
        $areq = implode(', ', $_POST['req']); // convert the array to a comma-separated string
    
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO prodian_apr_sa_pen (id, dept, fname, lname, email, position, phone, a_req, date) 
        VALUES ('$id','$dept','$fname','$lname','$email','$pos','$phone','$areq','$date')";
    
        $conn->exec($sql);
        ?>
        <script>
            alert("Request added successfully!");
            window.location.href = "../../ss/ss-req-sa.php";
        </script>
        <?php
    }

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
