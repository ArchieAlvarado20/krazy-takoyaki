<?php require view_path('partials/header');?>
<style>
  @import url('assets/css/brand-style.css');
  .zoom:hover {
  -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
}
</style>
<!-- Google Font: Source Sans Pro -->

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mt-5">

      <div class="container-fluid col-md-12">
        <div class="card shadow bg-secondary">
              <!-- /.card-header -->
              <div class="card-body ">
                    <form action="" method="post">
                    <?php date_default_timezone_set("Asia/Manila"); ?>
                            <div class="row d-flex mb-3">
                              <div class="col-sm-5">
                              <h3 class="text-primary "><strong><i class="fa fa-hamburger"></i>Sold Items</strong> </h3>
                              </div>
                                  <div class="col-sm-2">
                                    
                                        <label for="">Cashier</label>
                                        <select class="form-control bg-dark" id="cashier" name="cashier" required oninvalid="this.setCustomValidity('Please select cashier')">
                                        <?php foreach($cashier as $row){?>
                                          <option value="All Cashier" disabled selected hidden>All Cashier</option>
                                          <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
                                          <?php } ?>
                                        </select>
                                    </div>
                                   
                                <div class="col-sm-2">
                                <label for="">Start-date</label><input type="date" class="form-control" name="start" value="<?php echo $start ?? date('Y-m-d') ?>"></div>
                                <div class="col-sm-2">
                                <label for="">End-date</label><input type="date" class="form-control" name="end" value="<?php echo $end ?? date('Y-m-d') ?>" ></div>
                                <div class="col-sm-1">
                                <label for="">Action</label><button class="btn btn-dark text-primary border-primary px-4" name="filter">Filter</button> </div>
                        </div>
                    </form>
                <table id="myTable" class="table table-sm mb-0 text-center table-dark table-hover text-light">
                  <thead class="bg-light">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Transno</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Cashier</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <!-- 'barcode',
                    'transno',
                    'description',
                    'qty',
                    'price',
                    'total',
                    'date',
                    'user_id',
                    'p_id' -->
                  <?php $no=1;if(!empty($sales)):?>
                <?php foreach ($sales as $sale):?>
                            <tr class="">
                              <td class="text-center"><?= $no?></td>
                              <td class="text-center"><?= $sale['transno'] ?></td>
                              <td class="text-center"><?= $sale['p_name'] ?></td>
                              <td class="text-center" style="font-weight:bolder"><?= $sale['description'] ?></td>
                              <td class="text-center"><?= $sale['qty'] ?></td>
                              <td class="text-center"><?= $sale['price'] ?></td>
                              <td class="text-center"><?= $sale['total'] ?></td>
                              <td class="text-center"><?= $sale['sdate'] ?></td>
                              <td class="text-center"><?= $sale['stime'] ?></td>
                              <td class="text-center"><?= $sale['user_id'] ?></td>
                              <td  class="text-center">
                              <?= $sale['status'] == 'Sold' ? "<span class='badge bg-success text-sm'>Sold</span>" : "<span class='badge bg-success text-sm'>Sold</span>" ?></td>
                              <td>
                                <a class="btn btn-sm btn-dark text-primary m-0" href="index.php?pg=cancel-sold-items&id=<?=$sale['id'] ?>" ><i class="fa fa-trash"></i> </a>
                                
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

  
  