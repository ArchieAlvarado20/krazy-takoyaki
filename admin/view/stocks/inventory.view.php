<?php
require_once view_path('partials/header');
?>
<style>
  @import url('dist/css/brand-style.css');
</style>
<!-- Google Font: Source Sans Pro -->

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mt-5">
      <div class="container col-md-12">
        <div class="card shadow bg-secondary p-3">
              <!-- /.card-header -->
              <div class="card-header mb-2">
                      <div class="row mb-2">
                        <div class="col-sm-12">
                          <h4 class="fw-bold text-center text-primary" style="font-weight: bolder;"><strong><i class="fa fa-chart-simple"></i> Inventory <small>(Current Stocks)</small></strong></h4>
                        </div>
                      </div>
                    </div>
              <div class="card-body">
                <table id="myTable" class="table  mb-0 text-center table-dark table-hover text-light">
                  <thead class="text-primary">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Pcode</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Cost</th>
                    <th class="text-center">Re-order</th>
                    <th class="text-center">Actual Stock</th>
                    <th class="text-center">Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1?>
                    <?php if(!empty($inventorys)):?>
                      <?php foreach ($inventorys as $inventory):?>
                 
                            <tr>
                              <td class="text-center" ><?= $no ?></td>
                              <td class="text-center"><?= $inventory['pcode'] ?></td>
                              <td class="text-center" ><?= $inventory['p_name'] ?></td>
                              <td class="text-center" style="font-weight:bolder"><?= strtoupper($inventory['description']) ?></td>
                              <td class="text-center"><?= $inventory['cost'] ?></td>
                              <td class="text-center"><?= $inventory['re_order'] ?></td>
                              <td class="text-center"><?= $inventory['qty'] ?></td> 
                              <td class="text-center"><?= $inventory['status'] == '0' ? "<span class='badge bg-success text-sm'>Full-Stock</span>" : "<span class='badge bg-primary text-sm'>Critical</span>"?></td> 
                            </tr>
                              <?php $no++?> 
                            <?php endforeach?>
                        <?php endif ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          </section>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   

  
  <?php
  require_once view_path('partials/footer');
  ?>
 

  
  