<?php
require_once __DIR__ . '/../layout/header.php'; 
?>
<section class="mx-5">
    <h2 class="text-center">Danh sách danh mục khóa học</h2>
    <a href="index.php?url=createCategory" class="btn btn-primary">Thêm danh mục</a>
    <a href="index.php?url=listCourse&id=0" class="btn btn-info">Xem tất cả khóa học</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">ID</th>
                <th scope="col">Tên Danh mục</th>
                <th scope="col">Chi tiết</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($categories as $category) :
                extract($category);
            ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $id; ?></td>
                    <td><?= $name_category; ?></td>
                    <td>
                        <a href="index.php?url=listCourse&id=<?= $id; ?>" class="link-primary">Xem chi tiết</a>
                    </td>
                    <td>
                        <!-- Button -->
                        <a href="index.php?url=editCategory&id=<?= $id; ?>" class="btn btn-primary">Sửa</a>
                        <a href="index.php?url=deleteCategory&id=<?= $id; ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')">Xóa</a>
                    </td>
                </tr>
            <?php $i++;
            endforeach; ?>
        </tbody>
    </table>
</section>
<?php
require_once __DIR__ . '/../layout/footer.php';
?>