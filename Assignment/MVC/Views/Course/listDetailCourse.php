<?php
require_once __DIR__ . '/../layout/header.php';
?>
<section class="mx-5">
    <h2 class="text-center">Danh sách khóa học</h2>
    <a href="index.php" class="btn btn-secondary">Quay lại</a>
    <a href="index.php?url=createCourse" class="btn btn-primary">Thêm khóa học</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">ID</th>
                <th scope="col">Tên khóa học</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Danh mục</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($courses as $key => $value) :
            ?>
                <tr>
                    <td><?= ++$key; ?></td>
                    <td><?= $value['id']; ?></td>
                    <td><?= $value['name_course']; ?></td>
                    <td>
                        <img class="border rounded" src="./Public/images/<?= $value['image']; ?>" alt="" width="70px" height="70px">
                    </td>
                    <td>
                        <?= number_format($value['price']) . " VND"; ?>
                    </td>
                    <td>
                        <?php foreach ($categories as $category) :
                            extract($category);
                            if ($value['id_category'] == $id) {
                                echo $name_category;
                            }
                        endforeach; ?>
                    </td>
                    <td>
                        <!-- Button -->
                        <a href="index.php?url=editCourse&id=<?= $value['id']; ?>" class="btn btn-primary">Sửa</a>
                        <a href="index.php?url=deleteCourse&id=<?= $value['id']; ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa khóa học này?')">Xóa</a>
                    </td>
                </tr>
            <?php
            endforeach; ?>
        </tbody>
    </table>
</section>
<?php
require_once __DIR__ . '/../layout/footer.php';
?>