@extends('layouts.auth')
@section('heading', 'Promotions')
@section('content')
    <div class="row">
        <div class="col-md-6 py-3">
            <div class="card border-left-primary">
                <div class="card-header">
                    <h4 class="card-title">Create</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('5bdf.admin.promotions.store') }}" method="post" 
                    enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Lorem Ipsum"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="brand">brand</label>
                            <select class="form-control" name="brand" id="brand">
                                <option value="hot-wings">Hot Wings</option>
                                <option value="sports">Sports Lounge</option>
                                {{-- <option value="main">5BDF</option> --}}
                                <option value="wingers">Wingers Unlimited</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                        </div>
                        {{-- image input --}}
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image" id="image" required>
                        </div>
                        {{-- preview image --}}
                        <div class="form-group">
                            <img src="" id="image-preview" class="img-fluid" alt="">
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
                                        Title
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        brand
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($promotions as $promotion)
                                    <tr>
                                        <td>
                                            {{ $promotion->title }}
                                        </td>
                                        <td>
                                            {{ $promotion->created_at->format('d M Y') }}
                                        </td>
                                        <td>
                                            @if($promotion->brand == 'hot-wings')
                                                Hot Wings
                                            @elseif($promotion->brand == 'sports')
                                                Sports Lounge
                                            @elseif($promotion->brand == 'main')
                                                5BDF
                                            @elseif($promotion->brand == 'wingers')
                                                Wingers Unlimited
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group btn-sm">
                                                <a href="{{ route('5bdf.admin.promotions.edit', $promotion->id) }}"
                                                    class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                <button onclick="document.querySelector('#deleteBtn').click()"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                            <form action="{{ route('5bdf.admin.promotions.destroy', $promotion->id) }}"
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

    @push('scripts')
        <script>
            document.querySelector('#image').addEventListener('change', function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.querySelector('#image-preview').src = e.target.result;
                };
                reader.readAsDataURL(e.target.files[0]);
            });
        </script>
    @endpush