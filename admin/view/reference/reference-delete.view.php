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
 
     <!-- Main content -->
     <section class="content-header mt-5">
      <div class="container col-md-8">
      
        <div class="card shadow bg-secondary ">
        
              <!-- /.card-header -->
              <div class="card-body">
                    <div class="card-header mb-3">
                      <div class="row mb-2">
                        <div class="col-sm-12">
                          <h4 class="fw-bold text-center text-primary" style="font-weight: bolder;"><strong><i class="fa fa-hamburger"></i> Deleting Reference</strong></h4>
                          <div class="alert bg-dark text-center text-primary alert-dismissible fade show mb-1" role="alert">Are you sure you want to delete this reference?
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    </div>
                        </div>
                      </div>
                    </div>
               <form action="" method="POST" enctype="multipart/form-data">
               <?php if(!empty($row)):?>
                <div class="mb-3">
                  <label for="">Reference No.</label>
                  <input value="<?=set_value('refno',$row['refno'])?>" type="text" readonly name="refno" id="refno" class="form-control bg-dark" autocomplete="off" value="RF-<?php echo $beta; ?>">
                </div>

                <div class="mb-3">
                  <label for="">Recieving Personnel</label>
                  <input readonly value="<?=set_value('stock_by',$row['stock_by'])?>" type="text" name="stock_by" id="stock_by" class="form-control bg-dark <?=!empty($error['stock_by']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['stock_by'])):?><small class="text-danger"><?=$error['stock_by']?></small><?php endif; ?>
                </div>
                
                
                <div class="mb-3">
                <?php date_default_timezone_set("Asia/Manila"); ?>
                  <label for="">Recieving Date</label>
                  <input   readonly value="<?=set_value('stock_at',$row['stock_at'])?>" type="date" name="stock_at" id="stock_at" class="form-control bg-dark <?=!empty($error['stock_at']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['stock_at'])):?><small class="text-danger"><?=$error['stock_at']?></small><?php endif; ?>
                </div>
                <div class="mb-3">
 
                <div class="mb-3">
                  <label for="">Supplier Name</label>
                  <input  readonly value="<?=set_value('supplier',$row['supplier'])?>" type="text" name="supplier" id="supplier" class="form-control bg-dark <?=!empty($error['supplier']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['supplier'])):?><small class="text-danger"><?=$error['supplier']?></small><?php endif; ?>
                </div>
               
                <div class="row d-flex">
                  <div class="col-sm-6 mt-2">
                      <a href="index.php?pg=reference"><button type="button" class="btn btn-dark text-primary border-primary px-5">
                            Back
                          </button></a>
                  </div>
                  <div class="col-sm-6 text-right mt-2">
                <button class="btn btn-dark text-primary border-primary px-5 float-end" onclick="alert('Successfully deleted')">Delete</button>
                  </div>
              </div>
            
               </form>
               <?php else: ?>
                No product was found.
                <br><br>
            
                    <a href="index.php?pg=product">
                        <button type="button" class="col-md-5 btn btn-danger me-1">Back</button>
                    </a>
    
             <?php endif; ?>
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
  require view_path('partials/footer');
  ?>
  <script>
    function delete_success(){
        Swal.fire(
                        'Deleted!',
                        'Successfully deleted.',
                        'success'
                        )
    }
   
  </script>