

<button href="{{ route('admin.borrow.return', $model) }}" class="btn btn-info" id="return">Return</button>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $('button#return').on('click', function(e){
        e.preventDefault();

        var href = $(this).attr('href');

            Swal.fire({
            title: 'Are you sure the data is correct?',
            text: "Make sure that the data and books returned are the same!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, the data & books is correct!'
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('returnForm').action = href;
                document.getElementById('returnForm').submit();

                Swal.fire(
                'Returned!',
                'Your data books has been returned.',
                'success'
                )
            }
        })
    })
</script>