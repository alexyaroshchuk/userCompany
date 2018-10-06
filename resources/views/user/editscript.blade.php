<scriptuser
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></scriptuser>
<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#submit{{$user['id']}}").click(function(e){
            e.preventDefault();

            $( "#name-error{{$user['id']}}" ).html( "" );
            $( "#email-error{{$user['id']}}" ).html( "" );
            $( "#employment_date-error{{$user['id']}}" ).html( "" );
            $( "#amount_of_wages{{$user['id']}}" ).html( "" );

            $.ajax({
                url: "{{route('user', ['user' => $user['id']])}}",
                type: 'POST',
                data: {
                    name: $("#name{{$user['id']}}").val(),
                    email: $("#email{{$user['id']}}").val(),
                    employment_date: $("#employment_date{{$user['id']}}").val(),
                    amount_of_wages: $("#amount_of_wages{{$user['id']}}").val(),
                    _token: '{{csrf_token()}}',
                },
                success:function(data) {
                    console.log(data);
                    if(data.errors) {
                        if(data.errors.name){
                            $( "#name-error{{$user['id']}}" ).html( data.errors.name[0] );
                        }
                        if(data.errors.email){
                            $( "#email-error{{$user['id']}}" ).html( data.errors.email[0] );
                        }
                        if(data.errors.employment_date){
                            $( "#employment_date-error{{$user['id']}}" ).html( data.errors.employment_date[0] );
                        }
                        if(data.errors.amount_of_wages){
                            $( "#amount_of_wages-error{{$user['id']}}" ).html( data.errors.amount_of_wages[0] );
                        }
                    }
                    if(data.success) {
                        $("#myModal{{$user['id']}}").modal('hide');
                        swal({
                            title: "Hey!",
                            text: data.success,
                            type: "success"
                        }, function () {
                            location.reload();
                        });
                    }
                }
            });
        })
    });
</script>