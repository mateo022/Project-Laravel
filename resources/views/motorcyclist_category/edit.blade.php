<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>
    <div class="container">
        <form class="row" method="post" action="/categories/{{$category->slug}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 col-6">
                <label for="img" class="form-label">Imagen categoria</label>
                <input type="file" class="form-control" id="img" name="img" placeholder="Img" >
            </div>
            <div class="mb-3 col-6">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name" required value="{{old('name', $category->name)}}">
            </div>
            <div class="mb-3 col-6">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="description" required value="{{old('description', $category->description)}}">
            </div>
            <div class="mb-3 col-6">
                <label for="priority" class="form-label">Priority</label>
                <input type="number" class="form-control" id="priority" priority="priority"  name="priority" placeholder="First" required value="{{old('priority', $category->priority)}}">
            </div>
            <div class="mb-3 col-5">
                <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                    <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
            </div>
            <div class="row">
                <div class="mb-3 col-6 d-grid" style="width: 2%; margin-right:4%">
                    <a href="/categories" class="btn-danger"><i class="bi bi-skip-backward" title="Back" style="font-size: 35px"></i></a>
                </div>
                <div class="mb-3 col-6 d-grid" style="width: 2%;">
                    <button type="submit" class="btn-primary"><i class="bi bi-pencil-square" title="Edit register" style="font-size: 35px"></i></button>
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