<?php
$pass = file("data/pass.txt");
$pass = explode('=',$pass[0]);
$admin_id = $pass[0];
$admin_pass = $pass[1];
if(isset($_COOKIE['admin'])){
				if($_COOKIE['admin'] == md5($admin_id.$admin_pass)){
				header("location: index.php");
				die("already login");
				}else{
					setcookie('admin','',time(),'/');	
				}
}

if(isset($_POST['id']) && isset($_POST['pass'])){
    
			$id = $_POST['id'];
			$pass = $_POST['pass'];
			if($id==$admin_id && $pass == $admin_pass){
							setcookie('admin',md5($admin_id.$admin_pass),time()+60*60*24,'/');
							header('location: index.php');
							die("success");
			}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
				<meta name='viewport' content="width=device-width, initial-scale=1">
				<title>login</title>
				<style>
							form{
											width:90%;
											margin:auto;
											//padding:30px;
											//border:30px solid black;
											//margin-top:50px;
											background:#132030;
							}
							textarea{
											width:100%;
											height:300px;
											border:50px solid #132030;
							}	
							input{
							      margin:auto;
											width:90%;
											height:50px;
											border:15px solid #132030;
							}
							
							button{
							      
											width:100%;
											background:#132030;
											color:white;
											margin-top:20px;
											height:50px;
											font-size:30px;
											border:none;
											border:2px solid green;
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
				
				
</head>
<body>
					<form method="post" action="">
								<div class="name">Welcome back!</div>
								<br>
								<input type="text" name="id" placeholder="username" required>
								<br>
								<input type="text" placeholder="password" name="pass" required>
								
			<br>
								<button type="submit">
												LOGIN
								</button>
				</form>
				
</body>
</html>
