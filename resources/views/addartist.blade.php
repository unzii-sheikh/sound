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

<body class="bg-dark text-light">
    <div class="container-fluid">
        <br>
        <h1 class="text-center">ADD ARTIST</h1>
        <hr>
        <form action="/addingartist" method="post" enctype="multipart/form-data">
            @csrf
            <b class="p-1">ADD ARTIST NAME</b><br>
            <br>
            <input type="text" placeholder="ENTER ARTIST NAME" name="name" class="form-control p-2">
            <br>
            <b>ADD GENRE NAME</b>
            <br><br>
            <select name="genrelist" class="form-control">
                <option value="">SELECT CATEGORY OF THE GENRE</option>
                @foreach ($compounds as $gen)
                <option value="{{$gen->id}}">
                    {{ $gen->name }}
                </option>
                @endforeach
            </select>
            <br>
            <b>ADD ARTIST PICTURE</b>
            <br>
            <br>
            <input type="file" placeholder="ENTER ARTIST PICTURE" class="form-control" name="artistphoto">
            <br>
            <br>
            <button type="submit" class="btn btn-primary">ADD THE ARTIST</button>
        </form>
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