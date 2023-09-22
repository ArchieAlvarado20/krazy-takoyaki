<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?=esc(APP_NAME) ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- sweet-alert -->
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">

    <!-- dataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/table.css">

    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    
    
    
</head>
<body>
   <style>
    @import url("assets/css/modal.css");
   </style>
   
                     <div class="user-panel mt-2 mb-0 d-flex row px-4" style="background-color: #141414;">
                                
                                <img class="rounded-circle mt-2 col-1" src="<?= auth('image')?>" alt="" style="width: 60px; height: 40px;">
                                    <p class="col-5 mt-3"><strong>CASHIER: <?=strtoupper(auth('name'))?></strong></p>
                                    <div class="col-4 d-flex mt-1">
                                        <img src="assets/img/tako.png" alt="Logo" style="width: 40px; height: 40px;" class="col-sm-1">
                                        <h4 class="text-primary mt-2"><?=esc(APP_NAME)?></h4>
                                    </div>
                                   <h1 class="js-gtotal text-success col-2 text-end" style="font-family: 'Orbitron', sans-serif;font-weight:bolder">0.00</h1> 
                                   
                            </div>
    
   <div class="col-3 mt-2 text-center">
    </div>
   </div>
<div class="row-sm-12 ms-2 d-flex mt-0 dark">
    <div class="col-sm-6 ms-2 mt-0">
       
                <!-- products -->
             <div class="card-body">
                    <div class="row-12">
                          <div class="input-group mb-3 mt-1" >
                                <input onkeypress="check_for_enter_key(event)" value="" oninput="search_item(event)"  type="text"  accesskey="z" class="form-control ms-3 js-search border-primary" onclick="this.select()" placeholder="Search product(ALT + Z to focus)" aria-label="Username" aria-describedby="basic-addon1" autofocus>
                                <span class="input-group-text bg-dark text-light" id="basic-addon1"><i class="fa fa-search"></i></span>
                            </div>
                    </div>   
                    <div onclick="add_item(event)" class="js-products d-flex ms-0" style="flex-wrap: wrap;height:700px;overflow-y: scroll">
               
               </div>
        </div>

        </div>
        <!-- end products -->
     <!-- Items -->
     <div class="col-sm-6">
                          
                          <div class="d-flex">
                                  <div class="row d-flex">
                                  <h4 class="col text-success">ITEMS:</h4><h4 class="js-items-count col text-success">0</h4>
                                  </div>  
                               
                                      <!-- dark mode -->
                                      <!-- <ul>
                                      <li class="nav-item">
                                              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                                              <i class="fas fa-expand-arrows-alt"></i>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                                              <i class="fas fa-th-large"></i>
                                              </a>
                                          </li>
                                      </ul> -->
                                           <!-- end dark mode -->
                          </div>
                              <div class="table-responsive" style="height:600px;overflow-y: scroll">
                                  <table class="table table-sm mb-0 text-sm text-center table-dark table-hover text-white">
                              <thead>
                                  <tr class="text-primary">
                                      <th>Image</th>
                                      <th>Name</th>
                                      <th>Description</th>
                                      <th>Quantity</th>
                                      <th>Price</th>
                                      <th>Total</th>
                                  </tr>
                              </thead>
                              <tbody class="js-items">
                              
                              </tbody>
      
                              </table>
                          </div>
                              <!-- calculate pannel -->
                                <div class="row-sm-2 ms-2">
                                            <div class="col-sm-12 float-end p-5">

                                                    <div class="row"><button onclick="show_modal('payment-modal')" accesskey="x" class="col-sm-12 btn btn-success mb-2 float-end ">Check-out (ALT + X)</button> </div> 
                                                    <div class="row"><button accesskey="c" onclick="clear_all()" class="col-sm-12 btn btn-warning mb-2 me-5">Clear-all (ALT + C)</button></div>
                                                    <div class="row"><button accesskey="l" onclick="logout()" class="col-sm-12 btn btn-primary  mb-2me-5">Logout (ALT + L)</button></div>
                                                    
                                                
                                            </div>
                                </div>

                            <!-- end calculate pannel -->
                                                </div>
                      <!-- end items -->
 
  
    


 </div>
 <!-- end-page -->
     <!--modals start-->
     <!--payment-modal start-->
     <div role="close-button" onclick="hide_modal(event,'payment-modal')" class="js-payment-modal d-none" style="background-color: #000000aa; width: 100%; height: 100%;position: absolute; left: 0px;top:0px;z-index:2;">
         <div style="animation: appear 0.5s; border-radius:10px;width: 400px; height: 400px;padding: 20px; margin: auto;margin-top:200px; backdrop-filter: blur(10px);color: white;opacity: 80%;" class="bg-secondary text-white" >
         <div class="row-sm-12 d-flex">
         <h3 class="mt-0 text-primary col-sm-12 text-center mb-3"><strong>PAYMENT</strong></h3>
            <!-- <div class="float-end p-1 text-right col-sm-1"><i class="fa fa-times text-dark " onclick="hide_modal(event,'payment-modal')" role="close-button"  type="button"></i></div> -->
         </div>
                
                <div class="row d-flex">
                    <p class="col text-left text-white mt-1">SUB-TOTAL:</p><h3 class="js-gtotal_mod col text-right text-success" style="font-family: 'Orbitron', sans-serif;font-weight: bolder;"></h3>
                </div>
                <div class="row d-flex mb-3">
                        <p class="col text-left text-white mt-1">PAYMENT:</p>
                        <input onkeyup ="enter_checkout(event)" class="js-payment-input form-control col text-white" type="number"  placeholder="Enter amount" name="">
                </div>

                <div class="row d-flex mb-3">
                        <p class="col text-left text-white mt-1">DINE:</p>
                        <select class="js-take form-control bg-dark col text-white" id="js-take" type="text" name="">
                            <option value="Dine-in">Dine-in</option>
                            <option value="Take-out">Take-out</option>
                        </select>
                </div>

                <div class="row d-flex mb-3">
                        <p class="col text-left text-white mt-1">TABLE NUMBER:</p>
                        <input onkeyup="check_chekout(e)" class="js-table form-control col text-white" type="number" id="js-table " placeholder="Enter Table Number" name="">
                </div>
                

                            <!-- <button role="close-button" onclick="hide_modal(event,'payment-modal')" type="button" class="col-md-5 btn btn-danger me-1">Cancel</button> -->
                            <button role="close-button" onclick="checkout(event)" class=" col-md-12 btn btn-primary float-end mb-1 mt-1 js-render">Render</button>  
                          
                   
            </div>
    </div>
             <!--payment-modal end-->
            <!--change-modal start-->
     <div role="close-button"  onclick="{hide_modal(event,'change');rendered_success()}" class="js-change-modal d-none" style="background-color: #000000aa; width: 100%; height: 100%;position: absolute; left: 0px;top:0px;z-index:2;">
            <div style="animation: appear 0.5s; border-radius:10px;width: 400px; height: 320px;padding: 20px; margin: auto;margin-top:200px;backdrop-filter: blur(10px);color: white;opacity: 80%;" class="bg-secondary">
            <div class="row-sm-12 d-flex">
         <h3 class="ms-2 text-primary col-sm-12 text-center mb-3"><strong>CHANGE</strong></h3>
            <!-- <div class="float-end p-1 text-right col-sm-1"><i class="fa fa-times text-dark " onclick="hide_modal(event,'payment-modal')" role="close-button"  type="button"></i></div> -->
         </div>
                <div class="row d-flex">
         <p class="col text-left text-white mt-1 fw-bold">TOTAL:</p><h4 class="js-gtotal_change col text-center text-success fw-bold" style="font-weight: bolder;font-family: 'Orbitron', sans-serif"></h4>
         </div>
         <div class="row d-flex">
         <p class="col text-left text-white mt-1 fw-bold">PAYMENT:</p><h4 class="js-payment-result col text-center text-success fw-bold"  style="font-weight: bolder;font-family: 'Orbitron', sans-serif"></h4>
         </div>
         <hr class="p-0">
         <div class="row d-flex mb-2">
         <p class="col-sm-6 text-left text-white mt-1 fw-bold">CHANGE:</p>
                <!-- <input class="js-change-input form-control float-end col-sm-4 bg-white border-0 text-xl" type="number" readonly> -->
                <h4 class="js-change text-primary text-center col-sm-6" style="font-weight: bolder;font-family: 'Orbitron', sans-serif"></h4>
         </div>
              
                           <center><button class="js-change-modal-close col-md-5 btn btn-primary float-center mt-3" role="close-button"  onclick="{hide_modal(event,'change');rendered_success()}">Done</button>  </center> 
                          
                   
            </div>
    </div>
    <!--change-modal end-->
     <!--modals end-->
  </body>
