<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">POST BERITA</h1>
                </div>
                <form action="<?php echo base_url('index.php/Admin_busana/save'); ?>" method="POST" enctype="multipart/form-data">
                    <label>Bahan</label><br>
                    <input type="text" name="bahan" placeholder="Masukan Jenis Bahan" class="form-control"><br>
                    <label>Gambar</label><br>
                    <input type="file" class="form-control" name="busana"><br>
                    <label>Ukuran</label>
                    <input type="text" name="ukuran" class="form-control" placeholder="Masukan Ukuran"><br><br>

                    <button class="btn btn-primary">SIMPAN</button>
                </form>

            </div>
        </div>