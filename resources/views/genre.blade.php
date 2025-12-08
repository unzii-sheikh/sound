@extends('admin.layout')

@section('content')
<div class="container py-5" style="background-color: #2c2f33; min-height: 100vh;">
    <!-- Page Heading -->
    <h1 class="text-center mb-4 text-white">Add Genre Category</h1>
    <hr class="border-light mb-5">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Form Card -->
            <div class="card bg-secondary shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-4 text-white text-center">Add Genre</h3>

                    <!-- Alert placeholder -->
                    <div id="alertPlaceholder"></div>

                    <form id="genreForm" action="{{ url('/addgenre') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="genreName" class="form-label text-light"><strong>Genre Name</strong></label>
                            <input type="text" name="name" id="genreName" placeholder="Enter genre name" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" onclick="alert()">Add Genre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Spacer to make page longer -->
    <div class="my-5"></div>
</div>

<!-- JavaScript to show alert -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="animation.js"></script>
<script>
    function alert(){
    Swal.fire({
  title: "Successfully added genre!",
  icon: "primary",
  iconColor :' #a51e1eff',
  confirmButtonColor :' #bd1919ff',
});
  }


</script>



@endsection
