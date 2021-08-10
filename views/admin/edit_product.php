<?php
$id = $_GET['id'];
$sql =  "select * from products where id = $id";
$res = mysqli_query($connection, $sql);
$product = mysqli_fetch_assoc($res);

debug($product);
//
if (!empty($_POST)) {
    // update sql
    $data = $_POST;
  //  $data['price'] = (int) $data['price'];

    $allowedTypes = ['image/jpeg', 'image/png'];
    if (in_array($_FILES['image2']['type'] ?? null, $allowedTypes)) {
        $image = rand(1, 1000).$_FILES['image2']['name'];
        $to = __DIR__ . '/../../assets/img/' . $image;
        move_uploaded_file($_FILES['image2']['tmp_name'], $to);
        $data['image'] = '/assets/img/' . $image;
    }
    // update sql
    $sql = "INSERT INTO products (name, price, image) 
VALUES ('{$data['name']}', '{$data['price']}', '{$data['image']}')";
    $res = mysqli_query($connection, $sql);

}


?>

<div class="container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Название товара</label>
            <input type="text" class="form-control" name="name" value="">
        </div>
        <div class="form-group">
            <label>Цена товара</label>
            <input type="text" class="form-control" name="price"  value="23232323">
        </div>
        <div class="form-group">
            <label>Картинка товара</label>
            <input type="file" class="form-control" name="image2"  value="23232323">
        </div>


        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
