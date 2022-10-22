<?php
//  session_start();

//  $_SESSION = array();
function logout(){
   //- if (ini_get("session.use_cookies")) {
   //-  $params = session_get_cookie_params();
   //-  setcookies(session_name(), '', time() - 42000,
   //-  $params["path"], $params["domain"],
   //-  $params["secure"], $params["httponly"]
   //- );
   //-    }else{
      session_destroy();
      header("Location: ../index.php?error=You are not logged in");
      
   }
      
   //-  }
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
?>

<!--//- echo "HANDLE THIS PAGE"; -->
