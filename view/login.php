<?php

$msg=isset($msg)?$msg:"";

?>
<html lang="sr">
	<?php include 'head.php';?>
	<body class="bg-ligth">
		<div class="wrapper container bg-faded text-center w-25 mt-5">
			<form class="" action="routes.php" method="post">
				<h3 class="text-dark">Welcome</h3>
				<input class="form-control mb-3" type="text" name="username" placeholder="Username">
				<input class="form-control mb-3" type="password" name="password" placeholder="Password">
				<input class="btn btn-primary text-white font-weight-bold form-control mb-3" type="submit" name="page" value="Log in">
			</form>
			<span class="text-dark">
			<?php  

				$msgg=isset($_GET['msgg'])?$_GET['msgg']:"";

				if (isset($msgg)&& isset($msg)){
					echo $msgg;
					echo $msg;
				}
			?>
			</span>
		</div>
	</body>
</html>