<?php require VIEW_PATH . '/partial/header.php';  ?>
<body>
<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <?php require VIEW_PATH . '/partial/main-header.php';  ?>
            <div class="inner-block">
                <h1>Quản lý người dùng</h1>
                <div>
                    <a href="<?php echo SITE_URL.'?controller=article&action=submit' ?>" class="btn btn-success">Thêm mới người dùng</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tiêu đề</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($admins) : ?>
                        <?php foreach ($admins as $admin) : ?>
                            <tr>
                                <td><?php echo $admin['id'] ?></td>
                                <td><?php echo $admin['username'] ?></td>
                                <td><?php echo $admin['password'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="<?php echo SITE_URL.'?controller=admin&action=edit&id='.$admin['id'] ?>">Sửa</a>
                                    <a class="btn btn-danger remove" href="<?php echo SITE_URL.'?controller=admin&action=delete&id='.$admin['id'] ?>">Xóa</a>
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