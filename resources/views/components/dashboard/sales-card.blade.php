<div class="container mt-5">
    <div class="row">

        {{-- Monthly Sales --}}
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    {{ ucwords('this month sales') }}
                </div>
                <div class="card-body">
                    <p class="card-text fs-2 fw-bold">RM {{ $monthlyRevenue }}</p>
                </div>
            </div>
        </div>

        {{-- Yearly Sales --}}
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    {{ ucwords('this year sales') }}
                </div>
                <div class="card-body">
                    <p class="card-text fs-2 fw-bold">RM {{ $yearlyRevenue }}</p>
                </div>
            </div>
        </div>

        {{-- Total Sales --}}
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    {{ ucwords('total sales') }}
                </div>
                <div class="card-body">
                    <p class="card-text fs-2 fw-bold">RM {{ $totalRevenue }}</p>
                </div>
            </div>
        </div>
    </div>
</div>