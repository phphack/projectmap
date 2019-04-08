<?php
$config = require(__DIR__ . '/config.php');
$logPath = $config['phpErrorLog'];
if (isset($_POST['act'])) {
    file_put_contents($logPath, '');
    exit('ok');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP错误日志</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
    #clearLog {position:fixed;right: 250px; top: 100px; font-size: 17px;}
    #content {background-color:black;color:white;padding: 10px;margin-bottom: 30px;font-size:14px;white-space: pre-wrap;white-space: -moz-pre-wrap;white-space: -pre-wrap;white-space: -o-pre-wrap; word-wrap: break-word;}
    </style>
</head>
<body> 
    <div class="container">
        <h3 class="text-center">测试环境 PHP Debug</h3>
        <pre id="content">
        <?php
        $log = file_get_contents($logPath);
        echo iconv('gb2312', 'utf-8', $log);
        ?>
        </pre>
        <button class="btn btn-danger" id="clearLog">清空日志</button>
    </div>
    <script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script>
    $("#clearLog").click(function() {
        $.post("<?=$_SERVER['PHP_SELF']?>", {act:"clearLog"}, function(data) {
            if (data == 'ok') {
                window.location.href = window.location.href;
            }
        });
    });
    </script>
</body>
</html>