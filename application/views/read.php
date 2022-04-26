<?php
/**
 * View untuk menampilkan daftar/list data (Read)
 * beserta dengan form yang memungkinkan pencarian data spesifik dengan kata kunci
 * 
 */
?>
<br/>
<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="get" action="<?php echo site_url('/Nasigoreng/') ?>" class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Kata Kunci Pencarian">
                  </div>  
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>

    <br/>

    <div class="alert alert-info">Ditemukan data dalam jumlah <strong><?php echo $num_rows ?></strong></div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th><th>Nama</th><th>E-mail</th>
            <th style="width: 1%;"> </th><th style="width: 1%;"> </th>
        </tr>
        <?php foreach ($result as $r) {
            echo '<tr>';
            echo '<td>'.$r['id'].'</td><td>'.$r['nama'].'</td><td>'.$r['email'].'</td>';
            echo '<td><a href="'.site_url('/Nasigoreng/update/'.$r['id']).'" class="btn btn-primary">Edit</a></td>';
            echo '<td><a href="'.site_url('/Nasigoreng/delete/'.$r['id']).'" class="btn btn-danger">Delete</a></td>';
            echo '</tr>';
        }
        ?>
    </table>

</div>