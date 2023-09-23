<?php require view_path('partials/header');?>

<div class="main-content px-5">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

     <!-- Sale & Revenue Start -->
     <div class="container-fluid pt-4 px-4">
            <div class="col-sm-6 p-1">
                <h1 class="m-0 text-primary" style="font-weight: bolder;">Sales</h1>
              </div>
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php foreach($daily_sales as $count) {?>
                                <p class="mb-2">Today Sale</p>
                                <h6 class="mb-0">₱ <?= $count['total'] ?? 0 ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                          
                                <p class="mb-2">Today Transaction</p>
                                <?php if(!empty($transaction)){?>
                              <?php foreach($transaction as $count) {?>
                                <h6 class="mb-0 text-center"><?= $count['count']?></h6>
                                <?php } ?>
                                <?php }else{?>
                                    <h6 class="mb-0 text-center">0</h6>
                                    <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php foreach($cancel as $count) {?>
                                <p class="mb-2">Cancelled Transaction</p>
                                <h6 class="mb-0 text-center"><?= $count['count'] ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php if(!empty($cashiers_duty)){?>
                <?php foreach($cashiers_duty as $cashier) {?>
                                <p class="mb-2">Today Cashier</p>
                                <h6 class="mb-0 text-center"><?= $cashier['cashier'] ?></h6>
                                <?php } ?>
                  <?php } else {?>
                    <h6 class="mb-0 text-center">no one</h6>
                    <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Monthly -->
                <!-- <div class="row g-4 mt-1">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php foreach($month_sales as $count) {?>
                                <p class="mb-2">Last Month Sale</p>
                                <h6 class="mb-0 text-center">₱ <?= $count['total_month'] ?? 0 ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                          
                                <p class="mb-2">Last Month Transaction</p>
                                <?php if(!empty($transaction)){?>
                              <?php foreach($transaction_month as $count) {?>
                                <h6 class="mb-0 text-center"><?= $count['count']?></h6>
                                <?php } ?>
                                <?php }else{?>
                                    <h6 class="mb-0 text-center">0</h6>
                                    <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php foreach($cancel as $count) {?>
                                <p class="mb-2">Cancelled Transaction</p>
                                <h6 class="mb-0 text-center"><?= $count['count'] ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php if(!empty($cashiers_duty)){?>
                <?php foreach($cashiers_duty as $cashier) {?>
                                <p class="mb-2">Today Cashier</p>
                                <h6 class="mb-0 text-center"><?= $cashier['cashier'] ?></h6>
                                <?php } ?>
                  <?php } else {?>
                    <h6 class="mb-0 text-center">no one</h6>
                    <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>   -->
                <!-- Monthly end -->
            </div>
            <!-- Sale & Revenue End -->

             <!-- Sales Chart Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Monthly Sales</h6>
                                <a href="index.php?pg=daily-sales">Show All</a>
                            </div>
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                    <!-- <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Cost vs. Revenue</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- Sales Chart End -->
           

        </div>
        <div class="row container-fluid mb-1 mt-3">
          <h1 class="text-primary " style="font-weight: bolder;">Products</h1>
        </div>
        <div class="row p-3">
          <!-- ./col -->
             <div class="col-sm-6 col-xl-3">
                    <a href="index.php?pg=product">
                          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-5">
                            <?php foreach($counts as $count) {?>
                                <p class="mb-2">Product Line</p>
                                <h6 class="mb-0 text-center"><?= $count['count'] ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                    </a>
                    
                    </div>

                    <!-- <div class="col-sm-6 col-xl-3">
                      <a href="index.php?pg=inventory">
                          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                              <i class="fa fa-chart-area fa-3x text-primary"></i>
                              <div class="ms-5">
                              <?php foreach($full_stocks as $full_stock) {?>
                                  <p class="mb-2">Full Stock Items</p>
                                  <h6 class="mb-0 text-center"><?= $full_stock['full_stock'] ?></h6>
                                  <?php } ?>
                              </div>
                          </div>
                      </a>
                  
                    </div>

                    <div class="col-sm-6 col-xl-3">
                      <a href="index.php?pg=critical">
                          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-5">
                            <?php foreach($criticals as $critical) {?>
                                <p class="mb-2">Critical Items</p>
                                <h6 class="mb-0 text-center"><?= $critical['critical'] ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                      </a>
                      
                    </div> -->
     
               
    

                         <!-- DONUT CHART -->
        
                  <div class="col-sm-12 mt-3">
                    <a href="index.php?pg=top-selling">
                       <div class="bg-secondary rounded p-3 col-4 align-items-center">
                            <h6 class="mb-4 text-primary">Top Selling Product (Top 5)</h6>
                            <center><canvas id="donutChart"  ></canvas></center>
                        </div>
                    </a>
                       
                    </div>
             
        </div>
        <!-- /.row -->
        <div class="row container-fluid mb-1 mt-3">
          <h1 class="text-primary " style="font-weight: bolder;">Stocks</h1>
        </div>
        <div class="row p-3">
          <!-- ./col -->
             <div class="col-sm-6 col-xl-3">
                    <a href="index.php?pg=product">
                          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-5">
                            <?php foreach($stocks as $count) {?>
                                <p class="mb-2">Stock Line</p>
                                <h6 class="mb-0 text-center"><?= $count['count'] ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                    </a>
                    
                    </div>

                    <div class="col-sm-6 col-xl-3">
                      <a href="index.php?pg=inventory">
                          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                              <i class="fa fa-chart-area fa-3x text-primary"></i>
                              <div class="ms-5">
                              <?php foreach($full_stocks as $full_stock) {?>
                                  <p class="mb-2">Full Stocks</p>
                                  <h6 class="mb-0 text-center"><?= $full_stock['full_stock'] ?></h6>
                                  <?php } ?>
                              </div>
                          </div>
                      </a>
                  
                    </div>

                    <div class="col-sm-6 col-xl-3">
                      <a href="index.php?pg=critical">
                          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-5">
                            <?php foreach($criticals as $critical) {?>
                                <p class="mb-2">Critical Stocks</p>
                                <h6 class="mb-0 text-center"><?= $critical['critical'] ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                      </a>
                      
                    </div>
     
               
    

                         <!-- DONUT CHART -->
<!--         
                  <div class="col-sm-12 mt-3">
                    <a href="index.php?pg=top-selling">
                       <div class="bg-secondary rounded p-3 col-4 align-items-center">
                            <h6 class="mb-4 text-primary">Top Selling Product (Top 5)</h6>
                            <center><canvas id="donutChart"  ></canvas></center>
                        </div>
                    </a>
                       
                    </div> -->
             
        </div>
        <!-- /.row -->

        <div class="row container-fluid mb-3 mt-3">
          <h1 class="text-primary " style="font-weight: bolder;">User Accounts</h1>
        </div>
        <div class="row p-3">
                    <div class="col-sm-6 col-xl-3">
                      <a href="index.php?pg=user">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-5">
                            <?php foreach($admins as $admin) {?>
                                <p class="mb-2">Admins</p>
                                <h6 class="mb-0 text-center"><?= $admin['admin'] ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                      </a>
                    
                    </div>

                    <div class="col-sm-6 col-xl-3">
                      <a href="index.php?pg=user">
                         <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-5">
                            <?php foreach($cashiers as $cashier) {?>
                                <p class="mb-2">Cashiers</p>
                                <h6 class="mb-0 text-center"><?=$cashier['cashier']?></h6>
                                <?php } ?>
                            </div>
                        </div>
                      </a>
                       
                    </div>
                    </section>
        </div>
      </div>

  <?php require view_path('partials/footer');?>


  <script>
   
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: <?php echo json_encode($month);?>,
      datasets: [
        {
          data: <?php echo json_encode($total);?>,
          backgroundColor : ['#00c0ef', '#3c8dbc', '#d2d6de','#f56954', '#00a65a', '#f39c12'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : false,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

//-------------
    //- BAR CHART -
    //-------------
    const ctx = document.getElementById('barChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode($months);?>,
      datasets: [{
        label: 'Monthly Sales',
        data: <?php echo json_encode($totals);?>,
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
    

  const ctxs = document.getElementById('lineChart');

new Chart(ctxs, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($days);?>,
    datasets: [{
      label: 'Daily Sales',
      data: <?php echo json_encode($totals);?>,
      backgroundColor : ['#00a65a','#f56954', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
        position: 'left',
      }
    }
  }
});
</script>

          