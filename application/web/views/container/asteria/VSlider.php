<rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery">
    <rs-module id="rev_slider_1_1" style="" data-version="6.0.1" class="rev_slider_1_1_height">
        <rs-slides>
            <?php
            $active = "active";
            $i=3;
            $slidResult = $main->adminDB[$_SESSION["db_1"]]->query($main->select("slider", $_SESSION["db_1"]));
            while ($row = $slidResult->fetch_assoc()) {
                ?>
            <rs-slide data-key="rs-<?=$i?>" data-title="Slide" data-thumb="<?= $row["img"]?>" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;">
                <img src="<?= $row["img"]?>" title="slider-mainbg-003" width="1920" height="790" class="rev-slidebg" data-no-retina>
               <?= $row["info"]?>
                
                <?php
                $i++;
                $active = "";
            }
            ?>
            <!-- rs-slide -->
        </rs-slides>
    </rs-module><!-- rs-module -->
</rs-module-wrap>
<!-- END REVOLUTION SLIDER -->

