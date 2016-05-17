<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0"/>
    <title>提示</title>
    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            font-size: 100%;
            color: #444;
            background: #fff;
            -webkit-font-smoothing: antialiased;
            -webkit-tap-highlight-color: transparent;
        }

        *, *:before, *:after {
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', Arial, 'Hiragino Sans GB', 'Hiragino Sans GB W3', sans-serif;
        }

        .charge-result-container {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 1em;
            margin: auto;
            text-align: center;
        }

    </style>
</head>
<body>
<div class="charge-result-container">
    <?php echo $result; ?>
</div>
<script>
    function redirect() {
        window.location.href = "<?php echo base_url("index.php/" . $url); ?>";
    }
    setTimeout(redirect, 2000);
</script>
</body>
</html>