@extends('layouts.mainAdmin')

@section('main')

    {{-- ce include c'est le button modal --}}
    @include('components.formPlats')

    <!-- Table d'affichage des données -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Picture</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($dailyspecials as $dailyspecial)
                    <th scope="row">{{ $dailyspecial->id }}</th>
                    <td>{{ $dailyspecial->title }}</td>
                    <td>{{ $dailyspecial->description }}</td>
                    <td>{{ $dailyspecial->picture }}</td>
                    <td>
                        @include('components.formPlats',["plat"=>$dailyspecial])
                        @include('components.deleteplat', ["id"=>$dailyspecial->id])
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
