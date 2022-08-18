@extends('layouts.auth')
@section('heading')
    <i class="fas fa-calendar"></i> Events
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 py-2">
            <div class="card border-left-warning">
                <div class="card-header">
                    <div class="card-title">
                        <h4><i class="fas fa-plus"></i> Add</h4>
                    </div>
                </div>

                <div class="card-body">
                    <div class="custom-file">
                      <label class="custom-file-label" for="image">Header Image</label>
                      <input type="file" class="custom-file-input" name="image" id="image" placeholder="image" aria-describedby="fileHelpId">
                      <small id="fileHelpId" class="form-text text-muted"><i>Recommended aspect ration 16:9</i></small>
                    </div>
                    <img src="" alt="" id="preview" class="img-fluid" style="max-width: 200px">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Event 1" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date" class="form-control" placeholder=""
                            aria-describedby="when" required>
                        <small id="when" class="text-muted">Set the date.</small>
                    </div>
                    <div class="form-group">
                        <label for="brand">brand</label>
                        <select class="form-control" name="brand" id="brand" required>
                            <option value="hot-wings">Hot Wings</option>
                            <option value="sports">Sports Lounge</option>
                            <option value="main">5BDF</option>
                            <option value="wingers">Wingers Unlimited</option>
                        </select>
                    </div>
                    <div id="editor" style="min-height: 200px">

                    </div>
                </div>
                <div class="card-footer">
                    {{-- <a php class="btn btn-secondary">Cancel</a> --}}
                    <button id="submit" class="btn btn-warning">Save</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 py-2">
            <div class="card border-left-warning">
                <div class="card-header">
                    <div class="card-title">
                        <h4><i class="fas fa-list"></i> List</h4>
                    </div>
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
                                @foreach ($events as $event)
                                    <tr>
                                        <td>
                                            {{ $event->title }}
                                        </td>
                                        <td>
                                            {{ $event->date }}
                                        </td>
                                        <td>
                                            {{ $event->brand }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('5bdf.admin.events.edit', $event->id) }}"
                                                    class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                <button onclick="document.getElementById('deleteBTN').click()" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                            <form action="{{ route('5bdf.admin.events.destroy', $event->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" id="deleteBTN" class="d-none"></button>
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
        Quill.register("modules/imageCompressor", imageCompressor);

        var quill = new Quill('#editor', {
            theme: 'snow',
            placeholder: 'Write the description of the event here...',
            modules: {
                imageCompressor: {
                    quality: 0.9,
                    maxWidth: 1000, // default
                    maxHeight: 1000, // default
                    imageType: 'image/jpeg'
                },
            },
            minHeight: 200,

        });

        // Make submit
        document.getElementById('submit').addEventListener('click', function() {
            var title = document.getElementById('title').value;
            var date = document.getElementById('date').value;
            var description = quill.getContents();
            var brand = document.getElementById('brand').value;
            var data = {
                title: title,
                date: date,
                description: JSON.stringify(description),
                brand: brand
            };
            var formData = new FormData();
            formData.append('title', title);
            formData.append('date', date);
            formData.append('description', JSON.stringify(description));
            formData.append('brand', brand);
            formData.append('image', document.getElementById('image').files[0]);


            const URL = "{{ route('5bdf.admin.events.store') }}";

            fetch(URL, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                body: formData,
            }).then(function(response) {
                return response.json();
            }).then(function(data) {
                console.log(data);
                window.location.href = '/admin/events';
            });

        });
    </script>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function() {
            readURL(this);
        });
    </script>
@endpush
