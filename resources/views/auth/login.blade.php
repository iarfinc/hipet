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
            width: 170px;
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

        .btn:hover{
            background-color: lightseagreen;
        }

        .text-center a:hover {
            text-decoration: none;
        }

        .form-group a:hover {
          text-decoration: none;
        }

    </style>
</head>

<body>

    <div class="container">
        <div class="left-image">
            <img src="https://i.pinimg.com/736x/4d/35/92/4d3592fe5833258831d2477e4da34277.jpg" class="logo">
        </div>
        <div class="right-content">
            <div class="text-center">
                <img
                    src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/cea7fdf9-5285-4ee8-9b9c-0b332396d962/dgu20r0-1c6fe1ac-4ea7-4c92-8642-340021edd234.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2NlYTdmZGY5LTUyODUtNGVlOC05YjljLTBiMzMyMzk2ZDk2MlwvZGd1MjByMC0xYzZmZTFhYy00ZWE3LTRjOTItODY0Mi0zNDAwMjFlZGQyMzQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.oSEuanrqyfHYMFEqqER0v1F8sy2yQw7Z_FAtKj5OC9Q" alt="Your Image">
                <h1 class="h4 text-gray-900 mb-4">&nbsp;</h1>
            </div>
            <form action="{{ route('login.action') }}" method="POST" class="user">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="exampleInputEmail" class="email-text">Email</label>
                    <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail"
                        aria-describedby="emailHelp" placeholder="Masukan Alamat Email..">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword" class="password-text">Password</label>
                    <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword"
                        placeholder="Masukan Password..">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                        <a href="{{ route('lupa') }}" class="forgot-password">Lupa Password?</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-user" onclick="showSuccessModal()">Login</button>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ route('register') }}">Buat Akun Baru!</a>
            </div>
        </div>
    </div>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Login Berhasil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Selamat Datang! Login telah berhasil!
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
            // Call the showSuccessModal function if there is a success message in the session
            showSuccessModal();
        @endif
    });
</script>

</html>
