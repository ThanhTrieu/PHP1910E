<?php
// cac ham bo tro xu ve file
// 1 - can kiem tra xem file co ton tai hay ko?
if(file_exists('../data/demo.txt')){
	echo "Co ton tai";
} else {
	echo "Khong ton tai";
}
echo "<br/>";

// 2 - kiem tra xem file co quyen ghi ko
if(is_writable('../data/demo.txt')){
	echo "Dc phep ghi";
} else {
	echo "khong dc phep ghi";
}
// 3 - ghi noi dung vao file - ghi de noi dung vao noi dung cu cua file
file_put_contents('../data/test.txt', 'hoc PHP co ban');
// doi ten file
// rename('../data/test.txt', '../data/demo.txt');
// copy file
//copy('../data/demo.txt', '../data/test.txt');
// xoa file
// unlink('../data/test.txt');
echo "<br/>";
// kiem tra thu muc/folder
if(is_dir('../data')){
	echo "Yes";
} else {
	echo "No";
}
// cac tao ra 1 thu muc
// neu khong ton tai thu muc thi moi tao
if(!is_dir('../mysql')){
	mkdir('../mysql');
}

