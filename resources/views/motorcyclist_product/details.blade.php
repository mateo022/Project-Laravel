<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Product') }}
      </h2>
  </x-slot>    

<div class="container" style="margin-top: 4%">
  <a href="/products" class="btn-danger"><i class="bi bi-skip-backward" title="Back" style="font-size: 35px; margin-bottom: 1%; margin-top:4%;margin-left: 46%"></i></a>
  <div class="d-flex flex-wrap justify-content-center">
    <tr>
    <div class="card" style="width: 26rem; margin-bottom: 3%; margin-left: 0.5%;">
  <div class="card-body">
    <img src="{{ Storage::url($product->img) }}" alt="Motorcyclist" width="200">
    <h2 class="card-title">Id: {{$product->id}}</h2>
    <h3 class="card-title">Name: {{$product->name}}</h3>
    <h6 class="card-subtitle mb-2 text-body-secondary">Description: {{$product->description}}</h6>
    <p class="card-text">Value: {{$product->value}}</p>
    <h5 class="card-title">Status: {{ $product->status ? 'Active' : 'Inactive' }}</h5>
    <p class="card-text">Category: {{$product->category->name}}</p>
    <div class="d-flex flex-wrap" >    
  </div>
</div>
</div>
</div>
</x-app-layout>