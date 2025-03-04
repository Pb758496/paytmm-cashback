<?php


$pass = file("data/pass.txt");
$pass = explode('=',$pass[0]);
$admin_id = $pass[0];
$admin_pass = $pass[1];


//setcookie('admin', 'hii',time()+60*60*24,'/');
//setcookie('pass', 'hello',time()+60*60*24,'/');

if(isset($_COOKIE['admin'])){
				//verification
				if($_COOKIE['admin'] == md5($admin_id.$admin_pass)){
				}else{
						header("location: login.php");
				die("login failed");			
				}
				
				
}else{
				header("location: login.php");
				die("login failed");
}



if(isset($_POST['logout'])){
				setcookie('admin','',time(),'/');	
				header("location: login.php");
				die("logout");
}

if(isset($_POST['upi'])){
      $str = preg_replace('/^[ \t]*[\r\n]+/m', '', $_POST['upi']);
				file_put_contents('data/upi.txt',$str);
}

if(isset($_POST['minprice']) && isset($_POST['maxprice'])){
				$str = $_POST['minprice']."=".$_POST['maxprice'];
				file_put_contents('data/price.txt',$str);				
}

if(isset($_POST['uid']) && isset($_POST['upass'])){
$str = $_POST['uid']."=".$_POST['upass'];
file_put_contents('data/pass.txt',$str);

$pass = file("data/pass.txt");
$pass = explode('=',$pass[0]);
$admin_id = $pass[0];
$admin_pass = $pass[1];

setcookie('admin',md5($admin_id.$admin_pass),time()+60*60*24,'/');
							header('location: index.php');
							die("success");


}



$price = file_get_contents("data/price.txt");
$price = explode('=',$price);
//echo "<pre>";



$min_price = $price[0];
$max_price = $price[1];



echo ".";

$upi = file_get_contents("data/upi.txt");
//print_r($upi);


echo "";





?>

<!DOCTYPE html>
<html lang="en">
<head>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>admin</title>
</head>
<body style="background:orange">
				<style>
							form{
											width:90%;
											margin:auto;
											//padding:30px;
											//border:30px solid black;
											//margin-top:50px;
											background:grey;
							}
							textarea{
											width:100%;
											height:300px;
											border:50px solid #132030;
							}	
							input{
											width:50%;
											height:150px;
											border:20px solid #132030;
							}
							
							button{
											width:100%;
											background:#132030;
											color:white;
											margin-top:20px;
											height:50px;
											font-size:30px;
											border:none;
							}
							.name{
											width:100%;
											color:white;
											text-align:center;
											background:#132030;
											height:40px;
											font-size:30px;
							}
							details{
										 color:green;
										 background:white;
							}
							summary{
						      	background:green;
											padding:10px;
											font-size:40px;
											color:white;
							}
							
				</style>
				<form style="background:grey;" action="" method="post">
								<div class="name">UPI ID'S</div>
								<details>
												<summary>Notes:-</summary>
												<p>
																enter upi id line by line (keep in mind that every line will be mark as upi id so dont leave blank lines)
												</p>
								</details>
								<textarea name="upi"><?php echo $upi; ?></textarea><br>
								<button type="submit">
												update
								</button>
				</form>
				<hr>
				<hr>
				
				
				
				
				
					 
				<form method="post" action="">
								<div class="name">PRICE </div>
								<details>
												<summary>Notes:-</summary>
												<p>
																ADD MINIMUM AMOUNT VALUE IN FIRST FIELD AND MAXIMUM AMOUNT VALUE IN 2ND FIELD
												</p>
								</details>
<?php
							echo '<input type="number" value="'.$min_price.'" name="minprice" required><input type="number" value="'.$max_price.'" name="maxprice" required>';
?>								
			<br>
								<button type="submit">
												update
								</button>
				</form>
				<hr>
				<hr>
				
		 		 
				
				<form action="" method="post">
								<div class="name">CHANGE Password</div>
								<details>
												<summary>Notes:-</summary>
												<p>
																ADD username IN FIRST FIELD AND password IN 2ND FIELD(it will change your password)
												</p>
								</details>
<?php
							echo '<input type="text" value="'.$admin_id.'" name="uid" required><input type="text" value="'.$admin_pass.'" name="upass" required>';
?>								
			<br>
								<button type="submit">
												update
								</button>
				</form>
				
				 
				
				
				<hr><hr><hr>
				<form method="post" action=''>
						<button style="border:none;color:white; background:#132030;" type="submit" name="logout" >LOGOUT</button>
								
				</form>
				
				
</body>
</html>
