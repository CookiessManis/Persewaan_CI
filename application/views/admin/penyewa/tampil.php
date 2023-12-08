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
                    <h2>Manajemen Data Penyewa</h2>
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
                          <th>NIK</th>
                          <th>Nama Penyewa</th>
                          <th>Alamat</th>
                          <th>Gender</th>
                          <th>Email</th>                    
                          <th>Nomor Telepon</th>
                          <th>Tgl Checkin</th>
                          <th>Tgl Checkout</th>
                        </tr>
                      </thead>
                      <tbody>
                  <?php foreach($penyewa as $val){?>
                    <tr>
                      <td><?php echo $val->NIK;?></td>
                      <td><?php echo $val->namaPenyewa; ?></td>
                      <td><?php echo $val->alamat; ?></td>
                      <td><?php echo $val->gender; ?></td>
                      <td><?php echo $val->email; ?></td>
                      <td><?php echo $val->no_telp; ?></td>
                      <td><?php echo $val->tglCheckin; ?></td>
                      <td><?php echo $val->tglCheckout; ?></td>
                </tr>
					<?php } ?>
                  </tbody>
                    </table>
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