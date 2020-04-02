<?php
$uri = $_SERVER['REQUEST_URI'];
//echo $uri; // Outputs: URI

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url2 = urlencode($url); // Outputs: Full URL
?>
<!-- page-title -->
<style>
    .image-response{
        width: 100% !important;
        height:auto !important;
    }
</style>
<div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="title-box text-center">
                    <div class="page-title-heading">
                        <h1 class="title"> Blog Single View</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="/"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep">&nbsp; : : &nbsp;</span>
                        <span> Single Blog</span>
                    </div>  
                </div>
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- page-title end-->
<div class="site-main">
    <!-- sidebar -->
    <div class="sidebar ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-9 content-area">
                    <?php
                    $sql = $main->updateINC(array("view" => "view + 1"), "postcvc") . $main->whereSingle(array("post_id" => $_SESSION["mData"]["postid"]));

                    $main->adminDB[$_SESSION["db_1"]]->query($sql);
                    $sql = $main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("id" => $_SESSION["mData"]["postid"]));
                    $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        // $i++;
                        ?>
                        <article class="post ttm-blog-single clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="<?= $row["img"]; ?>" alt="post-01">
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-single-content">
                                <div class="entry-content">
                                    <div class="ttm-post-entry-header">
                                        <?php
                                        $dat = explode(" ", $row["isDate"]);
                                        $dat = explode("-", $dat[0]);
                                        $month = array(0 => "", 1 => "Jan", 2 => "Feb", 3 => "Mar", 4 => "Apr", 5 => "May", 6 => "Jun", 7 => "July", 8 => "Aug", 9 => "Sept", 10 => "Oct", 11 => "Nov", 12 => "Dec",);
                                        ?>
                                        <div class="post-meta">
                                            <span class="ttm-meta-line byline"><i class="fa fa-user"></i>By Admin</span>
                                            <span class="ttm-meta-line entry-date"><i class="fa fa-calendar"></i><time class="entry-date published" datetime="2018-07-28T00:39:29+00:00"><?= $month[(int) $dat[1]] ?> <?= $dat[2] ?>, <?= $dat[0] ?></time></span>
                                            <?php
                                            $sl = $main->select("postcvc", $_SESSION["db_1"]) . $main->whereSingle(array("post_id" => $row["id"]));
                                            $rslt = $main->adminDB[$_SESSION["db_1"]]->query($sl);
                                            $rp = $rslt->fetch_assoc();
                                            ?>
                                            <span class="ttm-meta-line tags-links"><i class="fa fa-comment-o"></i><?= $rp["comment"] ?></span>
                                        </div>
                                    </div>
                                    <!-- separator -->
                                    <div class="separator">
                                        <div class="sep-line mt-15 mb-25"></div>
                                    </div>

                                    <!-- separator -->
                                    <p><?= $row["description"] ?></p>
                                    <div class="separator">
                                        <div class="sep-line mt-15 mb-25"></div>
                                    </div>
                                    <div class="form-group">
                                        <h3><strong>Embed Infographic code</strong></h3>
                                        <textarea class="form-control" readonly="" style="height: 110px; align-content:center; overflow:auto;"><div class="aasksfot_embed"><div id="display_image"><img id="img" src='<?= HOSTURL . $row["img"] ?>'><p>From <sapn id='span'> <a href="<?= HOSTURL . "?utm_source=infographic&utm_medium=web-blog&utm_campaign=infographic&utm_term=1&utm_content={$row["title"]}" ?>" target="_blank"><?= $row["title"] ?></a></sapn></p></div><script type="text/javascript" src="<?= HOSTURL ?>img.js" class='aasksfot_embed_script' data-name='<?= HOSTURL . "*" . $row["id"] ?>' id='aasksfot_embed_script'></script></div></textarea>
                                    </div>
                                    <div class="ttm-blog-classic-box-comment">
                                        <div id="comments" class="comments-area">
                                            <h2 class="comments-title"><span class="wihte">comments</span> <span> (<?php echo $rp["comment"]; ?>) </h2>
                                            <ol class="comment-list">
                                                <?php
                                                $sql = $main->select("comment", $_SESSION["db_1"]) . $main->where(array("comment_parent" => "0", "post_id" => $row["id"], "isActive" => "1"), "AND"); //. $main->limitWithOutOffset("6");
                                                $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                                                $fl = true;
                                                while ($rw = $result->fetch_assoc()) {
                                                    ?>
                                                    <li>
                                                        <div class="comment-body">
                                                            <div class="comment-author vcard">
                                                                <img src="assets/ap/dist/img/avatar5.png" class="avatar" alt="comment-img">
                                                            </div>
                                                            <div class="comment-box">
                                                                <div class="comment-meta commentmetadata">
                                                                    <cite class="ttm-comment-owner"><?= $rw["name"] ?></cite>
                                                                    <?php
                                                                    $dats = explode(" ", $rw["isDate"]);
                                                                    $dat = explode("-", $dats[0]);
                                                                    $month = array(0 => "", 1 => "Jan", 2 => "Feb", 3 => "Mar", 4 => "Apr", 5 => "May", 6 => "Jun", 7 => "July", 8 => "Aug", 9 => "Sept", 10 => "Oct", 11 => "Nov", 12 => "Dec",);
                                                                    ?>
                                                                    <a href="#"><?= $month[(int) $dat[1]] ?> <?= $dat[2] ?>, <?= $dat[0] ?> <?= $dats[1] ?></a>
                                                                </div>
                                                                <div class="author-content-wrap">
                                                                    <p><?= $rw["message"] ?></p>
                                                                </div>
                                                                <div class="reply">
                                                                    <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <?php
                                                    $main->checkChild($rw["id"]);
                                                }
                                                ?>
                                                <div class="comment-respond">
                                                    <h3 class="comment-reply-title">Leave a Reply</h3>
                                                    <p class="comment-notes">Your email address will not be published. </p>
                                                    <form  class="row comment-form clearfix" method="post" action="#" id="myFormNew" onsubmit="return postData('<?php echo $obj->encdata("C_AddComment"); ?>', '#msg', '#myFormNew')">
                                                        <div class="col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <textarea name="message" id="message" rows="5" placeholder="Comments" required="required" class="form-control with-grey-bg"></textarea>
                                                                <input type="hidden" name="post_id" id="post_id" readonly value="<?php echo $row["id"]; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4">
                                                            <div class="form-group">
                                                                <input name="name" id="name" type="text" class="form-control with-grey-bg" placeholder="Name (required)" required="required">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4">
                                                            <div class="form-group">
                                                                <input name="email" id="email" type="text" placeholder="Email (required)" required="required" class="form-control with-grey-bg">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12" id="msg">

                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group text-left mt-30">
                                                                <button type="submit" id="submit" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-darkgrey" value="">
                                                                    Post Comment
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-lg-3 widget-area">

                    <aside class="widget post-widget">
                        <h3 class="widget-title">Latest Blog</h3>
                        <ul class="widget-post ttm-recent-post-list">
                            <?php $main->isLoadView("sidebar", false, array("limit"=>10)); ?>

                        </ul>
                    </aside>

                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!-- sidebar end -->
</div><!--site-main end-->

