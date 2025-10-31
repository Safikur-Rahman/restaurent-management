@extends("admin/layout/master")
@section('title','Pre-Orders')
@section('content')
<!-- [ Main Content ] start -->
<div class="pc-container">
  <div class="pc-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
      <div class="page-block">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="page-header-title">
              <h5 class="m-b-10">Welcome to Restaurant Management</h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item" aria-current="page">Pre-Orders</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <!-- [ Main Content ] start -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-primary text-white">
            <h5 class="mb-0 text-center">Pre-Orders Table</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped align-middle">
                <thead class="table-dark">
                  <tr>
                    <th>#</th>
                    <th>Product name</th>
                    <th>Product Photo</th>
                    <th>Quantity</th>
                    <th>Delivery Date & Time</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Phone-No</th>
                    <th>Shipping Address</th>
                    <th>Total Price</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $orders = [
                      [
                        'id'=>1,
                        'product'=>'Cheeseburger',
                        'photo'=>'cheeseburger.jpg',
                        'quantity'=>50,
                        'delivery'=>'2025-11-03 12:30 PM',
                        'customer_name'=>'John Doe',
                        'email'=>'john@example.com',
                        'phone'=>'01712345678',
                        'address'=>'123 Main Street, Dhaka',
                        'price'=>'৳12500', // 50 x 250
                        'date'=>'2025-11-01',
                      ],
                      [
                        'id'=>2,
                        'product'=>'Pepperoni Pizza',
                        'photo'=>'pepperoni_pizza.jpg',
                        'quantity'=>55,
                        'delivery'=>'2025-11-04 07:00 PM',
                        'customer_name'=>'Jane Smith',
                        'email'=>'jane@example.com',
                        'phone'=>'01898765432',
                        'address'=>'45 Lake Road, Chittagong',
                        'price'=>'৳33000', // 55 x 600
                        'date'=>'2025-11-01',
                      ],
                      [
                        'id'=>3,
                        'product'=>'French Fries',
                        'photo'=>'french_fries.jpg',
                        'quantity'=>60,
                        'delivery'=>'2025-11-05 01:00 PM',
                        'customer_name'=>'Ali Khan',
                        'email'=>'ali@example.com',
                        'phone'=>'01911223344',
                        'address'=>'78 Green Avenue, Sylhet',
                        'price'=>'৳9000', // 60 x 150
                        'date'=>'2025-11-01',
                      ],
                      [
                        'id'=>4,
                        'product'=>'Veggie Burger',
                        'photo'=>'veggie_burger.jpg',
                        'quantity'=>52,
                        'delivery'=>'2025-11-06 02:30 PM',
                        'customer_name'=>'Sara Ahmed',
                        'email'=>'sara@example.com',
                        'phone'=>'01622334455',
                        'address'=>'12 Park Street, Khulna',
                        'price'=>'৳11440', // 52 x 220
                        'date'=>'2025-11-01',
                      ],
                      [
                        'id'=>5,
                        'product'=>'Hot Dog',
                        'photo'=>'hot_dog.jpg',
                        'quantity'=>58,
                        'delivery'=>'2025-11-07 06:00 PM',
                        'customer_name'=>'Rahim Uddin',
                        'email'=>'rahim@example.com',
                        'phone'=>'01566778899',
                        'address'=>'56 River Road, Rajshahi',
                        'price'=>'৳10440', // 58 x 180
                        'date'=>'2025-11-01',
                      ],
                    ];
                  @endphp

                  @foreach($orders as $order)
                  <tr>
                    <td>{{ $order['id'] }}</td>
                    <td>{{ $order['product'] }}</td>
                    <td>
                      <img src="{{ asset('assets/images/products/'.$order['photo']) }}" alt="{{ $order['product'] }}" style="height:50px; width:50px; object-fit:cover;">
                    </td>
                    <td>{{ $order['quantity'] }}</td>
                    <td>{{ $order['delivery'] }}</td>
                    <td>{{ $order['customer_name'] }}</td>
                    <td>{{ $order['email'] }}</td>
                    <td>{{ $order['phone'] }}</td>
                    <td>{{ $order['address'] }}</td>
                    <td>{{ $order['price'] }}</td>
                    <td>{{ $order['date'] }}</td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- [ Main Content ] end -->
  </div>
</div>
<!-- [ Main Content ] end -->
@endsection
