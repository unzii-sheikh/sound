@extends('admin.layout')

@section('content')

<style>

    /* Remove top spacing, center the form */
    .artist-container {
        padding-top: 20px; 
        padding-left: 0; 
        display: flex;
        justify-content: center;
        align-items: flex-start;
        color: #f1f1f1;
    }
    btn-submit {
    background: #e0072f;
    border: none;
    padding: 14px;
    font-size: 1.1rem;
    font-weight: 600;
    width: 100%;
    border-radius: 12px;
    transition: 0.25s ease;
    color: white;
}

.btn-submit:hover {
    background: #ff1a47; /* slightly brighter hover tone */
    transform: scale(1.02);
}

    /* Bigger card */
    .artist-card {
        width: 60%; 
        margin-top: 10px;                         /* wider for your page */
        background: linear-gradient(145deg, #3a3a3a, #2c2c2c);
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,0.35);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .artist-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.45);
    }

    /* Card header in RED */
    .artist-header {
        background: #e63946; /* red */
        padding: 18px 25px;
        color: white;
        font-size: 1.5rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-align: center;
    }
    /* Input and select text color */
.form-control, .form-select {
    background: #4a4a4a;
    border: 1px solid #666;
    color: white;             /* text typed by user will be white */
    border-radius: 10px;
    padding: 12px;
    font-size: 1rem;
}

/* Text color when focused */
.form-control:focus, .form-select:focus {
    background: #515151;
    border-color: #e63946;
    box-shadow: 0 0 0 3px rgba(230, 57, 70, 0.35);
    color: white;             /* ensure text stays white on focus */
}

/* Placeholder color */
::placeholder {
    color: #cccccc;           /* light grey placeholder text */
    opacity: 1;               /* make sure placeholder is visible */
}


    /* Body spacing */
    .artist-body {
        padding: 35px 45px;
    }

    label {
        font-weight: 600;
        margin-bottom: 6px;
    }

    .form-control, .form-select {
        background: #4a4a4a;
        border: 1px solid #666;
        color: white;
        border-radius: 10px;
        padding: 12px;
        font-size: 1rem;
    }

    .form-control:focus, .form-select:focus {
        background: #515151;
        border-color: #e63946;
        box-shadow: 0 0 0 3px rgba(230, 57, 70, 0.35);
    }

    /* Red submit button */
    .btn-submit {
        background: #e63946;
        border: none;
        padding: 14px;
        font-size: 1.1rem;
        font-weight: 600;
        width: 100%;
        border-radius: 12px;
        transition: 0.25s ease;
        color: white;
    }

    .btn-submit:hover {
        background: #ff4d5a;
        transform: scale(1.02);
    }

</style>


<div class="artist-container">

    <div class="artist-card">

        <div class="artist-header">
            Add New Artist
        </div>

        <div class="artist-body">

            <form action="/addingartist" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name">Artist Name</label>
                    <input type="text" id="name" name="name"
                        placeholder="Enter Artist Name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="genrelist">Genre</label>
                    <select name="genrelist" id="genrelist" class="form-select">
                        <option value="">Select Genre Category</option>
                        @foreach ($compounds as $gen)
                        <option value="{{ $gen->id }}">{{ $gen->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="artistphoto">Artist Photo</label>
                    <input type="file" id="artistphoto" name="artistphoto" class="form-control">
                </div>

                <button type="submit" class="btn-submit" onclick="alert()">
                    Add Artist
                </button>

            </form>

        </div>

    </div>

</div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="animation.js"></script>
<script>
    function alert(){
    Swal.fire({
  title: "Successfully added Artist!",
  icon: "primary",
  iconColor :' #a51e1eff',
  confirmButtonColor :' #bd1919ff',
});
  }


</script>

@endsection
