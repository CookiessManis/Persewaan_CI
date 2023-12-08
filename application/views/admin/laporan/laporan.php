  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Laporan Detail Transaksi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      
                    <div class="well" style="overflow: auto">
                      <div class="col-md-4">
                        Date Range Picker
                        <form class="">
                          <fieldset>
                            <div class="control-group ">
                              <div class="controls">
                                <div class="input-prepend input-group">
                                  <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                  <input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control" value="01/01/2016 - 01/25/2016" />
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No Reservasi</th>
                          <th>Nama Penyewa</th>
                          <th>Tanggal Checkin</th>
                          <th>Tanggal Checkin</th>
                          <th>ID Cottage</th>
                          <th>Nama Cottage</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $no = 1;
                       foreach ($lap as $val){ ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $val->namaPenyewa; ?></td>
                      <td><?php echo $val->tglCheckin; ?></td>
                      <td><?php echo $val->tglCheckout; ?></td>
                      <td><?php echo $val->idCottage; ?></td>
                      <td><?php echo $val->namaCottage; ?></td>
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
        </div>
        <!-- /page content -->