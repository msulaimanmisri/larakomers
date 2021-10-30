@if (session('status'))
<div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>

        @if (session('status')=='profile-information-updated')
        Profile has been updated.

        @elseif (session('status')=='password-updated')
        Password has been updated.

        @elseif (session('status')=='two-factor-authentication-disabled')
        Two factor authentication disabled.

        @elseif (session('status')=='two-factor-authentication-enabled')
        Two factor authentication enabled.

        @elseif (session('status')=='recovery-codes-generated')
        Recovery codes generated.

        @endif
    </div>
</div>
@endif