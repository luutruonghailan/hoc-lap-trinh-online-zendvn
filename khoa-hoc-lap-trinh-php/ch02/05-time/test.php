<?php 
$video_id = 'c4KaBDWe24s';
$video_info = simplexml_load_file('http://gdata.youtube.com/feeds/api/videos/'.$video_id);
echo "<pre>";
print_r($video_info);
echo "</pre>";
