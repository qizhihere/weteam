<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="<?= base_url() ?>resource/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>resource/css/register.css">
</head>
<body>

	<nav class="navbar navbar-default" role="navigation">
	   <div class="navbar-header">
	      <p class="navbar-brand"><a href="#"><i class="iconfont">&#xe613;</i></a>&nbsp;&nbsp;注&nbsp;册</p>
	   </div>
	   
	</nav>

	<div class="container">	
		<div class="row">
			<div class="col-xs-offset-1 col-xs-10 col-md-offset-4 col-md-4">

				<div class="row">
					<div class="col-xs-6 btn-setdiv1">
						<button type="button" class="btn btn-set btn-team">团&nbsp;队</button>
					</div>
					<div class="col-xs-6 btn-setdiv2">
						<button type="button" class="btn btn-set btn-individual">个&nbsp;人</button>
					</div>
				</div>

				<form action="" method="" role="form" id="form-team">
					<div class="row">
						<div class="col-xs-12">
							<input type="email" class="form-control form-register" id="e-mail-team" name="e-mail" placeholder="&nbsp;邮&nbsp;箱" required="true">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<input type="password" class="form-control form-register" name="" placeholder="团队名称" required="true">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<input type="password" class="form-control form-register" name="" placeholder="&nbsp;密&nbsp;码" required="true">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<input type="password" class="form-control form-register" name="" placeholder=确认密码 required="true">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-5 col-xs-offset-7 register"><button type="submit" class="btn btn-register">注&nbsp;册</button></div>
					</div>
				</form>

				<form action="" method="" role="form" id="form-individual">
					<div class="row">
						<div class="col-xs-12">
							<input type="email" class="form-control form-register" id="e-mail-team" name="e-mail" placeholder="&nbsp;邮&nbsp;箱" required="true">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<input type="password" class="form-control form-register" id="password-team" name="password" placeholder="&nbsp;姓&nbsp;名" required="true">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<input type="password" class="form-control form-register" id="password-team" name="password" placeholder="&nbsp;密&nbsp;码" required="true">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<input type="password" class="form-control form-register" id="password-team" name="password" placeholder=确认密码 required="true">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-5 col-xs-offset-7 register"><button type="submit" class="btn btn-register">注&nbsp;册</button></div>
					</div>
				</form>
				
				
			</div>
		</div>
	</div>
	
	<script src="<?= base_url() ?>resource/js/jquery-1.11.3.min.js"></script>
	<script>
		$(".btn-team").addClass('change');
		$("#form-individual").addClass('none');
		$(".btn-team").click(function(event) {
			$("#form-team").removeClass('none').addClass('block');
			$("#form-individual").removeClass('block').addClass('none');
			$(this).addClass('change');
			$(".btn-individual").removeClass('change');
		});
		$(".btn-individual").click(function(event) {
			$("#form-individual").removeClass('none').addClass('block');
			$("#form-team").removeClass('block').addClass('none');
			$(this).addClass('change');
			$(".btn-team").removeClass('change');
		});
	</script>

</body>
</html>