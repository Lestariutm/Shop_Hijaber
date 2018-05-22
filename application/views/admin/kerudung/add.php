<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">POST BERITA</h1>
                </div>
                <form action="<?php echo base_url('index.php/Admin_kerudung/save'); ?>" method="POST" enctype="multipart/form-data">
                    <label>Jenis</label><br>
                    <input type="text" name="jenis" placeholder="Masukan Jenis kerudung" class="form-control"><br>
                    <label>Gambar kerudung</label><br>
                    <input type="file" class="form-control" name="kerudung"><br>
                    <label>Bahan</label>
                    <input type="text" name="bahan" placeholder="Masukan Bahan" class="form-control"><br>
                    <label>Warna</label><br>
                    <input type="text" name="warna" placeholder="Masukan Warna kerudung" class="form-control"><br><br>

                    <button class="btn btn-primary">SIMPAN</button>
                </form>

            </div>
        </div>