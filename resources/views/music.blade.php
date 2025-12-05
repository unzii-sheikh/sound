@extends('layout')
@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
        <p>See Latest new</p>
        <h2>VIDEOS</h2>
    </div>
</section>
<div class="container mt-5">
    <div class="row">
        @foreach($getmusic as $vid)
        @if($vid->musictype == 'Video')
        <div class="col-md-4">
            <!-- Video Card -->
            <div class="card shadow-sm" style="border-radius:10px; overflow:hidden; cursor:pointer;">
                <!-- Thumbnail -->
                <img src="uploads/{{ $vid->thumbnail}}" 
                     class="card-img-top" 
                     alt="{{ $vid->musicname }}"
                     data-bs-toggle="modal" 
                     data-bs-target="#videoModal{{$vid->id}}"
                     style="height:220px; object-fit:cover;">

                <!-- Card Body -->
                <div class="card-body">
                    <h4 class="card-title">{{ $vid->musicname }}</h4>
                    <p class="mb-1"><strong>Artist:</strong> {{ $vid->artistname }}</p>
                    <hr>
                    <p class="mb-1"><strong>Album:</strong> {{ $vid->albumname }}</p>
                    <hr>
                    <p class="mb-0"><strong>Genre:</strong> {{ $vid->genrename }}</p>
                    <hr>
                </div>
            </div>
        </div>

        <!-- Video Modal -->
        <div class="modal fade" id="videoModal{{$vid->id}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $vid->musicname }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="pauseVideo('video{{$vid->id}}')"></button>
                    </div>
                    <div class="modal-body p-0">
                        <video id="video{{$vid->id}}" controls style="width:100%; height:400px; object-fit:cover;">
                            <source src="uploads/{{$vid->musicfile }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
<br>
<br>
<!-- JS to handle video play/pause -->
<script>
function pauseVideo(videoId) {
    let vid = document.getElementById(videoId);
    if(vid) vid.pause();
}

// Auto-play video when modal opens
document.querySelectorAll('.modal').forEach(modal => {
    modal.addEventListener('shown.bs.modal', () => {
        let video = modal.querySelector('video');
        if(video) video.play();
    });
});
</script>

@endsection
