<!--hiển thị ra màn hình các số từ 1 đến 1000 -> giải quyết nhanh : lưu nó vào 1 file và truy cập vào file đó để load dữ liệu
	-> tạo file cached-index.html 
-->

<?php
	echo __FILE__; //lấy ra được đường dẫn
	$fileName 	= pathinfo(__FILE__, PATHINFO_FILENAME); //lấy ra được giá trị là index
	$cacheFile 	= 'cached/cache-'.$fileName.'.html';  // đường dẫn -ten file - filename
	$cacheTime 	= 3600; //thời gian sử dụng file cache

	//nếu nó tồn tại và thời gian cache hợp lệ     -- thời gian file cache được tạo cách đây
	if(file_exists($cacheFile) && $cacheTime > time()-filectime($cacheFile)){
		include $cacheFile; //thỏa màn thì vào đây đọc file
	}else{
		 //chưa có file cache  thì chạy vòng lặp này
		ob_start();
		for($i = 1; $i <= 1000; $i++) echo $i . '<br />';	// Database -> *.html
		file_put_contents($cacheFile, ob_get_contents());
		ob_end_flush();
	}