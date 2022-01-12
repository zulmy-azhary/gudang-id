<!DOCTYPE html>
<html lang="en">
    <?php require APPROOT . '/views/main/partials/head.php' ?>
    <body class="sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php require APPROOT . '/views/main/partials/nav.php' ?>
            <?php require APPROOT . '/views/main/partials/sidebar.php' ?>
            <div class="content-wrapper">
                <?php $this->view($data['content'], $data); ?>
            </div>
            <?php require APPROOT . '/views/main/partials/footer.php' ?>
        </div>
        <?php require APPROOT . '/views/main/partials/script.php' ?>
    </body>
</html>