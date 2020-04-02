<!--footer start-->
<footer class="footer widget-footer clearfix">
    <div class="first-footer ttm-bgcolor-skincolor ttm-bg ttm-bgimage-yes bg-img1">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-lg-4 col-md-4 col-sm-12 order-md-2">
                    <div class="footer-logo text-sm-center">
                        <img src="assets/html/images/aster2.png" alt="footer-logo">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 order-md-1">
                    <div class="text-left">
                        <!--  featured-icon-box --> 
                        <div class="featured-icon-box left-icon icon-align-top">
                            <div class="featured-icon"><!--  featured-icon --> 
                                <div class="ttm-icon ttm-icon_element-color-white ttm-icon_element-size-md">
                                    <i class="ti ti-location-pin"></i><!--  ttm-icon --> 
                                </div>
                            </div>
                            <div class="featured-content"><!--  featured-content --> 
                                <div class="featured-desc">
                                    <p>

                                        <?= $_SESSION["address1"] . "<br>" ?>
                                        <?= "City : " . $_SESSION["city"] . " Dist : " . $_SESSION["dist"] . "<br>" ?>
                                        <?= $_SESSION["state"] . "<br>" ?>
                                        <?= "PIN : " . $_SESSION["pin"] ?>
                                    </p>
                                </div>
                            </div>
                        </div><!--  featured-icon-box END -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 order-md-3">
                    <div class="text-sm-right">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-icon-btn-left ttm-btn-color-white" href="mailto:<?= $_SESSION["email"] ?>" title=""> <?= $_SESSION["email"] ?><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer ttm-textcolor-white bg-img2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_text  clearfix">
                        <h3 class="widget-title">About Our Company</h3>
                        <div class="textwidget widget-text">
                            We are the best world Information Technology Company. Providing the highest quality in software solutions.
                        </div>
                        <div class="quicklink-box">
                            <!--  featured-icon-box --> 
                            <div class="featured-icon-box left-icon">
                                <div class="featured-icon"><!--  featured-icon --> 
                                    <div class="ttm-icon ttm-icon_element-style-round ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-round">
                                        <span class="flaticon flaticon-clock"></span><!--  ttm-icon --> 
                                    </div>
                                </div>
                                <div class="featured-content"><!--  featured-content -->
                                    <div class="featured-desc"><!--  featured-desc -->
                                        <p>Talk To Our Support</p>
                                    </div>
                                    <div class="featured-title"><!--  featured-title -->
                                        <h5>9922019304</h5>
                                    </div>
                                </div>
                            </div><!--  featured-icon-box END -->
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                    <div class="widget link-widget clearfix">
                        <h3 class="widget-title">Quick Links</h3>
                        <ul id="menu-footer-services">



                            <li><a href="/in/page/aboutus">About Company</a></li>
                            <li><a href="/in/page/blog">Our Case Studies</a></li>
                            <li><a href="/in/page/contactus">Contact Us</a></li>



                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_text clearfix">
                        <h3 class="widget-title">Latest News</h3>
                        <ul class="widget-post ttm-recent-post-list">
                            <?php $main->isLoadView("sidebar", false, array("limit" => 3)); ?>

                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                    <div class="widget flicker_widget clearfix">
                        <h3 class="widget-title">News Letter</h3>
                        <div class="textwidget widget-text">
                            Sign up today for hints, tips and the latest product news
                            <span id="display"></span>
                            <form action="#" method="post" class="newsletter-form" data-mailchimp="true" id="newsletters" onsubmit="return postData('<?php echo $obj->encdata("C_Newsletter"); ?>', '#display', '#newsletters')" class="newsletter">
                                <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                    <i class="fa fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email Address.." required="">
                                    <input type="submit" value="">
                                </div>
                                <div id="subscribe-msg"></div>
                            </form>
                            <h5 class="mb-20">Follow Us On</h5>
                            <style>
                                li a i {
                                    margin: 8px;
                                }
                            </style>
                            <div class="social-icons circle social-hover">
                                <ul class="list-inline">
                                    <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-flickr"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-text ttm-bgcolor-darkgrey ttm-textcolor-white">
        <div class="container">
            <div class="row copyright">
                <div class="col-md-6">
                    <div class="">
                        <span>Copyright © 2020&nbsp;<a href="#">Asteria Info Tech</a> Powered By <a href="aasksoft.co.in" title="Developer company" target="Blank">@askSoft pvt ltd</a></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right res-767-mt-10">
                        <div class="d-lg-inline-flex">
                            <ul id="menu-footer-menu" class="footer-nav-menu">
                                <li><a href="/in/page/aboutus">About Us</a></li>
                                <li><a href="/in/page/ourservices">Services</a></li>
                                <li><a href="/in/page/privacy">Privacy</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<!--back-to-top start-->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end-->

