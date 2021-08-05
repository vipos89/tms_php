<?php
    'проверка.xls.js';
    $allowedTypes = ['image/jpeg', 'image/gif', ];
    if($_FILES['image2']['type'])
    $to = __DIR__.'/../../assets/img/111111.jpg';
    move_uploaded_file($_FILES['image2']['tmp_name'], $to);
?>

<div class="container-fluid" >
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label >Название товара</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label >Цена товара</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label >Картинка товара</label>
            <input type="file" class="form-control" name="image2" >
        </div>


        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
