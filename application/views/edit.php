<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="<?= base_url() ?>resource/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>resource/css/edit.css">
</head>
<body>

	<nav class="navbar navbar-default" role="navigation">
	   <div class="navbar-header">
	      <p class="navbar-brand"><a href="#"><i class="iconfont">&#xe613;</i></a>&nbsp;编辑团队资料</p>
	   </div>
	   
	</nav>

	<div class="container">	
		<div class="row">
			<div class="col-xs-12 col-md-offset-4 col-md-4">


				<form action="">		
					<div class="col-xs-12 line">
						<label for="">团队名称</label>
						<input type="text" class="form-control" placeholder="团队名称">
					</div>
					<div class="col-xs-12 line">
						<label for="">团队简介</label>
						<textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="用几句话介绍你们团队吧"></textarea>
					</div>
					<div class="row">
						<div class="col-xs-5 col-xs-offset-7 register"><button type="submit" class="btn btn-register">保存资料</button></div>
					</div>
				</form>
				
				
			</div>
		</div>
	</div>
	

</body>
</html>