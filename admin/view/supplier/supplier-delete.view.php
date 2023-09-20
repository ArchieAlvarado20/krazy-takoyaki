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
    </section>
     <!-- Main content -->
     <section class="content">
      <div class="container col-md-8 mt-5">
      
        <div class="card shadow">
        <div class="card-header text-center text-secondary p-4">
                    <h3 class="mb-3"><strong><i class="fa fa-hamburger"></i> Delete Supplier</strong></h3>
                    <div class="alert alert-danger text-center alert-dismissible fade show mb-1" role="alert">Are you sure you want to delete this Supplier?
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    </div>
                </div>  
              <!-- /.card-header -->
              <div class="card-body">
              <?php if(!empty($row)):?>
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="">Supplier</label>
                  <input value="<?=set_value('supplier', $row['supplier'])?>" type="text" name="supplier"  class="form-control <?=!empty($error['supplier']) ? 'border-danger' : '' ;?>" autocomplete="off" readonly>
                  <?php if(!empty($error['supplier'])):?><small class="text-danger"><?=$error['supplier']?></small><?php endif; ?>
                </div>
                <div class="mb-3">
                  <label for="">Contact Person</label>
                  <input value="<?=set_value('contact_person', $row['contact_person'])?>" type="text" name="contact_person"  class="form-control <?=!empty($error['contact_person']) ? 'border-danger' : '' ;?>" autocomplete="off" readonly>
                  <?php if(!empty($error['contact_person'])):?><small class="text-danger"><?=$error['contact_person']?></small><?php endif; ?>
                </div>
                <div class="mb-3">
                  <label for="">Email</label>
                  <input value="<?=set_value('email', $row['email'])?>" type="email" name="email"  class="form-control <?=!empty($error['email']) ? 'border-danger' : '' ;?>" autocomplete="off" readonly>
                  <?php if(!empty($error['email'])):?><small class="text-danger"><?=$error['email']?></small><?php endif; ?>
                </div>
                <div class="mb-3">
                  <label for="">Phone</label>
                  <input value="<?=set_value('phone', $row['phone'])?>" type="text" name="phone"  class="form-control <?=!empty($error['phone']) ? 'border-danger' : '' ;?>" autocomplete="off" readonly>
                  <?php if(!empty($error['phone'])):?><small class="text-danger"><?=$error['phone']?></small><?php endif; ?>
                </div>
                <div class="mb-1">
                  <label for="">Address</label>
                  <input aria-multiline="5" value="<?=set_value('address', $row['address'])?>" type="text" name="address"  class="form-control <?=!empty($error['address']) ? 'border-danger' : '' ;?>" autocomplete="off" readonly>
                  <?php if(!empty($error['address'])):?><small class="text-danger"><?=$error['address']?></small><?php endif; ?>
                </div>
              </div>
               
                <div class="row d-flex p-3">
                  <div class="col-sm-6">
                    <a href="index.php?pg=supplier"><button type="button" class="btn btn-warning text-light px-5">
                          Back
                        </button></a>
                  </div>
                <div class="col-sm-6 text-right">
                     <button type="" class="btn btn-danger px-5" name="" onclick="alert('Successfully Deleted!')">Delete</button>
                </div>
             
              </div>
            
               </form>
               <?php else: ?>
                No product was found.
                <br><br>
            
                    <a href="index.php?pg=supplier">
                        <button type="button" class="col-md-5 btn btn-danger me-1">Back</button>
                    </a>
    
             <?php endif; ?>
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
