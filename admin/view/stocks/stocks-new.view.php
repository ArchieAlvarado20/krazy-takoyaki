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
      <div class="container-fluid d-flex row-md-12">
      
      <div class="container col-md-6" >
        <div class="card shadow p-3 bg-secondary" >
              <!-- /.card-header -->
              <div class="card-header mb-0">
                      <div class="row mb-2">
                        <div class="col-md-3">
                          <a href="index.php?pg=stocks" class="btn btn-dark text-primary px-5">Back</a>
                        </div>
                        <div class="col-md-5">
                          <h4 class="fw-bold text-right text-primary" style="font-weight: bolder;"><strong><i class="fa fa-search"></i> Search Raw-Items</strong></h4>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                        <button onclick="clear_all()" class="col-12 btn btn-dark text-primary px-3">Clear-all</button>
                        </div>
                      </div>
                    </div>
                    <div class="row">
               
                       <div class="input-group col-md-12 mb-0 mt-1">
                            <input onkeypress="check_for_enter_key(event)" oninput="search_item(event)"  type="text"  accesskey="z" class="form-control ms-3 js-search" placeholder="Scan barcode or search product..." aria-label="Username" aria-describedby="basic-addon1" autofocus>
                            <span class="input-group-text bg-dark text-light"  id="basic-addon1"><i class="fa fa-search"></i></span>
                      </div>
                    </div>
                     
              <div class="card-body" style="flex-wrap: wrap;height:650px;overflow-y: scroll">
              <table id="myTable1" class="table table-sm mb-0 text-center table-dark table-hover text-sm">
                  <thead class="text-primary">
                  <tr class="text-center">
                
                    <th>Name</th>
                    <th>Description</th>
                    <th>Cost</th>
                    <th>Re-order</th>
                    <th>Qty</th>
                  </tr>
                  </thead>
                  <tbody onclick="add_item(event)" class="js-products">

                  </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="container col-md-6">
        <div class="card shadow bg-secondary">
        <div class="card-header mb-0">
                      <div class="row mt-3 ">
                      <div class="col-md-6">
                          <h4 class="fw-bold text-primary text-left" style="font-weight: bolder;"><strong><i class="fa fa-arrow-up"></i> Add Quantity </strong></h4>
                          
                        </div>
                        <div class="col-md-6">
                          <button type="button" class="btn btn-dark text-primary float-end px-4 " onclick="stocked(event)">Complete</button>
                        </div>
                      </div>
                      </form>
        </div>
                <div class="row-md-6">
                        <center><h4 class="fw-bold text-primary" style="font-weight: regular; font-size: 20px;">Product Count <div class="js-items-count badge badge-sm bg-success rounded-circle mb-1">0</div></h4></center>
                      </div>
                <div class="card-body mb-0 mt-2" style="flex-wrap: wrap;height:645px;overflow-y: scroll;">
              <table id="myTable1" class="table table-sm mb-0 text-center table-dark text-white">
                  <thead class="text-primary">
                  <tr>
                    <th style="width:100px">Name</th>
                    <th>Description</th>
                    <th style="width: 100px">Qty</th>
                  </tr>
                  </thead>
                  <tbody class="js-items">
                   
                   </tbody>
            
                </table>
              </div>
        </div>
              <!-- /.card-body -->
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

  <script>
    var PRODUCTS = [];
    var ITEMS = [];
    var REF = [];
    var BARCODE = false;
   
    var main_input = document.querySelector(".js-search");   
    
    function selected_refno()
    {
      var selected_value = document.getElementById("refno").value;
       //alert(selected_value);
    }

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
                            }  
                }else{
                    console.log("An error occured. Err Code:"+ajax.status+" Err Message:"+ajax.statusText);
                    console.log(ajax);   
                }
                
                //clear main input...
                if(BARCODE)
                {
                  
                    
                    // main_input.focus();
                }

                BARCODE = false;

            }
           
        });

        ajax.open('post', 'index.php?pg=ajax-stock',true);
        ajax.send(JSON.stringify(data));
    }
    
    function handle_result(result){
        //console.log(selected_refno());
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
    function product_html(data, index){
      return `    
                  <tr class="text-center">
                          
                          <td index="${index}" class="bg-dark" style="cursor: pointer">${data.p_name}</td>
                          <td index="${index}" class="bg-dark" style="cursor: pointer" class="w-50">${data.description}</td>
                          <td index="${index}" class="bg-dark" style="cursor: pointer">${data.cost}</td>
                          <td index="${index}" class="bg-dark" style="cursor: pointer">${data.re_order}</td>
                          <td index="${index}" class="bg-dark" style="cursor: pointer">${data.qty}</td>
                    </tr>    
                                `;
    }
    function item_html(data,index){
        return `
        <tr class="text-center bg-dark">
                          <td index="${index}">${data.p_name}</td>
                          <td index="${index}" class="w-50">${data.description}</td>
                          <td class="d-flex border-0 col-6" style="width:100px">
                          <input index="${index}" onblur="change_qty('input', event)" class="text-center text-white form-control border-primary" value="${data.qty}" style="width:108px" type="number" onclick="this.select()">
                          <div class="px-1"><button onclick="clear_item(${index})" class="btn btn-sm btn-primary mt-1 px-1" style="width:30px"><i class="fa fa-times"></i></button></div>
                          </td> 
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
        if(e.target.tagName == "TD"){
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
       
        for (var i = ITEMS.length - 1; i >= 0; i--){
            items_div.innerHTML += item_html(ITEMS[i],i);
            grand_total += ITEMS[i].qty * ITEMS[i].price;
        }

        var gtotal_div = document.querySelector(".js-gtotal");
        gtotal_div.innerHTML = "Total: ₱ " + grand_total.toFixed(2);
        GTOTAL  = grand_total;
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
         main_input.value = "";
       }
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
                        title: 'Theres no item into the table',
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

    function stocked(e)
    {
       
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
        data_type: "stocked",
        text: ITEM_NEW
    }); 
     stocked_success()
  }
     function stocked_success()
     {
      
      if(ITEMS.length == 0){
                swal.fire({
                        title: 'Empty Table',
                        text: 'Please put an item into the table',
                        icon: 'error',
                        confirmButtonText: 'Okay',
                       
                    }); return; 
            }else{
               Swal.fire({
                    title: 'Save Stocks',
                    text: "Are you sure all of the information are correct?",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Save this info!',
                    }).then((result) => {
                    if (result.isConfirmed) {
                      setTimeout(function(){window.top.location="index.php?pg=stocks"} , 1500);
                        Swal.fire(
                        'Saved!',
                        'The stocks has been saved.',
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
  <?php
  require_once view_path('partials/footer');
  ?>

  
  