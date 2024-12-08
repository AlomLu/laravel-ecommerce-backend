<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    
<script>
    $(document).ready(function() {

        //Add division
        $(document).on('click', '.ajax_add_division', function(e){
            e.preventDefault();

            let div_name = $('#div_name').val();

            console.log(div_name);

            $.ajax({
                url: "{{route('add.division')}}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {div_name: div_name},
                success: function(response){
                    $('.successMsg').append('<span class="text-success">Data inserted successfully</span>');
                    if(response.status = 'success'){
                        $('#addDivision')[0].reset();
                    }
                },
                error: function(err){
                    // console.log(err.responseJSON);
                    // console.log(err.responseJSON.errors);

                    // let formError = err.responseJSON.errors;

                    // for(let error in formError){
                    //     console.log(error);
                    //     $('.'+ error + '_err').html(formError[error][0]);
                    // }
                }

            });
        });

        // Show value in update form
        $(document).on('click', '.update_form', function(e){
            e.preventDefault();

            let id = $(this).data('id');
            let div_name = $(this).data('div_name');

            // console.log($(this).data());

            $('#up_id').val(id);
            $('#up_div_name').val(div_name);
        });

        
        // Update division
        $(document).on('click', '.update_division', function(e){
            e.preventDefault();

            let up_id = $('#up_id').val();
            let up_div_name = $('#up_div_name').val();

            $.ajax({
                url: "{{route('update.division')}}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    up_id: up_id, 
                    up_div_name: up_div_name
                },
                success: function(res){
                    if(res.status = 'success'){
                        $('#updateModal').modal('hide'); // Close the modal
                        $('.modal-backdrop').remove();  // Remove leftover backdrop
                        $('body').removeClass('modal-open'); // Ensure the body can scroll
                        $('#updateDivision')[0].reset();
                        $('.table').load(location.href + ' .table'); // Reload table content


                    }
                },
                // error: function(err){
                //     let formError = err.responseJSON.errors;

                //     console.log(formError);
                // }
            })
;
        });

        // delete division

        $(document).on('click', '.delete_division', function(e){
            e.preventDefault();

            let delete_id = $(this).data('id');

            console.log(delete_id);

            if(confirm('Are you sure you want to delete this division?')){
                $.ajax({
                url: "{{route('delete.division')}}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {delete_id: delete_id}
            });
            }
        });
    });

</script>