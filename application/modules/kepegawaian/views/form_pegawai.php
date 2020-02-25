<?php $this->load->view('header') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manajemen Kepegawaian
      <!-- <small>it all starts here</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li><a href="#">Here</a></li>
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
                <h3 class="box-title">Input Data Pegawai</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <form action="" id="tTempat">
                  <div class="form-group">
                    <label>NAMA LENGKAP</label>
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" >
                  </div>
                  <div class="form-group">
                    <label>TEMPAT, TANGGAL LAHIR</label>
                    <input type="text", type="date" name="ttl" class="form-control" placeholder="Masukkan Tempat, Tanggal Lahir" >
                  </div>
                  <div class="form-group">
                    <label>ALAMAT</label>
                    <textarea class="textarea" placeholder=""
                    style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                  <div class="form-group">
                    <label>NO KTP</label>
                    <input type="number" name="no_ktp" class="form-control" placeholder="Masukkan No Ktp" >
                  </div>
                  <div class="form-group">
                    <label>RIWAYAT PENDIDIKAN</label>
                    <input type="text" name="riwayat_pendidikan" class="form-control" placeholder="SMP" >
                    <input type="text" name="riwayat_pendidikan" class="form-control" placeholder="SMA" >
                    <input type="text" name="riwayat_pendidikan" class="form-control" placeholder="PT" >
                  </div>

                  <!-- Default box -->
                  <label>UPLOAD CV</label>
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">MASUKKAN CV
                        <!-- <small>Masukkan CV</small> -->
                      </h3>

                      <div class="box-tools pull-right">
                      </div>
                    </div>
                  </div>

                  <div class="box-body pad">
                   <textarea class="textarea" placeholder=""
                   style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                 </div>

                 <label>UPLOAD RIWAYAT HIDUP</label>
                 <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">MASUKKAN RIWAYAT HIDUP
                      <!-- <small>Masukkan CV</small> -->
                    </h3>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                      <i class="fa fa-minus"></i></button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                      </div>
                    </div>

                    <div class="box-body pad">
                     <textarea class="textarea" placeholder=""
                     style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                   </div>
                 </div>

                 <div class="container">
                  <br/>
                  <table id="tTable" >
                    <tr>
                      <th>Upload Sertifikat</th>
                    </tr>
                    <tbody id="dataTable" width="350px" border="1">              
                    </tbody>
                  </table>
                  <div style="margin-top: 20px">
                    <button type="button" onclick="addRow()" class="btn btn-primary">Add</button>
                    <!-- <button type="button" onclick="deleteRow()" class="btn btn-danger">Delete</button> -->
                  </div>
              </form>

        <!-- nama lengkap pegawai
             tempat tanggal lahir
             alamat (text area)
             no ktp
             riwayat pendidikan (smp,sma,kuliah)
             upload cv
             upload riwayat hidup
             upload sertifikat -->
        <!-- <div class="box-body">
          <table id="example1" class="table table-bordered table-striped" width="100%"></table>
        </div> -->
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('footer') ?>