<script>
    var PRODUCTS = [];
    var ITEMS = [];
    var BARCODE = false;
    var GTOTAL = 0;
    var TOTAL = 0;
    var CHANGE = 0;
    var AMOUNT = 0;
    var COUNT = 0;
    var TABLE = 0;
    var TAKE = "";
  

    var main_input = document.querySelector(".js-search");

   function search_item(e){

   
            var text = e.target.value.trim();

                var data = {};
                data.data_type = "search";
                data.text = text;
                send_data(data);
    }
    
    function send_data(data)
    {
        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange',function(e){
            if(ajax.readyState == 4){

                if(ajax.status == 200){
                    if(ajax.responseText.trim() != "")
                    {
                        handle_result(ajax.responseText);
                    }
                    else
                        if(BARCODE)
                            {
                                swal.fire({
                                title: 'No Item',
                                text: 'That item was not found!',
                                icon: 'error',
                                confirmButtonText: 'Okay',
                                 });
                                     main_input.value = "";       
                            }  
                }else{
                    console.log("An error occured. Err Code:"+ajax.status+" Err Message:"+ajax.statusText);
                    console.log(ajax);
                }
                //clear main input...
                if(BARCODE)
                {
                     main_input.value = "";
                    //  main_input.focus();
                }
                BARCODE = false;
            }
           
        });

        ajax.open('post', 'index.php?pg=ajax-pos',true);
        ajax.send(JSON.stringify(data));
    }
    
    function handle_result(result){
        //console.log(result);
        var obj = JSON.parse(result);

        if(typeof obj != "undifined"){
            
            //valid json
            if(obj.data_type == "search"){

                var mydiv = document.querySelector(".js-products");
                mydiv.innerHTML = "";
                PRODUCTS = [];

                    if(obj.data != "")
                    {
                            PRODUCTS = obj.data;
                            for(var i = 0; i < obj.data.length; i++){
                            mydiv.innerHTML +=  product_html(obj.data[i],i);
                            }

                            if(BARCODE && PRODUCTS.length == 1 )
                            {
                                add_item_from_index(0)
                            }
                    }  
            }
        }
      
         

      
    }
    function product_html(data,index){
        return `
                        <img index="${index}" src="${data.image}" alt="Items" class="w-100 m-0 p-1" style="max-width: 175px;max-height: 175px;border-radius:10px">
                                `;
    }

    function item_html(data,index){
        return `
        <tr  class="text-center py-0">
                        <td><img src="${data.image}" style="max-width:50px;max-height: 50px;border-radius:5px"></td>
                        <td>${data.p_name}</td>
                        <td><center>${data.description}</center></td>
                        <td class="text-sm fw-bold" style="width:150px;align-content:center">
                            <div class="d-flex">
                                <button index="${index}"onclick="change_qty('down', event)" class="btn btn-sm input-group-text bg-dark text-white border-primary text-center">-</button>
                                <input index="${index}" onblur="change_qty('input', event)"  accesskey="v" onclick="this.select()" type="number" class="form-control text-center text-sm text-white border-primary"style="width:100px" value="${data.qty}">
                                <button index="${index}"onclick="change_qty('up', event)" class="btn btn-sm input-group-text bg-dark text-white border-primary text-center">+</button>
                            </div>
                        </td>
                        <td class="text-md">₱&nbsp;${data.price}</td>
                        <td class="text-md">₱&nbsp;${((data.price) * (data.qty)).toFixed(2)}</td>
                        <td> <button onclick="clear_item(${index})" class="btn btn-primary btn-sm"><i class="fa fa-times"></i></button></td>
  
                    </tr>    
                                `;
    }
    function add_item_from_index(index)
    {
        //check if item exists
        for (var i = ITEMS.length - 1; i >= 0; i--){
                    if(ITEMS[i].id == PRODUCTS[index].id){
                        ITEMS[i].qty += 1;
                        refresh_items_display();
                        return;
                    }
                }
                var temp =PRODUCTS[index];
                temp.qty = 1;

            ITEMS.push(temp);
            console.log(ITEMS);

            refresh_items_display();
    }

    function add_item(e){
        if(e.target.tagName == "IMG"){
               var index = e.target.getAttribute("index");

               add_item_from_index(index)
        }
     
    }
    // fot the badge
    function refresh_items_display(){
        var item_count = document.querySelector(".js-items-count");
        item_count.innerHTML = ITEMS.length;

        var items_div = document.querySelector(".js-items");
        items_div.innerHTML = "";
        var grand_total = 0;
        var count = 0;
       

       
        for (var i = ITEMS.length - 1; i >= 0; i--){
            items_div.innerHTML += item_html(ITEMS[i],i);
            grand_total += ITEMS[i].qty * ITEMS[i].price;
            count += ITEMS[i].qty;
        }

        var gtotal_div = document.querySelector(".js-gtotal");
        gtotal_div.innerHTML =  "" + grand_total.toFixed(2);
        GTOTAL  = grand_total;

        var gtotal_mod = document.querySelector(".js-gtotal_mod");
        gtotal_mod.innerHTML =  grand_total.toFixed(2);

        var gtotal_mod = document.querySelector(".js-gtotal_change");
        gtotal_mod.innerHTML =  grand_total.toFixed(2);

        COUNT = count;

    }
    function change_qty(direction, e)
    {
        var index = e.currentTarget.getAttribute("index");
        
        if(direction == "up")
        {
            ITEMS[index].qty += 1;
        }
        else
        if(direction == "down")
        {
            ITEMS[index].qty -= 1;
        }
        else
        {
            ITEMS[index].qty = parseInt(e.currentTarget.value);
        }

        //make sure its not less than 1
        if(ITEMS[index].qty < 1)
        {
            ITEMS[index].qty = 1;
        }
        refresh_items_display();
    }

    function check_for_enter_key(e)
    {
       if(e.keyCode == 13)
       {
        BARCODE = true;
        search_item(e);
       }
    }

    function enter_checkout(e)
    {
       if(e.keyCode == 13)
       {
        mydiv.querySelector(".js-render").focus();
       }
    }

    function show_modal(modal)
    {
        if(modal == "payment-modal"){

            if(ITEMS.length == 0){
                swal.fire({
                        title: 'Empty Cart',
                        text: 'Please put an item into the cart',
                        icon: 'error',
                        confirmButtonText: 'Okay',
                       
                    });
                    return;
                      
            }
            var mydiv = document.querySelector(".js-payment-modal");
            mydiv.classList.remove("d-none");
           
            mydiv.querySelector(".js-payment-input").value = "";
            mydiv.querySelector(".js-payment-input").focus();

            mydiv.querySelector(".js-table").value = "";
            mydiv.querySelector(".js-take").value = "Dine-in";

        }else
        if(modal == "change"){
            // if(ITEMS.length == 0){
            //     // alert("Please put an item into the cart");
            //     // return;
            // }
            var mydiv = document.querySelector(".js-change-modal");
            mydiv.classList.remove("d-none");

            // mydiv.querySelector(".js-change-input").value = CHANGE;

            var change = document.querySelector(".js-change");
            change.innerHTML = CHANGE.toFixed(2);
            mydiv.querySelector(".js-change-modal-close").focus();

            var amount = document.querySelector(".js-payment-result");
            amount.innerHTML = AMOUNT.toFixed(2);

            }
                
    }
    

    function hide_modal(e,modal)
    {
        if(e == true || e.target.getAttribute("role") == "close-button")
        {
            if(modal == "payment-modal"){
            var mydiv = document.querySelector(".js-payment-modal");
            mydiv.classList.add("d-none");
            }
            else
            if(modal == "change"){
            var mydiv = document.querySelector(".js-change-modal");
            mydiv.classList.add("d-none");
            }
            refresh_items_display();
        }
     
    }
    
    function checkout(e)
    {
        var amount = e.currentTarget.parentNode.querySelector(".js-payment-input").value.trim();
        var table = e.currentTarget.parentNode.querySelector(".js-table").value.trim();
        var take = e.currentTarget.parentNode.querySelector(".js-take").value.trim();
     
        if(amount == "")
        { 
            swal.fire({
                        title: 'No amount entered',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                        return;
        }

        amount = parseFloat(amount);
        if(amount < GTOTAL){
            swal.fire({
                        title: 'Please enter right amount',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                   return;
        }

        CHANGE = amount - GTOTAL;
        AMOUNT = amount;
        TABLE = table;
        TAKE = take;
        // CHANGE = CHANGE.toFixed(2);

        hide_modal(true,'payment-modal');
        show_modal('change');

        //remove unwanted information
        var ITEM_NEW = [];
        for (var i = 0; i < ITEMS.length; i++)
        {
            var tmp = {};
            tmp.id = ITEMS[i]['id'];
            tmp.qty = ITEMS[i]['qty'];
            tmp.description = ITEMS[i]['description'];

            ITEM_NEW.push(tmp);
        }

        //send cart data through ajax
        send_data({
        data_type: "checkout",
        text: ITEM_NEW
    });
    //open receipt page
		print_receipt({
			company:'Idats Store',
			amount:amount,
            take:TAKE,
            table:TABLE,
			change:CHANGE,
			gtotal:GTOTAL,
            count:COUNT,
			data:ITEMS
		});
    //clear items
    // ITEMS = [],
    // refresh_items_display();

    //reload products
    send_data({
        data_type: "search",
        text: ""
    });
    }

    
	function print_receipt(obj)
	{
		var vars = JSON.stringify(obj);

		RECEIPT_WINDOW = window.open('index.php?pg=print&vars='+vars,'printpage',"width=100px;");

		setTimeout(close_receipt_window, 1000);
	}
 
 	function close_receipt_window()
 	{
 		RECEIPT_WINDOW.close();
 	}

    send_data({
        data_type: "search",
        text: ""
    });

    function clear_all()
    {
        if(ITEMS < 1)
        {
            swal.fire({
                        title: 'Theres no item into the cart',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    })
        }else
        if( Swal.fire({
                    title: 'Removing Item',
                    text: "Are you sure you want to remove all this item?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, remove this item!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        ITEMS = [];
                        refresh_items_display();
                        Swal.fire(
                        'Deleted!',
                        'The item has been removed.',
                        'success'
                        )
                    }
                    }))
            return;  
    }

    function clear_item(index)
    {
                    Swal.fire({
                    title: 'Removing Item',
                    text: "Are you sure you want to remove this item?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, remove this item!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        ITEMS.splice(index, 1);
                        refresh_items_display();
                        Swal.fire(
                        'Deleted!',
                        'The item has been removed.',
                        'success'
                        )
                    }
                    });return; 
    }

function rendered_success(){
    Swal.fire(
                        'Success',
                        'Transaction Completed',
                        'success'
                        )
                        ITEMS = [];
                        refresh_items_display();   
                        main_input.value = "";
  
}
function logout(){
    if(ITEMS.length > 0){
                swal.fire({
                        title: 'Not Empty Cart',
                        text: 'Please remove all the item from the cart before logging-out',
                        icon: 'error',
                        confirmButtonText: 'Okay',
                       
                    }); return; 
        }else
        if(ITEMS.length == 0){
      Swal.fire({
                    title: 'Logout',
                    text: "Are you sure you want to logout?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, I want to logout!',
                    }).then((result) => {
                    if (result.isConfirmed) {
                      setTimeout(function(){window.top.location="index.php?pg=logout"} , 2000);
                        Swal.fire(
                        'Logging-out...!',
                        'Successfully Logged-out',
                        'success',
                        )
                    }
                    });
    }
}
  //select all in input by click           
  $(function(){
              $(document).on('click','input[type=number]',function(){ this.select(); });
          });

</script>
   <!-- Back to Top -->
   <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- data-tables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/table.js"></script>
    
</body>

</html>