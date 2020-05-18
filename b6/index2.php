<?php
// nhung file index.php vao day
// 1 -dung include
//include "index.php"; // van thuc thi cac cau lenh ben duoi khi co loi
// 2 - require
require "index.php"; // dung chuong tring luon khi co loi

$ip = $server['SERVER_ADDR'];
echo "Dia chi ip server la : {$ip}";