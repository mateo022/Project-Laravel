<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('List products') }}
      </h2>
  </x-slot>
  <div class="container">
  <a href="/products/create" class="btn btn-primary" style="margin-left: 46%; margin-bottom: 1%;margin-top:4%"><i class="bi bi-plus-circle-dotted" title="Create New"></i></a>
  <div class="d-flex flex-wrap justify-content-center">
    @foreach($product as $product)
    <tr>
    <div class="card" style="width: 26rem; margin-bottom: 3%; margin-left: 0.5%;">
  <div class="card-body">
    <img src="{{ Storage::url($product->img) }}" alt="Motorcyclist" width="200">
    <h3 class="card-title">{{$product->name}}</h3>
    <h6 class="card-subtitle mb-2 text-body-secondary">Description: {{$product->description}}</h6>
    <p class="card-text">Value: {{$product->value}}</p>
    <h5 class="card-title">Status: {{ $product->status ? 'Active' : 'Inactive' }}</h5>
    <p class="card-text">Category: {{$product->category->name}}</p>
    <div class="d-flex flex-wrap" style="margin-top:2%;" >
    <a href="/products/{{$product->slug}}/edit" class=" btn-primary" style="margin-right: 4%; font-size: 30px"><i class="bi bi-pencil-square"></i></a>
    <a href="/products/{{$product->slug}}" class=" btn-success" style="margin-right: 4%; font-size: 30px"><i class="bi bi-info-square-fill"></i></a>
    <form action="/products/{{$product->slug}}"   method="post">
            @csrf
            @method('DELETE')
             <button type="submit" class="btn-danger" onclick="return confirm('¿Esta seguro que desea eliminar la categoria'+' '+ '{{$product->slug}}?')" title="Delete product" style="font-size: 30px"><i class="bi bi-trash"></i></button>
        </form>
  </div>    
  </div>
</div>
    @endforeach
</div>
</div>
</x-app-layout>