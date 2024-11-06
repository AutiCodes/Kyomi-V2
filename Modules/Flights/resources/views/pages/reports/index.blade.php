@extends('panel::layouts.master')

@section('title', 'Vlucht rapportages')

@section('content')
  <div class="container">
    <div class="row mt-4">
      <!-- Manual make new report from specific dates -->
      <div class="col-sm bg-dark bg-opacity-75 rounded p-2 m-2">
        <h6 class="text-white">Maak rapportage</h6>
        <form action="{{ route('flights-report.store') }}" method="POST">
          @csrf
          <div class="card-transparant">
            <div class="card-body">
              <label for="start_date" class="text-white">Start datum</label>
              <input id="start_date" name="start_date" class="form-control" style="max-width: 50%;" type="date" />

              <label for="end_date" class="text-white">Eind datum</label>
              <input id="end_date" name="end_date" class="form-control" style="max-width: 50%;" type="date" />

              <button type="submit" class="btn btn-success mt-2">Genereer</button>
            </div>
          </div>
        </form>
      </div>

      <!-- Show generated flight reports -->
      <div class="col bg-dark bg-opacity-75 rounded p-2 m-2">
        <h6 class="text-white">Gemaakte rapportages</h6>
        <div class="overflow-auto" style="max-height: 180px">
          <table class="table table-borderless table-striped table-dark text-white">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Naam</th>
                <th scope="col">Download</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($reports as $report)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ explode('/', $report)[1] }}</td>
                  <td><a href="/flights-reports/download/{{ explode('/', $report)[1] }}"><img src="/app_media/download.png" style="max-width: 30px;"></a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </div>
@stop