<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>
    <div class="container">
        <form class="row" method="post" action="/products" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 col-6">
                <label for="img" class="form-label">Image Product</label>
                <input type="file" class="form-control" id="img" name="img" placeholder="Img" >
            </div>
            <div class="mb-3 col-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Name" >
            </div>
            <div class="mb-3 col-6">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}" placeholder="Description" required>
            </div>
            <div class="mb-3 col-6">
                <label for="value" class="form-label">Value</label>
                <input type="number" class="form-control" id="value" name="value" value="{{old('value')}}" placeholder="priority" required>
            </div>
            <div class="mb-3 col-5">
                <label for="status" class="form-label">Status</label>
                    <select name="status" class="form-select" >
                    <option disabled selected>Select option</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                    </select>
            </div>
            <div class="mb-3 col-5" style="margin-left: 8.3%">
                <label for="category_id" class="form-label">Category:</label>
                <select name="category_id" id="category_id" class="form-select">
                <option disabled selected>Select category</option>
                 @foreach ($categories as $category)
                 <option value="{{ $category->id }}">{{ $category->name }}</option>
                 @endforeach
        </select>
            </div>
        
            <div class="row">
                <div class="mb-3 col-6 d-grid">
                    <a href="/categories" class="btn btn-danger">Back</a>
                </div>
                <div class="mb-3 col-6 d-grid">
                    <button type="submit" class="btn btn-primary">Create</button>
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