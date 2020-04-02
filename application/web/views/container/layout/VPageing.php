<div class="row">
    <div class="col-md-12 text-center">
        <div class="ttm-pagination">
            <?php
            //array("ct"=>$ct,"limit"=>$limit,"offset"=>$offset,"max_count"=>$max_count,"page"=>$page,"file"=>$obj->decdata($_REQUEST["v"]));
            $ct = ($limit + $offset);
            if ($ct > $max_count) {
                $ct = $max_count;
            }
            ?>
            <style>
                #left{
                    float: left;
                }
            </style>
            <div id="left">

                Showing Restul <?php echo $offset . " to " . $ct . " of " . $max_count . " entries"; ?>
            </div>
            <?php
            $i = 0;
            $k = 1;
            $fl = 0;
            if ($k == $page) {
                $t = $page - 1;
                ?> <a class = ' disabled next page-numbers' href="javascript:void(0)">&laquo;</a><?php
            } else {
                $t = $page - 1;
                ?><a class="next page-numbers" href = '/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata($file) . "&pg=" . $t . "&tk=0"; ?>' >&laquo;</a><?php
            }

            while ($i < $max_count) {
                if ($k == $page) {
                    $fl = $k;
                    ?> <a class = ' page-numbers disabled' href="javascript:void(0)"><?php echo $k; ?></a><?php
                } else {
                    ?><a class="page-numbers" href ='/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata($file) . "&pg=" . $k . "&tk=0"; ?>' > <?php echo $k; ?></a><?php
                }
                $k++;
                $i = $i + $limit;
            }
            $k--;
            if ($fl == $k) {
                $t = $page + 1;
                ?> <a class="next page-numbers disabled" href="javascript:void(0)">&raquo;</a><?php
                } else {
                    $t = $page + 1;
                    ?> <a class="next page-numbers" href = '/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata($file) . "&pg=" . $t . "&tk=0"; ?>' >&raquo;</a><?php
            }
            ?>



        </div>
    </div>
</div>