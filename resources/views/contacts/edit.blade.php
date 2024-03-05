@extends('layouts.app')
@section('main-content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Contacts</h1>
                </div>
            </div>
        </div>

    </div>

    <div class="content mt-3">

        <!--/.col-->
        <div class="col-md-10">
            <div class="card">
                <form action="{{ url('contacts/updating/'.$contacts->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-header"><strong>Add </strong><small> Contacts</small></div>
                    <div class="card-body card-block">
                        <div class="form-group"><label for="names" class=" form-control-label">Names</label><input type="text" id="names"  class="form-control" name="names" value="{{ $contacts->names }}">
                            @error('names')
                            <div style="color: #FF0000;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group"><label for="company" class=" form-control-label">Company</label><input type="text" id="company"  class="form-control" name="company" value="{{ $contacts->company }}">

                        </div>
                        <div class="form-group"><label for="location" class=" form-control-label">Location</label><input type="text" id="location"  class="form-control" name="location" value="{{ $contacts->location }}">

                        </div>
                        <div class="form-group"><label for="email" class=" form-control-label">Email</label><input type="email" id="email"  class="form-control" name="email" value="{{ $contacts->email }}">
                            @error('email')
                            <div style="color: #FF0000;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group"><label for="telephone" class=" form-control-label">Telephone</label><input type="text" id="telephone"  class="form-control" name="telephone" value="{{ $contacts->telephone }}">
                            @error('telephone')
                            <div style="color: #FF0000;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!--/.col-->

    </div> <!-- .content -->
@endsection

