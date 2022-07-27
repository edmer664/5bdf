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
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Event 1">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date" class="form-control" placeholder=""
                            aria-describedby="when">
                        <small id="when" class="text-muted">Set the date.</small>
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
                    <div id="editor" style="min-height: 200px">

                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary">Cancel</button>
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
                                        Branch
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
                                            {{ $event->branch }}
                                        </td>
                                        <td>
                                          <div class="btn-group">
                                            <a href="{{ route('5bdf.admin.events.edit', $event->id) }}"
                                                class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('5bdf.admin.events.destroy', $event->id) }}"
                                                class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                          </div>
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
            var branch = document.getElementById('branch').value;
            var data = {
                title: title,
                date: date,
                description: description,
                branch: branch
            };
            const URL = "{{ route('5bdf.admin.events.store') }}";

            fetch(URL, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
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
