<div class="container mt-5">
    <div class="row">

        {{-- Pending --}}
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    {{ ucwords('pending') }} <i class="bi bi-arrow-clockwise text-primary"></i>
                </div>
                <div class="card-body">
                    <p class="card-text fs-2 fw-bold">
                        {{ $pending }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Success --}}
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    {{ ucwords('success') }} <i class="bi bi-check2-circle text-success"></i>
                </div>
                <div class="card-body">
                    <p class="card-text fs-2 fw-bold">
                        {{ $success }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Expired --}}
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    {{ ucwords('expired') }} <i class="bi bi-exclamation-triangle text-warning"></i>
                </div>
                <div class="card-body">
                    <p class="card-text fs-2 fw-bold">
                        {{ $expired }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Failed --}}
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    {{ ucwords('failed') }} <i class="bi bi-x-circle text-danger"></i>
                </div>
                <div class="card-body">
                    <p class="card-text fs-2 fw-bold">
                        {{ $failed }}
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>