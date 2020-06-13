<?php
include __DIR__.'/vendor/autoload.php';
$qrcode = new \Zxing\QrReader('./qr.png');  //图片路径
$text = $qrcode->text(); //返回识别后的文本
echo $text;