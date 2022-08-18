@extends('layouts.auth')
@section('heading')
    <i class="fas fa-edit"></i> - {{ $inclusion->title }}
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card border-left-warning">
                <div class="card-header">
                    <h4 class="card-title">Edit</h4>
                </div>
                <form action="{{ route('5bdf.admin.inclusions.update', $inclusion->id) }}" method="post">
                  @method('PUT')
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label for="title">Job Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Marketer" value="{{ $inclusion->title }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="brand">brand</label>
                            <select class="form-control" name="brand" id="brand">
                                <option {{("hot-wings" == $inclusion->brand) ? "selected" : ""}} value="hot-wings">Hot Wings</option>
                                <option {{("sports" == $inclusion->brand) ? "selected" : ""}} value="sports">Sports Lounge</option>
                                <option {{("main" == $inclusion->brand) ? "selected" : ""}} value="main">5BDF</option>
                                <option {{("wingers" == $inclusion->brand) ? "selected" : ""}} value="wingers">Wingers Unlimited</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" required>{{$inclusion->description}}</textarea>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <a href="{{route('5bdf.admin.inclusions.index')}}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
