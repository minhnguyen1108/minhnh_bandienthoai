<form action="" method="post" enctype="multipart/form-data" >
    <input type="text" name="name" id="">
    <input type="text" name="gia" id="">
    <select name="danhmuc" id="">
    <?php 
        foreach ($dsdm as $dsdm) {
            echo '
            <option value="'.$dsdm["iddm"].'">'.$dsdm["name"].'</option>
        ';
        }
    ?>
    </select>
    <input type="file" name="img" id="">
    <input type="submit" value="Thêm" name="submit">
    
</form>