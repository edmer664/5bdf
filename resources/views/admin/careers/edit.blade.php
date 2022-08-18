@extends('layouts.auth')
@section('heading')
    <i class="fas fa-edit"></i> - {{ $career->title }}
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card border-left-warning">
                <div class="card-header">
                    <h4 class="card-title">Edit</h4>
                </div>
                <form action="{{ route('5bdf.admin.careers.update', $career->id) }}" method="post">
                  @method('PUT')
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label for="title">Job Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Marketer" value="{{ $career->title }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="brand">brand</label>
                            <select class="form-control" name="brand" id="brand">
                                <option {{("hot-wings" == $career->brand) ? "selected" : ""}} value="hot-wings">Hot Wings</option>
                                <option {{("sports" == $career->brand) ? "selected" : ""}} value="sports">Sports Lounge</option>
                                <option {{("main" == $career->brand) ? "selected" : ""}} value="main">5BDF</option>
                                <option {{("wingers" == $career->brand) ? "selected" : ""}} value="wingers">Wingers Unlimited</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" required>{{$career->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="requirements">Requirements</label>
                            <textarea class="form-control" name="requirements" id="requirements" rows="3" required>{{$career->requirements}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input value="{{$career->location}}" type="text" class="form-control" name="location" id="location" placeholder="Jakarta"
                                required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('5bdf.admin.careers.index')}}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
