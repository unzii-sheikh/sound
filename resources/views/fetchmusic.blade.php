@extends('admin.layout')

@section('content')
<div class="container-fluid text-light py-4">
    <h1 class="text-center mb-4">All Music Details</h1>
    <hr class="bg-light">

    <div class="table-responsive">
        <table class="table table-dark table-striped table-hover align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Artist Name</th>
                    <th>Album Name</th>
                    <th>Genre</th>
                    <th>Music Type</th>
                    <th>Music File</th>
                    <th>Thumbnail</th>
                    <th colspan="2" class="text-center">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($musics as $m)
                <tr>
                    <td>{{ $m->musicid }}</td>
                    <td>{{ $m->musicname }}</td>
                    <td>{{ $m->artistname }}</td>
                    <td>{{ $m->albumname }}</td>
                    <td>{{ $m->genrename }}</td>
                    <td>{{ $m->musictype }}</td>
                    <td>
                        <a href="{{ $m->music }}" class="text-decoration-none text-info" target="_blank">
                            Download / View
                        </a>
                    </td>
                    <td>
                        
                            {{ $m->thumbnail }}
                    </td>
                    <td>
                        <form action="{{ url('/delete/'.$m->musicid) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm w-100">Delete</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ url('/update/'.$m->musicid) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm w-100">Update</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
