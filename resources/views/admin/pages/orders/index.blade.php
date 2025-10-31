@extends("admin/layout/master")
@section('title','Orders')
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
                <li class="breadcrumb-item" aria-current="page">Orders</li>
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
              <h5 class="mb-0 text-center">Orders Table</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped align-middle">
                  <thead class="table-dark">
                    <tr>
                      <th>#</th>
                      <th>Order Status</th>
                      <th>Customer Name</th>
                      <th>Customer Email</th>
                      <th>Shipping Address</th>
                      <th>Total Price</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><span class="badge bg-warning">Pending</span></td>
                      <td>Rahim Uddin</td>
                      <td>rahim@example.com</td>
                      <td>Mirpur-1, Dhaka</td>
                      <td>2500tk</td>
                      <td>2025-10-31</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><span class="badge bg-success">Delivered</span></td>
                      <td>Karim Ali</td>
                      <td>karim@example.com</td>
                      <td>Mirpir-10, Dhaka</td>
                      <td>1800tk</td>
                      <td>2025-10-30</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><span class="badge bg-danger">Cancelled</span></td>
                      <td>Ayesha Begum</td>
                      <td>ayesha@example.com</td>
                      <td>Mirpir-2, Dhaka</td>
                      <td>1200tk</td>
                      <td>2025-10-29</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><span class="badge bg-success">Delivered</span></td>
                      <td>Rafiq Hasan</td>
                      <td>rafiq@example.com</td>
                      <td>Mirpir-11, Dhaka</td>
                      <td>3400tk</td>
                      <td>2025-10-28</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><span class="badge bg-info text-dark">Processing</span></td>
                      <td>Nasrin Jahan</td>
                      <td>nasrin@example.com</td>
                      <td>Mirpir-10, Dhaka</td>
                      <td>2200tk</td>
                      <td>2025-10-27</td>
                    </tr>
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
