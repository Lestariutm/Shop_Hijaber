<style type="text/css">
    th{
        text-align: center;
    }
</style>
<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">POST BERITA</h1>
                </div>
                <br><br>
                <a href="<?php echo base_url().'index.php/Admin_busana/add'; ?>" class="btn btn-success">Add_Berita</a>
                <br><br>
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>User_id</th>
                        <th>Gambar</th>
                        <th>Bahan</th>
                        <th>ukuran</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody style="text-align: center;">
                        <?php 
                    if ($query->num_rows()>0) {
                     $no=0; 
                    foreach ($query->result() as $row) {
                    $no++;
                    echo' 
                      <tr>     
                          <td>'.$no.'</td>
                          <td>'.$row->busana_id.'</td>
                          <td><img style="width:50px; height:50px; border-radius:100%;" src="'.base_url("upload/busana/".$row->busana).'"></td>
                          <td>'.$row->bahan.'</td>
                          <td>'.$row->ukuran.'</td>
                          <td><button class="btn btn-primary"><a href="'.base_url('index.php/Admin_busana/edit/'.$row->busana_id).'" style="text-decoration: none; color: white;">Edit</a></button>
                            <a href="'.base_url('index.php/Admin_busana/hapus/'.$row->busana_id).'" class="btn btn-danger">Hapus</a></td>
                      </tr>';
                       }
                    } 

                    ?>
                    </tbody>
                </table>

            </div>
        </div>