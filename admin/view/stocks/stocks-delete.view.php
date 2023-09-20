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
                          <h4 class="fw-bold text-center text-secondary" style="font-weight: bolder;"><strong><i class="fa fa-hamburger"></i> Deleting Stocks</strong></h4>
                          <div class="alert alert-danger text-center alert-dismissible fade show mb-1" role="alert">Deleting this stock will affect it's quantity! Do you want to proceed?
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    </div>
                        </div>
                      </div>
                    </div>
               <form action="" method="POST" enctype="multipart/form-data">
               <?php if(!empty($row)):?>
                <div class="mb-3">
                  <label for="">Reference</label>
                  <input readonly value="<?=set_value('refno',$row['refno'])?>" type="text" name="refno" id="refno" class="form-control <?=!empty($error['refno']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['refno'])):?><small class="text-danger"><?=$error['refno']?></small><?php endif; ?>
                </div>

                <div class="mb-3">
                  <label for="">Barcode</label>
                  <input value="<?=set_value('barcode',$row['barcode'])?>" type="text" readonly name="barcode" id="barcode" class="form-control" autocomplete="off" value="RF-<?php echo $beta; ?>">
                </div>

                <div class="mb-3">
                  <label for="">Description</label>
                  <input readonly value="<?=set_value('description',$row['description'])?>" type="text" name="description" id="decription" class="form-control <?=!empty($error['description']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['description'])):?><small class="text-danger"><?=$error['description']?></small><?php endif; ?>
                </div>

                <div class="mb-3">
                  <label for="">Quantity</label>
                  <input readonly value="<?=set_value('qty',$row['qty'])?>" type="text" name="qty" id="decription" class="form-control <?=!empty($error['qty']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['qty'])):?><small class="text-danger"><?=$error['qty']?></small><?php endif; ?>
                </div>

                <div class="mb-3">
                  <label for="">Receiving Personnel</label>
                  <input readonly value="<?=set_value('stock_by',$row['stock_by'])?>" type="text" name="stock_by" id="decription" class="form-control <?=!empty($error['stock_by']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['stock_by'])):?><small class="text-danger"><?=$error['stock_by']?></small><?php endif; ?>
                </div>
                
                <div class="mb-3">
                  <label for="">Date Recieved</label>
                  <input readonly value="<?=set_value('stock_at',$row['stock_at'])?>" type="date" name="stock_at" id="decription" class="form-control <?=!empty($error['stock_at']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['stock_at'])):?><small class="text-danger"><?=$error['stock_at']?></small><?php endif; ?>
                </div>
               
                <div class="row d-flex">
                  <div class="col-sm-6 mt-2">
                      <a href="index.php?pg=stocks"><button type="button" class="btn btn-warning px-5">
                            Back
                          </button></a>
                  </div>
                  <div class="col-sm-6 text-right mt-2">
                <button class="btn btn-danger px-5" onclick="return confirm('You have to be sure that this data is no longer needed! Are you sure you want to proceed?')">Delete</button>
                  </div>
              </div>
            
               </form>
               <?php else: ?>
                No product was found.
                <br><br>
            
                    <a href="index.php?pg=stocks">
                        <button  class="col-md-5 btn btn-danger me-1">Back</button>
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
  <script>
     function stocked_delete()
     {
      
               Swal.fire({
                    title: 'Deleting Stocks',
                    text: "You have to be sure that this data is no longer needed!......... Are you sure you want to proceed?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Delete this stock info!',
                    }).then((result) => {
                    if (result.isConfirmed) {
                      setTimeout(function(){window.top.location="index.php?pg=stocks"} , 1500);
                        Swal.fire(
                        'Deleted!',
                        'The stocks has been deleted.',
                        'success',
                        )
                    }
                    });
                    return;

    }
 
  </script>