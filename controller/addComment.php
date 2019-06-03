        <!-- <form action="" method="get"> -->
        <!-- username -->
        <div class="form-group">
            <input type="text" class="form-control" id="username" name="username" placeholder="Your name"
                maxlength="20">
        </div>
        <!-- comment -->
        <div class="form-group">
            <textarea class="form-control" id="comment" name="comment" rows="1" placeholder="Add a comment"></textarea>
        </div>

        <button class="btn btn-primary" onclick="addNewComment()">Comment</button>
        <!-- </form> -->

        <script>
function addNode() {
    var username = document.getElementById("username").value;
    var comment = document.getElementById("comment").value;
    var usernameNode = document.createTextNode(username);
    var commentNode = document.createTextNode(comment);

    var comment_section_lastChild = document.getElementById("comment-section");

    var div1 = document.createElement("div");
    var div1_1 = document.createElement("div");
    var div2 = document.createElement("div");
    var div2_1 = document.createElement("div");
    var span_1 = document.createElement("span");
    var span_2 = document.createElement("span");
    var strong_1 = document.createElement("strong");

    comment_section_lastChild.appendChild(div1);
    div1.appendChild(div1_1);
    div1_1.appendChild(span_1);
    span_1.appendChild(strong_1);
    strong_1.appendChild(usernameNode);
    div1.classList.add("row");
    div1.classList.add("margin-bottom-5");
    div1.classList.add("vertical-center");
    div1_1.classList.add("col-3");
    span_1.classList.add("font-size-12");
    span_1.classList.add("username");


    div1.appendChild(div2);
    div2.appendChild(div2_1);
    div2_1.appendChild(span_2);
    span_2.appendChild(commentNode);
    div2.classList.add("col-9");
    div2.classList.add("comment");
    div2.classList.add("vertical-center");
    div2_1.classList.add("comment");
    span_2.classList.add("font-size-12");
    span_2.classList.add("comment");

}

// // ajax get
function addNewComment() {
    addNode();
    var username = document.getElementById("username").value;
    var comment = document.getElementById("comment").value;
    var post_id = document.getElementById("post").getAttribute("post-id");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // response
        }
    }
    xmlhttp.open("GET", "./controller/insertComment.php?username=" + username + "&comment=" + comment + "&post_id=" +
        post_id,
        true);
    xmlhttp.send();

}
        </script>