<?php
require_once __DIR__ . '/../layout/header.php';
?>
<section class="mx-5">
    <h2 class="text-center">Thêm danh mục khóa học</h2>
    <a href="index.php" class="btn btn-secondary">Quay lại</a>
    <form action="" method="post" class="mt-3">
        <input name="name_category" type="text" class="form-control mb-2" placeholder="Tên danh mục">  
        <?php 
            if (isset($_SESSION['error'])) {
                echo '<span class="text-danger">'.$_SESSION['error'].'</span>';
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['success'])) {
                echo '<span class="text-success">'.$_SESSION['success'].'</span>';
                unset($_SESSION['success']);
            }
        ?><br>
        
        <button name="create_category" class="btn btn-outline-primary mt-2" type="submit">Thêm</button>
    </form>
</section>
<?php
require_once __DIR__ . '/../layout/footer.php';
?>