@extends('layouts.appflat')

@section('title')
@endsection

@section('contents')
    <div class="back-button">
        <a href="http://127.0.0.1:8000/dashboard">
            <i class="fas fa-chevron-left"></i><span1>&nbsp;Dokter Kami</span1>
        </a>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/cea7fdf9-5285-4ee8-9b9c-0b332396d962/dgu20r0-1c6fe1ac-4ea7-4c92-8642-340021edd234.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2NlYTdmZGY5LTUyODUtNGVlOC05YjljLTBiMzMyMzk2ZDk2MlwvZGd1MjByMC0xYzZmZTFhYy00ZWE3LTRjOTItODY0Mi0zNDAwMjFlZGQyMzQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.oSEuanrqyfHYMFEqqER0v1F8sy2yQw7Z_FAtKj5OC9Q" alt="Your Image">
    </div>
    <div class="content-wrapper">
        <div class="text-container">
            <span class="dokter-text">
                Disini kami melayani hewan peliharaan anda untuk membantu hewan anda kembali sehat seperti sebelumnya. 
                Dengan bantuan dari dokter spesialis hewan, kamu bisa dibantu dalam menangani penyakit hewanmu secara real-time dengan dokter langsung melewati fitur Live Chat.
            </span>
            <br>
            <span>
                Penasaran Dengan Dokter Kami?
            </span>
        <br>
        <br>
        <buttonDokter>
        <span>Lihat Dokter Spesialis</span>
            <svg width="15px" height="10px" viewBox="0 0 13 10">
                <path d="M1,5 L11,5"></path>
            <polyline points="8 1 12 5 8 9"></polyline>
            </svg>
        </buttonDokter>
        </div>

        <img src="https://lh5.googleusercontent.com/HWkodXDVG7ovhJxok4IDIFO9NY9yzVVQJStIuwSC5b-atDDNiT3FtUBqzPB6gkHDLwYlLrTNm4FPLvcEaPkpZVmsh2sTEpR4nEWRY2jOO-91A81JrarUOID0XcAcE48hMxCtjw4lihsT-osujxfbEYQ" alt="Image Description" class="right-image">
    </div>
    <br>
@endsection
