<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base target="_blank">
    <title>正式-测试对照表</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
    .container {width:1310px;}
    td {text-align: center;}
    td ul {list-style: none;}
    td ul > li {line-height:2.5;}
    .table>tbody>tr>td {vertical-align:middle;}
    h4.crumb {color: #B4B4B4;}
    .inline {display:inline}
    .btn-black {background-color:gray;color:white;}
    .btn-black:hover {background-color:black;color:white;}
    </style>
</head>
<body>
    <?php $domain = explode(':', $_SERVER['HTTP_HOST'])[0]; ?>
    <div class="container">
        <h3 class="text-center">正式-测试环境对照表</h3>
        <hr>
        <h4 class="crumb">
            <!-- <a class="btn btn-danger" href="http://27.154.242.242:8081">厦门Git仓库</a> -->
            <a class="btn btn-danger" href="http://<?= $domain ?>:3000/explore/repos">Git仓库</a>
            <div class="dropdown inline">
                <button class="btn btn-success" data-toggle="dropdown">
                    开发与部署规范 <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="md.php?r=php">php代码规范</a>
                    </li>
                    <li>
                        <a href="http://codeguide.bootcss.com/">H5代码规范</a>
                    </li>                    
                    <li>
                        <a href="md.php?r=server">服务器配置规范</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown inline">
                <button class="btn btn-info" data-toggle="dropdown">
                    API接口文档 <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="http://apidoc.92fox.cn/index.php?s=/10">XGame</a>
                    </li>
                    <li>
                        <a href="http://apidoc.92fox.cn/index.php?s=/5">7724游戏盒子接口（新）</a>
                    </li>
                    <li>
                        <a href="http://xtest.320.io:3090/apidoc/hezi/index.html">7724游戏盒子接口（旧）</a>
                    </li>
                    <li>
                        <a href="http://apidoc.92fox.cn/index.php?s=/4">7724盒子IOS送审接口</a>
                    </li>
                    <li>
                        <a href="http://apidoc.92fox.cn/index.php?s=/11">小游戏MSDK</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="http://apidoc.92fox.cn/">新增编辑</a>
                    </li>
                </ul>
            </div>
            <a class="btn btn-black" href="php-debug.php">PHP Debug</a>
            <a class="btn btn-warning" href="phpinfo.php">PHPINFO</a>
        </h4>
        <table class="table table-hover table-bordered">
            <thead>
                <tr class="info">
                    <th class="col-md-3 text-center">项目名称</th>
                    <th class="col-md-3 text-center">正式地址</th>
                    <th class="col-md-2 text-center">测试人员测试地址</th>
                    <th class="col-md-1 text-center">Git仓库</th>
                    <th class="col-md-3 text-center">本地HOSTS配置（须包含local）</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-left">7724官网WEB，游戏盒接口</td>
                    <td><a href="http://www.7724.com">www.7724.com</a> <a href="http://www.7724.com/xmsb/index/login">后台</a></td>
                    <td title="zwl 123456">
                        <a href="http://xtest.92fox.cn:90">内网:90</a>
                        <a href="http://xtest.320.io:3090">外网:3090</a>
                        <a href="http://xtest.92fox.cn:90/xmsb/index/login">后台</a>
                    </td>
                    <td><a href="http://xtest.92fox.cn:3000/7724/www.7724.com">Goto</a></td>
                    <td style="text-align:left">
                        <ul>
                            <li>127.0.0.1 <a href="http://www.7724.local">www.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://m.7724.local">m.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://i.7724.local/xmsb/index/login">i.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://open.7724.local">open.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://opengame.7724.local">opengame.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://www.xgamefun.local">www.xgamefun.local</a></li>
                            <li>127.0.0.1 <a href="http://miniprogram.7724.local">miniprogram.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://mprogram.7724.local">mprogram.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://www.77you.local">www.77you.local</a></li>
                            <li>127.0.0.1 <a href="http://api.gamer10.local">api.gamer10.local</a></li>
                            <li>127.0.0.1 <a href="http://www.gamer10.local">www.gamer10.local</a></li>
                            <li>127.0.0.1 <a href="http://www.yxdaren.local">www.yxdaren.local</a></li>
                            <li>127.0.0.1 <a href="http://videox.mini.7724.local">videox.mini.7724.local</a></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="text-left">7724官网WAP</td>
                    <td><a href="http://m.7724.com">m.7724.com</a></td>
                    <td><a href="http://xtest.92fox.cn:91">内网:91</a> <a href="http://xtest.320.io:3091">外网:3091</a></td>
                    <td><a href="http://<?= $domain ?>:3000/7724/m.7724.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">7724游戏盒后台</td>
                    <td><a href="http://i.7724.com/xmsb/index/login">i.7724.com</a></td>
                    <td title="xumh 123456"><a href="http://xtest.92fox.cn:92/xmsb/index/login">内网:92</a> <a href="http://xtest.320.io:3092/xmsb/index/login">外网:3092</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/7724/i.7724.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">7724开放平台</td>
                    <td><a href="http://open.7724.com">open.7724.com</a></td>
                    <td><a href="http://xtest.92fox.cn:93">内网:93</a> <a href="http://xtest.320.io:3093">外网:3093</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/7724/open.7724.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">7724 CPS渠道推广</td>
                    <td><a href="http://opengame.7724.com">opengame.7724.com</a> *.open.7724.com</td>
                    <td><a href="http://xtest.92fox.cn:94">内网:94</a> <a href="http://xtest.320.io:3094">外网:3094</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/7724/opengame.7724.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">XGame</td>
                    <td><a href="http://www.xgamefun.com">www.xgamefun.com</a> </td>
                    <td><a href="http://xtest.92fox.cn:121">内网:121</a> <a href="http://xtest.320.io:3121">外网:3121</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/7724/www.xgamefun.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">7724推广小程序</td>
                    <td><a href="http://miniprogram.7724.com">miniprogram.7724.com</a> </td>
                    <td><a href="http://xtest.92fox.cn:96">内网:96</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/7724/miniprogram.7724.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">小程序</td>
                    <td><a href="http://mprogram.7724.com">mprogram.7724.com</a> </td>
                    <td><a href="http://xtest.92fox.cn:120">内网:120</a> <a href="http://xtest.320.io:3120">外网:3120</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/7724/mprogram.7724.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">七七游企业官网</td>
                    <td><a href="http://www.77you.net">www.77you.net</a> </td>
                    <td><a href="http://xtest.92fox.cn:125">内网:125</a> <a href="http://xtest.320.io:3125">外网:3125</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/7724/www.77you.net">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">二狐落地页推广</td>
                    <td><a href="http://www.gamer10.com">www.gamer10.com</a></td>
                    <td><a href="http://xtest.92fox.cn:105">内网:105</a></td>
                    <td rowspan=2><a href="http://xtest.92fox.cn:3000/erhu/www.gamer10.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">二狐落地页API</td>
                    <td><a href="http://api.gamer10.com">api.gamer10.com</a></td>
                    <td><a href="http://xtest.92fox.cn:106">内网:106</a></td>
                </tr>
                <tr>
                    <td class="text-left">IOS版审</td>
                    <td><a href="http://www.yxdaren.com">www.yxdaren.com</a></td>
                    <td title=""><a href="http://xtest.92fox.cn:112">内网:112</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/other/www.yxdaren.com.git">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">小程序-探索视觉</td>
                    <td><a href="http://videox.mini.7724.com/admin/login">videox.mini.7724.com</a></td>
                    <td title=""><a href="http://xtest.92fox.cn:126/admin/login">内网:126</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/7724/videox.mini.7724.com">Goto</a></td>
                </tr>
            </tbody>
        </table>
        <div class="alert alert-info">
            <p>测试Redis配置：</p>
            <p>192.168.1.200:6379</p>
            <p>pass: 78234736342#3463443!353246346fgweyioweh34k64g79!!545@redis.io</p>
            <p>
                db0-保留（redis非具体项目测试使用）<br>
                db1-yii2<br>
                db2-游多多（www.play600.com）<br>
                db3-芒果游戏-泰语版 <br>
                db5-XGame
            <p>
        </div>
        <div class="alert alert-success">
            <p>测试服务器配置：</p>
            <p>CentOS/7.4  Nginx/1.12.1  PHP/5.6.35  Mysql/5.7.18</p>
        </div>
        <div class="alert alert-danger">
            <p>特别注意：7724项目和琵琶网sdk项目正式服务器的php版本目前只有5.3，开发环境需做版本支持测试！</p>
            <p>1、厦门测试数据库 27.154.242.242:30023</p>
            <p>2、广州测试数据库 dev.92fox.cn:3306 root 123456 （此账号仅内网可访问）</p>
            <p>3、内网测试服务器ip 192.168.1.200，外网测试均在路由做了端口映射（30开头）。出于安全考虑，仅对有外网测试需求（比如支付回调）的项目提供外网测试地址。</p>
        </div>
    </div>
    <script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    rowspan = $("tbody").find("tr").length;
    $("tbody > tr:first > td:last").attr("rowspan",rowspan);
    </script>
</body>
</html>
