
@extends('layouts.master')
@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
          <!-- Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

          <!-- Styles -->
          <style>
              html, body {
                  background-color: rgba(3, 37, 43, 0.856);
                  color: #747474;
                  font-family: 'Nunito', sans-serif;
                  font-weight: 200;
                  height: 100vh;
                  margin: 0;
              }
  
              .full-height {
                  height: 100vh;
              }
  
              .flex-center {
                  align-items: center;
                  display: flex;
                  justify-content: center;
              }
  
              .position-ref {
                  position: relative;
              }
  
              .top-right {
                  position: absolute;
                  right: 10px;
                  top: 18px;
              }
  
              .content {
                  text-align: center;
              }
  
              .title {
                  font-size: 54px;
                  
              }
  
              .links > a {
                  color: #9ca6ac;
                  padding: 0 25px;
                  font-size: 16px;
                  font-weight: 500;
                  letter-spacing: .1rem;
                  text-decoration: none;
                  text-transform: uppercase;
              }
  
              .m-b-md {
                  margin-bottom: 40px;
              }
          </style>
</head>
<body>
  



  
        <
            

            <div class="content">
                <img src="{{asset('assets/img/desktop.png')}}">
                <div class="title m-b-md">
                    OMEX COMPUTERS & TECHNOLOGIES 
                </div>
           
                
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- Manage customers -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>Manage Customers</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-users" area-hidden="true"></i>
            </div>
            <a href="http://127.0.0.1:8000/customer" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- Manage items -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>Manage Items</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="http://127.0.0.1:8000/items" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- Add New User -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53</h3>

              <p>Add New User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="http://127.0.0.1:8000/customer/create" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        
        <div class="col-lg-3 col-6">
          <!-- Manage sales -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Add New Item</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="http://127.0.0.1:8000/items/create" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
     
     

   
  




      {{-- Latest Orders --}}
      <div class="card col-md-12 bg-white">
        <div class="card-header border-transparent ">
          <h3 class="card-title ">Latest Orders</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0 ">
          <div class="table-responsive">
            <table class="table m-0">
              <thead>
              <tr>
                <th>Order ID</th>
                <th>Item</th>
                <th>Status</th>
                
              </tr>
              </thead>
              <tbody>
              <tr>
                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                <td>Call of Duty IV</td>
                <td><span class="badge badge-success">Shipped</span></td>
        
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="badge badge-warning">Pending</span></td>
        
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>iPhone 6 Plus</td>
                <td><span class="badge badge-danger">Delivered</span></td>
        
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="badge badge-info">Processing</span></td>
        
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="badge badge-warning">Pending</span></td>
        
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>iPhone 6 Plus</td>
                <td><span class="badge badge-danger">Delivered</span></td>
        
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                <td>Call of Duty IV</td>
                <td><span class="badge badge-success">Shipped</span></td>
        
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
          <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
        </div>
        <!-- /.card-footer -->
      </div>



