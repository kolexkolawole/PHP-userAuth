<?php
if(isset($_POST['submit'])){
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];//complete this;
    $newpassword = $_POST['newpassword']; //complete this;

    resetPassword($email, $password, $newpassword);
}

function resetPassword($email, $password, $newpassword){
   $file_write = fopen("../storage/temporary.csv", "w");
   while(($data = fgetcsv($file_read)) !== FALSE){
    if($data[1] == $emaill){
        $data[2] = $password;
        echo '<script>
        alert(" Successful change password");
        window.location.href="../forms/resetpassword_1.html";
        </script>';
    }else{
        echo '<script>
        alert(" Sorry user does not exist");
        window.location.href="../forms/resetpassword_1.html";
        <script>';
    }
    fputcsv($file_write, $data);
    }

    fclose($file_read);
    fclose($file_write);

    unlink('../storage/users.csv');
    rename('../storage/temporary.csv', '../storage/users.csv');
   }
    
    //open file and check if the username exist inside
    //if it does, replace the password

//- echo "HANDLE THIS PAGE";
?>

