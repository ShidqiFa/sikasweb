<?php
$id   = $_GET['id'];
$query= mysqli_query($koneksi,"SELECT * FROM tb_kas WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">

    <div class="container-fluid">   
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Kas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" rows="2" placeholder="Keterangan" value="<?php echo $view['keterangan']; ?>"></input>
                        
                      </div>
                    </div>
                    <div class="md-form md-outline input-with-post-icon datepicker">
                      <label for="example">Tanggal</label>
                      <input placeholder="Select date" type="date" id="example" class="form-control">
                     
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Debit</label>
                        <input type="text" class="form-control" placeholder="Keterangan">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kredit</label>
                        <input type="text" class="form-control" placeholder="Keterangan">
                      </div>
                  
                    </div>
                  </div>
                <button class="btn btn-sm btn-info">Simpan</button>  
                </form>
              </div>
              <!-- /.card-body -->
            </div>
</div>
</section>