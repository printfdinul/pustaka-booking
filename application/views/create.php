<?php
/**
 * View untuk form penambahan (Create) data dan sekaligus pengubahan (Update) data
 * 
 */
// periksa apakah kita sedang dalam mode 'Update'
if (!isset($update)) {
    $update = array('id' => '', 'nama' => '', 'email' => '');
} else {
    $update_flag = '<input type="hidden" name="updateID" value="'.$update['id'].'">';
}
?>
<br/>
<div class="container">

    <?php if (isset($update_flag)) { 
        echo '<div class="alert alert-info">Anda akan mengubah data user <strong>'.$update['nama'].'</strong></div>';
      } ?>
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo site_url('/Nasigoreng/save') ?>">
              <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" name="id" id="id" value="<?php echo $update['id'] ?>" placeholder="ID User">
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $update['nama'] ?>" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $update['email'] ?>" placeholder="E-mail">
              </div>
              <?php if (isset($update_flag)) { 
                  echo $update_flag; 
                } ?>
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>