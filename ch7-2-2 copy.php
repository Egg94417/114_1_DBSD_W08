SID:C112181111
<BR>
NAME:黃翊華
<p>
<?php 
$arr["color"] = "紅色";  // 更改陣列元素值
$arr["name"] = "黃翊華";
$arr["shape"] = "圓形";
$arr[] = 50;   // 沒有指定, 鍵值為0

foreach($arr as $k => $v){
   echo "$k~ $v~ <HR>";
}
echo"<BR>";
print_r(value: $arr);
# 3