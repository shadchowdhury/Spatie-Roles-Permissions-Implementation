<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <a href="{{ route('roles.create') }}" class="btn btn-info mb-2">New Role</a>

                    <h3 class="text-center mt-3 mb-3" style="font-size: 24px"><b>Roles</b></h3>
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Created At</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Demo</td>
                                <td>07/13/2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
