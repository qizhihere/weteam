<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="<?= base_url() ?>resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>resource/css/add_member.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-2">
            <a class="btn btn-return" href="<?= base_url("index.php/" . TEAM_PAGE . "?id=" . $id) ?>"><i
                    class="iconfont">&#xe613;</i></a>
        </div>
        <div class="col-xs-10">
            <form role="search" method="post" action="<?= base_url("index.php/" . MEMBER_SEARCH_API) ?>">
                <input type="hidden" class="form-search" name="id" value="<?= $id ?>">
                <input type="text" class="form-search" placeholder="请输入成员邮箱" name="mail">
                <button class="btn-search" type="submit"><i class="iconfont">&#xe761;</i></button>
            </form>
        </div>
    </div>
</div>
</body>
</html>