<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="container" style="margin-top: 10%">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('../assets/logo2.png') }}" class="d-block" style="height: 20%;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('../assets/logo2.png') }}" class="d-block " alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('../assets/logo2.png') }}" class="d-block " alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
</x-app-layout>
