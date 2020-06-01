<?php
function getDataVirusCorona()
{
	// su dung curl php - API
	// https://api.covid19api.com/summary
	
	// tao 1 curl php
	$ch = curl_init();
	
	// cau hinh 1 so thong so - lien quan den viec lay du lieu tu api ve
	// truy cap vao service  - api nao
	curl_setopt($ch, CURLOPT_URL, 'https://api.covid19api.com/summary');
	// khong gui tham so gi thong qua header http/https len api
	curl_setopt($ch, CURLOPT_HEADER, false);
	// toi da doi 30s connect vao serveice api
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
	// doi thuc thi curl moi hien thi data ve (true doi)
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	// thuc thi curl
	$response = curl_exec($ch);
	// ngat ket noi
	curl_close($ch);
	$data = json_decode($response, true);
	return $data;
	
}