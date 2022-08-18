@extends('layouts.auth')
@section('heading', 'Carousel - Sports Lounge')
@section('content')

    <div class="row mb-3">
        <div class="col-md-6">
            <div class="card border-left-warning">
                <div class="card-header">
                    <h5 class="text-primary">Add</h5>
                </div>
                <div class="card-body">

                    <form action="{{ route('5bdf.admin.carousel.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="brand" value="sports" hidden>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                aria-describedby="carousel-name" placeholder="Carousel X" required>
                            <small id="carousel-name" class="form-text text-muted">Alias for the image</small>
                        </div>

                        {{-- file input --}}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Image</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="imageFile"
                                    aria-describedby="inputGroupFileAddon01" name="imageFile" required>
                                <label class="custom-file-label" for="imageFile">Choose file</label>
                            </div>
                        </div>
                        <small><i>Recommended aspect ratio: <b>16:9</b></i></small>

                        <button type="submit" class="btn bg-orange text-white btn-block">Submit</button>


                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            {{-- image preview --}}
            <div class="card border-left-warning">
                <div class="card-header">
                    <h5 class="text-primary">Preview</h5>
                </div>
                <div class="card-body">
                    <img id="previewHolder" src="" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-primary">Carousels</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($carousels) == 0)
                                    <tr>
                                        <td colspan="4" class="text-center">No carousels found</td>
                                    </tr>
                                @endif
                                @foreach ($carousels as $carousel)
                                    <tr>
                                        <td>{{ $carousel->name }}</td>
                                        <td>
                                            <img src="{{ asset('storage/carousel/' . $carousel->path) }}" alt=""
                                                class="img-fluid" width="100">
                                        </td>
                                        <td>{{ $carousel->created_at }}</td>
                                        <td>
                                            <form action="{{ route('5bdf.admin.carousel.delete', $carousel->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button href="" class="btn btn-danger">Delete</a>
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
    </div>

@endsection

@push('scripts')
    <script>
        var imageInput = document.querySelector('#imageFile');
        var previewHolder = document.querySelector('#previewHolder');
        imageInput.addEventListener('change', function() {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                previewHolder.setAttribute('src', reader.result);
            }
            reader.readAsDataURL(file);
        });
    </script>
@endpush
