<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>siswa</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('siswa'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmEditsiswa', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="IdSiswa" name="IdSiswa" value=" <?= $data_siswa->IdSiswa; ?>">
                            <input type="text" class="form-control" id="Nama" name="Nama" value=" <?= $data_siswa->Nama; ?>">
                            <small class="text-danger">
                                <?php echo form_error('Nama') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Nis" class="col-sm-2 col-form-label">Nis</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="Nis" name="Nis" value="<?= $data_siswa->Nis; ?>">
                            <small class="text-danger">
                                <?php echo form_error('Nis') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Kelas" name="Kelas" value="<?= $data_siswa->Kelas; ?>">
                            <small class="text-danger">
                                <?php echo form_error('Kelas') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="TanggalLahir" class="col-sm-2 col-form-label">TanggalLahir</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="TanggalLahir" name="TanggalLahir" value="<?= $data_siswa->TanggalLahir; ?>">
                            <small class="text-danger">
                                <?php echo form_error('TanggalLahir') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="TempatLahir" class="col-sm-2 col-form-label">TempatLahir</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="TempatLahir" name="TempatLahir" value="<?= $data_siswa->TempatLahir; ?>">
                            <small class="text-danger">
                                <?php echo form_error('TempatLahir') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="Alamat" name="Alamat" rows="3"><?= $data_siswa->Alamat; ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('Alamat') ?>
                            </small>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="JenisKelamin" name="JenisKelamin" value="Laki-laki" <?php if ($data_siswa->JenisKelamin == "Laki-laki") : echo "checked";
                                    endif; ?>>
                                    <label class="form-check-label" for="JenisKelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="JenisKelamin2" name="JenisKelamin" value="Perempuan" <?php if ($data_siswa->JenisKelamin == "Perempuan") : echo "checked";
                                    endif; ?>>
                                    <label class="form-check-label" for="JenisKelamin2">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('JenisKelamin') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="Agama" name="Agama">
                                <option value="Islam" selected disabled>Pilih</option>
                                <option value="Islam" <?php if ($data_siswa->Agama == "Islam") : echo "selected";
                                                        endif; ?>>Islam</option>
                                <option value="Protestan" <?php if ($data_siswa->Agama == "Protestan") : echo "selected";
                                                            endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if ($data_siswa->Agama == "Katolik") : echo "selected";
                                                        endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if ($data_siswa->Agama == "Hindu") : echo "selected";
                                                        endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if ($data_siswa->Agama == "Buddha") : echo "selected";
                                                        endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if ($data_siswa->Agama == "Khonghucu") : echo "selected";
                                                            endif; ?>>Khonghucu</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('Agama') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>