<?php require 'define.php'; ?>
<?php require 'partial/header.php'; ?>

<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <?php require 'partial/header-main.php'; ?>

            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'].'.php';
                $page_path = ADMIN_PATH.'pages/'.$page;
                $check_file_path = file_exists($page_path);
                var_dump($check_file_path);
                echo $page_path;
                require $page_path;
            } else {
                require 'pages/404.php';
            }

            ?>

            <?php require 'partial/copyright.php'; ?>
        </div>
    </div>
    <?php require 'partial/sidebar.php'; ?>

    <div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<!-- mother grid end here-->
<?php require 'partial/footer.php'; ?>
