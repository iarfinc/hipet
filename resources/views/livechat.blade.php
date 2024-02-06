@extends('layouts.appflat')

@section('title')
@endsection

@section('contents')
    <div class="back-button">
        <a href="http://127.0.0.1:8000/dashboard">
            <i class="fas fa-chevron-left"></i><span1>&nbsp;Live Chat</span1>
        </a>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/cea7fdf9-5285-4ee8-9b9c-0b332396d962/dgu20r0-1c6fe1ac-4ea7-4c92-8642-340021edd234.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2NlYTdmZGY5LTUyODUtNGVlOC05YjljLTBiMzMyMzk2ZDk2MlwvZGd1MjByMC0xYzZmZTFhYy00ZWE3LTRjOTItODY0Mi0zNDAwMjFlZGQyMzQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.oSEuanrqyfHYMFEqqER0v1F8sy2yQw7Z_FAtKj5OC9Q" alt="Your Image">
    </div>
    <br>

    <div class="main-container">
    <div class="contact-list">
        <div class="contact-item" id="contact1">
            <img src="https://i.pinimg.com/originals/e3/7e/14/e37e14e207070d62cfc4d0b050f3ad91.png" alt="Contact 1" class="contact-image">
            <div class="contact-details">
                <span>Dr. Faraziq</span>
            </div>
        </div>
        <div class="contact-item" id="contact2">
            <img src="https://i.pinimg.com/originals/d3/f9/13/d3f913b8dd27fac04b26c2c9a903610d.png" alt="Contact 2" class="contact-image">
            <div class="contact-details">
                <span>Dr. Amelina</span>
            </div>
        </div>
        <div class="contact-item" id="contact3">
            <img src="https://i.pinimg.com/originals/d3/f9/13/d3f913b8dd27fac04b26c2c9a903610d.png" alt="Contact 3" class="contact-image">
            <div class="contact-details">
                <span>Dr. Ulfah</span>
            </div>
        </div>
    </div>

    <div class="chat-container">
        <div class="chat-header">
            <div class="contact-header">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Wolf%E2%80%93Lundmark%E2%80%93Melotte_%28transparent_background%29.png/1200px-Wolf%E2%80%93Lundmark%E2%80%93Melotte_%28transparent_background%29.png" alt="Contact Image" class="contact-header-image">
                <span>Pilih Dokter &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;------------------<span>
            </div>
        </div>

        <div class="chat-messages" id="chatMessages">
        </div>

        <div class="chat-input">
            <textarea id="messageInput" placeholder="Ketuk untuk mengetik.."></textarea>
            <button id="sendButton" onclick="sendMessage()"><i class="fas fa-arrow-right"></i></button>
        </div>
    </div>
</div>
<br>

@endsection