	<?php 
	include ('./users.php');
	$obj_users = new users();

	$keyword ='';
	if ($_GET['keyword']) {
		$keyword=$_GET['keyword'];
	}
	$users = $obj_users->getUsers($keyword);
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		
		<link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="public/css/font-awesome-master/css/font-awesome.min.css" rel="stylesheet">
		<link href="public/css/type-12.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<header>
			<div class="tyep-12">
				<div class="container">
					<div class="col-md-12 boder">
						<div class="type">Our team</div>
						<form>
							<input type="text" name="keyword" placeholder="Nhap tu khoa...">
							<input type="submit" value="Tim kiem">
						</form>
						<div class="row">
							<?php foreach ($users as $user):?>
								<div class="col-md-4 col-sm-6 col-xs-12 class">
									<div class="hover">
										<div class="images">
											<img src="public/images/Photo_1" alt="imgPhoto_1">
										</div>
										<div class="overlays">
											<div class="content">
												<p>Senior salesman with 15 yaers of exprience. He knows everything abot the products he offers.</p>
											</div>
										</div>
									</div>
									<div class="tieude">
										<a href="#"><h3><?php  echo $user['username']?></h3></a>
									</div>
								</div>
							<?php endforeach;?>		
						</div>
					</div>
				</div>
			</div>
		</header>
	</body>
	</html>