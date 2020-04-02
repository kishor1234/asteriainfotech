<!--video section Start -->
<style>
    a {
        outline:none !important;
    }
    .popup-youtube {
        .youtube-click {
            outline:none;
            width: 50px;
            height: 50px;
        }
    }
</style>
<div class="about_us_sections sp_choose_heading_main_wrapper">
    <div class="sp_abt_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="video_sec_icon_wrappe"><br>
                    <h2 style="color:#FFFFFF;"><span>Our Blogs</span></h2>
                    <br>
                    <div class="blog_wrapper_catt sidebar_widget" >

                        <?php
                        $limit = 6;
                        $sql = $main->selectCount("post", "id") . $main->whereSingle(array("category" => "Blog"));
                        $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                        $r = $result->fetch_assoc();
                        $max_count = $r["count(id)"];
                        $page = 1;
                        $offset = 0;
                        if (isset($_REQUEST["pg"])) {
                            $page = $_REQUEST["pg"];
                            $tempLimit = $limit;
                            $tempLimit = $limit * $page;
                            $offset = $tempLimit - $limit;
                        } else {
                            $limit = $limit * $page;
                            $offset = 0;
                        }
                        $i = 0;

                        $sql = $main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("category" => "Blog")) . $main->orderBy("DESC", "isDate") . $main->limitWithOffset($offset, $limit);
                        $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                        $i = 0;
                        while ($row = $result->fetch_assoc()) {
                            $i++;
                            ?>
                            <div class="col-lg-4 ">
                                <div class="sp_choose_main_wrapper" style="background-color:#FFFFFF; ">


                                    <p>
                                    <p><strong><a href="/in/blogs/<?php echo strtolower(str_replace(" ", "-", $row["title"])); ?>"><?php echo $row["title"]; ?></a></strong></p>
                                    <div class="lest_news_img_wrapper img-effect">
                                        <br>
                                        <img src="<?php echo $row["banner_url"]; ?>" alt="blog_img" style="width: 300px; height: 200px;">
                                        
                                        <div style="height:145px; text-overflow: ellipsis; white-space: nowrap; overflow: hidden; margin-right:15px; padding-left: 10px;">
                                            <?= $row["description"] ?>
                                            [..]
                                        </div>
                                        <a class="btn btn-info btn-custom-black theamcolor" href="/in/blogs/<?php echo strtolower(str_replace(" ", "-", $row["title"])); ?>" >Continue Reading</a>

                                    </div>

                                    </p>
                                    <!--<div>
                                        <p class="blog_single_para"></p>
                                        <h6><a class="readmore" href="/?r=<?php //echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingle") . "&c=" . $obj->encdata($row["id"]);          ?>">read more </a></h6>
                                    </div>-->
                                </div>
                            </div>




                            <?php
                        }
                        ?>


                    </div>

                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- video section End -->
