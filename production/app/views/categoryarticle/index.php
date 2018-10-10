<?php require VIEW_PATH . '/partial/header.php';  ?>
<body>
<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <?php require VIEW_PATH . '/partial/main-header.php';  ?>
            <div class="inner-block">
                <h1>Quản lý danh mục</h1>
                <div>
                    <a href="<?php echo SITE_URL.'?controller=categoryarticle&action=submit' ?>" class="btn btn-success">Thêm mới danh mục</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tên</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($categories) : ?>
                        <?php foreach ($categories as $category) : ?>
                            <tr>
                                <td><?php echo $category['id'] ?></td>
                                <td><?php echo $category['category_name'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="<?php echo SITE_URL.'?controller=categoryarticle&action=edit&id='.$category['id'] ?>">Sửa</a>
                                    <a class="btn btn-danger remove" href="<?php echo SITE_URL.'?controller=categoryarticle&action=delete&id='.$category['id'] ?>">Xóa</a>
                                </td>
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
<script type="text/javascript">
    $(document).ready(function(){
        $("a.remove").on('click', function (e) {
            e.preventDefault();

            var r = confirm("Bạn có chắc chắn muốn xóa bản ghi này không ?");
            if (r == true) {
                var target = $(this).attr('href');
                console.log(target);
                window.location.href = target;
            } else {

            }
        });
    });

</script>
<!--slide bar menu end here-->
<?php require VIEW_PATH . '/partial/footer.php';  ?>
</body>
</html>