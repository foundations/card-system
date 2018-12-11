
### 关于
> 商业版预览: [http://fakala.xyz/](http://fakala.xyz/)

> 开源版当前版本: 2.4

> [BT面板安装教程---V2.X](https://github.com/Tai7sy/card-system/wiki/BT%E9%9D%A2%E6%9D%BF%E5%AE%89%E8%A3%85%E6%95%99%E7%A8%8B---V2.X)

### 常见问题
 - 修改 `.env` 文件无效 / 修改网站设置无效
 ```
 cd /www/wwwroot/example.com  #进入网站目录
 php artisan config:clear
 php artisan cache:clear
 ```
 - 忘记密码后重置
 ```
 cd /www/wwwroot/example.com  #进入网站目录
 php artisan reset:password admin@qq.com 123456
 ```
 - 500错误	
 ```	
 storage/logs 里面有错误详细内容, 可以自行参考解决, 或者附录log文件提交issue/mail	
 ```
