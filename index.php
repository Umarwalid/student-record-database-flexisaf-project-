<?php require "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" type="images/x-icon" href="images/favicon.png">
</head> 

<body style="background-color: #EFF7FF;  height:700px;">

<div class="login">

<p class="labelstyle2" style="text-align: center;  color: #05224B;"> Student Login</p>
<form action="database/login.inc.php" method="post">

<div class="input2">

     <label class="labelstyle2b" for="users" style="  color: #05224B;">User name </label>
</br>
    <input class=inputbox2 name="users" id="users" style="" >
 </div>

<div class="input2">
    <label class="labelstyle2b" for="password">password </label> 
    </br> 
    <input class=inputbox2 type="password"name="password" id="password"  style="" >
 </div>
  
 <div class="buttonpos1s"><button type="submit" name="login-submit" class="btn btn-primary mb-3"
 style="width: ; height: ;background: #B0F092;   border-radius: 99px;font-size: 30px;    color:#05224B">Confirm 
</button></div> 
</br>

<div class="buttonpos2b"><a href="createaccount.php" class="btn btn-primary mb-3" style="width: ; height: ;background: #ECDFDF ;
    border-radius: 99px;font-size: 20px; padding-top: 20px;    color:#05224B">New Account</a></div> 

<div class="buttonpos1ca"><a href="enterpiseloginpage.php" class="btn btn-primary mb-3" style="width: ; height: ;background: #B9DAFA ;
    border-radius: 99px;font-size: 20px; padding-top: 20px;    color:#05224B">Enterprise Login</a>
    </div> 
</form>

</div>


    </body>