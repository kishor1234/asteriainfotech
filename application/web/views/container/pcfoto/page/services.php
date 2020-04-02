
<?php
$r = $_REQUEST['v'];
$v = $_REQUEST['r'];
$data = array();
$r = str_replace("-", " ", $r);
$sql = $main->select("menu", $_SESSION["db_1"]) . $main->whereSingle(array("title" => $r));
$result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
if ($row = $result->fetch_assoc()) {
    array_push($data, array("menu" => $row));
}
$postid = $data[0]["menu"]["postid"];
$sql = $main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("id" => $postid));
$result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
if ($row = $result->fetch_assoc()) {
    array_push($data, array("post" => $row));
}
// Slider
//$main->isLoadView("VCustomSlider", false, array("category" => $data[1]["post"]["title"]));
// Slider
//echo "<br><br>";
?>
<div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="title-box text-center">
                    <div class="page-title-heading">
                        <h1 class="title"><?= $data[1]["post"]["title"] ?></h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="/"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep">&nbsp; : : &nbsp;</span>
                        <span> <?= $data[1]["post"]["title"] ?></span>
                    </div>  
                </div>
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- page-title end-->
<div class="site-main">
    <!-- sidebar -->
    <div class="sidebar ttm-sidebar ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-9 content-area order-lg-2">
                    <?= $row["description"] ?>
                </div>
                <div class="col-lg-3 widget-area">
                    <aside class="widget widget-nav-menu">
                        <ul class="widget-menu">
                            <?php
                            $sql = $main->select("menu", $_SESSION["db_1"]) . $main->where(array("active" => 1, "parent" => 1), "AND") . $main->orderby("ASC", "position");
                            $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                
                                ?>
                                <li><a href="/in/<?php echo "services" . "/" . str_replace(" ", "-", $row["title"]); ?>"><?php echo $row["mtitle"]; ?></a></li>

                                <?php
                            }
                            ?>


                        </ul>
                    </aside>
                    <aside class="widget widget_media_image">
                        <div class="banner-img-box ttm-textcolor-white text-left">
                            <div class="featured-content featured-content-banner">
                                <i class="flaticon flaticon-call"></i>
                                <div class="featured-title ttm-box-title">
                                    <h5>How Can We Help?</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>If you need any help, please<br> feel free to contact us.</p>
                                </div>
                                <ul>
                                    <li><i class="fa fa-phone"></i>+1234567890</li>
                                    <li><i class="fa fa-envelope-o"></i><a href="/cdn-cgi/l/email-protection#80e9eee6efc0e5f8e1edf0ece5aee3efed"><span class="__cf_email__" data-cfemail="afc6c1c9c0efcad7cec2dfc3ca81ccc0c2">[email&#160;protected]</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!-- sidebar end -->
</div><!--site-main end-->


