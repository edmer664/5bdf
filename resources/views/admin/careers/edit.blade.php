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
                <form action="{{ route('5bdf.admin.careers.update', $career->id) }}" method="post" >
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
                            {{-- render quill js --}}
                            <div id="editor" style="height: 300px">
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="requirements">Requirements</label>
                            {{-- render quill js --}}
                            <div id="editor2" style="height: 300px">
                              
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input value="{{$career->location}}" type="text" class="form-control" name="location" id="location" placeholder="Jakarta"
                                required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('5bdf.admin.careers.index')}}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" id="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    {{-- quill js --}}
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
        quill.setContents({!! $career->description !!});

        var quill2 = new Quill('#editor2', {
            theme: 'snow'
        });
        quill2.setContents({!! $career->requirements !!});
        

        document.getElementById('submit').addEventListener('click', function(e) {
            e.preventDefault();
            // prevent multiple clicks
            document.getElementById('submit').disabled = true;
            // get the data from the quill editor
            var description = quill.getContents();
            var requirements = quill2.getContents();
            var title = document.getElementById('title').value;
            var brand = document.getElementById('brand').value;
            var location = document.getElementById('location').value;
            // create a form data object

            var formData = new FormData();
            formData.append('description', JSON.stringify(description));
            formData.append('requirements', JSON.stringify(requirements));
            formData.append('title', title);
            formData.append('brand', brand);
            formData.append('location', location);
            formData.append('_method', 'PUT');
            // send the data to the server
            const URL = "{{ route('5bdf.admin.careers.update', $career->id) }}";
            fetch(URL, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content'),
                    }
                })
                .then(response => response.json())
                .then(result => {
                    console.log('Success:', result);
                    document.getElementById('submit').disabled = false;
                    window.location.href = "{{route('5bdf.admin.careers.index')}}";
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('submit').disabled = false;
                });
        });


    </script>

@endpush