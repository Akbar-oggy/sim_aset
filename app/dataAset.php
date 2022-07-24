<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- /.card -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Aset</th>
                  <th>Nama Aset</th>
                  <th>Lokasi Aset</th>
                  <th>Bulan & Tahun Perolehan</th>
                  <th>Penempatan</th>
                  <th>Merk</th>
                  <th>Spesifikasi</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM tbl_aset");
                while ($ast = mysqli_fetch_array($query)) {
                  $no++
                ?>
                  <tr>
                    <td>
                      <?php echo $no; ?>
                    </td>
                    <td>
                      <?php echo $ast['kd_aset']; ?>
                    </td>
                    <td>
                      <?php echo $ast['nm_aset']; ?>
                    </td>
                    <td>
                      <?php echo $ast['lokasi']; ?>
                    </td>
                    <td>
                      <?php echo $ast['blnthn']; ?>
                    </td>
                    <td>
                      <?php echo $ast['penempatan']; ?>
                    </td>
                    <td>
                      <?php echo $ast['merk']; ?>
                    </td>
                    <td>
                      <?php echo $ast['spesifikasi']; ?>
                    </td>
                    <td>
                      <?php echo $ast['jumlah']; ?>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Lokasi Barang</th>
                  <th>Bulan & Tahun Perolehan</th>
                  <th>Penempatan</th>
                  <th>Merk</th>
                  <th>Spesifikasi</th>
                  <th>Jumlah</th>
                </tr>
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