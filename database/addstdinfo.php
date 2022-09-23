<?php require "../header.php"; ?>
<?php

if (isset($_POST['addstd'])){
    require "mydb.php";
    $coursename= $_POST['coursename'];
    $datestart= $_POST['datestart'];
    $dateend= $_POST['dateend'];
    $status= $_POST['status'];
    $sid= $_POST['sid'];
    $eid= $_SESSION['userno'];
    $ename= $_SESSION['username'];
   


    if ( empty( $coursename) ||  empty( $dateend) ||   empty( $datestart) ||   empty($status) ||   empty($sid) ||   empty($eid) ||   empty($ename) 
 ){
          header("Location: ../enterpriseinfo.php?error=emptyfields&user=".$coursename."&datestart=".$datestart."&=dateend".$dateend."&status=".$status
          ."&eid=".$eid."&ename=".$ename);
          exit();
      }

      
      else{
        $sql="INSERT INTO studentrecord (eid,ename,Ssid,coursename,Dstarted,Dended,Sstatus) VALUES(?,?,?,?,?,?,?)";
        $stmt= mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: ../enterpriseifo.php?error=sqlerror");
          exit();
        }
      
        else {
          
           mysqli_stmt_bind_param($stmt,"sssssss",$eid,$ename, $sid, $coursename, $datestart, $dateend,$status );
           mysqli_stmt_execute($stmt);
           header("Location: ../enterpriseinfo.php?signup=SUCCESSFULL");
        exit();
      }
    }
      mysqli_stmt_close($stmt);
      mysqli_close($scon);


}
else{
  header("Location: ../enterpriseinfo.php");
}
