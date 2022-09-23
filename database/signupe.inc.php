<?php

if (isset($_POST['createAccountE'])){
    require "mydb.php";
    $ename= $_POST['ename'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $address= $_POST['address'];
    $passwordRepeat= $_POST['passwordRe'];
    

    if (  empty( $ename) || empty( $username) ||  empty( $address) ||   empty( $password) ||   empty($passwordRepeat) ){
          header("Location: ../signupe.inc.php?error=emptyfields&username=".$username."&address=".$address."&ename=".$ename.
          "&epassword=".$password."&passwordre=".$passwordRepeat);
          exit();
      }

      else if($password !== $passwordRepeat){
        header("Location: ../signup.inc.php?error=passworddontmatch&username=".$username."&address=".$address);
        exit();
      }

      else{
        $sql="INSERT INTO enterprise (ename,username,epassword,eaddress) VALUES(?,?,?,?)";
        $stmt= mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: ../signup.php?error=sqlerror");
          exit();
        }
      
        else {
          $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
           mysqli_stmt_bind_param($stmt,"ssss", $ename,$username, $hashedPwd, $address );
           mysqli_stmt_execute($stmt);
           header("Location: ../index.php?signup=SUCCESSFULL");
        exit();
      }
    }
      mysqli_stmt_close($stmt);
      mysqli_close($scon);


}
else{
  header("Location: ../createaccountenterprise.php");
}
