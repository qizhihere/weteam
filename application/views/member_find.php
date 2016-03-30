<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="<?= base_url() ?>resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>resource/css/find_member.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-2">
            <a href="#"><i class="iconfont">&#xe613;</i></a>
        </div>
        <div class="col-xs-10">
            <form role="search">
                <input type="text" class="form-search" placeholder="请输入成员邮箱">
                <button class="btn-search" type="submit"><i class="iconfont">&#xe761;</i></button>
            </form>
        </div>
    </div>
    <div class="row row-confirm">
        <div class="col-xs-4 name">
            沈浙
        </div>
        <div class="col-xs-offset-3 col-xs-5 confirm">
            <button class="btn-search" type="submit"><i class="iconfont icon-confirm">&#xe648;</i><span
                    class="icon-confirm">确认添加</span></button>
        </div>
    </div>
</div>
</body>
</html>