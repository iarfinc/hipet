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

        .btn:hover{
            background-color: lightseagreen;
        }

        .form-group label {
            margin-bottom: -5px;
        }

        .form-group input {
            margin-bottom: -10px;
        }

        h5 {
          margin-right: 95px;
          margin-bottom: 25px
        }

        .text-center {
          margin-bottom: 5px;
        }

        .back-arrow {
          color: black;
        }

        p {
            font-size: 15px;
            margin-bottom: 40px;
        }

        .text-center a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="left-image">
            <img src="https://i.pinimg.com/736x/23/41/8d/23418d2bc408b16bbf96b450a9929fcf.jpg" class="logo">
        </div>
        <div class="right-content">
            <div class="text-center">
                <h5>
                <a href="{{ route('login') }}" class="back-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
                        </svg>
                    </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lupa Password</h5>
                <p>Masukkan Email yang terdaftar pada akun anda, kami akan mengirimkan link verifikasi untuk mereset password</p>
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
                    <br>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-user">Kirim Link Verifikasi</button>
            </form>
            <hr>
            <div class="text-center">
                <p class="small">Tunggu beberapa menit untuk meminta link baru apabila bermasalah!</p>
            </div>
        </div>
    </div>

</body>

</html>
