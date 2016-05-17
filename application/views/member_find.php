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

        </div>
        <div class="col-xs-10">
            <form role="search">
                <input type="text" class="form-search" placeholder="请输入成员邮箱">
                <button class="btn-search" type="submit"><i class="iconfont">&#xe761;</i></button>
            </form>
        </div>
    </div>
    <?php if (!$user_list): ?>
        <div class="row row-confirm">
            <p>未搜到成员</p>
        </div>
    <?php else: ?>
        <?php foreach ($user_list as $user_info): ?>
            <div class="row row-confirm">
                <div class="col-xs-4 name">
                    <?= $user_info["name"] ?>
                </div>
                <div class="col-xs-offset-3 col-xs-5 confirm">
                    <button class="btn-add" type="submit" data-id="<?= $user_info["id"] ?>"><i
                            class="iconfont icon-confirm">&#xe648;</i><span
                            class="icon-confirm">确认添加</span></button>
                </div>
            </div>
        <? endforeach ?>
    <?php endif ?>
</div>
</body>
<script src="<?= base_url() ?>/resource/js/jquery-1.11.3.min.js"></script>
<script>
    $(".btn-add").click(function (e) {
        e.preventDefault();
        var id = $(this).data("id");
        $.post("member_add_api", {
            individual_id: id,
            team_id: "<?= $id ?>"
        }, function (result) {
            $(this).remove();
        });
    });
</script>
</html>