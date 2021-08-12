<?php
$id = $_GET['id'];
$sql =  "select * from products where id = $id";
$res = mysqli_query($connection, $sql);
$product = mysqli_fetch_assoc($res);

debug($product);
//
if (!empty($_POST)) {

    $data = $_POST;

    $sql = "UPDATE products SET ";
    foreach ($data as $key => $value){
      $data[$key] = "$key = '{$value}'";
    }
    $sql .= implode(',', $data);
    $sql.= " WHERE id = ".$id;

    $res = mysqli_query($connection, $sql);

}


?>

<div class="container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Название товара</label>
            <input type="text" class="form-control" name="name" value="<?=$product['name']?>">
        </div>
        <div class="form-group">
            <label>Цена товара</label>
            <input type="text" class="form-control" name="price"  value="<?=$product['price']?>">
        </div>
        <img src="<?=$product['image']?>">
        <div class="form-group">
            <label>Картинка товара</label>
            <input type="file" class="form-control" name="image2"  value="">
        </div>


        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
