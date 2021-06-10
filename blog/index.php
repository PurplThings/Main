<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog PurplThings</title>
    <?php include_once "./Asset/util/index_require.php"; ?>
    <style>
        .row{
            --bs-gutter-x : 0%;
        }
    </style>
</head>
<body class="scrollbar">
    <br>
    <div class="Blog">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="shadow-lg p-4">
                    <div class="header">
                        <h5>New Post of the week is going on the website</h5>
                    </div><br>
                    <div class="image">
                        <img src="./Asset/images/slide2.jpeg" class="w-100">
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dignissimos similique, quaerat earum alias cum molestias vitae est. Enim, saepe? Eligendi nesciunt error debitis blanditiis ipsa molestias unde quo aperiam.</p>
                    </div><br>
                    <div class="cardfooter">
                        <div class="row">
                            <div class="col-3">
                                Likes : 
                            </div>
                            <div class="col-4">
                                Rating :
                            </div>
                            <div class="col-5">
                                Social Icons:
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="shadow-lg">
                <!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPurplThings%2F&amp;tabs=timeline&amp;width=365&amp;height=500&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="250"  height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe> -->
                </div>
            </div>
        </div>
    </div><br>
    <?php include_once "./Asset/util/footer.php"; ?>
</body>
</html>