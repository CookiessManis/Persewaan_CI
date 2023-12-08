  <!-- page content -->
  <div class="right_col" role="main">
          <div class="">
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

              <div class="col-md-25 col-sm-25 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manajemen Data Cottage</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                          <th>idCottage</th>
                          <th>idGambar</th>
                          <th>Nama Cottage</th>
                          <th>Jumlah Kamar</th>
                          <th>Deskripsi</th>
                          <th>Harga</th>                    
                          <th>Tampak Depan</th>
                          <th>Tampak Dalam</th>
                          <th>Tampak Kamar</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                  <?php foreach($cot as $data){?>
                    <tr>
                      <td><?php echo $data->idCottage;?></td>
                      <td><?php echo $data->idGambar;?></td>
                      <td><?php echo $data->namaCottage; ?></td>
                      <td><?php echo $data->jumlahKamar; ?></td>
                      <td><?php echo $data->deskripsi; ?></td>
                      <td><?php echo $data->harga; ?></td>
                      <td><img src="<?php echo base_url('assets/admin/images/'.$data->gambar1); ?>" width="150" height="110"></td>
                      <td><img src="<?php echo base_url('assets/admin/images/'.$data->gambar2); ?>" width="150" height="110"></td>
                      <td><img src="<?php echo base_url('assets/admin/images/'.$data->gambar3); ?>" width="150" height="110"></td>
                     <td><div class="btn-group">
<a href="<?php echo site_url('cottage/edit/'.$data->idCottage);?>" class="btn btn-warning">Edit</a>
<a href="<?php echo site_url('cottage/delete/'.$data->idCottage);?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
</div></td>
                </tr>
					<?php } ?>
                  </tbody>
                    </table>
                  </div>
                  <a href="<?php echo site_url('cottage/add');?>" class="btn btn-success">Tambah Cottage</a>
                </div>
              </div>
            </div>
                </div>
              </div>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->