<?php require VIEW_PATH . '/partial/header.php';  ?>
<body>

<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <?php require VIEW_PATH . '/partial/main-header.php';  ?>
            <div class="inner-block">
                <h1>Sửa danh mục</h1>

                <form name="article" method="post" action="<?php echo SITE_URL . '?controller=categoryarticle&action=store'?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $category['id'] ?>">
                    <div class="form-group">
                        <label for="title">Tiêu đề:</label>
                        <input type="text" name="category_name" value="<?php echo $category['category_name'] ?>" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="name">Chọn danh mục cha:</label>
                        <select name="parent_id">
                            <?php $selected = (0 == $category['parent_id']) ? 'selected' : '' ?>
                            <option value="0" <?php echo $selected ?>>None</option>
                            <?php if ($categories) : ?>
                                <?php foreach($categories as $cat) : ?>
                                    <?php $selected = ($cat['id'] == $category['parent_id']) ? 'selected' : '' ?>
                                    <option value="<?php echo $cat['id'] ?>" <?php echo $selected ?>>
                                        <?php echo str_repeat('-',$cat['level']) . $cat['category_name'] ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="content">Nội dung ngắn:</label>
                        <p>
                            <textarea name="category_intro" style="width: 80%"><?php echo $category['category_intro'] ?></textarea>
                        </p>
                    </div>

                    <div class="form-group">
                        <label for="content">Nội dung:</label>
                        <p>
                            <textarea name="category_desc" style="width: 80%"><?php echo $category['category_desc'] ?></textarea>
                        </p>
                    </div>

                    <div class="form-group">
                        <label for="content">Thời gian tạo:</label>
                        <p>
                            <input type="text" name="created" value="<?php echo $category['created'] ?>" class="form-control datetime" id="created">
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

<?php
echo '<pre>';
print_r($category);
echo '</pre>';
?>