@extends('layouts.appflat')

@section('title')

@section('contents')
    <div class="back-button">
        <a href="http://127.0.0.1:8000/dashboard">
            <i class="fas fa-chevron-left"></i><span1>&nbsp;Kesehatan Hewan</span1>
        </a>
            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/cea7fdf9-5285-4ee8-9b9c-0b332396d962/dgu20r0-1c6fe1ac-4ea7-4c92-8642-340021edd234.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2NlYTdmZGY5LTUyODUtNGVlOC05YjljLTBiMzMyMzk2ZDk2MlwvZGd1MjByMC0xYzZmZTFhYy00ZWE3LTRjOTItODY0Mi0zNDAwMjFlZGQyMzQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.oSEuanrqyfHYMFEqqER0v1F8sy2yQw7Z_FAtKj5OC9Q" alt="Your Image">
    </div>
        <div class="text-container-kesehatan">
            <span class="kesehatan-text">
                Berikut adalah rekomendasi lokasi tempat kesehatan hewan atau pet-shop terdekat di sekitar kamu.
            </span>
        </div>
        <buttonKesehatan class="learn-more">
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text">Lihat Tempat Lainnya</span>
        </buttonKesehatan>
    <div class="lokasi">
        <br>
    <table>
    <tr>
      <td>
        <img src="https://lh3.googleusercontent.com/p/AF1QipNTTQgUdjMDZDl4YSN-mH8TtT2rpPuLWUhU3Iva=w768-h768-n-o-v1" alt="Image 1">
        <a href="https://m.facebook.com/p/TORO-VET-Clinic-100069857104783/">
        <div class="description">Toro Vet Clinic</div>
        <div class="location">Tangerang</div>
        <div class="kontak">(021) 5964 2046</div>
        </a>
      </td>
      <td>
        <img src="https://photos.wikimapia.org/p/00/03/92/61/79_big.jpg" alt="Image 2">
        <a href="http://klinikhewanjogja.com/">
        <div class="description">Lab. Klinik Hewan</div>
        <div class="location">Yogyakarta</div>
        <div class="kontak">(027) 4446 3259</div>
        </a>
      </td>
      <td>
        <img src="https://o-cdn-cas.sirclocdn.com/parenting/images/284932929_984157838957355_2379464.width-800.format-webp.webp" alt="Image 3">
        <a href="https://www.instagram.com/bvetpetclinic/">
        <div class="description">B-Vet Clinic</div>
        <div class="location">Tangerang</div>
        <div class="kontak">(085) 8910 55473</div>
        </a>
      </td>
    </tr>
    </table>
    </div>
    <br>
@endsection
