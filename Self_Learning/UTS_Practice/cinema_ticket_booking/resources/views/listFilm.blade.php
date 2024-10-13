@extends('base.base')

@section('content')


<table class="border border-black table-auto border-collapse text-left text-sm text-gray-800">
    <thead class="bg-green-600 text-white">
        <tr>
            <th class="px-4 py-2 border-b">ID</th>
            <th class="px-4 py-2 border-b">Movie Title</th>
            <th class="px-4 py-2 border-b">Duration</th>
            <th class="px-4 py-2 border-b">Release Date</th>
            <td class="px-4 py-2 border-b">Book</td>
            <td class="px-4 py-2 border-b">Ticket</td>

        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
        <tr class="hover:bg-green-100 clickable-row">
            
                <td class="px-4 py-6 border-b">{{ $movie['id'] }}</td>
                <td class="px-4 py-6 border-b">{{ $movie['movie_title'] }}</td>
                <td class="px-4 py-6 border-b">{{ $movie['duration'] }}</td>
                <td class="px-4 py-6 border-b">{{ $movie['release_date'] }}</td>
                <td class="px-4 py-6 border-b"><a class="p-2 ps-4 pe-4 bg-green-100 border border-black font-bold" href="{{ route('movie.book', $movie['id']) }}">Book</a></td>
                <td class="px-4 py-6 border-b"><a class="p-2 ps-4 pe-4 bg-green-100 border border-black font-bold" href="{{ route('movie.ticket', $movie['id']) }}">Ticket</a></td>

        </tr>
        
        @endforeach
    </tbody>
    
</table>



<script>
    $(document).ready(function(){
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
});

</script>

@endsection