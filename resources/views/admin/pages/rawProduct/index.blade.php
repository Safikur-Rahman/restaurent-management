@extends("admin/layout/master")
@section('title','Raw Product')
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
              <li class="breadcrumb-item" aria-current="page">Raw Product</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Products -->
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 mt-3">
      @php
      $products = [
          ['name'=>'Tomatoes','quantity'=>'10kg','img'=>'tomatoes.jpg'],
          ['name'=>'Chicken Breast','quantity'=>'20kg','img'=>'chicken.jpg'],
          ['name'=>'Latus Leave','quantity'=>'3kg','img'=>'latus.jpg'],
          ['name'=>'Mozzarella Cheese','quantity'=>'5kg','img'=>'cheese.jpg'],
          ['name'=>'Rosemary Leave','quantity'=>'1kg','img'=>'rosemary.jpg'],
          ['name'=>'Butter','quantity'=>'5kg','img'=>'butter.jpg'],
      ];
      @endphp

      @foreach($products as $p)
      <div class="col">
        <div class="card h-100 position-relative">
          <img src="{{ asset('assets/images/products/'.$p['img']) }}" class="card-img-top" alt="{{ $p['name'] }}" style="height:200px; object-fit:cover;">
          <div class="card-body text-center">
            <h6 class="card-title fw-bold">{{ $p['name'] }}</h6>
            <p class="text-info fw-bold">Current Quantity: {{ $p['quantity'] }}</p>
          </div>
          <!-- Hover Button -->
          <a href="#" class="btn btn-success position-absolute top-50 start-50 translate-middle d-none hover-btn">Add to Purchase</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

<!-- Hover Effect JS -->
<script>
  document.querySelectorAll('.card').forEach(card => {
    const btn = card.querySelector('.hover-btn');
    card.addEventListener('mouseenter', () => btn.classList.remove('d-none'));
    card.addEventListener('mouseleave', () => btn.classList.add('d-none'));
  });
</script>
@endsection
