<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
        }

        .container {
            display: flex;
            height: 100vh;
            align-items: center;
            overflow: hidden;
        }

        .left-image {
            flex: 1;
            width: 10%;
        }

        .left-image img {
            width: 100%; /* Ensure the image takes up 100% of the container */
            height: auto; /* Maintain aspect ratio */
        }

        .right-content {
            flex: 1;
            padding: 30px;
        }

        .h4 {
            font-size: 1.3rem;
        }

        .logo {
            width: 60px; /* Adjust the logo size as needed */
        }

        .form-control-user {
            font-size: 12px;
            padding: 8px;
        }

        .btn-user {
            font-size: 12px;
            padding: 8px;
        }

        .custom-control-label::before {
            border: 1px solid #007bff;
        }

        .forgot-password {
            font-size: 12px;
            margin-top: 10px;
            text-align: right;
        }

        .text-center img {
            width: 120px;
            margin-top: 10px
        }

        .form-group label {
            font-size: 12px;
            margin-bottom: 5px;
            text-align: left;
        }

        .email-text,
        .password-text {
            font-size: 12px;
            text-align: left;
        }

        .form-group {
            text-align: left;
        }

        .custom-control.custom-checkbox.small {
            display: flex;
            justify-content: space-between;
        }

        .btn {
          background-color: #6BF0E6;
          border: none;
        }

        .form-group label {
            margin-bottom: -5px;
        }

        .form-group input {
            margin-bottom: -10px;
        }

        h5 {
          margin-top: 10px;
          margin-right: 95px;
        }

        .text-center {
          margin-bottom: 5px;
        }

        .back-arrow {
          color: black;
        }

        .btn:hover{
            background-color: lightseagreen;
        }

        .text-center a:hover {
            text-decoration: none;
        }
        
    </style>

</head>

<body>

    <div class="container">
        <div class="left-image">
            <img src="https://i.pinimg.com/736x/43/1e/42/431e42fda2f5a3cabd2972cf4f5acfb8.jpg" class="logo">
        </div>
        <div class="right-content">
            <div class="text-center">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/cea7fdf9-5285-4ee8-9b9c-0b332396d962/dgu20r0-1c6fe1ac-4ea7-4c92-8642-340021edd234.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2NlYTdmZGY5LTUyODUtNGVlOC05YjljLTBiMzMyMzk2ZDk2MlwvZGd1MjByMC0xYzZmZTFhYy00ZWE3LTRjOTItODY0Mi0zNDAwMjFlZGQyMzQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.oSEuanrqyfHYMFEqqER0v1F8sy2yQw7Z_FAtKj5OC9Q" alt="Your Image">
                <h5>
                <a href="{{ route('login') }}" class="back-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
                        </svg>
                    </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pendaftaran</h5>
            </div>
            <form action="{{ route('register.save') }}" method="POST" class="user">
                @csrf
                <div class="form-group">
                  <label for="exampleInputName" class="mb-2">Nama</label>
                  <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror" id="exampleInputName" placeholder="Nama">
                  @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail" class="mb-2">Email</label>
                  <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail" placeholder="Email Address">
                  @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputAddress" class="mb-2">Alamat/Lokasi</label>
                    <input name="address" type="text" class="form-control form-control-user @error('address') is-invalid @enderror" id="exampleInputAddress" placeholder="Masukan Alamat..">
                    @error('address')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputPassword" class="mb-2">Password</label>
                    <input name="password" type="password" class="form-control form-control-user @error('password')is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                    @error('password')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <label for="exampleRepeatPassword" class="mb-2">Ulangi Password</label>
                    <input name="password_confirmation" type="password" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Ulangi Password">
                    @error('password_confirmation')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block" id="registerButton" onclick="showSuccessModal()">Daftar</button>
              </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ route('login') }}">Sudah Punya Akun? Login!</a>
            </div>
        </div>
    </div>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Registrasi Berhasil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Selamat! Registrasi Anda berhasil.
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
  </body>
  <script>
    function showSuccessModal() {
        $('#successModal').modal('show');
    }

    $(document).ready(function () {
        @if(Session::has('success'))
            showSuccessModal();
        @endif
    });
  </script>
</html>
