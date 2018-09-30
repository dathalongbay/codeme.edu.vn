<?php require VIEW_PATH . '/partial/header.php';  ?>
<body>
<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <?php require VIEW_PATH . '/partial/main-header.php';  ?>
            <div class="inner-block">
                <h1>Quản lý bài viết</h1>
                <?php
                echo "<pre>";
                print_r($articles);
                echo "</pre>";
                ?>
                <div>
                    <a href="<?php echo SITE_URL.'?controller=article&action=submit' ?>" class="btn btn-success">Thêm mới bài viết</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Trạng thái</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($articles) : ?>
                        <?php foreach ($articles as $article) : ?>
                            <tr>
                                <td><?php echo $article['id'] ?></td>
                                <td><?php echo $article['title'] ?></td>
                                <td><?php echo $article['article_content'] ?></td>
                                <td><?php echo $article['status'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
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