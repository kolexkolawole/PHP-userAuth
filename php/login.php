<?php
if(isset($_POST['submit'])){
    $username = $_POST['full_name'];//finish this line
    $email = $_POST['email'];
    $password = $_POST['password'];//finish this

loginUser($username, $email, $password);

}  

function loginUser($email, $password){
    $file = fopen("../storage/users.csv", "r");
    while(($line = fgetcsv($file)) !== FALSE){
        if($line[1] == $email && $line[2] == $password ){
            $success = true;
            break;
        }
    } 
    fclose($file);
    if ($success) {
        session_start();
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