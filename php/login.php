<?php
if(isset($_POST['submit'])){
    // $username = $_POST['fullname'];//finish this line
    $email = $_POST['email'];
    $password = $_POST['password'];//finish this

loginUser($email, $password);

}  

function loginUser($email, $password){
    $file = fopen("../storage/users.csv", "r");
    while(($line = fgetcsv($file)) !== FALSE){
        $line = fgetcsv($file);
        if($line[1] == $email && $line[2] == $password ){
           $_SESSION['username'] = $line[0];
           $success = true;
            break;
        }
    } 
    fclose($file);
    if ($success) {
        session_start();
        // $_SESSION['fullname'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        session_write_close();
        header("Location: ../dashboard.php");
    }else{
        echo '<script>
        alert(" Sorry... Email or Password is incorrect");
        window.location.href="../forms/login.html";
        </script>';
        exit();
    }
}


        
        
        /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */

//- echo "HANDLE THIS PAGE";

?>