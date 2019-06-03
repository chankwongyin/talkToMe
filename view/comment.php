<?php
$query = "SELECT * FROM comments WHERE comment_post_id=" . $post_id;
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $comment = $row["comment"];
    $username = $row["username"];
    $comment_post_id = $row["comment_post_id"];
    ?>
<div class="row margin-bottom-5 vertical-center">
    <div class="col-3">
        <span class="font-size-12 username"><strong><?php echo $username ?></strong></span>
    </div>
    <div class="col-9 comment vertical-center">
        <div class="comment">
            <span class="font-size-12 comment"><?php echo $comment ?>
            </span>
        </div>
    </div>
</div>

<?php }?>