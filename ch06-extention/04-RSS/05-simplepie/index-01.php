<!--từ khóa gg simplepie giải nén lấy phần library và file autoloader.php-->

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
	require_once 'autoloader.php';
	
	$feed = new SimplePie(); //tạo đối tượng

		// echo "<pre>";
		// print_r($feed);
		// echo "</pre>";
		
	$feed->set_feed_url('https://vnexpress.net/rss/the-thao.rss'); //gắn đường dẫn url
	$feed->enable_cache(true);   // lưu vào tập tin cache để nó đỡ mất công vào lại trang chủ để nó đọc 
	$feed->set_cache_duration(3600); //thiết lập thời gian cache 
	$feed->set_cache_location('cache'); //lưu vào thư mục cache
	$feed->handle_content_type();
	
	$feed->strip_attributes(array('width','height')); //k muốn lấy phần này
	$feed->strip_htmltags(array('img'));  //bỏ đi thẻ html này
	$feed->init();
	
// 	echo $feed->get_title(); //lấy title
// 	echo '<br />' . $feed->get_description(); //lấy phần description
// 	echo '<br />' . $feed->get_permalink();  //hiển thị link
	
	foreach ($feed->get_items(0,2) as $item){ //hiển thị item 
		echo $item->get_title() . '<br />';   //lấy tiêu đề
		echo $item->get_description() . '<br />';
		echo $item->get_date('d/m/Y') . '<br />';
		echo '<hr />';
	}
	
	
