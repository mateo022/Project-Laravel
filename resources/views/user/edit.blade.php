<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>
    <div class="container">
        <form class="row" method="post" action="/users/{{$user->id}}">
            @csrf
            @method('PUT')
            <div class="mb-3 col-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name', $user->name)}}" placeholder="Name" >
            </div>
            <div class="mb-3 col-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email', $user->email)}}" placeholder="Email" required>
            </div>
          
            <div class="mb-3 col-6">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>
            <div class="row">
                <div class="mb-3 col-6 d-grid">
                    <a href="/users" class="btn btn-danger">Back</a>
                </div>
                <div class="mb-3 col-6 d-grid">
                    <button type="submit" class="btn btn-primary">Edit</button>
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