<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('List Categories') }}
      </h2>
  </x-slot>
  <div class="container">
  {{-- <h1 class="alert alert-primary text-center">List Categories</h1> --}}
  <a href="/categories/create" class="btn btn-primary" style="margin-left: 46%; margin-bottom: 1%; margin-top:4%"><i class="bi bi-plus-circle-dotted" title="Create New"></i></a>
  <div class="d-flex flex-wrap justify-content-center">
    @foreach($category as $category)
    <tr>
    <div class="card" style="width: 26rem; margin-bottom: 3%; margin-left: 0.5%;">
  <div class="card-body">
    <img src="{{ Storage::url($category->img) }}" alt="Motorcyclist" width="200">
    <h3 class="card-title">{{$category->name}}</h3>
    <h6 class="card-subtitle mb-2 text-body-secondary">Description: {{$category->description}}</h6>
    <h5 class="card-title">Priority: {{$category->priority}}</h5>
    <p class="card-text">Status: {{ $category->status ? 'Active' : 'Inactive' }}</p>
    <div class="d-flex flex-wrap" style="margin-top:2%;" >
    <a href="/categories/{{$category->slug}}/edit" class="btn-danger" style="margin-right: 4%; font-size: 30px"><i class="bi bi-pencil-square"></i></a>
    <a href="/categories/{{$category->slug}}" class="btn-dark" style="margin-right: 4%; font-size: 25px">Products</a>
    <form action="/categories/{{$category->slug}}"   method="post">
            @csrf
            @method('DELETE')
             <button type="submit" class="btn-danger" onclick="return confirm('¿Esta seguro que desea eliminar la categoria'+' '+ '{{$category->slug}}?')" title="Delete Market" style="font-size: 30px"><i class="bi bi-trash"></i></button>
        </form>
  </div>    
  </div>
</div>
    @endforeach
</div>
</div>
</x-app-layout>