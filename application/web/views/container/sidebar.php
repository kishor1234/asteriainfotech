
<?php
$result = $main->adminDB[$_SESSION["db_1"]]->query($main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("category" => "Blog")) . $main->orderBy("DESC", 'id') . $main->limitWithOutOffset($limit));
while ($row = $result->fetch_assoc()) {
    ?>
    <li>
        <a href="/in/blogs/<?php echo strtolower(str_replace(" ", "-", $row["title"])); ?>"><img src="<?php echo $row["img"]; ?>" alt="post-img"></a>
        <a href="/in/blogs/<?php echo strtolower(str_replace(" ", "-", $row["title"])); ?>"><?php echo $row["title"]; ?></a>
        <?php
        $dat = explode(" ", $row["isDate"]);
        $dat = explode("-", $dat[0]);
        $month = array(0 => "", 1 => "Jan", 2 => "Feb", 3 => "Mar", 4 => "Apr", 5 => "May", 6 => "Jun", 7 => "July", 8 => "Aug", 9 => "Sept", 10 => "Oct", 11 => "Nov", 12 => "Dec",);
        ?>
        <span class="post-date"><i class="fa fa-calendar"></i><?= $month[(int) $dat[1]] ?> <?= $dat[2] ?>, <?= $dat[0] ?></span>

    </li>
    <?php
}
?>
       