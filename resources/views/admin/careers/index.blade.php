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
                            <input type="text" class="form-control" name="title" id="title" placeholder="Title"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="brand">brand</label>
                            <select class="form-control" name="brand" id="brand">
                                <option value="hot-wings">Hot Wings</option>
                                <option value="sports">Sports Lounge</option>
                                <option value="main">5BDF</option>
                                <option value="wingers">Wingers Unlimited</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            {{-- quill js --}}
                            <div id="editor">
                                <p>Hello World!</p>
                                <p>Some initial <strong>bold</strong> text</p>
                                <p><br></p>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="requirements">Requirements</label>
                            {{-- quill js2 --}}
                            <div id="editor2">
                                <p>Hello World!</p>
                                <p>Some initial <strong>bold</strong> text</p>
                                <p><br></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" name="location" id="location" placeholder="Location"
                                required>
                        </div>
                        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
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
                                        brand
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
                                            @if ($career->brand == 'hot-wings')
                                                Hot Wings
                                            @elseif($career->brand == 'sports')
                                                Sports Lounge
                                            @elseif($career->brand == 'main')
                                                5BDF
                                            @elseif($career->brand == 'wingers')
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
    </div>

@endsection


@push('scripts')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


    <script>
        // quill js
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

        // quill js2
        var quill2 = new Quill('#editor2', {
            theme: 'snow'
        });

        // on submit send an ajax request to the server
        // using vanilla js
        document.getElementById('submit').addEventListener('click', function(e) {
            e.preventDefault();
            // stop reading multiple clicks
            document.getElementById('submit').disabled = true;

            var title = document.getElementById('title').value;
            var brand = document.getElementById('brand').value;
            var description = quill.getContents();
            var requirements = quill2.getContents();
            var location = document.getElementById('location').value;

            var data = {
                title: title,
                brand: brand,
                description: JSON.stringify(description),
                requirements: JSON.stringify(requirements),
                location: location
            }

            var formData = new FormData();
            formData.append('title', title);
            formData.append('brand', brand);
            formData.append('description', JSON.stringify(description));
            formData.append('requirements', JSON.stringify(requirements));
            formData.append('location', location);

            const URL = "{{ route('5bdf.admin.careers.store') }}";
            fetch(URL, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content'),
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    
                    window.location.reload();
                    
                })
                .catch((error) => {
                    console.error('Error:', error);
                    // unblock the button
                    document.getElementById('submit').disabled = false;                    
                });
        })
    </script>
@endpush
