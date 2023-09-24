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
      <div class="container col-md-8 ">

        <div class="card shadow bg-secondary">
        <div class=" text-center  mt-4">
                    <h3 class="mb-2 text-primary"><strong><i class="fa fa-hamburger"></i>Returned Stock Details</strong></h3>
                </div>  
              <!-- /.card-header -->
              <div class="card-body row d-flex">
                <div class="col-sm-6 border p-3">
                  <center> <label for=""><u>(Transaction Details)</u></label></center>

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
                  <input type="text" name="description" id="description" class="form-control bg-dark description" autocomplete="off" value="<?php echo $row['description']?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Cost</label>
                  <input type="text" name="cost" id="cost" class="form-control bg-dark cost" autocomplete="off" value="<?php echo $row['cost']?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Quantity</label>
                  <input type="text"  class="form-control bg-dark" autocomplete="off" value="<?php echo $row['t_qty']?>" readonly>
                </div>
                
                <div class="mb-3">
                  <label for="">Total</label>
                  <input type="text" name="total" id="total" class="form-control bg-dark total" autocomplete="off" value="<?php echo $row['total']?>" readonly>
                </div>

                <div class="mb-3 row">
                  <div class="col-sm-6">
                      <label for="">Date Purchased</label>
                      <input type="text" name="sdate" id="sdate" class="form-control bg-dark sdate" autocomplete="off" value="<?php echo $row['sdate']?>" readonly>
                  </div>
                  <div class="col-sm-6">
                  <label for="">Time Purchased</label>
                      <input type="text" name="stime" id="stime" class="form-control bg-dark stime" autocomplete="off" value="<?php echo $row['stime']?>" readonly>
                  </div>
                
                </div>
               
                <div class="row d-flex mt-4">
                  <div class="col-sm-6">
                    <a href="index.php?pg=return-stocks"><button type="button" class="btn btn-dark text-primary border-primary px-5">
                          Back
                        </button></a>
                  </div>
             
      
                </div>
              </div>
              <!-- second card -->
              <div class="col-sm-6 border p-3">
              <center> <label for="" ><u>(Cancelation Details)</u></label></center>
                <div class="mb-3">
                
                  <label for="">Void by</label>
                  <input type="text" name="void_by" id="void_by" class="form-control bg-dark" autocomplete="off" value="<?php echo $row['void_by']?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Cancel requested by</label>
                  <input type="text" name="cancel_request" id="cancel_request" class="form-control bg-dark" autocomplete="off" value="<?php echo $row['cancel_request']?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Cancelled Qty</label>
                  <input type="number" name="qty" id="qty" class="form-control bg-dark" autocomplete="off"  value="<?php echo $row['c_qty']?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Action</label>
                  <input type="text" name="action" id="action" class="form-control bg-dark action" autocomplete="off"  value="<?php echo $row['action']?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Reason</label>
                  <input type="text" name="reason" id="reason" class="form-control bg-dark reason" autocomplete="off" value="<?php echo $row['reason']?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Date Cancelled</label>
                  <input type="text" name="date" id="date" class="form-control bg-dark date" autocomplete="off"  value="<?php echo $row['date']?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Time Cancelled</label>
                  <input type="text" name="time" id="time" class="form-control bg-dark time" autocomplete="off" value="<?php echo $row['time']?>" readonly>
          </div>
          
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
