<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog PurplThings</title>
    <?php include_once "./Asset/util/index_require.php"; ?>
    <link rel="stylesheet" href="./Asset/styles/styles.css">
</head>
<body class="scrollbar">
    <br>
    <div class="Blog">
        <div class="row">
            <div class="col-sm-3" id="recentPosts"></div>
            <div class="col-sm-6" id="getPosts"></div>
            <div class="col-sm-3" id="facebookPosts">
                <div class="shadow-lg">
                <!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPurplThings%2F&amp;tabs=timeline&amp;width=365&amp;height=500&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="250"  height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe> -->
                </div>
            </div>
        </div>
    </div><br>
    <!-- <?php include_once "./Asset/util/footer.php"; ?> -->
</body>
</html>
<script>
    getPosts();
    function getPosts(){
        $.ajax({
            url:"action.php",
            method:"post",
            data:{getPosts:1},
            success:function (data){
                $("#getPosts").html(data);
            }
        })
    }
</script>