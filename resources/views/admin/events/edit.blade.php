@extends('layouts.auth')
@section('heading')
    <i class="fas fa-calendar"></i> Events
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 py-2">
            <div class="card border-left-warning">
                <div class="card-header">
                    <div class="card-title">
                        <h4><i class="fas fa-plus"></i> Add</h4>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input value="{{$event->title}}" type="text" class="form-control" name="title" id="title" placeholder="Event 1" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date" class="form-control" placeholder=""
                            aria-describedby="when" required value="{{$event->date}}">
                        <small id="when" class="text-muted">Set the date.</small>
                    </div>
                    <div class="form-group">
                        <label for="branch">Branch</label>
                        <select class="form-control" name="branch" id="branch" required>
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
                    <a class="btn btn-secondary" href="{{route('5bdf.admin.events.index')}}" >Cancel</a>
                    <button id="submit" class="btn btn-warning">Save</button>
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
        var data = @json($event->description);
        quill.setContents(JSON.parse(data));

        // Make submit
        document.getElementById('submit').addEventListener('click', function() {
            var title = document.getElementById('title').value;
            var date = document.getElementById('date').value;
            var description = JSON.stringify(quill.getContents());
            var branch = document.getElementById('branch').value;
            var data = {
                title: title,
                date: date,
                description: description,
                branch: branch,
                _method: 'PUT'
            };
            const URL = "{{ route('5bdf.admin.events.update',$event->id) }}";

            fetch(URL, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    
                },
                body: JSON.stringify(data)
            }).then(function(response) {
                return response.json();
            }).then(function(data) {
                console.log(data);
                window.location.href = '/admin/events';
            });

        });
    </script>
@endpush
