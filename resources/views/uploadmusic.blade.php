@extends('admin.layout')

@section('content')
<div class="container py-5" style="min-height: 100vh; background-color: #0b0b0b;"> <!-- Dark background for page -->
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card text-light shadow-lg border-0 rounded-4" style="padding: 50px; background-color: #2f2f2f;"> <!-- Charcoal card -->

                <!-- Card Header with Red Background -->
                <div class="card-header text-center rounded-3 mb-5" style="background-color: #dc3545;"> <!-- Bootstrap red -->
                    <h2 class="mb-0 fw-bold text-white">MUSIC UPLOADING</h2>
                </div>

                <!-- Form -->
                <div class="card-body">
                    <form action="/musicupload" method="post" enctype="multipart/form-data">
                        @csrf

                        <!-- Music Name -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Music Name</label>
                            <input type="text" name="name" placeholder="Enter your Music Name" 
                                class="form-control bg-white text-dark border-secondary rounded-3 px-3 py-2" 
                                style="transition: all 0.3s;">
                        </div>

                        <!-- Artist Name -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Artist Name</label>
                            <select name="artistlist" 
                                class="form-control bg-white text-dark border-secondary rounded-3 px-3 py-2" 
                                style="transition: all 0.3s;">
                                <option value="">Select Artist</option>
                                @foreach($artist as $art)
                                    <option value="{{$art->id}}">{{$art->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Album Name -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Album Name</label>
                            <select name="albumlist" 
                                class="form-control bg-white text-dark border-secondary rounded-3 px-3 py-2" 
                                style="transition: all 0.3s;">
                                <option value="">Select Album</option>
                                @foreach($album as $alb)
                                    <option value="{{$alb->id}}">{{$alb->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Music Type -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Music Type</label>
                            <select name="musictype" 
                                class="form-control bg-white text-dark border-secondary rounded-3 px-3 py-2" 
                                style="transition: all 0.3s;">
                                <option value="Audio">Audio</option>
                                <option value="Video">Video</option>
                            </select>
                        </div>

                        <!-- File Upload -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Upload Music File</label>
                            <input type="file" name="file" 
                                class="form-control bg-white text-dark border-secondary rounded-3 px-3 py-2" 
                                style="transition: all 0.3s;">
                        </div>

                        <!-- Thumbnail Upload -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Upload Thumbnail</label>
                            <input type="file" name="thumbnail" 
                                class="form-control bg-white text-dark border-secondary rounded-3 px-3 py-2" 
                                style="transition: all 0.3s;">
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center mt-5">
                            <button type="submit" 
                                class="btn btn-danger btn-lg w-50 rounded-pill shadow-sm" 
                                style="transition: all 0.3s;" onclick="alert()">Upload Music</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional: Hover/focus effect -->
<style>
    input.form-control:focus, select.form-control:focus {
        border-color: #dc3545; /* red highlight */
        box-shadow: 0 0 10px rgba(220, 53, 69, 0.5);
        outline: none;
    }

    button.btn-danger:hover {
        background-color: #c82333;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="animation.js"></script>
<script>
    function alert(){
    Swal.fire({
  title: "Successfully added music!",
  icon: "primary",
  iconColor :' #a51e1eff',
  confirmButtonColor :' #bd1919ff',
});
  }
</script>

@endsection
