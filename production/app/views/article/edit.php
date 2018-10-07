<?php require VIEW_PATH . '/partial/header.php';  ?>
<body>

<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <?php require VIEW_PATH . '/partial/main-header.php';  ?>
            <div class="inner-block">
                <h1>Sửa bài viết</h1>

                <form name="article" method="post" action="<?php echo SITE_URL . '?controller=article&action=store'?>">
                    <input type="hidden" name="id" value="<?php echo $article['id'] ?>">
                    <div class="form-group">
                        <label for="title">Tiêu đề:</label>
                        <input type="text" name="title" value="<?php echo $article['title'] ?>" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung:</label>
                        <p>
                            <textarea name="article_content" style="width: 80%"><?php echo $article['article_content'] ?></textarea>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="status">Trạng thái:</label>
                        <select name="status">
                            <option value="0" <?php echo ($article['status'] == 0) ? 'selected' : ''; ?>>Ẩn</option>
                            <option value="1" <?php echo ($article['status'] == 1) ? 'selected' : ''; ?>>Hiện</option>
                        </select>
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
print_r($article);
echo '</pre>';
?>