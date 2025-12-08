@extends('admin.layout')

@section('content')

<style>
.album-container {
    padding-top: 30px; 
    display: flex;
    justify-content: center;
    align-items: flex-start;
}

.album-card {
    width: 60%;
    background: linear-gradient(145deg, #3a3a3a, #2c2c2c);
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0,0,0,0.35);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.album-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.45);
}

.album-header {
    background: #e63946;
    padding: 18px 25px;
    color: white;
    font-size: 1.5rem;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
}

.album-body {
    padding: 35px 45px;
}

.form-control {
    background: #4a4a4a;
    border: 1px solid #666;
    color: white;
    border-radius: 10px;
    padding: 12px;
    font-size: 1rem;
}

.form-control:focus {
    background: #515151;
    border-color: #e63946;
    box-shadow: 0 0 0 3px rgba(230, 57, 70, 0.35);
    color: white;
}

::placeholder {
    color: #cccccc;
    opacity: 1;
}

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

<div class="album-container">
    <div class="album-card">
        <div class="album-header">
            Add New Album
        </div>
        <div class="album-body">
            <form action="/albumadding" method="post">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label"><strong>Album Name</strong></label>
                    <input type="text" id="name" name="name" placeholder="Enter Album Name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label"><strong>Album Releasing Year</strong></label>
                    <input type="number" id="year" name="year" placeholder="YYYY" class="form-control" min="1900" max="2099" required>
                </div>

                <button type="submit" class="btn-submit" onclick="alert()">Add Album</button>
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
