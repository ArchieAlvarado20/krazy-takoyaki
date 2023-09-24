
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php?pg=home" class="navbar-brand mx-4 mb-3">
                    <div class="row-sm-12 d-flex">
                        <img src="assets/img/tako.png" alt="Logo" style="width: 40px; height: 40px;" class="col-sm-1">
                        <h4 class="text-primary col-sm-11 mt-2"><?=esc(APP_NAME)?></h4>
                    </div>
            
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?= auth('image')?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-light"><?= auth('name')?></h6>
                        <span><?= auth('role')?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php?pg=home" class="nav-item nav-link <?= $tab == 'home' ? 'active' : "" ;?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?= $tab == 'daily-sales' ? 'active' : '';?>
                                                              <?= $tab == 'top-selling' ? 'active' : '';?>
                                                              <?= $tab == 'sold-items' ? 'active' : '';?>
                                                              <?= $tab == 'cancel-sold-items' ? 'active' : '';?>
                                                              <?= $tab == 'cancelled-items-details' ? 'active' : '';?>
                                                              <?= $tab == 'cancelled-items' ? 'active' : '';?>
                                                            " data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Sales</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="index.php?pg=daily-sales" class="dropdown-item <?= $tab == 'daily-sales' ? 'active' : '';?>
                                            ">Daily Sales</a>
                           
                            <a href="index.php?pg=sold-items" class="dropdown-item <?= $tab == 'sold-items' ? 'active' : '';?>">Sold Orders</a>
                            <a href="index.php?pg=cancelled-items" class="dropdown-item <?= $tab == 'cancelled-items' ? 'active' : '';?>">Cancelled Orders</a>
                            <a href="index.php?pg=top-selling" class="dropdown-item <?= $tab == 'top-selling' ? 'active' : '';?>
                                            ">Top Selling</a>
                        </div>
                    </div>

                    <a href="index.php?pg=product" class="nav-item nav-link <?= $tab == 'product' ? 'active' : "" ;?><?= $tab == 'product-new' ? 'active' : "" ;?><?= $tab == 'product-edit' ? 'active' : "" ;?><?= $tab == 'product-delete' ? 'active' : "" ;?>"><i class="fa fa-hamburger me-2"></i>Product</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?= $tab == 'stocks' ? 'active' : '';?>
                                                              <?= $tab == 'stocks-new' ? 'active' : '';?>
                                                              <?= $tab == 'stocks-delete' ? 'active' : '';?>
                                                              <?= $tab == 'raw-stocks' ? 'active' : '';?>
                                                              <?= $tab == 'raw-stocks-new' ? 'active' : '';?>
                                                              <?= $tab == 'raw-stocks-edit' ? 'active' : '';?>
                                                              <?= $tab == 'raw-stocks-delete' ? 'active' : '';?>
                                                              <?= $tab == 'get-stocks' ? 'active' : '';?>
                                                              <?= $tab == 'get-stocks-delete' ? 'active' : '';?>
                                                              <?= $tab == 'return-stocks' ? 'active' : '';?>
                                                              <?= $tab == 'return-stocks-details' ? 'active' : '';?>
                                                              <?= $tab == 'inventory' ? 'active' : '';?>
                                                              <?= $tab == 'critical' ? 'active' : '';?>
                                                              <?= $tab == 'supplier' ? 'active' : '';?>
                                                              <?= $tab == 'supplier-new' ? 'active' : '';?>
                                                              <?= $tab == 'supplier-edit' ? 'active' : '';?>
                                                              <?= $tab == 'supplier-delete' ? 'active' : '';?>
                                                              <?= $tab == 'reference' ? 'active' : '';?>
                                                            <?= $tab == 'reference-new'? 'active' : '';?>
                                                            <?= $tab == 'reference-update'? 'active' : '';?>
                                                            " data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Stocks</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <a href="index.php?pg=raw-stocks" class="dropdown-item <?= $tab == 'raw-stocks' ? 'active' : '';?>
                                                                               <?= $tab == 'raw-stocks-new' ? 'active' : '';?>
                                                                               <?= $tab == 'raw-stocks-edit' ? 'active' : '';?>
                                                                               <?= $tab == 'raw-stocks-delete' ? 'active' : '';?>
                                                              ">Ingridients and Materials</a>
                            <a href="index.php?pg=stocks" class="dropdown-item <?= $tab == 'stocks' ? 'active' : '';?>
                                                                               <?= $tab == 'stocks-new' ? 'active' : '';?>
                                                                               <?= $tab == 'stocks-delete' ? 'active' : '';?>
                                                                               ">Add Stocks</a>
                                                              <a href="index.php?pg=reference" class="dropdown-item <?= $tab == 'reference' ? 'active' : '';?>
                                                        <?= $tab == 'reference-new'? 'active' : '';?>
                                                        <?= $tab == 'reference-update'? 'active' : '';?>">Add Reference</a>
                            <a href="index.php?pg=get-stocks" class="dropdown-item <?= $tab == 'get-stocks' ? 'active' : '';?> <?= $tab == 'get-stocks-delete' ? 'active' : '';?>
                            ">Withdrawn-Stocks</a>
                            <a href="index.php?pg=return-stocks" class="dropdown-item <?= $tab == 'return-stocks' ? 'active' : '';?><?= $tab == 'return-stocks-details' ? 'active' : '';?>
                            ">Returned-Stocks</a>
                            <a href="index.php?pg=inventory" class="dropdown-item <?= $tab == 'inventory' ? 'active' : '';?>">Inventory</a>
                            <a href="index.php?pg=critical" class="dropdown-item <?= $tab == 'critical' ? 'active' : '';?>">Critical Stocks</a>
                            <a href="index.php?pg=supplier" class="dropdown-item <?= $tab == 'supplier' ? 'active' : '';?>">Supplier</a>

                        </div>
                    </div>
                    <a href="index.php?pg=user" class="nav-item nav-link <?= $tab == 'user' ? 'active' : "" ;?>
                                                                         <?= $tab == 'user-new' ? 'active' : "" ;?>
                                                                         <?= $tab == 'user-edit' ? 'active' : "" ;?>
                                                                         <?= $tab == 'user-delete' ? 'active' : "" ;?>
                                                                         <?= $tab == 'profile' ? 'active' : "" ;?>">
                                                                         <i class="fa fa-user me-2"></i>User Account</a>
                         <button href="" class="nav-item nav-link bg-secondary border-none mt-2" onclick="logout()"><i class="fa fa-arrow-right me-2"></i>Logout</button>
                    </div>
                   
                </div>

            </nav>
        </div>
        <!-- Sidebar End -->

        