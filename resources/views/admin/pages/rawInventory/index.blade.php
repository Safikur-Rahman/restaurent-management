@extends("admin/layout/master")
@section('title','Raw Inventory')
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
              <li class="breadcrumb-item" aria-current="page">Raw Inventory</li>
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
            <h5 class="mb-0 text-center">Raw Inventory</h5>
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
                  <tr><td>1</td><td>Burger Bun</td><td class="text-warning fw-bold">Bread</td><td>100</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>2</td><td>Beef Patty</td><td class="text-danger fw-bold">Meat</td><td>50</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>3</td><td>Chicken Patty</td><td class="text-danger fw-bold">Meat</td><td>40</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>4</td><td>Cheddar Cheese</td><td class="text-primary fw-bold">Dairy</td><td>30</td><td>kg</td><td>2025-10-31</td></tr>
<tr><td>5</td><td>Lettuce</td><td class="text-success fw-bold">Vegetable</td><td>25</td><td>kg</td><td>2025-10-31</td></tr>
<tr><td>6</td><td>Tomato</td><td class="text-success fw-bold">Vegetable</td><td>50</td><td>kg</td><td>2025-10-31</td></tr>
<tr><td>7</td><td>Onion</td><td class="text-success fw-bold">Vegetable</td><td>40</td><td>kg</td><td>2025-10-31</td></tr>
<tr><td>8</td><td>Pickles</td><td class="text-info fw-bold">Condiment</td><td>20</td><td>kg</td><td>2025-10-31</td></tr>
<tr><td>9</td><td>Ketchup</td><td class="text-info fw-bold">Condiment</td><td>15</td><td>kg</td><td>2025-10-31</td></tr>
<tr><td>10</td><td>Mayonnaise</td><td class="text-info fw-bold">Condiment</td><td>10</td><td>kg</td><td>2025-10-31</td></tr>
<tr><td>11</td><td>Pizza Dough</td><td class="text-warning fw-bold">Bread</td><td>50</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>12</td><td>Pepperoni</td><td class="text-danger fw-bold">Meat</td><td>20</td><td>kg</td><td>2025-10-31</td></tr>
<tr><td>13</td><td>Mozzarella Cheese</td><td class="text-primary fw-bold">Dairy</td><td>25</td><td>kg</td><td>2025-10-31</td></tr>
<tr><td>14</td><td>Bell Pepper</td><td class="text-success fw-bold">Vegetable</td><td>15</td><td>kg</td><td>2025-10-31</td></tr>
<tr><td>15</td><td>Mushroom</td><td class="text-success fw-bold">Vegetable</td><td>10</td><td>kg</td><td>2025-10-31</td></tr>
<tr><td>16</td><td>Olives</td><td class="text-success fw-bold">Vegetable</td><td>5</td><td>kg</td><td>2025-10-31</td></tr>
<tr><td>17</td><td>Tomato Sauce</td><td class="text-info fw-bold">Condiment</td><td>20</td><td>kg</td><td>2025-10-31</td></tr>
<tr><td>18</td><td>Beef Sausage</td><td class="text-danger fw-bold">Meat</td><td>30</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>19</td><td>Chicken Sausage</td><td class="text-danger fw-bold">Meat</td><td>25</td><td>pcs</td><td>2025-10-31</td></tr>
<tr><td>20</td><td>Butter</td><td class="text-primary fw-bold">Dairy</td><td>10</td><td>kg</td><td>2025-10-31</td></tr>

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
