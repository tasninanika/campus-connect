<?php
if (isset($_POST['login'])) {
    require('dbCon.php');
    //$con = connect();
    session_start();    
    
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']); 
    
    $result = mysqli_query($db, "SELECT * FROM user INNER JOIN alumni ON user.u_id=alumni.alumni_id WHERE email = '$email' AND password = '$password' AND role='Alumni' AND status='Active'");
    $result2 = mysqli_query($db, "SELECT * FROM user INNER JOIN student ON user.u_id=student.student_id WHERE email = '$email' AND password = '$password' AND role='Student' AND status='Active'");
    $result3 = mysqli_query($db, "SELECT * FROM user INNER JOIN administrator ON user.u_id=administrator.administrator_id WHERE email = '$email' AND password = '$password' AND role='Admin'");


    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['email'] = $email;
        $_SESSION['first_Name'] = $row['first_Name'];
        $_SESSION['last_Name'] = $row['last_Name'];
        $_SESSION['alumni_id'] = $row['alumni_id'];
        $_SESSION['status'] = $row['status'];
        $_SESSION['image'] = $row['image'];
        $_SESSION['login'] = TRUE;
        header("Location:../alumni/alumni_dashboard.php?done");
    } else if ($row = mysqli_fetch_array($result2)) {
        $_SESSION['email'] = $email;
        $_SESSION['first_Name'] = $row['first_Name'];
        $_SESSION['last_Name'] = $row['last_Name'];
        $_SESSION['student_id'] = $row['student_id'];
        $_SESSION['status'] = $row['status'];
        $_SESSION['image'] = $row['image'];
        $_SESSION['login'] = TRUE;
        header("Location:../student/student_dashboard.php?done");
    } else if ($row = mysqli_fetch_array($result3)) {
        $_SESSION['email'] = $email;
        $_SESSION['first_Name'] = $row['first_Name'];
        $_SESSION['last_Name'] = $row['last_Name'];
        $_SESSION['status'] = $row['status'];
        $_SESSION['login'] = TRUE;
        header("Location:../admin/a_dashboard.php?done");
    } else {
        header('Location:../login.php?error');
    }
} else {
    header('Location:../login.php?deactivate');
}
?>