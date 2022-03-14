@extends('layouts.mainAdmin')

@section('main')

    {{-- ce include c'est le button modal --}}
    @include('components.formClients')

    <!-- Table d'affichage des données -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom complet</th>
                <th scope="col">Email</th>
                <th scope="col">Numéro</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($clients as $client)
                    <th scope="row">{{ $client->id }}</th>
                    <td>{{ $client->res_name }}</td>
                    <td>{{ $client->res_email }}</td>
                    <td>{{ $client->res_phone }}</td>
                    <td>
                        @include('components.formClients', ['clie' => $client])
                        @include('components.deleteclient', ['id' => $client->id])
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
