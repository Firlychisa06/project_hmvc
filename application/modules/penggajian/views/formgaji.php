<?php $this->load->view('header') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manajemen Surat
      <!-- <small>Optional description</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Form Gajian</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <form action="simpan" method="POST">
                  <div class="form-group">
                    <div>
                      <label>NAMA PEGAWAI</label>
                      <input type="text" name="nama_pegawai" class="form-control" placeholder="Masukkan Nama Pegawai" required>
                    </div>
                    <label>TANGGAL GAJIAN</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
                    <div>
                      <label>JUMLAH CUTI</label>
                      <input type="number" name="jumlah_cuti" class="form-control" placeholder="Masukkan Jumlah Cuti" required>
                    </div>
                    <div>
                      <label>JUMLAH IZIN</label>
                      <input type="number" name="jumlah_izin" class="form-control" placeholder="Masukkan Jumlah Izin" required>
                    </div>
                    <div>
                      <label>POTONGAN</label>
                      <input type="number" name="potongan" class="form-control" placeholder="Masukkan Potongan" required>
                    </div>
                    <div>
                      <label>NOMINAL</label>
                      <input type="number" name="nominal" class="form-control" placeholder="Masukkan Nominal" required>
                    </div>
                    
                           <!--  <div class="form-group">
                                <label >DESKRIPSI</label>
                            <input type="text" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi atau Alamat Surat"> 
                          </div> -->
                          <button type="submit" class="btn btn-success">Simpan</button>

                        </form>
                      </div>
                      <!-- /.end-box-header -->
                    </div>
                  </div>
                </div>
                <!-- /.end-row -->

              </section>
              <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <?php $this->load->view('footer') ?>