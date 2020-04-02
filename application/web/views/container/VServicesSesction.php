<style>
    #simage
    {
        width: 100px;
        height: 100px;
        background-color: #FFFFFF;
        border: 1px solid #999999; 
        border-radius: 100%;

    }
    #center{
     margin-left: auto;
     margin-right: auto;
     text-align: center;
    }
    #center a strong{
        color: #FFF;
    }
</style>
<div class="sp_choose_main_wrapper" style="margin-top: -200px;" id="web">
    <div class="container">
        <div class="row">
            <?php
            $result = $main->adminDB[$_SESSION["db_1"]]->query($main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("category" => "Services")));
            while ($row = $result->fetch_assoc()) {
                ?>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="center">

                    <a href="/in/services/<?php echo strtolower(str_replace(" ", "-", $row["title"])); ?>">

                        <img src="<?php echo $row["img"]; ?>" id="simage" alt="<?php echo $row["title"]; ?>" /><br>

                        <?php echo "<strong>" . $row["title"] . "</strong>"; ?>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<div class="sp_choose_main_wrapper" style="margin-top: -200px;" id="mobile">
    <div class="container">
        <div class="row commonService">
            <?php
            $result = $main->adminDB[$_SESSION["db_1"]]->query($main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("category" => "Services")));
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="center">
                    
                        <a href="/in/services/<?php echo strtolower(str_replace(" ", "-", $row["title"])); ?>">

                            <img src="<?php echo $row["img"]; ?>" id="simage" alt="<?php echo $row["title"]; ?>" /><br>

                            <?php echo "<strong>" . $row["title"] . "</strong>"; ?>
                        </a>
                   
                </div>
                <?php
            }
            ?>
        </div>
        <!--        <div class="row commonService">
                    <div class="owl-carousel owl-theme">
        <?php
        $result = $main->adminDB[$_SESSION["db_1"]]->query($main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("category" => "Services")));
        while ($row = $result->fetch_assoc()) {
            ?>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 item">
                                <center>
                                    <a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingleServices") . "&c=" . $row["id"]; ?>">
                                        
                                            <img src="<?php echo $row["img"]; ?>" style="width: 100px; height: 100px; background-color: #FFFFFF; border: 1px solid #999999; border-radius: 100%;" alt="<?php echo $row["title"]; ?>" /><br>
                                        
            <?php echo "<h2><strong>" . $row["title"] . "</strong><h2>"; ?></a>
                                </center>
            
                            </div>
            <?php
        }
        ?>
                </div>
                </div>-->
    </div>
</div>