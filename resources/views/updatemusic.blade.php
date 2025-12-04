<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body class="bg-dark text-light">
       <div class="container-fluid">
        <br>
        <h1>UPDATE MUSIC DETAILS</h1>
       <hr>
       <form action="/updaterecord" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$rep->musicid}}">
       <b>MUSIC NAME</b>
       <br>
       <input type="text" value="{{$rep->musicname}}" class="form-control" name="musicname">
       <br>
       <b>ARTIST NAME</b>
        <select name="artistname" class="form-control">
                <option value="">SELECT NAME OF THE ALBUM</option>
                @foreach($artist as $art)
                <option value="{{$art->id}}" class="text-dark">{{$art->name}}</option>
                @endforeach
            </select>
            <br>
            <b>ALBUM NAME</b>
            <br>
            <select name="albumname" class="form-control">
    <option value="">SELECT NAME OF THE ALBUM</option>
    @foreach($album as $alb)
        <option value="{{$alb->id}}" class="text-dark">{{$alb->name}}</option>
    @endforeach
</select>
<br>
<b>ADD GENRE NAME</b>
            <br>
           
            <select name="genrename" class="form-control">
                <option value="">SELECT CATEGORY OF THE GENRE</option>
                @foreach ($genre as $gen)
                <option value="{{$gen->genreid}}">
                    {{ $gen->genreid }}
                </option>
                @endforeach
            </select>
            <br>
            <b>ENTER MUSIC TYPE</b>
            <br>
            <select name="musictypename" id="" class="form-control">
                <option value="Audio">AUDIO</option>
                <option value="Video">VIDEO</option>
            </select> 
            <br>       
            <b>MUSIC FILE</b>
       <p>{{$rep->musicfile}}</p>
       <input type="file" value="{{$rep->musicfile}}" class="form-control" name="musicfileupd">
       <br>
        <b>THUMBNAIL FILE</b>
        <br>
        <p>{{$rep->thumbnail}}</p>
       <input type="file" value="{{$rep->thumbnail}}" class="form-control" name="musicthumbnailupd">
       <br>
       <button type="submit" >update</button>
       <br>
       </form>
       </div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
