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
              <form action="" method="post">
                    <?php date_default_timezone_set("Asia/Manila"); ?>
                            <div class="row d-flex mb-3">
                              <div class="col-sm-5">
                              <h3 class="text-primary "><strong><i class="fa fa-hamburger"></i>Returned Stocks</strong> </h3>
                              </div>
                                  <div class="col-sm-2">
                                    
                                        <label for="">Cashier</label>
                                        <select class="form-control bg-dark" id="cashier" name="cashier">
                                        <?php foreach($cashier as $row){?>
                                          <option value="All Cashier" disabled selected hidden>All Cashier</option>
                                          <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
                                          <?php } ?>
                                        </select>
                                    </div>
                                   
                                <div class="col-sm-2">
                                <label for="">Start-date</label><input type="date" class="form-control" name="start" value="<?php echo $start ?? date('Y-m-d')?>"></div>
                                <div class="col-sm-2">
                                <label for="">End-date</label><input type="date" class="form-control" name="end" value="<?php echo $end ?? date('Y-m-d')?>" ></div>
                                <div class="col-sm-1">
                                <label for="">Action</label><button class="btn btn-dark border-primary text-primary px-4" name="filter">Filter</button> </div>
                        </div>
                    </form>
                
                <table id="myTable" class="table table-sm mb-0 text-center table-dark table-hover text-light">
                  <thead class="bg-light">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Transno</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Void by</th>
                    <th class="text-center">Cancel request</th>
                    <th class="text-center">Date purchased</th>
                    <th class="text-center">Date cancelled</th>
                    <th class="text-center">Qty</th>
                    <th class="text-center"></th>
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
                            <tr>
                              <td class="text-center"><?= $no?></td>
                              <td class="text-center"><?= $sale['transno'] ?></td>
                              <td class="text-center" style="font-weight:bolder"><?= strtoupper($sale['description']) ?></td>
                              <td class="text-center"><?= $sale['void_by'] ?></td>
                              <td class="text-center"><?= $sale['cancel_request'] ?></td>
                              <td class="text-center"><?= $sale['sdate'] ?></td>
                              <td class="text-center"><?= $sale['date'] ?></td>
                              <td class="text-center"><?= $sale['c_qty'] ?></td>
                              <td>
                              <a type="button" class="btn btn-sm btn-dark text-primary" href="index.php?pg=return-stocks-details&id=<?=$sale['id'] ?>"><i class="fa fa-eye"></i></a>
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

  
  