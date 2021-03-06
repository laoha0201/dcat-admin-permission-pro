# Dcat Admin Extension PermissionPro


#### 说明
本插件来源 [tanmotop](https://github.com/tanmotop/dcat-admin-permission-plus) 改造，兼容最新 Dcat Admin 测试版 v2.2.0

主要用于扫描控制器注解，并自动导入数据库中

#### 安装

```php
composer require nicesome/dcat-admin-permission-pro
```

#### 使用

一、内置了两种注解 `@Module` 和 `@Permission`

`@Module` 用于注解Controller，如：`@Module(name="文章管理", slug="posts")` ，每个Controller只能有一个 `@Module` 注解，必填

`@Permission` 用于注解Action，如：`@Permission(name="文章列表", slug="posts-list", action="index")` ，每个Controller可以有多个 `@Permission` 注解

二、完整例子：

```php

use DcatAdmin\PermissionPlus\Annotations\Module;
use DcatAdmin\PermissionPlus\Annotations\Permission;

/**
 * @Module(name="文章管理", slug="posts")
 * @Permission(name="文章列表", slug="posts-list", action="index")
 * @Permission(name="新建文章", slug="posts-create", action="create")
 * @Permission(name="保存文章", slug="posts-store", action="store")
 * @Permission(name="编辑文章", slug="posts-edit", action="edit")
 * @Permission(name="保存编辑", slug="posts-update", action="update")
 * @Permission(name="删除文章", slug="posts-destroy", action="destroy")
 */
```

三、添加路由

```php
$router->resource('posts', 'PostController'); // 没有添加路由无法被扫描出来
```

四、导入权限

登录后台 -> 权限导入 -> 点击"导入权限"按钮


#### 特别鸣谢
[tanmotop](https://github.com/tanmotop/dcat-admin-permission-plus)

基于该包进行 Dcat Admin Beta v2.2.0 兼容性，在此基础上优化部分操作。
