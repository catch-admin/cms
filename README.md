# CMS 模块

## 如何使用
- 首先保证已经安装好了 [catchadmin](https://github.com/JaguarJack/catch-admin)
- 然后进入 `modules` 目录
- git clone https://github.com/catch-admin/cms Cms
- 使用后台的`模块安装`功能进行安装


## 发布前端 view 文件
```shell
php artisan vendor:publish --tag=cms-views
```

发布之后页面如果还没有显示，请重新启动前端 `yarn dev`
