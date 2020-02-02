<?php $color=array('bg-teal','bg-info','bg-red','bg-success','bg-maroon','bg-navy','bg-purple','bg-orange');
 ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-dashboard"></i>
        Data Pengumuman
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('administrator/main') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengumuman</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-bullhorn"></i> Pengumuman</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-success">
                <h4><i class="fa fa-warning"></i> Pilih Prodi</h4>
                <p>Pilih Data Pengumuman berdasarkan Prodi!</p>
              </div>    
              <?php foreach ($prodi as $value): ?>
                  <div class="col-md-3">
                  <div class="small-box <?php  echo $color[array_rand($color)]; ?>">
                    <div class="inner">
                      <h3><?=$value->jenjang ?></h3>

                      <h5><?=$value->nama_prodi ?></h5>
                    </div>
                    <a href="<?=base_url('administrator/pengumuman/prodi/'.$value->kode_prodi.'') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
            <!-- /.box-body -->
            <!-- /.box-footer -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="modal fade" role="dialog" id="modal_add">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="mod-judul"></h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
            <div id="pesan-error">  
            </div>
              <div class="row">
                <form id="form" method="POST" action="javascript:void(0);">
                  <div class="form-group">
                  <label for="">Nama Jenjang</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" style="text-transform:uppercase" class="form-control" name="jenjang" id="jenjang">
                      <input type="hidden" id="key" name="key">
                    </div>
                    <!-- /.input group -->
                  </div>
                 <!--/form group -->
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary" id="btn-add-jenjang">Simpan</button>
            <button type="button" class="btn btn-primary" id="btn-upd-jenjang">Update</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  