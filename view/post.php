<?php
$query = "SELECT * FROM posts";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $post_id = $row["post_id"];
    $post_title = $row["post_title"];
    $post_date = $row["post_date"];
    $post_author = $row["post_author"];
    $post_content = $row["post_content"];

    ?>

<div class="card post" id="post" style="width: 18rem;" post-id="<?php echo $post_id ?>">
    <div class="card-body">
        <h5 class="card-title"><?php echo $post_title ?></h5>
        <p class="card-text"><?php echo $post_content ?>
        </p>
        <hr>
        <!-- comment -->
        <div id="comment-section">
        <?php include "comment.php";?>
        </div>
        <?php }?>
        <!-- add comment -->
        <?php include "controller/addComment.php";?>
    </div>
</div>