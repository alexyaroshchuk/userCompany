@foreach($users as $user)
    <div class="fixed-overlay">
        <div class="modal fade" id="myModal{{$user['id']}}" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="editForm{{$user['id']}}"
                          class="form-horizontal form-label-left"
                          method="POST"
                          action="{{route('users.update', ['user' => $user['id']])}}">
                        @csrf
                        <div class="form-group col-md-12">
                            <div class="modal-header row justified align-items-center">
                                <div><h3>Edit Info</h3></div>
                                <div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="font-family:'Georgia'; font-size:26px; font-weight:bold;"  >&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="name{{$user['id']}}">Full Name</label>
                                    <input type="text" value="{{ $user->name }}" class="form-control form-control-line" id="name{{$user['id']}}" name="name" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="email{{$user['id']}}">Email</label>
                                    <input type="email" step="0.01" min="0" value="{{ $user->email }}" class="form-control form-control-line" id="email{{$user['id']}}" name="email" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="position{{$user['id']}}">Select position</label>
                                    <select class="form-control form-control-line" id="position{{$user['id']}}" name="position">
                                        @foreach($positions as $position)
                                            @if($position == $user->position)
                                                <option value="{{$position->id}}" selected>{{ $position->position }}</option>
                                            @else <option value="{{$position->id}}" >{{ $position->position  }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="employment_date{{$user['id']}}">Employment date</label>
                                    <input type="date" value="{{ $user->employment_date }}" class="form-control form-control-line" id="employment_date{{$user['id']}}" name="employment_date" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="amount_of_wages{{$user['id']}}">Amount of wages</label>
                                    <input type="text" value="{{ $user->amount_of_wages }}" class="form-control form-control-line" id="amount_of_wages{{$user['id']}}" name="amount_of_wages" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="director{{$user['id']}}">Select parent</label>
                                    <select class="form-control form-control-line" id="director{{$user['id']}}" name="director">
                                        @foreach($users as $user)
                                            @if($user == $user->parent)
                                                <option value="{{$user->id}}" selected>{{ $user->name }}</option>
                                            @else <option value="{{$user->id}}" >{{ $user->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success"  id="submit{{$user['id']}}" >Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--@include('user.editscript')--}}
@endforeach



