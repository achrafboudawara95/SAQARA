<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="table-auto divide-y divide-gray-300">
                <thead class="bg-gray-50">
                <tr>
                    <th>Client</th>
                    <th>Date de la commande</th>
                    <th>Numéro de commande</th>
                    <th>Articles</th>
                    <th>Prix total de la commande</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-300">
                @foreach($commands as $command)
                <tr class="whitespace-nowrap">
                    <td>{{ $command->client->full_name }}</td>
                    <td>{{ $command->date->format('d/m/Y') }}</td>
                    <td>{{ $command->number }}</td>
                    <td>
                        <ul>
                            @foreach($command->commandLines as $line)
                                <li>{{ $line->quantity }} * {{ $line->name }}(Ref: {{ $line->ref }})</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ $command->price }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
