<div class="card">
              <div class="card-header">
                <h3 class="card-title">Buku Kas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="0.1%">No</th>
                    <th width="1%">Keterangan</th>
                    <th width="0.6%">Tanggal</th>
                    <th width="0.5%">Debit</th>
                    <th width="0.5%">Kredit</th>
                    <th width="0.5%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include ('../conf/config.php');                  
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_kas");
                    while($mhs = mysqli_fetch_array($query)){
                    ?>
                  
                  <tr>
                    <td width='0.1%'><?php echo $mhs['id'];?></td>
                    <td><?php echo $mhs['Keterangan'];?></td>
                    <td><?php echo $mhs['Tanggal'];?></td>
                    <td><?php echo $mhs['Debit'];?></td>
                    <td ><?php echo $mhs['Kredit'];?></td>
                    <td widht="0.5%">
                      <a onclick="hapus_data(<?php echo $mhs['id'];?>)"  class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data"  class="btn btn-sm btn-success">Edit</a>
                      <a href="" ></b   a>

                    </td>
                  </tr> 
                  <?php }?>
                  </tbody>
                  </tbody>
                  <tfoot>                
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_data.php">
            <div class="modal-body">
            
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="No(dikosongkan)" name="id">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Keterangan" name="keterangan"required>
                </div>
                <div class="md-form md-outline input-with-post-icon datepicker">
                  <input placeholder="Tanggal" type="date" id="example" class="form-control">    
                </div>
                    
                <div class="col">
                  <input type="text" class="form-control" placeholder="Debit" name="debit" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Kredit" name="kredit"required>
                </div>
                <div class="col">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Jenis Kas</option>
                  <option value="1">Kas Masuk</option>
                  <option value="2">Kas Keluar</option>
                </select>
                </div>
            </div>
            
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->


<script>
  function hapus_data(data_id){
    //alert('ok');
    //window.location=("delete/hapus_data.php?id="+data_id)
    Swal.fire({
      title: 'Apakah Anda Ingin Menghapus Data Ini?',
      //showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: 'Hapus',
      confirmButtonColor:'#c82333',
      //denyButtonText: `Jangan Hapus`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        window.location=("delete/hapus_data.php?id="+data_id)
      } 
    })
  }
</script>

