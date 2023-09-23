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
        <div class="card shadow bg-secondary">
              <!-- /.card-header -->
              <div class="card-header">
                      <div class="row mb-2 mt-3">
                        <div class="col-sm-12">
                          <h4 class="fw-bold text-center text-primary" style="font-weight: bolder;"><strong><i class="fa fa-arrow-down"></i> Critical Items</strong></h4>
                        </div>
                      </div>
                    </div>
              <div class="card-body">
                <table id="myTable" class="table   mb-0 text-center table-dark table-hover text-light">
                 <thead>
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
                 <?php $no = 1 ?>
                  <?php if(!empty($criticals)):?>
                    <?php foreach ($criticals as $critical):?>
                 
                            <tr>
                              <td class="text-center"><?= $no ?></td>
                              <td class="text-center"><?= $critical['pcode'] ?></td>
                              <td class="text-center" ><?= $critical['p_name'] ?></td>
                              <td class="text-center" style="font-weight:bolder"><?= strtoupper($critical['description']) ?></td>
                              <td class="text-center"><?= $critical['cost'] ?></td>
                              <td class="text-center"><?= $critical['re_order'] ?></td>
                              <td class="text-center"><?= $critical['qty'] ?></td> 
                              <td class="text-center"><?= $critical['status'] == '1' ? "<span class='badge bg-primary text-sm'>Critical</span>" : "<span class='badge bg-primary text-sm'>Critical</span>"?></td> 
                            </tr>
                              <?php $no++ ?>
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



  