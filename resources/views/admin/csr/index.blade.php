@extends('layouts.auth')
@section('heading', 'CSR')
@section('content')
    <div class="row">
        <div class="col-md-6 py-3">
            <div class="card border-left-primary">
                <div class="card-header">
                    <h4 class="card-title">Create</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('5bdf.admin.csr.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="form-group">
                            <label for="title">Alias</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Lorem Ipsum"
                                required>
                        </div> --}}
                        <div class="form-group">
                            <label for="brand">brand</label>
                            <select class="form-control" name="brand" id="brand">
                                <option value="hot-wings">Hot Wings</option>
                                <option value="sports">Sports Lounge</option>
                                <option value="main">5BDF</option>
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
                                @foreach ($csrs as $csr)
                                    <tr>

                                        <td>
                                           <img src="{{ asset('storage/csr/'.$csr->path) }}" alt="" width="100px">
                                        </td>
                                        <td>
                                            {{ $csr->created_at->format('d M Y') }}
                                        </td>
                                        <td>
                                            @if ($csr->brand == 'hot-wings')
                                                Hot Wings
                                            @elseif($csr->brand == 'sports')
                                                Sports Lounge
                                            @elseif($csr->brand == 'main')
                                                5BDF
                                            @elseif($csr->brand == 'wingers')
                                                Wingers Unlimited
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group btn-sm">
                                                {{-- <a href="{{ route('5bdf.admin.csr.edit', $csr->id) }}"
                                                    class="btn btn-primary"><i class="fas fa-edit"></i></a> --}}
                                                <button onclick="document.querySelector('#deleteBtn{{$csr->id}}').click()"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                            <form action="{{ route('5bdf.admin.csr.destroy', $csr->id) }}"
                                                method="post" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="d-none" id="deleteBtn{{$csr->id}}">
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
            document.getElementById('image').addEventListener('change', function () {
                var reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(this.files[0]);
            
            });
        </script>
    @endpush