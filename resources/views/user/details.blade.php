<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('User') }}
      </h2>
  </x-slot>
<div class="container" style="margin-top: 4%">
  <a href="/users" class="btn-danger"><i class="bi bi-skip-backward" title="Back" style="font-size: 35px; margin-bottom: 1%; margin-top:4%;margin-left: 46%"></i></a>
  <div class="d-flex flex-wrap justify-content-center">
    <tr>
    <div class="card" style="width: 26rem; margin-bottom: 3%; margin-left: 0.5%;">
  <div class="card-body">
    <h2 class="card-title">Id: {{$user->id}}</h2>
    <h3 class="card-title">Name: {{$user->name}}</h3>
    <h6 class="card-subtitle mb-2 text-body-secondary">Email: {{$user->email}}</h6>
    <div class="d-flex flex-wrap" >    
  </div>
</div>
</div>
</div>
</x-app-layout>