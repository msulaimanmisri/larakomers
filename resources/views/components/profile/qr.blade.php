@if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::twoFactorAuthentication()))

<div class="col-md-5 mb-5">
    <div class="card border-0 shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold"><i class="fas fa-key"></i> TWO-FACTOR AUTHENTICATION</h6>
        </div>

        <div class="card-body">

            @if(! auth()->user()->two_factor_secret)
            {{-- Enable 2FA --}}
            <form method="POST" action="{{ url('user/two-factor-authentication') }}">
                @csrf

                <button type="submit" class="btn btn-primary text-uppercase">
                    Enable Two-Factor
                </button>
            </form>
            @else
            {{-- Disable 2FA --}}
            <form method="POST" action="{{ url('user/two-factor-authentication') }}">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger mb-3 text-uppercase">
                    Disable Two-Factor
                </button>
            </form>

            @if(session('status') == 'two-factor-authentication-enabled')
            {{-- Show SVG QR Code, After Enabling 2FA --}}
            <p>
                Otentikasi dua faktor sekarang diaktifkan. Pindai kode QR berikut menggunakan aplikasi
                pengautentikasi ponsel Anda.
            </p>

            <div class="mb-3">
                {!! auth()->user()->twoFactorQrCodeSvg() !!}
            </div>
            @endif

            {{-- Show 2FA Recovery Codes --}}
            <p>
                Simpan recovery code ini dengan aman. Ini dapat digunakan untuk memulihkan akses ke akun Anda jika
                perangkat otentikasi dua faktor Anda hilang.
            </p>

            <div style="background: rgb(44, 44, 44);color:white" class="rounded p-3 mb-2">
                @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
                <div>{{ $code }}</div>
                @endforeach
            </div>

            {{-- Regenerate 2FA Recovery Codes --}}
            <form method="POST" action="{{ url('user/two-factor-recovery-codes') }}">
                @csrf

                <button type="submit" class="btn btn-dark text-uppercase">
                    Regenerate Recovery Codes
                </button>
            </form>
            @endif

        </div>
    </div>
</div>

@endif