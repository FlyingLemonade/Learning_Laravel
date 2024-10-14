@extends('base.base')

@section('content')

<form id="bookTicket" class="w-1/2">
    @csrf
    <div class="mb-4">
        <label for="customer_name" class="block text-gray-700 font-bold ">Movie : {{ $movie->movie_title }}</label>
        <input type="hidden" id="movie_id" name="movie_id" value="{{ $movie->id }}" required>
    </div>

    <div class="mb-4">
        <label for="customer_name" class="block text-gray-700">Customer Name</label>
        <input type="text" id="customer_name" name="customer_name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
    </div>
    <div class="mb-4">
        <label for="seat_number" class="block text-gray-700">Seat Number</label>
        <input type="text" id="seat_number" name="seat_number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
    </div>

    <div class="mb-4">
        <label for="member_id" class="block text-gray-700">Member ID</label>
        <select id="member_id" name="member_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            <option value="" disabled selected>Select a Member</option>
            @foreach($members as $member)

            <option value="{{ $member->id }}">{{ $member->nama }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md">Order Ticket</button>
    </div>
</form>

<script>
    $(document).ready(function() {
        // Handle drag start and drop
        $(".draggable-member").on("dragstart", function(event) {
            event.originalEvent.dataTransfer.setData("member_id", $(this).data('member-id'));
        });

        $("#member-list").on("dragover", function(event) {
            event.preventDefault();
        });

        $("#member-list").on("drop", function(event) {
            event.preventDefault();
            var memberId = event.originalEvent.dataTransfer.getData("member_id");
            $("#member_id").val(memberId); // Set the member_id in the hidden input
        });

        // Form submit with AJAX
        $(document).on('submit', '#bookTicket', function(e) {
            e.preventDefault();

            let form = $(this);
            let url = "{{ route('ticket.submit') }}";
            console.log(form.serialize());
            $.ajax({
                url: url,
                method: 'POST',
                data: form.serialize(),

                success: function(response) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Ticket booked successfully!',
                        icon: 'success',
                        confirmButtonText: 'OK',
                        customClass: {
                            confirmButton: 'bg-indigo-400'
                        }
                    }).then(() => {
                        location.reload();
                    });
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Failed to book the ticket. Please try again.',
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