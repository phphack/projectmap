## <center>服务器配置规范</center>
---

### 1 软件安装

#### 所有软件在可以的情况下，都应安装在 /usr/local/ 目录下（比如）
- Nginx：/usr/local/nginx  
- MySQL：/usr/local/mysql  
- PHP：/usr/local/php

### 2 数据存储

#### 数据根目录 /data
#### 网站根目录 /data/www
#### 日志根目录 /data/log
- Nginx日志根目录 /data/log/nginx  
- cron日志根目录 /data/log/cron  

#### shell脚本根目录 /data/script
#### 备份目录 /data/backup

### 3 软件配置

#### mysql关键配置

```
[mysqld]
port = 3306
socket = /tmp/mysql.sock
datadir = /usr/local/mysql/var

max_connections = 2000
max_connect_errors = 100
open_files_limit = 65535

log-bin=mysql-bin
binlog_format=mixed
server-id   = 1 
expire_logs_days = 10

; 默认表引擎
default_storage_engine = InnoDB

; 使用独立表空间
; 如果之前没有开启，步骤为下
; 1、mysqldump -uroot -pxxxxxx dbname > /tmp/dbname.sql
; 2、修改配置
; 3、service mysql restart
; 4、mysql -uroot -p123 dbname < /tmp/dbname.sql
innodb_file_per_table = 1

; 错误日志
log_error = /data/log/mysql-error.log
```

#### php关键配置

```
[PHP]
log_errors = On
error_log = /data/log/php-error.log
max_execution_time = 120
expose_php = Off
disable_functions = eval,exec,passthru,shell_exec,system,chroot,chgrp,chown

[Date]
date.timezone = Asia/Shanghai
```

### 4 日志

#### 软件的错误日志与慢查询日志等均放在/data/log根目录下，常规日志存放在与软件名对应目录。

```
/data/log
├── cron
│   ├── www.7724.com-hongbao-totalcount
│   └── www.7724.com-hongbao-uppower
├── nginx
│   ├── www.7724.com
│   └── i.7724.com
├── mysql-error.log
├── mysql-slow.log
├── nginx-error.log
├── php-error.log
└── php-slow.log
```
#### nginx日志切割脚本

```
#!/bin/bash
# Nginx日志切割
# 在/data/log/nginx目录下生成类似 www.7724.com www.7724.com20170915 的日志，保留前3天数据
# 0 0 * * * /data/script/nginx-logcut.sh

LOG_PATH=/data/log/nginx
PID=/var/run/nginx.pid
YESTERDAY=`date -d "yesterday" +%Y%m%d`

for i in `find ${LOG_PATH} -maxdepth 1 -type f|grep -v '[0-9]$'`; do
    mv $i $i${YESTERDAY}
done

kill -USR1 `cat ${PID}`

find ${LOG_PATH} -mtime +2 -name "*[0-9][0-9]" | xargs rm -f
exit 0

```
---
<center>广州舜邦网络科技有限公司 &lt;@author Jason&gt;</center>
