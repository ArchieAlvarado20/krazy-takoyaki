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
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
     <section class="content mt-3">
      <div class="container col-md-8">
      
        <div class="card shadow ">
        
              <!-- /.card-header -->
              <div class="card-body">
                    <div class="card-header mb-3">
                      <div class="row mb-2">
                        <div class="col-sm-12">
                          <h4 class="fw-bold text-center text-secondary" style="font-weight: bolder;"><strong><i class="fa fa-boxes-packing"></i> Add New Supplier</strong></h4>
                        </div>
                      </div>
                    </div>
               <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="">Supplier</label>
                  <input type="text" name="supplier"  class="form-control <?=!empty($error['supplier']) ? 'border-danger' : '' ;?>" autocomplete="off">
                  <?php if(!empty($error['supplier'])):?><small class="text-danger"><?=$error['supplier']?></small><?php endif; ?>
                </div>
                <div class="mb-3">
                  <label for="">Contact Person</label>
                  <input value="<?=set_value('contact_person')?>" type="text" name="contact_person"  class="form-control <?=!empty($error['contact_person']) ? 'border-danger' : '' ;?>" autocomplete="off">
                  <?php if(!empty($error['contact_person'])):?><small class="text-danger"><?=$error['contact_person']?></small><?php endif; ?>
                </div>
                <div class="mb-3">
                  <label for="">Email</label>
                  <input value="<?=set_value('email')?>" type="email" name="email"  class="form-control <?=!empty($error['email']) ? 'border-danger' : '' ;?>" autocomplete="off">
                  <?php if(!empty($error['email'])):?><small class="text-danger"><?=$error['email']?></small><?php endif; ?>
                </div>
                <div class="mb-3">
                  <label for="">Phone</label>
                  <input value="<?=set_value('phone')?>" type="text" name="phone"  class="form-control <?=!empty($error['phone']) ? 'border-danger' : '' ;?>" autocomplete="off">
                  <?php if(!empty($error['phone'])):?><small class="text-danger"><?=$error['phone']?></small><?php endif; ?>
                </div>
                <div class="mb-1">
                  <label for="">Address</label>
                  <textarea value="<?=set_value('address')?>" type="text" name="address"  class="form-control <?=!empty($error['address']) ? 'border-danger' : '' ;?>" autocomplete="off"></textarea>
                  <?php if(!empty($error['address'])):?><small class="text-danger"><?=$error['address']?></small><?php endif; ?>
                </div>
              </div>
                <div class="row d-flex mb-4 px-3">
                  <div class="col-sm-6">
                      <a href="index.php?pg=supplier"><button type="button" class="btn btn-warning px-5">
                            Back
                          </button></a>
                  </div>
                  <div class="col-sm-6 text-right ">
                <button class="btn btn-success px-5">Save</button>
                  </div>
              </div>
            
               </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
  <?php
  require view_path('partials/footer');
  ?>