<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Products Category') }}
      </h2>
  </x-slot>
<div class="container" style="margin-top: 4%">
  <div class="d-flex flex-wrap justify-content-center">
    <tr>
    <div class="card" style="width: 26rem; margin-bottom: 3%; margin-left: 0.5%;">
    <div class="card-body">
    <img src="{{ Storage::url($category->img) }}" alt="Motorcyclist" width="200">
    <h2 class="card-title">Id: {{$category->id}}</h2>
    <h3 class="card-title">Name: {{$category->name}}</h3>
    <h6 class="card-subtitle mb-2 text-body-secondary">Description: {{$category->description}}</h6>
    <p class="card-text">Priority: {{$category->priority}}</p>
    <h5 class="card-title">Status: {{ $category->status ? 'Active' : 'Inactive' }}</h5>
    <div class="d-flex flex-wrap" >    
  </div>
</div>
</div>
<div class="col-12">
  <a href="/products/create" class="btn btn-primary" style="margin-left: 46%; margin-bottom: 1%; margin-top:4%"><i class="bi bi-plus-circle-dotted" title="Create product"></i></a>
  <h2 class="text-center alert alert-success">{{ $category->name }} Products</h2>
</div>
<div class="row">
  <div class="col">
    <div class="d-flex flex-wrap justify-content-center">
            @foreach($category->products as $product)
            <tr>
            <div class="card" style="width: 26rem; margin-bottom: 3%; margin-left: 0.5%;">
            <div class="card-body">
            <img src="{{ Storage::url($product->img) }}" alt="Motorcyclist" width="200">
            <h3 class="card-title">{{$product->name}}</h3>
            <h6 class="card-subtitle mb-2 text-body-secondary">Description: {{$product->description}}</h6>
            <p class="card-text">Value: {{$product->value}}</p>
            <h5 class="card-title">Status: {{ $product->status ? 'Active' : 'Inactive' }}</h5>
            <div class="d-flex flex-wrap" style="margin-top:2%;" >
            <a href="/products/{{$product->slug}}/edit" class="btn btn-primary" style="margin-right: 4%;">Edit</a>
            <a href="/products/{{$product->slug}}" class="btn btn-success" style="margin-right: 4%;">Details</a>
              <form action="/products/{{$product->slug}}"   method="post">
                      @csrf
                      @method('DELETE')
                       <button type="submit" class="btn btn-danger" onclick="return confirm('¿Esta seguro que desea eliminar la categoria'+' '+ '{{$product->slug}}?')" title="Delete Market">Delete</button>
                  </form>
            </div>    
            </div>
          </div>
              @endforeach
</div>
</x-app-layout>