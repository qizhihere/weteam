<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="<?= base_url() ?>resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>resource/css/creat_project.css">
    <link rel="stylesheet" href="<?= base_url() ?>resource/css/DateTimePicker.css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <p class="navbar-brand"><a href="#"><i class="iconfont">&#xe613;</i></a>&nbsp;创建项目</p>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-xs-offset-1 col-xs-10 col-md-offset-4 col-md-4">
            <form action="<?= base_url(PROJECT_SAVE_API) ?>" method="POST" role="form" id="form-team">
                <div class="row">
                    <div class="col-xs-12">
                        <input type="text" class="form-control form-register iconfont" name="project_name"
                               placeholder="&#xe60f;&nbsp;项目名称" required="true">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <input type="text" class="form-control form-register iconfont" name="user_name"
                               placeholder="&#xe604;&nbsp;负责人" required="true">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <input type="tel" class="form-control form-register iconfont" name="user_phone"
                               placeholder="&#xe615;&nbsp;联系电话" required="true">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <input type="text" data-field="datetime" class="form-control form-register iconfont"
                               name="time" id="dateinput" placeholder="&#xe611;&nbsp;启动时间" required="true">
                        <div id="dtBox" class="dtpicker-overlay dtpicker-mobile">
                            <div class="dtpicker-bg">
                                <div class="dtpicker-cont">
                                    <div class="dtpicker-content">
                                        <div class="dtpicker-subcontent"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <textarea class="form-control form-register iconfont" name="content"
                                  placeholder="&#xf00be;&nbsp;项目简介" required="true"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-5 col-xs-offset-7 register">
                        <button type="submit" class="btn btn-register">创&nbsp;建</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>resource/js/jquery-1.11.3.min.js"></script>
<script src="<?= base_url() ?>resource/js/DateTimePicker.js"></script>
<script text="text/javascript">
    $("#dtBox").DateTimePicker();
</script>
</body>
</html>