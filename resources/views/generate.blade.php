<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">

        <div
            class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 py-3  rounded-bl-lg rounded-br-lg">
            <h1> General Report Data</h1><br>
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                            Citizens In Country</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                            Number of State</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                            Number of LGA</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                            Number of Wards</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                                <div>
                                    <div class="text-sm leading-5 text-gray-800">
                                        {{ $countryCount }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="text-sm leading-5 text-blue-900">
                                {{ $stateCount }}
                            </div>
                        </td>
                        <td
                            class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                            {{ $lgaCount }}
                        </td>
                        <td
                            class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                            {{ $wardsCount }}
                        </td>
                    </tr>


                </tbody>
            </table>
            <br><br>

            {{-- State Report --}}
            <table class="min-w-full">
                <h3> Number of Citizens in each state</h3><br>
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                            Name of State</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                            Number of Citizens</th>

                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($states as $state)
                        <tr>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">
                                            {{ $state->name }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">
                                            {{ $state->citizens->count() }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            <br><br>
            {{-- LGA Report --}}
            <table class="min-w-full">
                <thead>
                    <h3> Number of Citizens in each LGA </h3><br>
                    <tr>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                            Name of LGA</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                            Number of Citizens</th>

                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($lgas as $lga)

                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">
                                            {{ $lga->name }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">
                                            {{ $lga->citizens->count() }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            <br><br>
            {{-- Ward Report --}}
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                            Names of Ward</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                            Number of Citizens</th>

                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($wards as $ward)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">
                                            {{ $ward->name }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">
                                            {{ $ward->citizens->count() }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>




        </div>
    </div>
</x-app-layout>
