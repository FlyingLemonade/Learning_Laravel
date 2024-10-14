@extends('base.base')


@section('content')

<div class=" flex justify-center grid grid-cols-1">
    <a href="{{ route('member.manage') }}" class="p-2 ps-4 pe-4 bg-green-700 text-light border border-black font-bold text-center p-2  mb-6">
        Manage Member
    </a>


    <table class="border border-black table-auto border-collapse text-left text-sm text-gray-800">
        <thead class="bg-green-600 text-white">
            <tr>
                <th class="px-4 py-2 border-b">ID</th>
                <th class="px-4 py-2 border-b">Nama</th>
                <th class="px-4 py-2 border-b">Birth Date</th>
                <th class="px-4 py-2 border-b text-center">List Ticket</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
            <tr class="hover:bg-green-100 clickable-row">

                <td class="px-4 py-6 border-b">{{ $member['id'] }}</td>
                <td class="px-4 py-6 border-b">{{ $member['nama'] }}</td>
                <td class="px-4 py-6 border-b">{{ $member['tanggal_lahir'] }}</td>
                <td class="px-4 py-6 border-b"><a class="p-2 ps-4 pe-4 bg-green-100 border border-black font-bold" href="{{ route('member.tickets', $member['id']) }}">Tickets</a></td>

            </tr>

            @endforeach
        </tbody>

    </table>

</div>


@endsection