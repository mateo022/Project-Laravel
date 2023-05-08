<x-app-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />
    <div class="container">
        <form class="row" method="post" action="/users">
            @csrf
            <div class="mb-3 col-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Name" >
            </div>
            <div class="mb-3 col-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Email" required>
            </div>
            <div class="mb-3 col-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="Password" required>
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
</x-authentication-card>
</x-app-layout>