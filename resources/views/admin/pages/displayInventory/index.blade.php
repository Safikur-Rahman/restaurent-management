@extends("admin/layout/master")
@section('title','Display Inventory')
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
                <li class="breadcrumb-item" aria-current="page">Display Inventory</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-12">
        <div class="card">
          <div class="card-header bg-primary text-white">
            <h5 class="mb-0 text-center">Display Inventory</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead class="table-dark">
                  <tr>
                    <th>#</th>
                    <th>Item Name</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Unit</th>
                    <th>Movement Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td>1</td><td>Cheeseburger</td><td class="text-primary fw-bold">Burger</td><td>50</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>2</td><td>Double Cheeseburger</td><td class="text-primary fw-bold">Burger</td><td>40</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>3</td><td>Chicken Burger</td><td class="text-primary fw-bold">Burger</td><td>60</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>4</td><td>Veggie Burger</td><td class="text-primary fw-bold">Burger</td><td>30</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>5</td><td>Margherita Pizza</td><td class="text-warning fw-bold">Pizza</td><td>25</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>6</td><td>Pepperoni Pizza</td><td class="text-warning fw-bold">Pizza</td><td>20</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>7</td><td>BBQ Chicken Pizza</td><td class="text-warning fw-bold">Pizza</td><td>15</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>8</td><td>Hawaiian Pizza</td><td class="text-warning fw-bold">Pizza</td><td>10</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>9</td><td>French Fries</td><td class="text-success fw-bold">Side</td><td>100</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>10</td><td>Chicken Nuggets</td><td class="text-success fw-bold">Side</td><td>80</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>11</td><td>Onion Rings</td><td class="text-success fw-bold">Side</td><td>60</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>12</td><td>Hot Dog</td><td class="text-info fw-bold">Snack</td><td>40</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>13</td><td>Grilled Sandwich</td><td class="text-info fw-bold">Snack</td><td>35</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>14</td><td>Paneer Burger</td><td class="text-primary fw-bold">Burger</td><td>25</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>15</td><td>Veggie Pizza</td><td class="text-warning fw-bold">Pizza</td><td>20</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>16</td><td>Chicken Pizza</td><td class="text-warning fw-bold">Pizza</td><td>25</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>17</td><td>Cheese Fries</td><td class="text-success fw-bold">Side</td><td>50</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>18</td><td>Chicken Wrap</td><td class="text-info fw-bold">Snack</td><td>30</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>19</td><td>Veg Wrap</td><td class="text-info fw-bold">Snack</td><td>20</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>20</td><td>Buffalo Wings</td><td class="text-success fw-bold">Side</td><td>40</td><td>pcs</td><td>2025-10-31</td></tr>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
@endsection