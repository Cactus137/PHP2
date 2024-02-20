<?php
require_once __DIR__ . '/../layout/header.php';
?>
<section class="mx-5">
    <h2 class="text-center">Cập nhật danh mục khóa học</h2>
    <a href="index.php" class="btn btn-secondary">Quay lại</a>
    <form action="" method="post" class="mt-3">
        <?php foreach ($category as $key) :
            extract($key); ?>
            <input name="name_category" value="<?= $name_category; ?>" type="text" class="form-control mb-2" placeholder="Tên danh mục">
            <?php
            if (isset($_SESSION['error'])) {
                echo '<span class="text-danger">' . $_SESSION['error'] . '</span>';
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['success'])) {
                echo '<span class="text-success">' . $_SESSION['success'] . '</span>';
                unset($_SESSION['success']);
            }
            ?><br>
            <button name="edit_category" class="btn btn-outline-primary mt-2" type="submit">Cập nhật</button>
        <?php endforeach; ?>
    </form>
</section>
<?php
require_once __DIR__ . '/../layout/footer.php';
?>