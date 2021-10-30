<div class="col-md-7">
    <div class="card border-0 shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold"><i class="fas fa-user-circle"></i> EDIT PROFILE</h6>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('user-profile-information.update') }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="text-uppercase">Nama</label>
                    <input type="text" class="form-control" name="name"
                        value="{{ old('name') ?? auth()->user()->name }}" required autofocus autocomplete="name" />
                </div>
                <div class="form-group">
                    <label class="text-uppercase">Email</label>
                    <input type="email" name="email" class="form-control"
                        value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
                </div>
                <div class="form-group">
                    <button class="btn btn-primary text-uppercase" type="submit">
                        Update Profile
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="card border-0 shadow mt-3 mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold"><i class="fas fa-unlock"></i> UPDATE PASSWORD</h6>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('user-password.update') }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="text-uppercase">Current Password</label>
                    <input type="password" class="form-control" name="current_password" required
                        autocomplete="current-password" />
                </div>
                <div class="form-group">
                    <label class="text-uppercase">Password</label>
                    <input type="password" name="password" required autocomplete="new-password" class="form-control" />
                </div>
                <div class="form-group">
                    <label class="text-uppercase">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" required
                        autocomplete="new-password" />
                </div>
                <div class="form-group">
                    <button class="btn btn-primary text-uppercase" type="submit">
                        Update Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>