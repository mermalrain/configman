# configman
基础服务统一配置工具，目前支持Redis，Memcache，MySQL和RabbitMQ

一、Api使用方法

Example(以MySQL配置为例)：

1. 如果基础服务配置路径：/home/www/conf

   则config目录下的config.inc.php中define('CONF_PATH', '/home/www/conf/');
   
   如果业务项目为B2C，则mysql配置为b2c.mysql.ini
   
   内容为
   
   db=b2c host=127.0.0.1 port=3306 weight=1 user=b2c pass=123456 master=1//主库
   
   db=b2c host=127.0.0.1 port=3306 weight=1 user=b2c pass=123456 master=0//从库

2. cd example

   增加db配置：php add_config.php
   
   读取db配置：php get_config.php
   
二、命令行使用方法

   cd bin
   
   help命令：
   
   ./configtool help
   
   ConfigTool version 0.0.1

   Usage: 
	   command [options]

   Available commands:
	   add                 Add config item
	   help                Displays this help
	   list                Show config list
	   remove              Remove config item
	   
   list命令：
   
   ./configtool list --mysql=<业务项目mysql配置前缀>

   db=b2c host=127.0.0.1 port=3306 weight=1 user=b2c pass=123456 master=1
   db=b2c host=127.0.0.1 port=3306 weight=1 user=b2c pass=123456 master=0