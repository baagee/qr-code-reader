#php qr decoder 
> php识别二维码, 不需要安装扩展 从哪里弄来的我也忘了，毕竟好几年了

### 安装
`composer require zxing/qr-reader`

### 使用
```
include __DIR__.'/vendor/autoload.php';

$qrcode = new \Zxing\QrReader('./qr.png');  //图片路径
$text = $qrcode->text(); //返回识别后的文本
echo $text;
```

### 需要
```
PHP >= 5.3
GD Library
```
