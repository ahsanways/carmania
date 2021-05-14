<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('includes.links')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pricing-page.css') }}">
</head>

<body>
    <!-- Start Header Area -->
    @include('includes.header')
    <section class="bg0 p-t-40 p-b-116">
        <div class="container-fluid">
            <div class="">
                <div class="" style="margin:0 auto">
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Compare Vehicles, Bikes and Autoparts
                        </h4>
                
                
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row pricing-plan">
{{--                                     <div class="col-md-4 col-xs-12 col-sm-6 no-padding">
                                        <div class="pricing-box">
                                            <div class="pricing-body b-l">
                                                <div class="col-md-12 offset-md-2 form-group">
                                                  <label for="sel1">Product 1</label>
                                                  <select class="form-control" onchange="getFilteredData(this)" data-id="1">
                                                    <option value="">Select an automobile</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div id="product1" style="display: none">
                                                    <div class="pricing-header" >
                                                        <h4 id="name1" class="text-center"></h4>
                                                        <br>
                                                        <h3 id="price1" class="text-center"></h3>
                                                        <p id="city1" class="uppercase"></p>
                                                    </div>
                                                    <div class="price-table-content">
                                                        <div class="price-row"><i class="icon-user"></i> 3 Members</div>
                                                        <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                                        <div class="price-row"><i class="icon-drawar"></i> 50GB Storage</div>
                                                        <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                                        <div class="price-row">
                                                            <button class="btn btn-success waves-effect waves-light m-t-20">Sign up</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 col-sm-6 no-padding">
                                        <div class="pricing-box b-l">
                                            <div class="pricing-body">
                                                <div class="col-md-12 offset-md-2 form-group">
                                                  <label for="sel1">Product 2</label>
                                                  <select class="form-control" onchange="getFilteredData(this)" data-id="2">
                                                    <option value="">Select an automobile</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                               <div id="product2" style="display: none">
                                                    <div class="pricing-header" >
                                                        <h4 id="name2" class="text-center"></h4>
                                                        <h2 id="price2" class="text-center"></h2>
                                                        <p id="city2" class="uppercase"></p>
                                                    </div>
                                                    <div class="price-table-content">
                                                        <div class="price-row"><i class="icon-user"></i> 3 Members</div>
                                                        <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                                        <div class="price-row"><i class="icon-drawar"></i> 50GB Storage</div>
                                                        <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                                        <div class="price-row">
                                                            <button class="btn btn-success waves-effect waves-light m-t-20">Sign up</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 col-sm-6 no-padding">
                                        <div class="pricing-box">
                                            <div class="pricing-body b-r">
                                                <div class="col-md-12 offset-md-2 form-group">
                                                  <label for="sel1">Product 3</label>
                                                  <select class="form-control" onchange="getFilteredData(this)" data-id="3">
                                                    <option value="">Select an automobile</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div id="product3" style="display: none">
                                                    <div class="pricing-header" >
                                                        <h4 id="name3" class="text-center"></h4>
                                                        <h2 id="price3" class="text-center"></h2>
                                                        <p id="city3" class="uppercase"></p>
                                                    </div>
                                                    <div class="price-table-content">
                                                        <div class="price-row"><i class="icon-user"></i> 3 Members</div>
                                                        <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                                        <div class="price-row"><i class="icon-drawar"></i> 50GB Storage</div>
                                                        <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                                        <div class="price-row">
                                                            <button class="btn btn-success waves-effect waves-light m-t-20">Sign up</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
 --}}

                                    <div class="col-md-4 col-xs-12 col-sm-6 no-padding">
                                        <div class="pricing-box">
                                            <div class="pricing-body b-l">
                                                <div class="col-md-12 offset-md-2 form-group">
                                                  <label for="sel1">Product 1</label>
                                                  <select class="form-control" onchange="getFilteredData(this)" data-id="1">
                                                    <option value="">Select an automobile</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div id="product1" style="display: none">
                                                    <table class="table table-borderless">
                                                      <tbody>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Name</th>
                                                          <td class="align-middle" id="name1" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Price</th>
                                                          <td class="align-middle" id="price1" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Year</th>
                                                          <td class="align-middle" id="year1" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Mileage</th>
                                                          <td class="align-middle" id="mileage1" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Color</th>
                                                          <td class="align-middle" id="color1" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">City</th>
                                                          <td class="align-middle" id="city1" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Condition</th>
                                                          <td class="align-middle" id="condition1" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Transmission</th>
                                                          <td class="align-middle" id="transmission1" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Description</th>
                                                          <td class="align-middle" id="description1" style="text-align: left;"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xs-12 col-sm-6 no-padding">
                                        <div class="pricing-box b-l">
                                            <div class="pricing-body">
                                                <div class="col-md-12 offset-md-2 form-group">
                                                  <label for="sel1">Product 2</label>
                                                  <select class="form-control" onchange="getFilteredData(this)" data-id="2">
                                                    <option value="">Select an automobile</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                               <div id="product2" style="display: none">
                                                    <table class="table table-borderless">
                                                      <tbody>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Name</th>
                                                          <td class="align-middle" id="name2" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Price</th>
                                                          <td class="align-middle" id="price2" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Year</th>
                                                          <td class="align-middle" id="year2" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Mileage</th>
                                                          <td class="align-middle" id="mileage2" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Color</th>
                                                          <td class="align-middle" id="color2" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">City</th>
                                                          <td class="align-middle" id="city2" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Condition</th>
                                                          <td class="align-middle" id="condition2" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Transmission</th>
                                                          <td class="align-middle" id="transmission2" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Description</th>
                                                          <td class="align-middle" id="description2" style="text-align: left;"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xs-12 col-sm-6 no-padding">
                                        <div class="pricing-box">
                                            <div class="pricing-body b-r">
                                                <div class="col-md-12 offset-md-2 form-group">
                                                  <label for="sel1">Product 3</label>
                                                  <select class="form-control" onchange="getFilteredData(this)" data-id="3">
                                                    <option value="">Select an automobile</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div id="product3" style="display: none">
                                                    <table class="table table-borderless">
                                                      <tbody>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Name</th>
                                                          <td class="align-middle" id="name3" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Price</th>
                                                          <td class="align-middle" id="price3" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Year</th>
                                                          <td class="align-middle" id="year3" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Mileage</th>
                                                          <td class="align-middle" id="mileage3" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Color</th>
                                                          <td class="align-middle" id="color3" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">City</th>
                                                          <td class="align-middle" id="city3" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Condition</th>
                                                          <td class="align-middle" id="condition3" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Transmission</th>
                                                          <td class="align-middle" id="transmission3" style="text-align: left;"></td>
                                                        </tr>
                                                        <tr>
                                                          <th class="align-middle" style="text-align: right;" scope="row">Description</th>
                                                          <td class="align-middle" id="description3" style="text-align: left;"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>  
    
    @include('includes.footer')   
    <!-- footer area end -->
    

    <!-- JS
============================================ -->
    
    <!-- Modernizer JS -->
    @include('includes.scripts')

    <script type="text/javascript">
        
        function getFilteredData(ele){
            var id = $(ele).children("option:selected").val();
            var dataid = $(ele).attr("data-id");
            console.log(id);
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            $.ajax({

                type: "GET",
                url: "/productcompare",
                data:{
                    id: id,
                },
                dataType: 'json',
                success: function (data) {
                    document.getElementById("product"+dataid).style.display = "block";
                    $("#name"+dataid).html(""+data.product.name);
                    $("#price"+dataid).html(""+data.ad.price);
                    $("#city"+dataid).html(""+data.product.city);
                    $("#year"+dataid).html(""+data.product.year);
                    $("#mileage"+dataid).html(""+data.product.mileage);
                    $("#color"+dataid).html(""+data.product.color);
                    $("#condition"+dataid).html(""+data.product.condition);
                    $("#transmission"+dataid).html(""+data.product.transmission);
                    $("#description"+dataid).html(""+data.product.description);
                    console.log(data);
               },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log("Error retrieving records!");
                }
            });
        }
    </script>
</body>

</html>