<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Users') }}
      </h2>
  </x-slot>
  <div class="container">
  <a href="/users/create" class="btn btn-primary" style="margin-left: 46%; margin-bottom: 1%;margin-top:4%"><i class="bi bi-person-plus"></i></a>
  <div class="d-flex flex-wrap justify-content-center">
    @foreach($user as $user)
    <tr>
    <div class="card" style="width: 26rem; margin-bottom: 3%; margin-left: 0.5%;">
  <div class="card-body">
    <h3 class="card-title">{{$user->name}}</h3>
    <h6 class="card-subtitle mb-2 text-body-secondary">Email: {{$user->email}}</h6>
    {{-- <p class="card-text">Value: {{$user->value}}</p> --}}
    <div class="d-flex flex-wrap" style="margin-top:2%;" >
    <a href="/users/{{$user->id}}/edit" class="btn btn-primary" style="margin-right: 4%;"><i class="bi bi-pencil-square"></i></a>
    <a href="/users/{{$user->id}}" class="btn btn-info" style="margin-right: 4%;"><i class="bi bi-info-square-fill"></i></a>
    <form action="/users/{{$user->id}}"   method="post">
            @csrf
            @method('DELETE')
             <button type="submit" class="btn btn-danger" onclick="return confirm('¿Are you sure you want to delete the User with ID'+' '+ '{{$user->id}}?')" title="Delete User"><i class="bi bi-trash"></i></button>
        </form>
  </div>    
  </div>
</div>
    @endforeach
</div>
</div>
</x-app-layout>