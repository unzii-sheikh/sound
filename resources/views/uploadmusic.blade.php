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

<body>
    <div class="container-fluid">
        <h1 class="text-center">ADD MUSIC FILES</h1>
        <hr>
        <form action="/musicupload" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="Enter your Music Name" name="name">
            <br><br>
            <b>ADD ARTIST NAME</b>
            <br><br>
            <select name="artistlist" class="form-control">
                <option value="">Select name of the Artist</option>
                @foreach ($artist as $art)
                <option value="{{$art->id}}">
                    {{ $art->name }}
                </option>
                @endforeach
            </select>
            <br><br>
            <select name="albumlist" class="form-control">
                <option value="">Select name of the Artist</option>
                @foreach ($album as $alb)
                <option value="{{$alb->id}}">
                    {{ $alb->name }}
                </option>
                @endforeach
            </select>
            <br><br>
            <select name="musictype" id="">ENTER MUSIC TYPE
                <option value="Audio">AUDIO</option>
                <option value="Video">VIDEO</option>
            </select>
            <br><br>
            <input type="file" placeholder="ENTER FILE NAME HERE" name="file">
            <br><br>
            <button type="submit">ADD MUSIC</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>