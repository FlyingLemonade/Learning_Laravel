@extends('base.base')



@section('content')


<form id="createMember" class="w-1/2">
    @csrf
    <div class="mb-4">
        <label for="customer_name" class="block text-gray-700">Name</label>
        <input type="text" id="customer_name" name="customer_name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
    </div>
    <div class="mb-4">
        <label for="birth_date" class="block text-gray-700">Birth Date</label>
        <input type="date" id="birth_date" name="birth_date" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
    </div>
    <div>
        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md">Create Member</button>
    </div>
</form>

<script>
    $(document).on('submit', '#createMember', function(e) {
        e.preventDefault();

        let form = $(this);
        console.log(form.serialize());

        let url = `{{ route('member.submit') }}`;

        $.ajax({
            url: url,
            method: 'POST',
            data: form.serialize(),
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Member created successfully!',
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
                    text: 'Failed to create member. Please try again.',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'bg-indigo-400'
                    }
                });
            }
        });
    });
</script>
@endsection