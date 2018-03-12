<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
	require_once 'autoloader.php';
	
	$feed = new SimplePie();

	$feed->set_feed_url('http://thethao.vnexpress.net/rss/tin-moi-nhat.rss');
	$feed->enable_cache(true);
	$feed->set_cache_duration(3600);
	$feed->set_cache_location('cache');
	$feed->handle_content_type();
	
	$feed->strip_attributes(array('width','height'));
	$feed->strip_htmltags(array('img'));
	$feed->init();
	
// 	echo $feed->get_title();
// 	echo '<br />' . $feed->get_description();
// 	echo '<br />' . $feed->get_permalink();
	
	foreach ($feed->get_items(0,2) as $item){
		echo $item->get_title() . '<br />';
		echo $item->get_description() . '<br />';
		echo $item->get_date('d/m/Y') . '<br />';
		echo '<hr />';
	}
	
	
