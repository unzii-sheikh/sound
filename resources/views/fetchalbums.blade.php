@extends('layout')

@section('content')

    <!-- ===== Breadcrumb Area ===== -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="bradcumbContent text-center">
            <p>See what’s new</p>
            <h2> Albums</h2>
        </div>
    </div>

    <!-- ===== Albums Section ===== -->
    <section class="elements-area mt-30 section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">

                @forelse($getalb as $alb)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card shadow-lg border-0 album-card">
                            <div class="card-body text-center">
                                <h4 class="album-title">{{ $alb->name }}</h4>
                                <p class="album-year text-muted">{{ $alb->year }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">No albums available.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </section>

@endsection
