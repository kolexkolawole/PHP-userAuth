<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

 function registerUser($username, $email, $password){
   $form_data = array(
    'fullname' => $username,
    'email' => $email,
    'password' => $password
   );
   $file = fopen("../storage/users.csv", "a");
   while(($line = fgetcsv($file)) !== FALSE){
    if($line[1] == $email){
        $success = true;
        break;
    }else{
        $success = false;
    }
    }
if ($success) {
    echo '<script>
    alert(" Sorry... Email already Exist");
    window.location.href="../forms/register.html";
    </script>';
}else{
    $file_open = fopen("../storage/users.csv", "a");
    $save = fputcsv($file_open, $form_data);
    fclose($file_open);

    if($save){
        echo '<script>
        alert(" User Successfull Registered");
        window.location.href="../forms/register.html";
        </script>';
    }
}
}

   
    //save data into the file
    
    // echo "OKAY";

//- echo "HANDLE THIS PAGE";
?>