{{-- calender --}}
      <div class="card bg-gradient-primary col-md-4">
        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

          <h3 class="card-title">
            <i class="far fa-calendar-alt"></i>
            Calendar
          </h3>
          <!-- tools card -->
          <div class="card-tools">
            <!-- button with a dropdown -->
            <div class="btn-group">
              <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-bars"></i></button>
              <div class="dropdown-menu float-right" role="menu">
                <a href="#" class="dropdown-item">Add new event</a>
                <a href="#" class="dropdown-item">Clear events</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">View calendar</a>
              </div>
            </div>
            <button type="button" class="btn btn-dark btn-sm" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-dark btn-sm" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pt-0">
          <!--The calendar -->
          <div id="calendar" style="width: 100%">
            <div class="bootstrap-datetimepicker-widget usetwentyfour">
              <ul class="list-unstyled">
                <li class="show">
                  <div class="datepicker">
                    <div class="datepicker-days" style="">
                      <table class="table table-sm">
                        <thead><tr><th class="prev" data-action="previous">
                          <span class="fa fa-chevron-left" title="Previous Month"></span>
                        </th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">January 2021</th>
                        <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month">
                          </span>
                        </th>
                      </tr>
                      <tr>
                            <th class="dow">Su</th>
                            <th class="dow">Mo</th>
                            <th class="dow">Tu</th>
                            <th class="dow">We</th>
                            <th class="dow">Th</th>
                            <th class="dow">Fr</th>
                            <th class="dow">Sa</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td data-action="selectDay" data-day="12/27/2020" class="day old weekend">27</td>
                            <td data-action="selectDay" data-day="12/28/2020" class="day old">28</td>
                            <td data-action="selectDay" data-day="12/29/2020" class="day old">29</td>
                            <td data-action="selectDay" data-day="12/30/2020" class="day old">30</td>
                            <td data-action="selectDay" data-day="12/31/2020" class="day old">31</td>
                            <td data-action="selectDay" data-day="01/01/2021" class="day">1</td>
                            <td data-action="selectDay" data-day="01/02/2021" class="day weekend">2</td></tr><tr>
                              <td data-action="selectDay" data-day="01/03/2021" class="day weekend">3</td>
                              <td data-action="selectDay" data-day="01/04/2021" class="day">4</td>
                              <td data-action="selectDay" data-day="01/05/2021" class="day">5</td>
                              <td data-action="selectDay" data-day="01/06/2021" class="day">6</td>
                              <td data-action="selectDay" data-day="01/07/2021" class="day">7</td>
                              <td data-action="selectDay" data-day="01/08/2021" class="day">8</td>
                              <td data-action="selectDay" data-day="01/09/2021" class="day weekend">9</td></tr><tr>
                                <td data-action="selectDay" data-day="01/10/2021" class="day weekend">10</td>
                                <td data-action="selectDay" data-day="01/11/2021" class="day">11</td>
                                <td data-action="selectDay" data-day="01/12/2021" class="day">12</td>
                                <td data-action="selectDay" data-day="01/13/2021" class="day">13</td>
                                <td data-action="selectDay" data-day="01/14/2021" class="day">14</td>
                                <td data-action="selectDay" data-day="01/15/2021" class="day">15</td>
                                <td data-action="selectDay" data-day="01/16/2021" class="day weekend">16</td></tr><tr>
                                  <td data-action="selectDay" data-day="01/17/2021" class="day weekend">17</td>
                                  <td data-action="selectDay" data-day="01/18/2021" class="day">18</td>
                                  <td data-action="selectDay" data-day="01/19/2021" class="day">19</td>
                                  <td data-action="selectDay" data-day="01/20/2021" class="day">20</td>
                                  <td data-action="selectDay" data-day="01/21/2021" class="day">21</td>
                                  <td data-action="selectDay" data-day="01/22/2021" class="day">22</td>
                                  <td data-action="selectDay" data-day="01/23/2021" class="day active today weekend">23</td></tr><tr>
                                    <td data-action="selectDay" data-day="01/24/2021" class="day weekend">24</td>
                                    <td data-action="selectDay" data-day="01/25/2021" class="day">25</td>
                                    <td data-action="selectDay" data-day="01/26/2021" class="day">26</td>
                                    <td data-action="selectDay" data-day="01/27/2021" class="day">27</td>
                                    <td data-action="selectDay" data-day="01/28/2021" class="day">28</td>
                                    <td data-action="selectDay" data-day="01/29/2021" class="day">29</td>
                                    <td data-action="selectDay" data-day="01/30/2021" class="day weekend">30</td></tr><tr>
                                      <td data-action="selectDay" data-day="01/31/2021" class="day weekend">31</td>
                                      <td data-action="selectDay" data-day="02/01/2021" class="day new">1</td>
                                      <td data-action="selectDay" data-day="02/02/2021" class="day new">2</td>
                                      <td data-action="selectDay" data-day="02/03/2021" class="day new">3</td>
                                      <td data-action="selectDay" data-day="02/04/2021" class="day new">4</td>
                                      <td data-action="selectDay" data-day="02/05/2021" class="day new">5</td>
                                      <td data-action="selectDay" data-day="02/06/2021" class="day new weekend">6</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <div class="datepicker-months" style="display: none;">
                                      <table class="table-condensed">
                                        <thead>
                                          <tr>
                                            <th class="prev" data-action="previous">
                                        <span class="fa fa-chevron-left" title="Previous Year">
                                          </span>
                                        </th>
                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2021</th>
                                        <th class="next" data-action="next">
                                          <span class="fa fa-chevron-right" title="Next Year"></span>
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td colspan="7">
                                          <span data-action="selectMonth" class="month active">Jan</span>
                                          <span data-action="selectMonth" class="month">Feb</span>
                                          <span data-action="selectMonth" class="month">Mar</span>
                                          <span data-action="selectMonth" class="month">Apr</span>
                                          <span data-action="selectMonth" class="month">May</span>
                                          <span data-action="selectMonth" class="month">Jun</span>
                                          <span data-action="selectMonth" class="month">Jul</span>
                                          <span data-action="selectMonth" class="month">Aug</span>
                                          <span data-action="selectMonth" class="month">Sep</span>
                                          <span data-action="selectMonth" class="month">Oct</span>
                                          <span data-action="selectMonth" class="month">Nov</span>
                                          <span data-action="selectMonth" class="month">Dec</span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="datepicker-years" style="display: none;">
                                  <table class="table-condensed">
                                    <thead>
                                      <tr>
                                        <th class="prev" data-action="previous">
                                          <span class="fa fa-chevron-left" title="Previous Decade">
                                            </span>
                                          </th>
                                          <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th>
                                          <th class="next" data-action="next">
                                            <span class="fa fa-chevron-right" title="Next Decade">
                                            </span>
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year active">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
        </div>
        <!-- /.card-body -->
      </div>
        
    

    

    



   

 



    </section>
  

  </div>
    </div>
  

</body>
</html>
@endsection  
  
 

