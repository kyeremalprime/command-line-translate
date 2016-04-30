# command-line-translate
## 目录
[介绍](#0)  
........[单词翻译](#0.1)  
........[整句翻译](#0.2)  
[使用](#1)  
........[安装](#1.1)  
........[参数](#1.2)  
[语言](#2)  
........[支持语言](#2.1)  
........[语言代码](#2.2)

<h2 name="0">介绍</h2>
<h3 name="0.1">单词翻译</h3>
当看到一个生词时，不再需要复制进翻译软件，而是直接在命令行中获得中文翻译！  
使用 [YouDao API](http://fanyi.youdao.com/openapi?path=data-mode) 制作的一个命令行查词脚本。
[![829X.png](http://cdn.image.rainman.me/images/829X.png)](http://image.rainman.me/image/829X)
<h3 name="0.2">整句翻译</h3>
新增整句翻译功能，使用 [Baidu Translate API](http://api.fanyi.baidu.com/api/trans/product/index)  
[![3g6K.png](http://cdn.image.rainman.me/images/3g6K.png)](http://image.rainman.me/image/3g6K)

<h2 name="1">使用</h2>
<h3 name="1.1">安装</h3>
```
sudo -i
cd /bin/
wget http://oss-shanghai.rainman.me/kyeremal/tl
chmod 777 tl
sudo mv tl [filename] #[filename] is any name u want
```
在 os x 10.11 下会有 rootless 导致 /bin 目录下无权限的问题，可以在开机时按住 command + R，实用工具->终端，输入 csrutil disable; reboot 禁用 rootless~
<h3 name="1.2">参数</h3>
| 参数        | 可选           | 可选  | 默认值 |
|:------------- |:-------------|:-----|:-----|
| -s      | 强制使用整句翻译 |是| auto |
| -f lang      | 设置源语言为 lang，详细语言代码见下文      |是| auto |
| -t lang | 设置目标语言为 lang，详细语言代码见下文      |是| en |
注：
* 当不使用 -s 参数时，将自动判断输入，若输入源为英文且为单词，将自动采取单词翻译，否则采用整句翻译。
* 当不使用 -f 参数时，将自动判断输入语言。
* 当不使用 -t 参数时，目标语言为英文。

<h2 name="2">语言</h2>
<h3 name="2.1">支持语言</h3>
中文、英语、粤语、文言文、日语、韩语、法语、西班牙语、泰语、阿拉伯语、俄语、葡萄牙语、德语、意大利语、希腊语、荷兰语、波兰语、保加利亚语、爱沙尼亚语、丹麦语、芬兰语、捷克语、罗马尼亚语、斯洛文尼亚语、瑞典语、匈牙利语、繁体中文
<h3 name="2.2">语言代码</h3>
| code | language |
|:--- |:--- |
|zh	|中文|
|en	|英语|
|yue|粤语|
|wyw	|文言文|
|jp	|日语|
|kor	|韩语|
|fra	|法语|
|spa	|西班牙语|
|th	|泰语|
|ara	|阿拉伯语|
|ru	|俄语|
|pt	|葡萄牙语|
|de	|德语|
|it	|意大利语|
|el	|希腊语|
|nl	|荷兰语|
|pl	|波兰语|
|bul	|保加利亚语|
|est	|爱沙尼亚语|
|dan	|丹麦语|
|fin	|芬兰语|
|cs	|捷克语|
|rom	|罗马尼亚语|
|slo	|斯洛文尼亚语|
|swe	|瑞典语|
|hu	|匈牙利语|
|cht	|繁体中文|
