<?php require view_path('partials/header');?>
<style>
  @import url('assets/css/brand-style.css');
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
              <div class="card-body ">
                  <div class="row p-2">
                      <div class="col-sm-6 mt-1">
                        <h3 class="text-primary "><strong><i class="fa fa-boxes-packing"></i> Supplier</strong> </h3>
                      </div>
                      <div class="col-sm-6">
                          <ol class="float-sm-right">
                            <a href="index.php?pg=supplier-new" class="btn bg-dark text-primary float-end">New Supplier</a>         
                          </ol>
                      </div>
                    </div>
                

                <table id="myTable" class="table table-sm mb-0 text-center table-dark table-hover text-light">
                  <thead class="bg-light">
                  <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Supplier</th>
                    <th class="text-center">Contact Person</th>
                    <th class="text-center">phone</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
             
                  <?php $no = 1;if(!empty($suppliers)):?>
                <?php foreach ($suppliers as $supplier):?>
                            <tr>
                              <td ><?= $no ?></td>
                              <td style="font-weight:bolder"><?= $supplier['supplier'] ?></td>
                              <td ><?= $supplier['contact_person'] ?></td>
                              <td ><?= $supplier['phone'] ?></td>
                              <td ><?= $supplier['email'] ?></td>
                              <td ><?= $supplier['address'] ?></td>
                              <td  class="text-center">
                              <a href="index.php?pg=supplier-edit&id=<?= $supplier['id'];?>" class="btn btn-sm btn-dark text-success m-0"><i class="fa fa-edit"></i> </a>
                                <a class="btn btn-sm btn-dark text-primary m-0" href="index.php?pg=supplier-delete&id=<?=$supplier['id'] ?>" ><i class="fa fa-trash"></i> </a>
                                
                              </td>
                              
                            </tr>
                            
                            <?php $no++; endforeach?>
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
 
  
 
  <?php require view_path('partials/footer');?>
 

  
  