</div><!-- page end -->

<!-- Javascript -->

<script src="assets/html/js/jquery.min.js"></script>
<script src="assets/html/js/tether.min.js"></script>
<script src="assets/html/js/bootstrap.min.js"></script>
<script src="assets/html/js/jquery.easing.js"></script>    
<script src="assets/html/js/jquery-waypoints.js"></script>    
<script src="assets/html/js/jquery-validate.js"></script> 
<script src="assets/html/js/owl.carousel.js"></script>
<script src="assets/html/js/jquery.prettyPhoto.js"></script>
<script src="assets/html/js/numinate.min6959.js?ver=4.9.3"></script>
<script src="assets/html/js/lazysizes.min.js"></script>
<script src="assets/html/js/main.js"></script>

<!-- Revolution Slider -->
<script src="assets/html/revolution/js/revolution.tools.min.js"></script>
<script src="assets/html/revolution/js/rs6.min.js"></script>
<script src="assets/html/revolution/js/slider.js"></script>

<!-- Javascript end-->

<script type="text/javascript">

                                $(document).ready(function () {

                                    $("#style-switcher").animate({
                                        left: "-215px"
                                    });
                                    var username = getCookie("username");
                                    if (username.localeCompare("aasksoft") === 0) {
                                        //$("#myPopupModal").modal('show');
                                    } else {

                                        if (username.localeCompare("") === 0) {
                                            $("#myPopupModal").modal('show');
                                            setCookie("username", "aasksoft", 365);
                                        } else {
                                            // $("#myPopupModal").modal('show');
                                            console.log("Null " + username);
                                        }
                                    }
                                    $('.colorchange').on('click', function () {

                                        var color_name = $(this).attr('id');
                                        var new_style = 'assets/html/css/color/' + color_name + '.css';
                                        $.post("/?r=C_ChangeTheam", {thm: new_style}, function (da) {
                                        });
                                        $('#theme-color').attr('href', new_style);


                                    });
                                    function getCookie(cname) {
                                        var name = cname + "=";
                                        var ca = document.cookie.split(';');
                                        for (var i = 0; i < ca.length; i++) {
                                            var c = ca[i];
                                            while (c.charAt(0) == ' ')
                                                c = c.substring(1);
                                            if (c.indexOf(name) == 0)
                                                return c.substring(name.length, c.length);
                                        }
                                        return "";
                                    }
                                    function setCookie(cname, cvalue, exdays) {
                                        var d = new Date();
                                        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                                        var expires = "expires=" + d.toUTCString();
                                        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
                                    }
                                });
