@extends('layouts.app')

@section('content')
    <section>
        <div class="row ms-container">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Company</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Arrival Station</th>
                    <th scope="col">Travel Day</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Train Number</th>
                    <th scope="col">Carriages</th>
                    <th scope="col">Delay</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train->company }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->travel_day }}</td>
                            <td>{{ $train->departure_time }}</td>
                            <td>{{ $train->arrival_time }}</td>
                            <td>{{ $train->train_number }}</td>
                            <td>{{ $train->carriages }}</td>
                            @if ($train->delay === 1)
                                <td>5 minutes</td>
                            @else
                                <td>no delay</td>
                            @endif
                            @if ($train->status === 1)
                                <td>Arriving</td>
                            @else
                                <td>Suppressed</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </section>
@endsection