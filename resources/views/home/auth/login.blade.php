<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="/img/user.svg" width="100%" alt="">
        </div>

        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="text-center">
                        <h4>LOGIN</h4>
                    </div>
                    <p class="text-center">Msukan akses akun anda </p>

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger"> {{ session('loginError') }}</div>
                    @endif
                    <form action="/login/do" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="form-group mt-3">
                            <label for="">PASSWORD</label>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>

                        <button class="btn btn-success mt-4">Login </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
