@extends("admin/layout/master")
@section('title','Revenue')
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
                <h5 class="m-b-10">welcome to Restaurent Management</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Revenue</li>
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
              <h5 class="mb-0 text-center">Revenue Table</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                  <thead class="table-dark">
                    <tr>
                      <th>#</th>
                      <th>Total Cost</th>
                      <th>Total Sales</th>
                      <th>Revenue</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>50000tk</td>
                      <td>80000tk</td>
                      <td>30000tk</td>
                      <td>2025-10-31</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>45000tk</td>
                      <td>70000tk</td>
                      <td>25000tk</td>
                      <td>2025-10-30</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>60000tk</td>
                      <td>95000tk</td>
                      <td>35000tk</td>
                      <td>2025-10-29</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>30000tk</td>
                      <td>50000tk</td>
                      <td>20000tk</td>
                      <td>2025-10-28</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>70000tk</td>
                      <td>110000tk</td>
                      <td>40000tk</td>
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
