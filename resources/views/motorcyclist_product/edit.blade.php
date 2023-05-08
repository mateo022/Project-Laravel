<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
    <div class="container">
        <form class="row" method="post" action="/products/{{$product->slug}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 col-6">
                <label for="img" class="form-label">Image category</label>
                <input type="file" class="form-control" id="img" name="img" placeholder="Img" >
            </div>
            <div class="mb-3 col-6">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name" required value="{{old('name', $product->name)}}">
            </div>
            <div class="mb-3 col-6">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="description" required value="{{old('description', $product->description)}}">
            </div>
            <div class="mb-3 col-6">
                <label for="value" class="form-label">Value</label>
                <input type="number" class="form-control" id="value" value="value" name="value" placeholder="Value" required value="{{old('value', $product->value)}}">
            </div>
            <div class="mb-3 col-5">
                <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                    <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Acitve</option>
                    <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
            </div>
            <div class="row">
                <div class="mb-3 col-6 d-grid" style="width: 2%; margin-right:4%">
                    <a href="/categories" class="btn-danger"><i class="bi bi-skip-backward" title="Back" style="font-size: 35px"></i></a>
                </div>
                <div class="mb-3 col-6 d-grid" style="width: 2%;">
                    <button type="submit" class="btn-primary"><i class="bi bi-plus-circle-dotted" title="Create New" style="font-size: 35px"></i></button>
                </div>
            </div>
        </form>
        <div class="col">
            @if( $errors->any() )
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>