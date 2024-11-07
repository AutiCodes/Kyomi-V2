@extends('panel::layouts.master')

@section('title', 'Paneel')

@section('content')
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  
  @include('home::includes.toast')

  <main>
    <!-- Total container-->
    <div class="container">
      <!-- Total -->
      <h1 class="text-white mt-4">Vluchten overzicht</h1>
      <!-- Total cards -->
      <div class="row">
        <!-- Total flights -->
        <div class="col-sm text-center ml-2 mr-2 mt-2 bg-dark bg-opacity-75 rounded m-2">
          <h3 class="text-white mt-2">Totaal:
            <br>
            {{ count($flights) }}
          </h3>
          <h1 class="text-white"></h1>
        </div>
        <!-- This week flights -->
        <div class="col-sm text-center ml-2 mr-2 mt-2 bg-dark bg-opacity-75 rounded m-2">
          <h3 class="text-white mt-2">Deze week:</h3>
          <h1 class="text-white"></h1>
        </div>
        <!-- Today flights -->
        <div class="col-sm text-center ml-2 mr-2 mt-2 bg-dark bg-opacity-75 rounded m-2">
          <h3 class="text-white mt-2">Vandaag:</h3>
          <h1 class="text-white"></h1>
        </div>
      </div>
      <!-- End total cards -->
    </div>

    @livewire('flights::show-and-search-flights')
  </main>

  <style>
    body, html {
      background-color: #2f3031;
    }

    input[type="checkbox"] {
      width: 1.2rem;
      height: 1.2rem;
      border-radius: 50%;
    }
  </style>
@stop