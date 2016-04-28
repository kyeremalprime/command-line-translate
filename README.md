# command-line-translate
## 介绍
当看到一个生词时，不再需要复制进翻译软件，而是直接在命令行中获得中文翻译！  
使用 [YouDao API](http://fanyi.youdao.com/openapi?path=data-mode) 制作的一个命令行查词脚本。  
[![3XC2.png](http://cdn.image.rainman.me/images/3XC2.png)](http://image.rainman.me/image/3XC2)
## 使用
```
sudo -i
cd /bin/
wget http://oss-shanghai.rainman.me/kyeremal/translate
chmod 777 translate
```
Enjoy it🍻   
***
在 os x 10.11 下会有 rootless 导致 /bin 目录下无权限的问题，可以在开机时按住 command + R，实用工具->终端，输入 csrutil disable; reboot 禁用 rootless~
