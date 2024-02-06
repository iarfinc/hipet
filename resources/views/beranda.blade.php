<style>
    .bottom-right-image {
      position: fixed;
      bottom: 10px; /* Adjust the distance from the bottom */
      right: 10px; /* Adjust the distance from the right */
      width: 200px; /* Adjust the width of the image */
      height: 200px; /* Adjust the height of the image */
      cursor: pointer;
    }
  </style>
    <img class="bottom-right-image" src="https://www.pngall.com/wp-content/uploads/5/British-Shorthair-Cat.png" alt="Bottom Right Image">
@extends('layouts.beranda')
@section('title', 'Solusi Utama Bagi Kamu Yang Bingung Tentang Penyakit Hewan!')
@section('contents')
  <div class="row">
  Disini kami melayani hewan peliharaan anda untuk membantu hewan anda kembali sehat seperti sebelumnya. 
  Dengan bantuan dari dokter spesialis hewan, kamu bisa dibantu dalam menangani penyakit hewanmu secara real-time dengan dokter langsung melewati fitur Live Chat. 
  </div>
  <div class="button-container">
  <a href="http://127.0.0.1:8000/register">
  <button>Daftar</button>
  </a>
  <a href="http://127.0.0.1:8000/login">
  <button>Masuk</button>
  </a>
@endsection