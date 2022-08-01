@extends('layouts.auth')
@section('heading')
    <i class="fas fa-edit"></i> - {{ $promotion->title }}
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card border-left-warning">
                <div class="card-header">
                    <h4 class="card-title">Edit</h4>
                </div>
                <form action="{{ route('5bdf.admin.promotions.update', $promotion->id) }}" method="post">
                  @method('PUT')
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label for="title">Job Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Marketer" value="{{ $promotion->title }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="branch">Branch</label>
                            <select class="form-control" name="branch" id="branch">
                                <option {{("hot-wings" == $promotion->branch) ? "selected" : ""}} value="hot-wings">Hot Wings</option>
                                <option {{("sports" == $promotion->branch) ? "selected" : ""}} value="sports">Sports Lounge</option>
                                <option {{("main" == $promotion->branch) ? "selected" : ""}} value="main">5BDF</option>
                                <option {{("wingers" == $promotion->branch) ? "selected" : ""}} value="wingers">Wingers Unlimited</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" required>{{$promotion->description}}</textarea>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <a href="{{route('5bdf.admin.promotions.index')}}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
