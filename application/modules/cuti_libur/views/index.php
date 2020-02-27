<?php $this->load->view('header_cuti') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      SURAT KELUAR
      <!-- <small>Optional description</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <a href=<?php echo site_url("http://getbootstrap.com/javascript/#modals")?>></a>

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">List Data Cuti Pegawai</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped" width="100%">
                  <thead>
                    <tr>
                      <th>Nama Pegawai</th>
                      <th>Tanggal Cuti</th>
                      <th>Tanggal Masuk</th>
                      <th>Alamat/Lokasi Cuti</th>
                      <th>Keterangan</th>
                      <th>Jenis Cuti</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Pamungkas</td>
                      <td>7 februari 2020</td>
                      <td>11 febuari 2020</td>
                      <td>Bandung</td>
                      <td>Sakit</td>
                      <td>
                        <button class="btn btn-warning" type="edit"><i class="fa fa-info" aria-hidden="true"></i>Detail</button>
                        <button class= "btn btn-danger"  type="delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete </button>
                        <!-- <button class="btn btn-primary" type="detail"><i class="fa fa-info" aria-hidden="true"></i>Detail</button> -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default1"><i class="fa fa-pencil" aria-hidden="true"></i>
                          Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Ibnu</td>
                      <td>14 februari 2020</td>
                      <td>16 februari 2020</td>
                      <td>Purwokerto</td>
                      <td>Izin</td>
                      <td>
                        <button class="btn btn-warning" type="edit"><i class="fa fa-info" aria-hidden="true"></i>Detail</button>
                        <button class="btn btn-danger" type="delete"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        <!-- <button class="btn btn-primary" type="detail"><i class="fa fa-info" aria-hidden="true"></i>Detail</button> -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default2"><i class="fa fa-pencil" aria-hidden="true"></i>
                          Detail
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Ardhito</td>
                      <td>10 maret 2019</td>
                      <td>15 maret 2019</td>
                      <td>Pati</td>
                      <td>Sakit</td>
                      <td>
                        <button class="btn btn-warning" type="edit"><i class="fa fa-info" aria-hidden="true"></i>Detail</button>

                        <button class="btn btn-danger" type="delete"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        <!-- <button class="btn btn-primary" type="detail"><i class="fa fa-info" aria-hidden="true"></i>Detail</button> -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default3"><i class="fa fa-pencil" aria-hidden="true"></i>
                          Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Baskara</td>
                      <td>23 januari 2020</td>
                      <td>26 januari 2020</td>
                      <td>Jogja</td>
                      <td>Izin</td>
                      <td>
                        <button class="btn btn-warning" type="edit"><i class="fa fa-info" aria-hidden="true"></i>Detail</button>
                        <button class="btn btn-danger" type="delete"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        <!-- <button class="btn btn-primary" type="detail"><i class="fa fa-info" aria-hidden="true"></i>Detail</button> -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default4"><i class="fa fa-pencil" aria-hidden="true"></i>
                          Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Desta</td>
                      <td>9 november 2019</td>
                      <td>12 november 2019</td>
                      <td>Jakarta</td>
                      <td>Sakit</td>
                      <td>
                        <button class="btn btn-warning" type="edit"><i class="fa fa-info" aria-hidden="true"></i>Detail</button>
                        <button class="btn btn-danger" type="delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        <!-- <button class="btn btn-primary" type="detail"><i class="fa fa-info" aria-hidden="true"></i>Detail</button> -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default5"><i class="fa fa-pencil" aria-hidden="true"></i>
                          Edit
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="modal fade" id="modal-default1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Detail Surat Keluar</h4>
                  </div>
                  <div class="modal-body">
                    <table id="example1" class="table table-bordered table-striped" width="100%">
                      <thead>
                        <tr>
                          <th>Alamat</th>
                          <th>Tanggal Keluar</th>
                          <th>Judul Surat</th>
                          <th>Asal Surat/Instansi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Semarang</td>
                          <td>11 Januari 2020</td>
                          <td>Daftar Ulang</td>
                          <td>Polines Semarang</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="modal-default2">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Detail Surat Keluar</h4>
                    </div>
                    <div class="modal-body">
                      <table id="example1" class="table table-bordered table-striped" width="100%">
                        <thead>
                          <tr>
                            <th>Alamat</th>
                            <th>Tanggal Keluar</th>
                            <th>Judul Surat</th>
                            <th>Asal Surat/Instansi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Jakarta</td>
                            <td>14 Januari 2020</td>
                            <td>Panggilan Kerja</td>
                            <td>Pos Indonesia</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
                      <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="modal-default3">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Detail Surat Keluar</h4>
                      </div>
                      <div class="modal-body">
                        <table id="example1" class="table table-bordered table-striped" width="100%">
                          <thead>
                            <tr>
                              <th>Alamat</th>
                              <th>Tanggal Keluar</th>
                              <th>Judul Surat</th>
                              <th>Asal Surat/Instansi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Jogja</td>
                              <td>12 Maret 2019</td>
                              <td>Tagihan Pajak</td>
                              <td>Kantor Pajak</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="modal-default4">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Detail Surat Keluar</h4>
                        </div>
                        <div class="modal-body">
                          <table id="example1" class="table table-bordered table-striped" width="100%">
                            <thead>
                              <tr>
                                <th>Alamat</th>
                                <th>Tanggal Keluar</th>
                                <th>Judul Surat</th>
                                <th>Asal Surat/Instansi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Purwokerto</td>
                                <td>25 Januari 2020</td>
                                <td>Tagihan SPP</td>
                                <td>SMK TELKOM PURWOKERTO</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
                          <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="modal-default5">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Detail Surat Keluar</h4>
                          </div>
                          <div class="modal-body">
                            <table id="example1" class="table table-bordered table-striped" width="100%">
                              <thead>
                                <tr>
                                  <th>Alamat</th>
                                  <th>Tanggal Keluar</th>
                                  <th>Judul Surat</th>
                                  <th>Asal Surat/Instansi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Jakarta</td>
                                  <td>12 November 2020</td>
                                  <td>Panggilan Kerjaan</td>
                                  <td>PT KAI</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </section>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

          <!-- /.end-box-header -->

        </div>
      </div>

      <!-- /.end-row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php $this->load->view('footer_cuti') ?>