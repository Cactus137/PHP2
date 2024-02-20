<?php
require_once __DIR__ . '/../layout/header.php';
?>
<section class="mx-5">
    <h2 class="text-center">Sửa khóa học</h2>
    <a href="javascript:void(0)" class="btn btn-secondary" onclick="goBack()">Quay lại</a>
    <?php 
    foreach ($course as $key) :
        extract($key);
    ?>
        <form action="" method="post" class="mt-5" enctype="multipart/form-data">
            <input name="name_course" type="text" class="form-control mb-2" placeholder="Tên khóa học" value="<?= $name_course ?>">
            <span class="text-danger pb-2">
                <?php
                if (isset($_SESSION['error']['name_course'])) {
                    echo $_SESSION['error']['name_course'];
                    unset($_SESSION['error']['name_course']);
                }
                ?>
            </span>
            <input name="image" type="file" class="form-control mb-2">
            <input name="price" type="text" class="form-control mb-2" placeholder="Giá khóa học" value="<?= $price; ?>">
            <span class="text-danger pb-2">
                <?php
                if (isset($_SESSION['error']['price'])) {
                    echo $_SESSION['error']['price'];
                    unset($_SESSION['error']['price']);
                }
                ?>
            </span>
            <!-- Category \ -->
            <select name="id_category" class="form-control mb-2">
                <option value="">Chọn danh mục</option>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category['id']; ?>" <?= $category['id'] == $id_category ? "selected" : ""; ?>>
                        <?= $category['name_category']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <span class="text-danger pb-2">
                <?php
                if (isset($_SESSION['error']['id_category'])) {
                    echo $_SESSION['error']['id_category'];
                    unset($_SESSION['error']['id_category']);
                }
                ?>
            </span><br>
            <button name="edit_course" class="btn btn-outline-primary" type="submit">Cập nhật</button>
        </form>
    <?php endforeach; ?>
</section>
<?php
require_once __DIR__ . '/../layout/footer.php';
?>