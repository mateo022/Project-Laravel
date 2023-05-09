    @extends('layouts.base')
    @section ('content')
    <div class="container" style="margin-top: 4%;" >
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="width: 50%; margin-left: 25%; border-radius:3%">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1500">
            <img src="{{ asset('assets/alpinestar.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 3%;" >
          </div>
          <div class="carousel-item" data-bs-interval="1500">
            <img src="{{ asset('assets/oakley.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 3%;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/yamaha.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 3%;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/fox.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 3%;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br><br>
      <h1>PRODUCTS</h1>
    <div class="d-flex flex-wrap justify-content-center" style="margin-top: 4%">
      @foreach($product as $product)
      <tr>
      <div class="card" style="width: 26rem; margin-bottom: 3%; margin-left: 0.5%;">
    <div class="card-body">
      <img src="{{ Storage::url($product->img) }}" alt="Motorcyclist" width="200">
      <h3 class="card-title">{{$product->name}}</h3>
      <h6 class="card-subtitle mb-2 text-body-secondary">Description: {{$product->description}}</h6>
      <h5 class="card-title">Value: {{$product->value}}</h5>
      <p class="card-text">Status: {{ $product->status ? 'Active' : 'Inactive' }}</p>
      <h5 class="card-title">Category: {{$product->category->name}}</h5>
      <a href="/login" class="btn btn-info" style="margin-top:1%; font-size: 30px"><i class="bi bi-cart-check-fill" title="Buy product"></i></a>
      <div class="d-flex flex-wrap" style="margin-top:2%;" >
    </div>    
    </div>
  </div>
      @endforeach
  </div>
  <footer style="text-align: center; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);background: #f3ebeb;">
    <div >
    <span >All rights reserved -> MCC</span>
   <img src="{{ asset('assets/logoOakley.png') }}" alt="" width="50px" >
</div>
</footer>
  @endsection
