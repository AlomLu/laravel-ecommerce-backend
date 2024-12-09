<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $(document).ready(function(){
        $(document).on('change', '#division_id', function(e){
            e.preventDefault();

            let division_id = $(this).val();
            // console.log(division_id);

            let districtDropdown = $('select[name="district_id"]');

            // Clear the previous options
            districtDropdown.html('<option value="">Select district</option>');

            $.ajax({
                url: "{{route('division.districs')}}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: { division_id: division_id },
                success: function(data) {
                   if(data.length > 0){
                        // for (let i = 0; i < data.length; i++) { 
                        //     let dis_obj = data[i];
                        //     console.log(dis_obj.dis_name);
                        //     districtDropdown.append(`<option value="${dis_obj.id}">${dis_obj.dis_name}</option>`);
                        // }

                        data.forEach(district => {
                            districtDropdown.append(`<option value="${district.id}">${district.dis_name}</option>`);
                        });

                        // data.forEach(function(district) {
                        //     districtDropdown.append(
                        //         `<option value="${district.id}">${district.dis_name}</option>`
                        //     );
                        // });
                   }else{
                            districtDropdown.append(`<option>No districts found</option>`);
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });

        });
    });
</script>