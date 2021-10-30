<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route("clients.export.csv")}}" target="_blank" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-2">
                Export
            </a>
            <table class="table-auto my-2">
                <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Commandes</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{ $client->lastName }}</td>
                    <td>{{ $client->firstName }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phoneNumber }}</td>
                    <td>{{ $client->commands_count }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
