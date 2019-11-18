<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>How to download youtube video using PHP script | Mitrajit's Tech Blog</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         
    <style type="text/css">
        .mtb-margin-top { margin-top: 20px; }
        .top-margin { border-bottom:2px solid #ccc; margin-bottom:20px; display:block; font-size:1.3rem; line-height:1.7rem;}

        .demo-page-header {
            text-align: center;
            font-size: 17px;
            text-transform: uppercase;
        }
        .thumbnail_img {
            float:left;
        }
        .video_title {
            border: 0px solid red;
        }
        .margin-top-bottom {
            margin:20px 0;
            border: 4px solid #ccc;
            border-radius: 5px;
            padding: 8px 0;
        }
        .error {
            text-align: center;
            font-size: 15px;
            color: #ff0000;
            margin-top: 10px;
        }
        @media screen and (max-width:300px) {
            p {font-size:11px;}
            h1.top-margin {font-size:15px; line-height: 1.5em;}
        }
    </style>
    <link rel="stylesheet" href="styles.css" type="text/css">
  

</head>
<body>
  
  
    
    <div class="container">
       


        <?php
        include("functions.php");


        $video_link = 'https://www.youtube.com/watch?v=8V8f5iOmEwQ';

        if($video_link != "") {
            $video_id = "";
            $video_id_arr = getVideoId($video_link);
            if(sizeof($video_id_arr) == 3) $video_id = $video_id_arr[2];
            if($video_id != "") {
                $arrContextOptions=array(
                    "ssl"=>array(
                        "verify_peer"=>false,
                        "verify_peer_name"=>false,
                    ),
                );  
                
                parse_str(file_get_contents("https://youtube.com/get_video_info?video_id=".$video_id, false, stream_context_create($arrContextOptions)),$info);


                if(!empty($info) && $info['status'] == 'ok') {
                    $streams = $info['url_encoded_fmt_stream_map']; //the video's location info
                    $streams = explode(',',$streams);                       
                    $player_response = json_decode ($info['player_response'], TRUE); 
                    $videoDetails = $player_response['videoDetails'];
                  
                    $thumb =$videoDetails['thumbnail']['thumbnails'][0];
                    

                    $video_title = $videoDetails['title'];

                    
              
                    ?>
                    <div class="row margin-top-bottom">
                        <div class="col-md-12 text-center">
                            <img class="img-responsive " src="<?php echo $thumb['url']; ?>">
                            <label class="video_title"><?php echo $video_title; ?></label>
                        </div>                                                        
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th>Quality</th>
                                    <th>Format</th>
                                 
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                foreach($streams as $stream) {
                                    
                                    parse_str($stream, $data); //decode the stream
                                 

                               
                                  

                                    $video_type = explode(";", $data['type']);
                                    $ext  = str_replace(array('/', 'x-'), '', strstr($video_type[0], '/'));
                                    ?>
                                    <tr>
                                        <td><?php echo $data['quality']; ?></td>
                                        <td><?php echo $ext; ?></td>
                                        <td><a href="<?php echo $data['url']; ?>" target="_blank">Download</a></td>
                                    </tr>
                                <?php                                    
                                } 
                                ?>
                            </table>
                        </div>
                    </div>
                <?php
                } else {
                    echo "<h4 class='error'>Something wrong! Please try again.</h4>";
                }
            } else {
                echo "<h4 class='error'>Invalid video link!</h4>";
            }
        }
    //   }
    ?>

</body>
</html>