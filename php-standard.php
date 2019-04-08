<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP代码开发规范</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//cdn.bootcss.com/highlight.js/9.12.0/styles/tomorrow-night-eighties.min.css" rel="stylesheet">  
    <style>
    div.container {width: 900px;}
    pre {font-size: 15px; border:none; padding: 0px}
    </style>
</head>
<body> 
    <div class="container">
    <?php
        require __DIR__ . '/vendor/autoload.php';
        $parser = new \cebe\markdown\GithubMarkdown();
        $markdown = file_get_contents('php-standard.md');
        echo $parser->parse($markdown);
    ?>
    </div>
    <script src="https://cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>  
    <script >hljs.initHighlightingOnLoad();</script>
    <script>
    var aTagAttr = [].slice.apply(document.getElementsByTagName("a"));
    aTagAttr.forEach(function (e, i) {
        e.href.indexOf("_blank") > -1 ? e.target = "_blank" : null;
    });
    </script>
</body>
</html>