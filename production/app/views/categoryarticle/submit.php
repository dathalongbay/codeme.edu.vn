<?php require VIEW_PATH . '/partial/header.php';  ?>
<body>
<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <?php require VIEW_PATH . '/partial/main-header.php';  ?>
            <div class="inner-block">
                <h1>Thêm mới danh mục</h1>

                <form name="category" method="post" action="<?php echo SITE_URL . '?controller=categoryarticle&action=store'?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Tên danh mục:</label>
                        <input type="text" name="category_name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung ngắn:</label>
                        <p>
                            <textarea name="category_intro" style="width: 80%"></textarea>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung:</label>
                        <p>
                            <textarea name="category_desc" style="width: 80%"></textarea>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="content">Thời gian tạo:</label>
                        <p>
                            <input type="text" name="created" class="form-control" id="name">
                        </p>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
            <?php require VIEW_PATH . '/partial/copyright.php';  ?>
        </div>
    </div>
    <?php require VIEW_PATH . '/partial/sidebar.php';  ?>

</div>
<!--slide bar menu end here-->
<?php require VIEW_PATH . '/partial/footer.php';  ?>
</body>
</html>