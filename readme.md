使用Laravel5.6 + bootstrap3 + mysql + redis 搭建的论坛

## 环境要求

* PHP 7.2
* Mysql 5.7
* Redis
* Linux

## 安装使用

* 下载源码：
```
git clone https://github.com/HubQin/larabbs.git
```
* 安装依赖
```
composer install
```
如安装过程中，报错，缺少相应的PHP扩展，需要先安装相应扩展。

*  创建环境变量文件
```
cp .env.example .env
```
* 生成APP_KEY
在项目根目录下，运行：
```
php artisan key:generate
```
* 打开.env文件，按照里面的备注进行配置：
```
APP_NAME=你的APP名字
APP_ENV=local # 这里设为本地环境，如果是生成环境，设置为production
APP_KEY=base64:前面生成的key不用改
APP_DEBUG=true # 这里打开调试模式，生成环境注意设置为false关闭
APP_URL=你的主机地址
LOG_CHANNEL=stack
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=larabbs
DB_USERNAME=root
DB_PASSWORD=你的数据库密码
BROADCAST_DRIVER=log
CACHE_DRIVER=redis  # 这里使用redis
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_DRIVER=redis # 这里使用redis
.
.
.
MAIL_DRIVER=smtp
MAIL_HOST=smtp.qq.com
MAIL_PORT=25
MAIL_USERNAME=你的QQ邮箱
MAIL_PASSWORD=你的smtp服务的密码
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=你的邮箱地址
MAIL_FROM_NAME=LaraBBS
.
.
.
BAIDU_TRANSLATE_APPID=你的百度翻译APPID
BAIDU_TRANSLATE_KEY=你的百度翻译KEY
```

*  创建数据库
数据库名字改为自己的
```
CREATE DATABASE your_database_name DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

* 数据库迁移
```
php artisan migrate
```
* Linux的Crontab配置
由于程序中使用到了计划任务，需要在系统中配置Crontab。运行以下命令：
```
export EDITOR=vi && crontab -e
```
在打开的文件中，复制粘贴以下代码：
```
 * * * * * php /home/vagrant/Code/larabbs/artisan schedule:run >> /dev/null 2>&1
```
按esc键并输入:wq保存退出。

## 实现的功能
* 基本功能：用户、话题、回复的增删改查
* 用户输入过滤防XSS攻击
* URL添加slug，优化SEO
* 活跃用户计算
* 用户活跃时间记录

## License
    MIT
