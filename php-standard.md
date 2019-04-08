## <center>PHP代码开发规范</center>
---

### 1 所有代码需严格遵守 [PS1](https://segmentfault.com/a/1190000002521577?_blank "Basic Coding Standard") 和 [PS2](https://segmentfault.com/a/1190000002521620?_blank "Coding Style Guide") 规范
- #### 特别注意：
1 代码必须使用4个空格符而不是 tab键 进行缩进。  
2 应该使用关键词 `elseif` 代替所有 `else if` ，以使得所有的控制关键字都像是单独的一个词。  
3 类的属性命名和变量命名遵循小写开头的驼峰式 ($camelCase) 。

### 2 接口

- #### 2.1 前后端分离
H5前端不能出现php代码，用`$.ajax` `$.post` `fetch` 等方式获取数据。

- #### 2.2 接口命名规范
统一用code表示错误码，msg表示错误信息。  
正确输出：
统一用integer类型的0，表示正确。
```
{"code":0, "msg":"请求成功"}
```
```  
{"code":0, "msg":"更新成功"}
```
```
{"code":0, "msg":"插入成功"}
```
```
{"code":0, "msg":"删除成功"}
```
正确输出的额外数据，需要统一放在data字段
```
{
    "code": 0,
    "msg": "请求成功",
    "data": [
        {
            "uid": "1",
            "uname": "boy"
        },
        {
            "uid": "2",
            "uname": "girl"
        }
    ]
}
```
当data里包含一个二维数组和其他信息时，二维数组默认保存在list里
```
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "list": [
            {
                "uid": "1",
                "uname": "boy"
            },
            {
                "uid": "2",
                "uname": "girl"
            }
        ],
        "groupid": 6
    }
}
```
当data里包含多个二维数组和其他信息时，命名规则xxxList
```
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "userList": [
            {
                "uid": "1",
                "uname": "boy"
            },
            {
                "uid": "2",
                "uname": "girl"
            }
        ],
         "newsList": [
            {
                "id": "1",
                "title": "title1"
            },
            {
                "id": "2",
                "title": "title2"
            }
        ]
    }
}
```
分页信息变量规范（当前页page 总页数pageCount 每页显示行数pageSize）
```
{
    "code": 0,
    "msg": "请求成功",
    "data": {
        "list": [
            {
                "uid": "1",
                "uname": "boy"
            },
            {
                "uid": "2",
                "uname": "girl"
            }
        ],
        "page": 1,
        "pageCount": 200
    }
}
```
错误输出：
错误输出的code为5位数正整数，每个错位码唯一对应一条错误信息
```
{"code":10001, "msg":"数据格式错误"}
```
```
{"code":10002, "msg":"数据插入失败"}
```
- #### 2.3 统一错误码配置示例
```php
<?php
/**
 * 统一数据访问层，业务逻辑层，前后端分离层共用统一的错误码
 */
return [
    0 => '请求成功',
    // 基础错误信息
    10001 => '数据格式错误',
    10002 => '数据插入失败',
    10003 => '数据更新失败',
    10004 => '数据删除失败',  
    // 团队成员A使用错误码段 [10100-20000)
    10100 => '参数不完整',
    10101 => '参数id不能为空',
    // 团队成员B使用错误码段 [20000-30000)
    20001 => '无效的id',
    20002 => '非法请求数据’,
]
```
---
<center>广州舜邦网络科技有限公司 &lt;@author Jason&gt;</center>