</script>
<script>
    function onLoading()
    {
        $("#cover").show();
        $("#msg").html("<center><img src='logo.gif' style='width:100px;' /><h4 style='color:#000;'><strong>Please Wait.!</strong></h4></center>");
    }
    function load() {
        $("#cover").show();
        return "<center><img src='logo.gif' style='width:100px;' /><h4 style='color:#000;'><strong>Please Wait.!</strong></h4></center>";

    }

    function offLoading()
    {
        $("#msg").html("");
        $("#cover").hide();
    }
    function popup()
    {
        $("#myPopupModal").modal('show');
    }
    function Load(msg)
    {

        $(msg).html("<center><img src='logo.gif' style='width:100px;' /><h4 style='color:#000;'><strong>Please Wait.!</strong></h4></center>");
    }
    function unLoad(msg)
    {
        $(msg).html("");

    }

    function selectBranch(display, file)
    {
        Load(display);
        $.post("/?r=" + file, {id: $("#ourservices").val()}, function (data) {
            unLoad(display);
            var obj = JSON.parse(data);
            switch (obj.status)
            {
                case 1:
                    $("#branch").val(obj.val);
                    $("#sendbtn").show();
                    break;
                default:
                    alert(obj.msg);
                    $("#sendbtn").hide();
                    break;
            }

        });
        return false;
    }
    function sendAjax(file, display)
    {
        onLoading();
        //$(display).html(file);
        $.post("/?r=" + file, {}, function (data) {
            $(display).html(data);
        });
        offLoading();
    }
    $(function () {
// Multiple images preview in browser
        var imagesPreview = function (input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function (event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);

                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#gallery-photo-add').on('change', function () {
            imagesPreview(this, 'div.gallery');
        });
    });
    function callcalc()
    {
        var location = $("#location").val();
        var area = $("#area").val();
        var pest = $("#pest").val();
        var type = $("#type").val();
        $.post("/?r=<?php echo $obj->encdata("C_CalcPrice"); ?>", {location: location, area: area, pest: pest, type: type}, function (data) {

            $("#price").html(data);
        });
    }
    function uploadEvent(file, display, form)
    {
        var form_data = new FormData($(form)[0]);
        onLoading();
        $.ajax({
            type: "POST",
            url: '/?r=' + file,
            data: form_data, //$("#studetnReg").serialize(), // serializes the form's elements.,
            enctype: "multipart/form-data",
            contentType: false,
            processData: false,
            success: function (data)
            {
                offLoading();
                printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
                $(display).html(data);
                $(form)[0].reset();
                $(".gallery").html("");
            }});


        return false;
    }
    function printMessage(file, display)
    {
        $.post("/?r=" + file, {}, function (data) {
            $(display).html(data);
        });
    }
    function openAjaxURL(file, display)
    {
        onLoading();
        $.post("/?r=" + file, {id: 1}, function (data) {
            offLoading();
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");

            if (typeof (history.pushState) != "undefined") {
                var obj = {Title: "Title", Url: "<?php echo HOSTURL; ?>" + "?r=" + file + "1"};
                history.pushState(obj, obj.Title, obj.Url);
                //$.session.set("historyurl", "<php //echo HOSTURL;                                                            ?>" + "?r=" + file + "1");
            } else {
                alert("Browser does not support HTML5.");
            }
            // history.pushState(obj, obj.Title, obj.Url);
        });
        return false;
    }
    function openAjaxButton(file, display, modal)
    {

        onLoading();
        $.post("/?r=" + file, {id: 1}, function (data) {
            offLoading();
            dissmiss(modal);
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");

            if (typeof (history.pushState) != "undefined") {
                var obj = {Title: "Title", Url: "<?php echo HOSTURL; ?>" + "?r=" + file + "1"};
                history.pushState(obj, obj.Title, obj.Url);
                location.reload();
            } else {
                alert("Browser does not support HTML5.");
            }
            // history.pushState(obj, obj.Title, obj.Url);
        });
        return false;
    }
    function openAjaxRld(file, display, modal, id)
    {

        onLoading();

        $.post("/?r=" + file, {loanaccountno: id}, function (data) {
            offLoading();
            dissmiss(modal);
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");

            if (typeof (history.pushState) != "undefined") {
                var obj = {Title: "Title", Url: "<?php echo HOSTURL; ?>" + "?r=" + file + "1"};
                history.pushState(obj, obj.Title, obj.Url);
                location.reload();
            } else {
                alert("Browser does not support HTML5.");
            }
            // history.pushState(obj, obj.Title, obj.Url);
        });
        return false;
    }
    function openAjaxButton2(file, display, odata, modal)
    {

        onLoading();
        $.post("/?r=" + file, {id: 1}, function (data) {
            offLoading();
            dissmiss(modal);
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");

            if (typeof (history.pushState) != "undefined") {
                var obj = {Title: "Title", Url: "<?php echo HOSTURL; ?>" + "?r=" + file + "1"};
                history.pushState(obj, obj.Title, obj.Url);
                location.reload();
            } else {
                alert("Browser does not support HTML5.");
            }
            // history.pushState(obj, obj.Title, obj.Url);
        });
        return false;
    }
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;

        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            //alert("Only Number Accept");
            return false;
        }
        return true;
    }
    function onlyAlphabets(e, t) {
        try {
            if (window.event) {
                var charCode = window.event.keyCode;
            } else if (e) {
                var charCode = e.which;
            } else {
                return true;
            }
            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                return true;
            else
                return false;
        } catch (err) {
            alert(err.Description);
        }
    }
    function onlyAlphabetswithspace(e, t) {
        try {
            if (window.event) {
                var charCode = window.event.keyCode;
            } else if (e) {
                var charCode = e.which;
            } else {
                return true;
            }
            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 32)
                return true;
            else
                return false;
        } catch (err) {
            alert(err.Description);
        }
    }
    function postDataWithValidationform(file, display, form, validation, file2)
    {
        //alert(file);
        if (addValidation(validation))
        {
            var data = new FormData($(form)[0]);
            onLoading();
            $.ajax({
                type: "POST",
                url: '/?r=' + file,
                data: data, //$("#studetnReg").serialize(), // serializes the form's elements.,
                enctype: "multipart/form-data",
                contentType: false,
                processData: false,
                success: function (data)
                {

                    offLoading();
                    openAjaxURL(file2, '#main');
                    $("#msg").show();
                    printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
                    $(display).html(data);
                    $(form)[0].reset();

                }});


        } else {
            alert("Invalid Value insert");
        }
        return false;
    }

    function addValidation(choise)
    {
        switch (choise)
        {
            case 'addBranchValidation':
                if (addBranchValidation())
                    return true;
                else
                    return false;
                // break;
            default:
                return false;
                // break;
        }
        //return false;
    }

    function addBranchValidation()
    {
        return true;
    }
    function SearchByNameBySelect(id, list, file, display)
    {
        var val = $(id).val();

        var opts = $(list).children();//.childNodes;
        for (var i = 0; i < opts.length; i++) {
            if (opts[i].value === val) {
                var s = opts[i].value.split("|");
                $(id).val(s[0]);
                onLoading();
                $.post("/?r=" + file, {empid: s[1]}, function (data) {
                    offLoading();
                    $(display).html(data);
                });
                break;
            }
        }

        return false;
    }
    function postDataCL(file, display, form)
    {
        var data = new FormData($(form)[0]);
        $(display).html(load());
        $.ajax({
            type: "POST",
            url: '/?r=' + file,
            data: data, //$("#studetnReg").serialize(), // serializes the form's elements.,
            enctype: "multipart/form-data",
            contentType: false,
            processData: false,
            success: function (data)
            {
                $(display).html("");
                $(display).show();
                printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', display);
                $(display).html(data);
                $(form)[0].reset();

            }});

        //$(form).hide();
        return false;
    }
    function postData(file, display, form)
    {
        var data = new FormData($(form)[0]);
        onLoading();
        $.ajax({
            type: "POST",
            url: '/?r=' + file,
            data: data, //$("#studetnReg").serialize(), // serializes the form's elements.,
            enctype: "multipart/form-data",
            contentType: false,
            processData: false,
            success: function (data)
            {
                offLoading();
                console.log(data);
                $("#msg").show();
                printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
                $(display).html(data);
                $(form)[0].reset();

            }});

        //$(form).hide();
        return false;
    }
    function postURL(file, display, id)
    {
        onLoading();
        $.post("/?r=" + file, {id: id}, function (data) {
            offLoading();
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
        });
        return false;
    }
    function deleteLogo(file, display, id)
    {
        onLoading();
        $.post("/?r=" + file, {id: id}, function (data) {
            offLoading();
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
            $("#trsk" + id).hide();
        });
        return false;
    }
    function getEvent(file, display)
    {
        onLoading();
        $.post("/?r=" + file, {title: $("#eventName").val()}, function (data) {
            offLoading();
            $(display).html(data);
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
        });
        return false;
    }
    function postURL2(file, display, id)
    {
        onLoading();
        $.post("/?r=" + file, {id: id}, function (data) {
            offLoading();
            $(display).html(data);

        });
        return false;
    }

    function postURL3(file, display, id)
    {
        var limit = $("#limit").val();

        onLoading();
        $.post("/?r=" + file, {id: id, limit: limit}, function (data) {
            offLoading();

            $(display).html(data);
            return false;
        });

    }
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#select-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    function onInput(id, list, display, file) {
        var val = $(id).val();
        var opts = $(list).children();//.childNodes;
        for (var i = 0; i < opts.length; i++) {
            if (opts[i].value === val) {
                onLoading();
                $.post("/?r=" + file, {master: opts[i].value}, function (data) {
                    offLoading();
                    $(display).html(data);
                });
                break;
            }
        }
    }
    function deletePhoto(file, id, path)
    {
        onLoading();
        $.post('/?r=' + file, {id: id, path: path}, function (data) {
            onLoading();
            $("#img" + id).hide();
            $("#msg").show();
            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#msg");
        });
    }
    function SliderAdd()
    {
        $("#Slider-perview").html($("#data").val());
    }
    $(document).ready(function () {
        $(".Editor-editor").keyup(function (e) {
            var data = $(".Editor-editor").html();
            $("#txtEditor").html(data);
        });
        //setInterval(function(){$("#msg").hide(); }, 10000);
    });


</script>
</body>
</html>