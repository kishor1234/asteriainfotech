<?php
// use this instagram access token generator http://instagram.pixelunion.net/

$access_token = "9369754172.1677ed0.57e4ec7eba574e6db0ee2cab30363fc4";
$photo_count = 50;

$json_link = "https://api.instagram.com/v1/users/self/media/recent/?";
$json_link.="access_token={$access_token}&count={$photo_count}";


$json = file_get_contents($json_link);
$obj = json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', $json), true);
?>




<style>
    .item{
        margin: 0px;
        padding: 0px;
    }
</style>
<div class="container-fluid">
    <div class="row">

        <!-- Instagram feed will be here -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="commonService" >
                <div class="owl-carousel owl-theme">
                    <?php
                    foreach ($obj['data'] as $post) {

                        $pic_text = $post['caption']['text'];
                        $pic_link = $post['link'];
                        $pic_like_count = $post['likes']['count'];
                        $pic_comment_count = $post['comments']['count'];
                        $pic_src = str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
                        $pic_created_time = date("F j, Y", $post['caption']['created_time']);
                        $pic_created_time = date("F j, Y", strtotime($pic_created_time . " +1 days"));

                        echo "<div class='item_box item'>";
                        echo "<a href='{$pic_link}' target='_blank'>";
                        echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
                        echo "</a>";
                        echo "<p>";
//            echo "<p>";
//                echo "<div style='color:#888;'>";
//                    echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
//                echo "</div>";
//            echo "</p>";
                        //echo "<p>{$pic_text}</p>";
                        echo "</p>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>
