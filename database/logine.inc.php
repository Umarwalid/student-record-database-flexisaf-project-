<?php

if (isset($_POST['login-submitE'])){
    require "mydb.php";
    $username= $_POST['users'];
    $password= $_POST['password'];

    if (empty( $username) || empty( $password)){
    header("Location: ../index.php?error=emptyfields");
    exit();
    }
    else{
        $sql= "SELECT * FROM enterprise WHERE username=?";
        $stmt= mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../enterpriseloginpage.php?error=sqlerror");
            exit();
          }
          else {
             mysqli_stmt_bind_param($stmt,"s", $username );
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);
             if( $row=mysqli_fetch_assoc( $result)){
              
                 $pwdcheck= password_verify($password,$row['epassword']);
              
                 if( $pwdcheck == false){
                    header("Location: ../enterpriseloginpage.php?error=wrongpassword".$row['epassword'].$password);
                    exit();
             }

             else if ($pwdcheck == true){
                 session_start();
                 $_SESSION['userno']= $row['eid'];
                 $_SESSION['userid']= $row['username'];
                 $_SESSION['username']= $row['ename'];
                 $_SESSION['userad']= $row['address'];
                 
           

                 header("Location: ../enterprisehp.php?login=SUCCESSFULL");
              exit();
            }
            else{
                header("Location: ../enterpriseloginpage.php?error=wrongpassword");
                exit();
            }
        }
            
        }
      }
      
}

else{
  header("Location: ../index.php");
}
