<div class="fixed-overlay">
    <div class="modal" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal form-label-left"
                      method="POST"
                      action="{{route('users.store')}}">
                    @csrf
                    <div class="form-group col-md-12">
                        <div class="modal-header row justified align-items-center">
                            <div><h3>Add Info</h3></div>
                            <div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="font-family:'Georgia'; font-size:26px; font-weight:bold;"  >&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group col-md-12">
                                <label class="control-label" for="name">Name</label>
                                <input type="text" class="form-control form-control-line" name="name" id="name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label" for="email">Email</label>
                                <input type="email" class="form-control form-control-line" id="email" name="email" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label" for="position">Select position</label>
                                <select class="form-control custom-select" data-placeholder="Choose a position"  name="position">
                                    @foreach($positions as $position)
                                        <option value="{{$position->id}}" selected>{{ $position->position }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label" for="employment_date">Employment date</label>
                                <input type="date" class="form-control form-control-line" name="employment_date" id="employment_date" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label" for="amount_of_wages">Amount of wages</label>
                                <input type="text"  class="form-control form-control-line" name="amount_of_wages" id="amount_of_wages" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label" for="director">Select parent</label>
                                <select class="form-control form-control-line" name="director" id="director">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}" selected>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--@include('user.createscript')--}}