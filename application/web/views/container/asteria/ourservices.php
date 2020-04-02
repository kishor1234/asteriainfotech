<?php $main->isLoadview("banner", false, array("title" => "Services")); ?>
<div class="site-main">

    <!-- blog-section end -->
    <section class="ttm-row grid-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <?php
                $limit = 10;
                $sql = $main->selectCount("post", "id") . $main->whereSingle(array("category" => "Services"));
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

                $sql = $main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("category" => "Services")) . $main->orderBy("DESC", "isDate") . $main->limitWithOffset($offset, $limit);
                $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                $i = 0;
                while ($row = $result->fetch_assoc()) {
                    $i++;
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-imagebox-blog -->
                        <div class="featured-imagebox featured-imagebox-blog mb-30">
                            <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                <img class="img-fluid" src="<?php echo $row["img"]; ?>" alt="Blog Image">
                                <div class="ttm-blog-overlay-iconbox">
                                    <a href="/in/blogs/<?php echo strtolower(str_replace(" ", "-", $row["title"])); ?>"><i class="ti ti-plus"></i></a>
                                </div>
                                <div class="ttm-box-view-overlay"></div>
                            </div>
                            <div class="featured-content"><!-- featured-content -->
                                <div class="ttm-box-post-date"><!-- ttm-box-post-date -->
                                    <span class="ttm-entry-date">
                                        <?php
                                        $dat = explode(" ", $row["isDate"]);
                                        $dat = explode("-", $dat[0]);
                                        $month = array(0 => "", 1 => "Jan", 2 => "Feb", 3 => "Mar", 4 => "Apr", 5 => "May", 6 => "Jun", 7 => "July", 8 => "Aug", 9 => "Sept", 10 => "Oct", 11 => "Nov", 12 => "Dec",);
                                        ?>
                                        <time class="entry-date" datetime="<?= $row["isDate"] ?>"><?= $dat[2] ?><span class="entry-month entry-year"><?= $month[(int) $dat[1]] ?></span></time>
                                    </span>
                                </div>
                                <div class="featured-title"><!-- featured-title -->
                                    <h5><a href="/in/blogs/<?php echo strtolower(str_replace(" ", "-", $row["title"])); ?>"><?= $row["title"] ?></a></h5>
                                </div>
                                <div class="post-meta"><!-- post-meta -->
                                    <?php
                                    $sl = $main->select("postcvc", $_SESSION["db_1"]) . $main->whereSingle(array("post_id" => $row["id"]));
                                    $rslt = $main->adminDB[$_SESSION["db_1"]]->query($sl);
                                    $rp = $rslt->fetch_assoc();
                                    ?>
                                    <span class="ttm-meta-line"><i class="fa fa-comments"></i><?php echo $rp["comment"]; ?>,comments</span>
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i><?php echo $row["byw"]; ?></span>

                                </div>
                                <div class="featured-desc"><!-- featured-description -->
                                    <p><?php echo substr($row['description'], 0, 150); ?></p>
                                </div>
                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="/in/blogs/<?php echo strtolower(str_replace(" ", "-", $row["title"])); ?>">Read More <i class="ti ti-angle-double-right"></i></a>
                            </div>
                        </div><!-- featured-imagebox-blog end -->
                    </div>
                    <?php
                }
                ?>
                <!-- process-section end -->
            </div><!--site-main end-->
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php
                    $main->isLoadView("VPageing", false, array("ct" => $ct, "limit" => $limit, "offset" => $offset, "max_count" => $max_count, "page" => $page, "file" => $obj->decdata($_REQUEST["v"])));
                    ?>

                </div>
            </div>
        </div>
    </section>
    <!-- process-section end -->

</div><!--site-main end-->