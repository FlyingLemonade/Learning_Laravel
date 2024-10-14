@extends('base.base')


@section('content')


<table class="border border-black table-auto border-collapse text-left text-sm text-gray-800">
    <thead class="bg-green-600 text-white">
        <tr>
            <th class="px-4 py-2 border-b">ID</th>
            <th class="px-4 py-2 border-b">Movie Title</th>
            <th class="px-4 py-2 border-b">Customer Name</th>
            <th class="px-4 py-2 border-b">Seat Number</th>
            <td class="px-4 py-2 border-b">Checked In</td>
            <td class="px-4 py-2 border-b">Checked In Time</td>
            <td class="px-4 py-2 border-b">Check</td>
            <td class="px-4 py-2 border-b">Delete</td>

        </tr>
    </thead>
    <tbody>
        @foreach ($tickets as $ticket)
        <tr class="hover:bg-green-100 clickable-row">
            
                <td class="px-4 py-6 border-b">{{ $ticket['id'] }}</td>
                <td class="px-4 py-6 border-b">{{ $ticket['movie_name'] }}</td>
                <td class="px-4 py-6 border-b">{{ $ticket['customer_name'] }}</td>
                <td class="px-4 py-6 border-b">{{ $ticket['seat_number'] }}</td>
                <td class="px-4 py-6 border-b">{{ $ticket['is_checked_in'] }}</td>
                <td class="px-4 py-6 border-b">{{ $ticket['check_in_time'] }}</td>
                <td class="px-4 py-6 border-b">
                @if ($ticket['is_checked_in'] == 0)
                
                    <form id="putForm" data-value="{{$ticket['id']}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="p-2 ps-4 pe-4 bg-green-100 border border-black font-bold">Check In</button>
                    </form>
                
                @endif
                </td>

                <td class="px-4 py-6 border-b">
                @if ($ticket['is_checked_in'] == 0)
                    <form id="delForm" data-value="{{$ticket['id']}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-2 ps-4 pe-4 bg-green-100 border border-black font-bold">Delete</button>
                    </form>
                @endif
                </td>
        </tr>
        
        @endforeach
    </tbody>
</table>


<script>
$(document).ready(function() {
    $(document).on('submit', '#putForm', function (e) {
        e.preventDefault(); 

        let form = $(this);
        let ticketId = form.attr('data-value');
        let route = 'http://127.0.0.1:8000/ticket/checkin/';
        let url = route +ticketId;
        $.ajax({
            url: url,
            method: 'POST',
            data: form.serialize(), 
            success: function (response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Checked in successfully!',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'bg-indigo-400'
                    }
                }).then(() => {
                    location.reload(); 
                });
            },
            error: function (xhr, status, error) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Failed to check in. Please try again.',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'bg-indigo-400'
                    }
                });
            }
        });
    });

    $(document).on('submit', '#delForm', function (e) {
        e.preventDefault(); 

        let form = $(this);
        let ticketId = form.attr('data-value');
        let route = 'http://127.0.0.1:8000/ticket/delete/';
        let url = route +ticketId;

        $.ajax({
            url: url,
            method: 'POST',
            data: form.serialize(), 
            success: function (response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Ticket deleted successfully!',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'bg-indigo-400'
                    }
                }).then(() => {
                    location.reload(); 
                });
            },
            error: function (xhr, status, error) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Failed to delete the ticket. Please try again.',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'bg-indigo-400'
                    }
                });
            }
        });
    });
})
</script>




@endsection