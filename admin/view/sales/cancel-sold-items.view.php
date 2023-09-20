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
      <div class="container col-md-8 mt-3">
      
        <div class="card shadow bg-secondary">
        <div class="card-header text-center p-3">
                    <h3 class="mb-3 text-primary "><strong><i class="fa fa-hamburger"></i> Cancel Items</strong></h3>
                </div>  
              <!-- /.card-header -->
              <div class="card-body row d-flex">
                <div class="col-sm-6">
                <center> <label for=""><u>(Transaction Details)</u></label></center>
              <?php if(!empty($row)):?>
              <form action="" method="POST" enctype="multipart/form-data">

                  <input type="hidden" name="t_id" id="t_id" class="form-control bg-dark" autocomplete="off" value="<?=set_value('id',$row['id'])?>">
                  <input type="hidden" name="p_id" id="p_id" class="form-control bg-dark" autocomplete="off" value="<?=set_value('id',$row['p_id'])?>">
                <div class="mb-3">
                  <label for="">Transaction no.</label>
                  <input type="text" name="transno" id="transno" class="form-control bg-dark" autocomplete="off" value="<?=set_value('transno',$row['transno'])?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Pcode</label>
                  <input type="text" name="pcode" id="pcode" class="form-control bg-dark" autocomplete="off" value="<?=set_value('pcode',$row['pcode'])?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Description</label>
                  <input type="text" name="description" id="description" class="form-control description bg-dark" autocomplete="off" value="<?=set_value('description',$row['description'])?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Price</label>
                  <input type="text" name="price" id="price" class="form-control price bg-dark" autocomplete="off" value="<?=set_value('price',$row['price'])?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Quantity</label>
                  <input type="text" name="t_qty" id="qty" class="form-control t_qty bg-dark" autocomplete="off" value="<?=set_value('qty',$row['qty'])?>" readonly>
                </div>
                
                <div class="mb-3">
                  <label for="">Total</label>
                  <input type="text" name="total" id="total" class="form-control total bg-dark" autocomplete="off" value="<?=set_value('total',$row['total'])?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Date Purchased</label>
                  <input type="text" name="sdate" id="sdate" class="form-control sdate bg-dark" autocomplete="off" value="<?=set_value('sdate',$row['sdate'])?>" readonly>
                </div>
               
                <div class="row d-flex mt-4">
                  <div class="col-sm-6">
                    <a href="index.php?pg=sold-items"><button type="button" class="btn btn-dark text-primary border-primary px-5">
                          Back
                        </button></a>
                  </div>
             
             
              </div>
            
             
               <?php else: ?>
                No product was found.
                <br><br>
            
                    <a href="index.php?pg=product">
                        <button type="button" class="col-md-5 btn btn-dark text-primary border-primary me-1">Back</button>
                    </a>
    
             <?php endif; ?>
              </div>
              <!-- second card -->
              <div class="col-sm-6">
              <center> <label for=""><u>(Cancelation Details)</u></label></center>
                <div class="mb-3">
                <label for="">Void by</label>
                <select  name="void_by" id="void_by" class="form-control bg-dark <?=!empty($error['void_by']) ? 'border-danger' : '' ;?>">
                  <?php foreach($void as $row){ ?>
                    <option value="<?=set_value('void_by')?>" selected hidden>Select Admin</option>
                    <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
                    <?php } ?>
                  </select>
                  <?php if(!empty($error['void_by'])):?><small class="text-danger"><?=$error['void_by']?></small><?php endif; ?>
                </div>
                <div class="mb-3">
                  <label for="">Cancel requested by</label>
                  <select  name="cancel_request" id="cancel_request" class="form-control bg-dark <?=!empty($error['void_by']) ? 'border-danger' : '' ;?>">
                  <?php foreach($request as $row){ ?>
                    <option value="<?=set_value('cancel_request')?>" selected hidden>Select Cashier</option>
                    <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
                    <?php } ?>
                  </select>
                  <?php if(!empty($error['cancel_request'])):?><small class="text-danger"><?=$error['cancel_request']?></small><?php endif; ?>

                </div>
                
                <div class="mb-3">
                  <?php foreach ($qty as $row)?>
                  <input type="hidden" name="c_qty" id="qty" class="form-control bg-dark <?=!empty($error['c_qty']) ? 'border-danger' : '' ;?>" autocomplete="off" value="<?php echo $row['qty']?>" readonly>
                  <?php if(!empty($error['c_qty'])):?><small class="text-danger"><?=$error['c_qty']?></small><?php endif; ?>
                </div>
              

                <div class="mb-3">
                  <label for="">Add to inventory?</label>
                  <select type="text" name="action" id="action" class="form-control action bg-dark" autocomplete="off" >
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="">Reason</label>
                  <select type="text" name="reason" id="action" class="form-control action bg-dark" autocomplete="off" >
                  <option value="Return">Return</option>
                  <option value="Return">Exchange</option>
                  <option value="Damage">Damage</option>
                  <option value="Expired">Expired</option>
                  </select>
                </div>
                
        
          
                <div class="col-sm-12 text-center">
                     <button type="" class="btn btn-dark text-primary border-primary px-5" name="">Cancel this item</button>
                </div>
                </form>
            
              </div>
            </div>
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
