<?php
/**
 * @var $connection mysqli
 */

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $active = isset($_POST['active']) ? 1: 0;

    $sql = "INSERT INTO pages (name, content, active) VALUES ('{$_POST['name']}', '{$_POST['content']}', {$active});";
    mysqli_query($connection, $sql);
}

?>
<?php ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div >
        <form  method="post">
            <div class="form-group">
                <label >Название статьи</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Статья</label>
                <textarea class="form-control" name="content" id="editor"></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="active" id="active" checked="checked">
                <label class="form-check-label" for="active">Показывать на сайте?</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<!-- /.container-fluid -->