<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!-->
<?php
$uri = $_SERVER['REQUEST_URI'];
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url2 = urlencode($url); // Outputs: Full URL
$title = $_SESSION["mData"]["mTitle"];
$cat = "Default";
$img = HOSTURL . "favicon.png";
$desc = $_SESSION["mData"]["meta"];
$keywork = $_SESSION["mData"]["keyword"];
try {

    if (isset($_SESSION["mData"]["postid"])) {
        $sql = $main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("id" => $obj->decdata($_SESSION["mData"]["postid"])));
        $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
        $r = $result->fetch_assoc();
        $title = $r["title"];
        $cat = $r["category"];
        $img = $r["img"];
        if (empty($_SESSION["mData"]["meta"]) && empty($_SESSION["mData"]["keyword"])) {
            $keywork = $r["keyword"];
            $desc = $r["meta"];
        }
    } else {

        $cat = $_SESSION["collegename"];
        $title = "Asteria Info Tech – Your IT & Innovative Solution";
        //$img = $_SESSION["logo"];
        $keywork = "software develement company in baramat, asteria infotech, best company in baramati, best company in pune, top software company in indian, top software company in world, Android app development, ERP, Billling software, GST return, GST";
        $desc .= "We Take Care of Your Technology Focus on Your Business Since 2017 we have been a visionary and a reliable software engineering partner for world-class brands. We are a boutique digital transformation consultancy and software development.";
    }
} catch (Exception $ex) {
    
}
?>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title> <?php echo $title; ?></title>
        <base href="<?= HOSTURL ?>">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta property="og:url"                content="<?php echo $url; ?>" />
        <meta property="og:type"               content="<?php echo $cat; ?>" />
        <meta property="og:title"              content="<?php echo $title; ?>" />
        <meta property="og:description"        content="<?php echo $desc; ?>" />
        <meta property="og:image"              content="<?php echo $img; ?>" />
        <meta property="og:keywords" content="<?php echo $keywork; ?>"/>
        <meta name="description" content="<?php echo $desc; ?>"/>
        <meta name="keywords" content="<?php echo $keywork; ?>">  
        <link rel="shortcut icon" href="favicon.png"> 
        <meta name="author" content="http://aasksoft.co.in/">
        <link rel="canonical" href="<?php echo $url; ?>">
        <meta name="copyright" content='PCFOTO.ME'>
        <meta name="MobileOptimized" content="320" />
        <!--start theme style -->
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.png" />
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/html/css/bootstrap.min.css"/>
        <!-- animate -->
        <link rel="stylesheet" type="text/css" href="assets/html/css/animate.css"/>
        <!-- owl-carousel -->
        <link rel="stylesheet" type="text/css" href="assets/html/css/owl.carousel.css">
        <!-- fontawesome -->
        <link rel="stylesheet" type="text/css" href="assets/html/css/font-awesome.css"/>
        <!-- themify -->
        <link rel="stylesheet" type="text/css" href="assets/html/css/themify-icons.css"/>
        <!-- flaticon -->
        <link rel="stylesheet" type="text/css" href="assets/html/css/flaticon.css"/>
        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" type="text/css" href="assets/html/revolution/css/rs6.css">
        <!-- prettyphoto -->
        <link rel="stylesheet" type="text/css" href="assets/html/css/prettyPhoto.css">
        <!-- shortcodes -->
        <link rel="stylesheet" type="text/css" href="assets/html/css/shortcodes.css"/>
        <!-- main -->
        <link rel="stylesheet" type="text/css" href="assets/html/css/main.css"/>
        <!-- responsive -->
        <link rel="stylesheet" type="text/css" href="assets/html/css/responsive.css"/>
        <!-- favicon link-->
        <style>
            .logo{
                width: 150px;
                height: 50px;
            }
        </style>

        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e68e49890947600130947a1&product=inline-share-buttons&cms=sop' async='async'></script>
    </head>

    <body>
        <!--menu_wrapper header-area hidden-menu-bar stick-->
        <div class="page">
            <!-- preloader start -->
            <div id="preloader">
                <div id="status">&nbsp;</div>
            </div>
            <!-- preloader end -->

            <!--header start-->
            <header id="masthead" class="header ttm-header-style-01">

                <!-- ttm-header-wrap -->
                <div class="ttm-header-wrap">
                    <!-- ttm-stickable-header-w -->
                    <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                        <!-- ttm-topbar-wrapper -->
                        <div class="ttm-topbar-wrapper clearfix">
                            <div class="container">
                                <div class="ttm-topbar-content">
                                    <ul class="top-contact text-left">

                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:asteria6392@gmail.com">asteria6392@gmail.com</a></li>
                                    </ul>
                                    <div class="topbar-right text-right">
                                        <ul class="top-contact">
                                            <li><i class="fa fa-clock-o"></i>Office Hour: 08:00am - 6:00pm</li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper list-inline">
                                            <ul class="social-icons">
                                                <li><a href="#" class=" tooltip-bottom" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="#" class=" tooltip-bottom" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li><a href="#" class=" tooltip-bottom" data-tooltip="Flickr"><i class="fa fa-flickr"></i></a>
                                                </li>
                                                <li><a href="#" class=" tooltip-bottom" data-tooltip="Linkedin"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="header-btn">
                                            <a class="ttm-btn ttm-btn-size-md  ttm-btn-bgcolor-skincolor" href="in/page/contactus">Get A Quote</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ttm-topbar-wrapper end -->
                        <div id="site-header-menu" class="site-header-menu">
                            <div class="site-header-menu-inner ttm-stickable-header">
                                <div class="container">
                                    <!-- site-branding -->
                                    <div class="site-branding">
                                        <a class="home-link" href="/" title="Asteria Info Tech" rel="home">
                                            <img id="logo-img" class="img-center" src="<?= $_SESSION["logo"] ?>" alt="logo">
                                        </a>
                                    </div><!-- site-branding end -->
                                    <!--site-navigation -->
                                    <div id="site-navigation" class="site-navigation">

                                        <div class="ttm-menu-toggle">
                                            <input type="checkbox" id="menu-toggle-form" />
                                            <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                                <span class="toggle-block toggle-blocks-1"></span>
                                                <span class="toggle-block toggle-blocks-2"></span>
                                                <span class="toggle-block toggle-blocks-3"></span>
                                            </label>
                                        </div>
                                        <nav id="menu" class="menu">
                                            <ul>

                                                <li class="active"><a href="/">Home</a></li>

                                                <?php
                                                $sql = $main->select("menu", $_SESSION["db_1"]) . $main->where(array("active" => 1, "parent" => 0), "AND") . $main->orderby("ASC", "position");
                                                $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                                    $sql2 = $main->select("menu", $_SESSION["db_1"]) . $main->where(array("active" => 1, "parent" => $row["id"]), "AND") . $main->orderby("ASC", "position");
                                                    $result2 = $main->adminDB[$_SESSION["db_1"]]->query($sql2);
                                                    if ($result2->num_rows > 0) {
                                                        echo "<li role=\"presentation\" > <a href=\"#\"> {$row["mtitle"]} </a>";
                                                        echo "<ul>";
                                                        while ($row2 = $result2->fetch_assoc()) {
                                                            ?>
                                                            <li><a href="/in/<?php echo strtolower($row["mtitle"]) . "/" . str_replace(" ", "-", $row2["title"]); ?>"><?php echo $row2["mtitle"]; ?></a></li>
                                                            <?php
                                                        }
                                                        echo "</ul></li>";
                                                    } else {
                                                        ?>
                                                        <li><a href="/in/<?php echo "page/" . $row["title"]; ?>"><?php echo $row["mtitle"]; ?></a></li>
                                                        <?php
                                                    }
                                                }
                                                ?>

                                            </ul>
                                        </nav>
                                    </div><!-- site-navigation end-->
                                </div>
                            </div>
                        </div>
                    </div><!-- ttm-stickable-header-w end-->
                </div><!--ttm-header-wrap end -->

            </header><!--header end-->
