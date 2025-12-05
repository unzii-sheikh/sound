<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body class="bg-dark">

    <div class="container-fluid text-light">
        <br>
        <h1 class="text-center">ALL MUSIC DETAILS</h1>
        <hr>
        <table class="table dark-stripped table-dark">
            <tr>

                <th>No</th>
                <th>NAME</th>
                <th>ARTIST NAME</th>
                <th>ALBUM NAME</td>
                <th>GENRE</h>
                <th>MUISC TYPE</th>
                <th>MUISC FILE</th>
                <th>THUMBNAIL FILE</th>
                <th>OPERATIONS</th>
            </tr>
            @foreach($musics as $m)
            <tr>
                <td>{{$m->musicid}}</td>
                <td>{{$m->musicname}}</td>
                <td>{{$m->artistname}}</td>
                <td>{{$m->albumname}}</td>
                <td>{{$m->genrename}}</td>
                <td>{{$m->musictype}}</td>
                <td>
                    <a href="{{$m->music}}">Download / View File</a>
                </td>
                <!-- <td>{{$m->file}}</td> -->
                <td>
                    
                    {{$m->thumbnail}}
                </td>

                <td>
                    <form action="/delete/{{$m->musicid}}" method="post">
                        @csrf
                        <button type="submit" class=" btn btn-danger">DELETE</button>
                    </form>
                </td>
                <td>
                    <form action="/update/{{$m->musicid}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success">UPDATE</button>
                    </form>
                </td>


            </tr>
            @endforeach

        </table>

    </div>


    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>