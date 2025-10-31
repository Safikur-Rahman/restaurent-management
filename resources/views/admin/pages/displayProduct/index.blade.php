@extends("admin/layout/master")
@section('title','Display Product')
@section('content')
<div class="pc-container">
  <div class="pc-content">
    <!-- Breadcrumb -->
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
              <li class="breadcrumb-item" aria-current="page">Display Product</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Products -->
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 mt-3">
      @php
        $products = [
            ['name'=>'Cheeseburger','price'=>'৳250','discount'=>'10% Off','img'=>'cheeseburger.jpg'],
            ['name'=>'Pepperoni Pizza','price'=>'৳600','discount'=>'15% Off','img'=>'pepperoni_pizza.jpg'],
            ['name'=>'Chicken Nuggets','price'=>'৳200','discount'=>'5% Off','img'=>'chicken_nuggets.jpg'],
            ['name'=>'Veggie Burger','price'=>'৳220','discount'=>'8% Off','img'=>'veggie_burger.jpg'],
            ['name'=>'French Fries','price'=>'৳150','discount'=>'12% Off','img'=>'french_fries.jpg'],
            ['name'=>'Hot Dog','price'=>'৳180','discount'=>'7% Off','img'=>'hot_dog.jpg'],
        ];
      @endphp

      @foreach($products as $p)
      <div class="col">
        <div class="card h-100 position-relative">
          <img src="{{ asset('assets/images/products/'.$p['img']) }}" class="card-img-top" alt="{{ $p['name'] }}" style="height:200px; object-fit:cover;">
          <div class="card-body text-center">
            <h6 class="card-title fw-bold">{{ $p['name'] }}</h6>
            <p class="text-success fw-bold">{{ $p['price'] }}</p>
            <p class="text-danger small">{{ $p['discount'] }}</p>
          </div>

          <!-- Hover Buttons with same width -->
          <a href="#" class="btn btn-success position-absolute top-50 start-0 translate-middle-y d-none hover-btn" style="width:45%;">Add to Display</a>
          <a href="#" class="btn btn-primary position-absolute top-50 end-0 translate-middle-y d-none hover-btn" style="width:45%;">Add to Sales</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

<!-- Hover Effect JS -->
<script>
  document.querySelectorAll('.card').forEach(card => {
    const btns = card.querySelectorAll('.hover-btn');
    card.addEventListener('mouseenter', () => btns.forEach(b => b.classList.remove('d-none')));
    card.addEventListener('mouseleave', () => btns.forEach(b => b.classList.add('d-none')));
  });
</script>
@endsection
