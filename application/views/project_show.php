<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="<?= base_url() ?>resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>resource/css/about_project.css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <p class="navbar-brand"><a href="#"><i class="iconfont">&#xe613;</i></a>&nbsp;详细项目资料</p>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-offset-4 col-md-4">
            <div class="row rowborder">
                <div class="col-xs-4 line">
                    <i class="iconfont">&#xe60f;</i>&nbsp;&nbsp;&nbsp;项目名称
                </div>
                <div class="col-xs-8 line detail">
                    <?= $project_info['project_name'] ?>
                </div>
            </div>
            <div class="row rowborder next">
                <div class="col-xs-4 line">
                    <i class="iconfont">&#xe604;</i>&nbsp;&nbsp;&nbsp;负责人
                </div>
                <div class="col-xs-8 line detail">
                    <?= $project_info['user_name'] ?>
                </div>
            </div>
            <div class="row rowborder next">
                <div class="col-xs-4 line">
                    <i class="iconfont">&#xe615;</i>&nbsp;&nbsp;&nbsp;联系电话
                </div>
                <div class="col-xs-8 line detail">
                    <?= $project_info['user_phone'] ?>
                </div>
            </div>
            <div class="row rowborder next">
                <div class="col-xs-4 line">
                    <i class="iconfont">&#xe611;</i>&nbsp;&nbsp;&nbsp;启动时间
                </div>
                <div class="col-xs-8 line detail">
                    <?= date("Y-m-d", $project_info['time']) ?>
                </div>
            </div>
            <div class="row rowborder next">
                <div class="col-xs-4 line">
                    <i class="iconfont">&#xe6e0;</i>&nbsp;&nbsp;&nbsp;已有成员
                </div>
                <div class="col-xs-8 line detail">
                    <span>周润来</span>
                    <span>付煜</span>
                </div>
            </div>
            <div class="row rowborder next">
                <div class="col-xs-4 line">
                    <i class="iconfont">&#xf00be;</i>&nbsp;&nbsp;&nbsp;项目简介
                </div>
                <div class="col-xs-8 line detail">
                    <?= $project_info['content'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-5 col-xs-offset-7 register">
                    <button type="submit" class="btn btn-register">加入项目</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>