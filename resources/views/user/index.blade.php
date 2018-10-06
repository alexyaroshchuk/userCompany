@extends('layouts.master')

@section('content')
    @include("user.create")
    @include("user.edit")

    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between">
                <h4 class="card-title">Buyers Table</h4>
                <button type="button" class="btn btn-info add-new" data-toggle="modal" data-target="#myModal" title="Create"><i class="fa fa-plus" ></i> Add New</button>
            </div>
            <div class="table-responsive m-t-40">
                <table id="example23" class="table table-bordered table-striped display nowrap table-hover" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Employment date</th>
                        <th>Amount of wages, $</th>
                        <th>Director</th>
                        <th>Action </th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>№</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Employment date</th>
                        <th>Amount of wages, $</th>
                        <th>Director</th>
                        <th>Action </th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $index => $user)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->position->position }}</td>
                            <td>{{ $user->employment_date}}</td>
                            <td>{{ $user->amount_of_wages }}</td>
                            @if(count($user->parent))
                                <td>{{ $user->parent->name}}</td>
                            @else
                                <td></td>
                            @endif
                            <td>
                                <div class="row sweetalert justify-content-center">
                                    <div>
                                        <button id="edit-user{{$user->id}}" data-toggle="modal" data-target="#myModal{{$user->id}}" title="Edit" type="button" style="border: 0; background:0">
                                            <span class="material-icons">&#xE254;</span>
                                        </button>
                                    </div>
                                    <div>
                                        <form method="POST" action="{{route('users.delete', ['users' => $user['id']])}}">
                                            <button id="delete-user" onclick = "deleteUser({{ $user->id }})" title="Delete" data-toggle="tooltip" type="button" style="border: 0; background:0">
                                                <span class="material-icons">&#xE872;</span>
                                            </button>
                                        </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function deleteUser(userId) {
            swal({
                title: "Are you sure to delete ?",
                text: "You will not be able to recover this imaginary file !!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it !!",
                closeOnConfirm: false
            }, function () {
                $.ajax({
                    url: "/users/" + userId + "/delete",
                    method: "POST",
                    data: {
                        id: buyerId,
                        _token: '{{csrf_token()}}'
                    },
                    success: function(response) {
                        swal({
                            title: "Hey!",
                            text: response.success,
                            type: "success"
                        }, function () {
                            location.reload();
                        });
                    }, error: function(response){
                        swal("Oops", "We couldn't connect to the server!", response);
                    }
                })
            })
        }
    </script>


@endsection('content')