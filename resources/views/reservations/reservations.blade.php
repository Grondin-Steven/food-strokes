@extends('layouts.mainAdmin')

@section('main')

    {{-- ce include c'est le button modal --}}
    @include('components.formRes')

    <!-- Table d'affichage des données -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">People</th>
                <th scope="col">Id client</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($reservation as $reservation)
                    <th scope="row">{{ $reservation->id }}</th>
                    <td>{{ $reservation->res_date }}</td>
                    <td>{{ $reservation->res_time }}</td>
                    <td>{{ $reservation->res_people }}</td>
                    <td>{{ $reservation->id_client }}</td>
                    <td>
                        @include('components.formRes', ['res' => $reservation])
                        @include('components.deleteres', ['id' => $reservation->id])
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
