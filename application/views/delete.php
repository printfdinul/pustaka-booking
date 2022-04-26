<?php
/**
 * View untuk proses konfirmasi penghapusan data (Delete)
 * 
 */
?>
<br />
<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo site_url('/Nasigoreng/real_delete') ?>">
                <p>Apakah anda yakin ingin menghapus user <strong><?php echo $delete['nama'] ?></strong></p>
                <input type="hidden" name="id" value="<?php echo $delete['id'] ?>">
                <a class="btn btn-primary" href="<?php echo site_url('/Nasigoreng/') ?>">BATAL</a>
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
        </div>
    </div>

</div>