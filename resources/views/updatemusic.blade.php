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

    <body>
       <div class="container-fluid">
        <br>
        <h1>UPDATE MUSIC DETAILS</h1>
       <hr>
       <form action="/updatadata" method="post">
        @csrf
        
        <input type="hidden" name="id" value="{{$rep->id}}">
       <b>MUSIC NAME</b>
       <br>
       <input type="text" value="{{$rep->name}}" class="form-control">
       <br>
       <b>ARTIST NAME</b>
       <br>
       <input type="text" value="{{$rep->artistid}}" class="form-control">
       <br>
       <b>ALBUM NAME</b>
       <br>
       <input type="text" value="{{$rep->albumid}}" class="form-control">
       <br>
       <b>MUSIC TYPE</b>
       <br>
       <input type="text" value="{{$rep->music}}" class="form-control">
       <br>
       <b>GENRE TYPE</b>
       <br>
       <input type="text" value="{{$rep->genrename}}" class="form-control">
       <br>
        <b>MUSIC FILE</b>
       <br>
       <input type="text" value="{{$rep->file}}" class="form-control">
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
