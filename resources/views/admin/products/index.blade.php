@extends('layouts.auth')
@section('heading', 'Products')
@section('content')
    <div class="row">
        <div class="col-md-6 py-3">
            <div class="card border-left-primary">
                <div class="card-header">
                    <h4 class="card-title">Create</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('5bdf.admin.products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Alias</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Lorem Ipsum" required>
                        </div>
                        <div class="form-group">
                            <label for="brand">brand</label>
                            <select class="form-control" name="brand" id="brand">
                              {{-- <option value="main">5BDF</option> --}}
                                <option value="hot-wings">Hot Wings</option>
                                <option value="sports">Sports Lounge</option>
                                <option value="wingers">Wingers Unlimited</option>
                            </select>
                        </div>
                        <div class="custom-file">
                            <label class="custom-file-label" for="image">Image</label>
                            <input type="file" class="custom-file-input" name="image" id="image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        {{-- preview image --}}
                        <div class="form-group py-2">
                            <img src="" alt="" id="preview" class="img-thumbnail" width="150px">
                        </div>
                        <small id="fileHelpId" class="form-text text-muted"><i>Recommended ascpect ratio 1:1.</i></small>

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
                                    {{-- <th>
                                        Alias
                                    </th> --}}
                                    <th>
                                        Image
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
                                @foreach ($products as $product)
                                    <tr>

                                        <td>
                                            <img src="{{ asset('storage/products/' . $product->image) }}" alt=""
                                                width="100px">
                                        </td>
                                        <td>
                                            {{ $product->created_at->format('d M Y') }}
                                        </td>
                                        <td>
                                            @if ($product->brand == 'main')
                                                5BDF
                                            @elseif ($product->brand == 'hot-wings')
                                                Hot Wings
                                            @elseif($product->brand == 'sports')
                                                Sports Lounge
                                            @elseif($product->brand == 'wingers')
                                                Wingers Unlimited
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group btn-sm">
                                                {{-- <a href="{{ route('5bdf.admin.csr.edit', $csr->id) }}"
                                                    class="btn btn-primary"><i class="fas fa-edit"></i></a> --}}
                                                <button
                                                    onclick="document.querySelector('#deleteBtn{{ $product->id }}').click()"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                            <form action="{{ route('5bdf.admin.products.destroy', $product->id) }}" method="post"
                                                class="d-none">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="d-none" id="deleteBtn{{ $product->id }}">
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
            var preview = document.querySelector('#preview');
            document.getElementById('image').addEventListener('change', function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(this.files[0]);

            });
        </script>
    @endpush
