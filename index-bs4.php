<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base target="_blank">
    <title>正式-测试对照表</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/popper.js/1.14.4/umd/popper.min.js"></script>
    <script src="//cdn.bootcss.com/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
    .container {max-width: 1200px;}
    td ul {list-style: none;}
    .table>tbody>tr>td {vertical-align:middle;}
    </style>
</head>
<body>
    <div class="container">
        <p></p>
        <h2 class="text-center"><small>正式-测试环境对照表</small></h2>
        <p></p>
        <div class="btn-group btn-group-sm">
            <a class="btn btn-danger" href="http://xtest.92fox.cn:3000/explore/repos">Git仓库</a>
            <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">开发与部署规范</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="md.php?r=php">php代码规范</a>
                    <a class="dropdown-item" href="http://codeguide.bootcss.com/">H5代码规范</a>
                    <a class="dropdown-item" href="md.php?r=server">服务器配置规范</a>
                </div>
            </div>
            <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">API接口文档</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="http://apidoc.92fox.cn/index.php?s=/10">芒果游戏接口（台湾版）</a>
                    <a class="dropdown-item" href="http://apidoc.92fox.cn/index.php?s=/11">小宝当皇帝SDK</a>
                    <a class="dropdown-item" href="https://docs.qq.com/doc/Dc1pwcFFqZUlCTVpQ">msdk.7724.com-Redis规范</a>
                    <a class="dropdown-item" href="http://apidoc.92fox.cn/index.php?s=/5">7724游戏盒子接口（新）</a>
                    <a class="dropdown-item" href="http://xtest.320.io:3090/apidoc/hezi/index.html">7724游戏盒子接口（旧）</a>
                    <a class="dropdown-item" href="http://apidoc.92fox.cn/index.php?s=/4">7724盒子IOS送审接口</a>
                    <!--
                    <a href="http://apidoc.92fox.cn/index.php?s=/1">二狐SDK API接口</a>
                    <a href="http://apidoc.92fox.cn/index.php?s=/2">UCenter登录注册接口</a> 
                    <a href="http://apidoc.92fox.cn/index.php?s=/9">7724游戏盒子接口（探索版）</a>
                    <a href="http://apidoc.92fox.cn/index.php?s=/3">游多多接口</a>
                    <a href="http://apidoc.92fox.cn/index.php?s=/8">芒果游戏接口（泰语版）</a>
                    -->
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="http://apidoc.92fox.cn/">文档-新增编辑</a>
                </div>
            </div>
        </div>
        <div class="btn-group btn-group-sm">
            <a class="btn btn-dark" href="http://xtest.92fox.cn:3000/explore/repos">PHP Debug</a>
            <a class="btn btn-dark" href="http://localhost/projectmap/phpinfo.php">PHPINFO</a>
        </div>
        
        <p></p>
        
        <div class="table-responsive">
        <table class="table table-hover table-bordered table-sm">
            <thead class="alert alert-primary">
                <tr class="text-center">
                    <th class="col-lg-3 col-md-3">项目</th>
                    <th class="col-lg-3 col-md-3">正式地址</th>
                    <th class="col-lg-2 col-md-2">测试地址</th>
                    <th class="col-lg-1 col-md-1">Git仓库</th>
                    <th class="col-lg-3 col-md-3">开发hosts配置</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>7724官网WEB，游戏盒接口</td>
                    <td><a href="http://www.7724.com">www.7724.com</a> <a href="http://www.7724.com/xmsb/index/login">后台</a></td>
                    <td title="zwl 123456">
                        <a href="http://xtest.92fox.cn:90">内网:90</a>
                        <a href="http://xtest.320.io:3090">外网:3090</a>
                        <a href="http://xtest.92fox.cn:90/xmsb/index/login">后台</a>
                    </td>
                    <td class="text-center"><a href="http://xtest.92fox.cn:3000/7724/www.7724.com">Goto</a></td>
                    <td rowspan="15">
                        <ul>
                            <li>127.0.0.1 <a href="http://www.7724.local">www.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://m.7724.local">m.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://i.7724.local/xmsb/index/login">i.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://open.7724.local">open.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://opengame.7724.local">opengame.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://miniprogram.7724.local">miniprogram.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://mprogram.7724.local">mprogram.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://msdk.7724.local">msdk.7724.local</a></li>
                            <li>127.0.0.1 <a href="http://www.77you.local">www.77you.local</a></li>
                            <li>127.0.0.1 <a href="http://th.witgame.local">th.witgame.local</a></li>
                            <li>127.0.0.1 <a href="http://tw.witgame.local">tw.witgame.local</a></li>
                            <li>127.0.0.1 <a href="http://api.gamer10.local">api.gamer10.local</a></li>
                            <li>127.0.0.1 <a href="http://www.gamer10.local">www.gamer10.local</a></li>
                            <li>127.0.0.1 <a href="http://www.yxdaren.local">www.yxdaren.local</a></li>
                            <li>127.0.0.1 <a href="http://videox.mini.7724.local">videox.mini.7724.local</a></li>
                            <!--
                            <li>127.0.0.1 <a href="http://mxhdw.92fox.local">mxhdw.92fox.local</a></li>
                            <li>127.0.0.1 <a href="http://www.play600.local">www.play600.local</a></li>
                            <li>127.0.0.1 <a href="http://lsqq.play600.local/xmsb/index/login">lsqq.play600.local</a></li>
                            <li>127.0.0.1 <a href="http://finance.92fox.local">finance.92fox.local</a></li>
                            <li>127.0.0.1 <a href="http://passport.92fox.local">passport.92fox.local</a></li>
                            <li>127.0.0.1 <a href="http://my.92fox.local">my.92fox.local</a></li>
                            <li>127.0.0.1 <a href="http://sdk.92fox.local/admin/index">sdk.92fox.local</a></li>
                            <li>127.0.0.1 <a href="http://passport.pipaw.local">passport.pipaw.local</a></li>
                            <li>127.0.0.1 <a href="http://sdk.pipaw.local/user/login">sdk.pipw.local</a></li>
                            <li>127.0.0.1 <a href="http://m.92fox.local">m.92fox.local</a></li>
                            <li>127.0.0.1 <a href="http://backmanage.92fox.local">backmanage.92fox.local</a></li>
                            <li>127.0.0.1 <a href="http://www.92fox.local">www.92fox.local</a></li>
                            -->
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>7724官网WAP</td>
                    <td><a href="http://m.7724.com">m.7724.com</a></td>
                    <td><a href="http://xtest.92fox.cn:91">内网:91</a> <a href="http://xtest.320.io:3091">外网:3091</a></td>
                    <td class="text-center"><a href="http://xtest.92fox.cn:3000/7724/m.7724.com">Goto</a></td>
                    
                </tr>
                <tr>
                    <td>7724游戏盒后台</td>
                    <td><a href="http://i.7724.com/xmsb/index/login">i.7724.com</a></td>
                    <td title="xumh 123456"><a href="http://xtest.92fox.cn:92/xmsb/index/login">内网:92</a> <a href="http://xtest.320.io:3092/xmsb/index/login">外网:3092</a></td>
                    <td class="text-center"><a href="http://xtest.92fox.cn:3000/7724/i.7724.com">Goto</a></td>
                    
                </tr>
                <tr>
                    <td>7724开放平台</td>
                    <td><a href="http://open.7724.com">open.7724.com</a></td>
                    <td><a href="http://xtest.92fox.cn:93">内网:93</a> <a href="http://xtest.320.io:3093">外网:3093</a></td>
                    <td class="text-center"><a href="http://xtest.92fox.cn:3000/7724/open.7724.com">Goto</a></td>
                    
                </tr>
                <tr>
                    <td class="text-left">7724 CPS渠道推广</td>
                    <td><a href="http://opengame.7724.com">opengame.7724.com</a> *.open.7724.com</td>
                    <td><a href="http://xtest.92fox.cn:94">内网:94</a> <a href="http://xtest.320.io:3094">外网:3094</a></td>
                    <td class="text-center"><a href="http://xtest.92fox.cn:3000/7724/opengame.7724.com">Goto</a></td>
                    
                </tr>
                <tr>
                    <td class="text-left">7724推广小程序</td>
                    <td><a href="http://miniprogram.7724.com">miniprogram.7724.com</a> </td>
                    <td><a href="http://xtest.92fox.cn:96">内网:96</a></td>
                    <td class="text-center"><a href="http://xtest.92fox.cn:3000/7724/miniprogram.7724.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">小程序</td>
                    <td><a href="http://mprogram.7724.com">mprogram.7724.com</a> </td>
                    <td><a href="http://xtest.92fox.cn:120">内网:120</a> <a href="http://xtest.320.io:3120">外网:3120</a></td>
                    <td class="text-center"><a href="http://xtest.92fox.cn:3000/7724/mprogram.7724.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">MSDK-小程序</td>
                    <td><a href="http://msdk.7724.com">msdk.7724.com</a> </td>
                    <td><a href="http://xtest.92fox.cn:122">内网:122</a> <a href="http://xtest.320.io:3122">外网:3122</a></td>
                    <td class="text-center"><a href="http://xtest.92fox.cn:3000/7724/msdk.7724.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">七七游企业官网</td>
                    <td><a href="http://www.77you.net">www.77you.net</a> </td>
                    <td><a href="http://xtest.92fox.cn:125">内网:125</a> <a href="http://xtest.320.io:3125">外网:3125</a></td>
                    <td class="text-center"><a href="http://xtest.92fox.cn:3000/7724/www.77you.net">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">芒果游戏 - 泰语版</td>
                    <td><a href="http://th.witgame.com">th.witgame.com</a> </td>
                    <td><a href="http://xtest.92fox.cn:116">内网:116</a> <a href="http://xtest.320.io:3116">外网:3116</a></td>
                    <td class="text-center"><a href="http://xtest.92fox.cn:3000/7724/th.witgame.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">芒果游戏 - 台湾版</td>
                    <td><a href="http://tw.witgame.com">tw.witgame.com</a> </td>
                    <td><a href="http://xtest.92fox.cn:121">内网:121</a> <a href="http://xtest.320.io:3121">外网:3121</a></td>
                    <td class="text-center"><a href="http://xtest.92fox.cn:3000/7724/tw.witgame.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">二狐落地页推广</td>
                    <td><a href="http://www.gamer10.com">www.gamer10.com</a></td>
                    <td><a href="http://xtest.92fox.cn:105">内网:105</a></td>
                    <td class="text-center" rowspan="2"><a href="http://xtest.92fox.cn:3000/erhu/www.gamer10.com">Goto</a></td>
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
                    <td class="text-center"><a href="http://xtest.92fox.cn:3000/other/www.yxdaren.com.git">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">小程序-探索视觉</td>
                    <td><a href="http://videox.mini.7724.com/admin/login">videox.mini.7724.com</a></td>
                    <td title=""><a href="http://xtest.92fox.cn:126/admin/login">内网:126</a></td>
                    <td class="text-center"><a href="http://xtest.92fox.cn:3000/7724/videox.mini.7724.com">Goto</a></td>
                </tr>
		<!--
		<tr>
                    <td class="text-left">梦想海岛王官网</td>
                    <td><a href="http://sdk.92fox.com/admin/index">mxhdw.92fox.com</a></td>
                    <td title="jason 123456"><a href="http://xtest.92fox.cn:107">内网:107</a> <a href="http://xtest.92fox.cn:107/Authlogin">后台</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/erhu/mxhdw.92fox.com.git">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">游多多</td>
                    <td><a href="http://www.play600.com">www.play600.com</a></td>
                    <td title=""><a href="http://xtest.92fox.cn:108">内网:108</a> <a href="http://xtest.320.io:3108">外网:3108</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/erhu/www.play600.com.git">Goto</a></td>
                </tr>
		<tr>
                    <td class="text-left">qq管理项目</td>
                    <td><a href="http://lsqq.play600.com/xmsb/index/login">lsqq.play600.com</a></td>
                    <td><a href="http://xtest.92fox.cn:100/xmsb/index/login">内网:100</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/erhu/lsqq.play600.com">Goto</a></td>
                    
                </tr>
                <tr>
                    <td class="text-left">财务对账系统</td>
                    <td><a href="http://finance.92fox.com">finance.92fox.com</a></td>
                    <td title=""><a href="http://xtest.92fox.cn:114">内网:114</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/other/finance.git">Goto</a></td>
                </tr>

                <tr>
                    <td class="text-left">二狐WEB版用户中心</td>
                    <td><a href="http://passport.92fox.com">passport.92fox.com</a></td>
                    <td><a href="http://xtest.92fox.cn:85">内网:85</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/erhu/passport.92fox.com">Goto</a></td>
                    
                </tr>
                <tr>
                    <td class="text-left">二狐APP内置用户中心</td>
                    <td><a href="http://my.92fox.com">my.92fox.com</a></td>
                    <td><a href="http://xtest.92fox.cn:86">内网:86</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/erhu/my.92fox.com">Goto</a></td>
                    
                </tr>
                <tr>
                    <td class="text-left">二狐SDK管理后台</td>
                    <td><a href="http://sdk.92fox.com/admin/index">sdk.92fox.com</a></td>
                    <td><a href="http://xtest.92fox.cn:88/admin/user/login">内网:88</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/erhu/sdk.92fox.com.git">Goto</a></td>
                    
                </tr>
                <tr>
                    <td class="text-left">二狐APP内置支付与琵琶网用户中心</td>
                    <td><a href="http://passport.pipaw.com">passport.pipaw.com</a></td>
                    <td><a href="http://xtest.92fox.cn:89">内网:89</a> <a href="http://xtest.320.io:3089">外网:3089</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/pipaw/passport.pipaw.com">Goto</a></td>
                    
                </tr>
                <tr>
                    <td class="text-left">琵琶网SDK</td>
                    <td><a href="http://sdk.pipaw.com/user/login">sdk.pipaw.com</a></td>
                    <td><a href="http://xtest.92fox.cn:78/user/login">内网:78</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/pipaw/sdk.pipaw.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">二狐官网WAP</td>
                    <td><a href="http://m.92fox.com">m.92fox.com</a></td>
                    <td><a href="http://xtest.92fox.cn:82">内网:82</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/erhu/92fox.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">二狐官网管理后台</td>
                    <td><a href="http://backmanage.92fox.com">backmanage.92fox.com</a></td>
                    <td title="admin 123456"><a href="http://xtest.92fox.cn:83">内网:83</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/erhu/92fox.com">Goto</a></td>
                </tr>
                <tr>
                    <td class="text-left">二狐官网WEB</td>
                    <td><a href="http://www.92fox.com">www.92fox.com</a></td>
                    <td><a href="http://xtest.92fox.cn:81">内网:81</a></td>
                    <td><a href="http://xtest.92fox.cn:3000/erhu/92fox.com">Goto</a></td>
                </tr>
		-->
            </tbody>
        </table>
        </div>
        
        <div class="alert alert-info">
            <b>测试Redis配置：</b><br>
            192.168.1.200:6379 <br>
            pass: 78234736342#3463443!353246346fgweyioweh34k64g79!!545@redis.io <br>
            <hr>
            db0-保留（redis非具体项目测试使用）<br>
            db1-yii2<br>
            db2-游多多（www.play600.com）<br>
            db3-芒果游戏-泰语版 <br>
            db5-芒果游戏-台湾版
        </div>
        <div class="alert alert-success">
            <b>测试服务器配置：</b><br>
            CentOS/7.4  Nginx/1.12.1  PHP/5.6.35  Mysql/5.7.18
        </div>
        <div class="alert alert-danger">
            特别注意：7724项目和琵琶网sdk项目正式服务器的php版本目前只有5.3，开发环境需做版本支持测试！<<br>
            1、厦门测试数据库 27.154.242.242:30023<br>
            2、广州测试数据库 dev.92fox.cn:3306 root 123456 （此账号仅内网可访问）<br>
            3、内网测试服务器ip 192.168.1.200，外网测试均在路由做了端口映射（30开头）。出于安全考虑，仅对有外网测试需求（比如支付回调）的项目提供外网测试地址。
        </div>
    </div>
</body>
</html>
