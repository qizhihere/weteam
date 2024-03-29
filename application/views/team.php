<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="<?= base_url() ?>resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>resource/css/team.css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <!--        <p class="navbar-brand"><a href="#"><i class="iconfont">&#xe613;</i></a>&nbsp;WETeam</p>-->
    </div>
</nav>
<div class="container div3 none">
    <div class="row">
        <div class="col-xs-12 col-md-offset-4 col-md-4">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-1">
                    <img src="<?= base_url() ?>resource/images/head.png" alt="" height="100%" width="100%">
                </div>
                <div class="col-xs-7 intro-words">
                    <span class="logo"><?= $team_info["name"] ?></span>
                    <br><br>
                    <span><a href="<?= base_url("index.php/" . EDIT_PAGE . "?id=" . $team_info["id"]) ?>"><i
                                class="iconfont">&#xe602;</i>编辑资料</a></span>
                </div>
            </div>
            <div class="row team-intro">
                <div class="col-xs-offset-2 col-xs-2">
                    简介
                </div>
                <div class="col-xs-8">
                    <?= $team_info["content"] ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container div2 none">
    <div class="row">
        <div class="col-xs-12 col-md-offset-4 col-md-4">
            <?php foreach ($user_list as $user_info): ?>
                <div class="row member">
                    <div class="col-xs-12">
                        <?= $user_info["name"] ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<div class="container div1 block">
    <div class="row">
        <div class="col-xs-12 col-md-offset-4 col-md-4">
            <? foreach ($project_list as $project_info): ?>
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-1">
                        <img src="<?= base_url() ?>resource/images/big_circular.png" alt="" width="75%">
                    </div>
                    <div class="col-xs-9 date">
                        <span><?= $project_info["time"] ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-1">
                        <img src="<?= base_url() ?>resource/images/small_circular.png" alt="" width="75%">
                    </div>
                    <div class="col-xs-4 project-title">
                        <span><?= $project_info["user_name"] ?></span>
                    </div>
                    <div class="col-xs-5 project-title">
                        <a href="<?= base_url("index.php/" . PROJECT_SHOW_PAGE . "?id=" . $project_info["id"]) ?>"><?= $project_info["project_name"] ?></a>
                    </div>
                </div>
            <? endforeach ?>
        </div>
    </div>
</div>
</div>
<div class="add">
    <a class="add-href" href="<?= base_url("index.php/" . PROJECT_ADD_PAGE . "?id=" . $team_info["id"]) ?>"><i
            class="iconfont click">
            &#xe720;</i></a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12 footer">
            <div class="col-xs-4 col-md-4">
                <button class="btn btn1 click">
                    <i class="iconfont click">&#xe608;</i><br>
                    <span>项目</span>
                </button>
            </div>
            <div class="col-xs-4 col-md-4">
                <button class="btn btn2">
                    <i class="iconfont">&#xe604;</i><br>
                    <span>成员</span>
                </button>
            </div>
            <div class="col-xs-4 col-md-4">
                <button class="btn btn3">
                    <i class="iconfont">&#xe66f;</i><br>
                    <span>团队</span>
                </button>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>resource/js/jquery-1.11.3.min.js"></script>
<script>
    $(".btn1").click(function (event) {
        $(".btn1 .iconfont").addClass('click');
        $(".btn2 .iconfont").removeClass('click');
        $(".btn3 .iconfont").removeClass('click');
        $(this).addClass('click');
        $(".btn2").removeClass('click');
        $(".btn3").removeClass('click');
        $(".div1").removeClass('none').addClass('block');
        $(".div2").removeClass('block').addClass('none');
        $(".div3").removeClass('block').addClass('none');
        $(".add").removeClass('none').addClass('block');
        $(".add-href").attr("href", "<?= base_url("index.php/" . PROJECT_ADD_PAGE . "?id=" . $team_info["id"]) ?>");
    });
    $(".btn2").click(function (event) {
        $(".btn2 .iconfont").addClass('click');
        $(".btn1 .iconfont").removeClass('click');
        $(".btn3 .iconfont").removeClass('click');
        $(this).addClass('click');
        $(".btn1").removeClass('click');
        $(".btn3").removeClass('click');
        $(".div2").removeClass('none').addClass('block');
        $(".div1").removeClass('block').addClass('none');
        $(".div3").removeClass('block').addClass('none');
        $(".add").removeClass('none').addClass('block');
        $(".add-href").attr("href", "<?= base_url("index.php/" . MEMBER_ADD_PAGE . "?id=" . $team_info["id"]) ?>");
    });
    $(".btn3").click(function (event) {
        $(".btn3 .iconfont").addClass('click');
        $(".btn2 .iconfont").removeClass('click');
        $(".btn1 .iconfont").removeClass('click');
        $(this).addClass('click');
        $(".btn2").removeClass('click');
        $(".btn1").removeClass('click');
        $(".div3").removeClass('none').addClass('block');
        $(".div2").removeClass('block').addClass('none');
        $(".div1").removeClass('block').addClass('none');
        $(".add").removeClass('block').addClass('none');
    });
</script>
</body>
</html>