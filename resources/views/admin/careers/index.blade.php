@extends('layouts.auth')
@section('heading', 'Career')
@section('content')
    <div class="row">
        <div class="col-md-6 py-3">
            <div class="card border-left-primary">
                <div class="card-header">
                    <h4 class="card-title">Create</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('5bdf.admin.careers.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Job Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Marketer"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="branch">Branch</label>
                            <select class="form-control" name="branch" id="branch">
                                <option value="hot-wings">Hot Wings</option>
                                <option value="sports">Sports Lounge</option>
                                <option value="main">5BDF</option>
                                <option value="wingers">Wingers Unlimited</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="requirements">Requirements</label>
                            <textarea class="form-control" name="requirements" id="requirements" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" name="location" id="location" placeholder="Jakarta"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 py-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>
                                        Job Title
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        Branch
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($careers as $career)
                                    <tr>
                                        <td>
                                            {{ $career->title }}
                                        </td>
                                        <td>
                                            {{ $career->created_at->format('d M Y') }}
                                        </td>
                                        <td>
                                            @if($career->branch == 'hot-wings')
                                                Hot Wings
                                            @elseif($career->branch == 'sports')
                                                Sports Lounge
                                            @elseif($career->branch == 'main')
                                                5BDF
                                            @elseif($career->branch == 'wingers')
                                                Wingers Unlimited
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group btn-sm">
                                                <a href="{{ route('5bdf.admin.careers.edit', $career->id) }}"
                                                    class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                <button onclick="document.querySelector('#deleteBtn').click()"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></button>

                                            </div>
                                            <form action="{{ route('5bdf.admin.careers.destroy', $career->id) }}"
                                                method="post" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="d-none" id="deleteBtn">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
