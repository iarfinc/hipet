@extends('layouts.appflat')

@section('title')
@endsection

@section('contents')
    <div class="back-button-tanya">
        <a href="http://127.0.0.1:8000/dashboard">
            <i class="fas fa-chevron-left"></i><span1>&nbsp;Live Chat</span1>
        </a>
        <div class="navigasiImg">
        <img src="https://i.pinimg.com/originals/d3/f9/13/d3f913b8dd27fac04b26c2c9a903610d.png" alt="Contact 3" class="navigasiImg">
        </div>
        <div class="navigasi1">
        <span1>Penyakit&nbsp;Kucing</span1>
        </div>
        <div class="navigasi1">
        <span2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;</span2>
        </div>
        <div class="navigasi2">
        <span1>&nbsp;&nbsp;Dr.&nbsp;Ulfah</span1>
        </div>
        <div class="navigasi2">
            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/cea7fdf9-5285-4ee8-9b9c-0b332396d962/dgu20r0-1c6fe1ac-4ea7-4c92-8642-340021edd234.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2NlYTdmZGY5LTUyODUtNGVlOC05YjljLTBiMzMyMzk2ZDk2MlwvZGd1MjByMC0xYzZmZTFhYy00ZWE3LTRjOTItODY0Mi0zNDAwMjFlZGQyMzQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.oSEuanrqyfHYMFEqqER0v1F8sy2yQw7Z_FAtKj5OC9Q" alt="Your Image">
        </div>
    </div>    
    <br>
    <div class="tanya-container">
    <div class="tanya-list">
        <div class="tanya-item" id="tanya1">
            <div class="tanya-details">
                <span>Scabies</span>
            </div>
        </div>
        <div class="tanya-item" id="tanya2">
            <div class="tanya-details">
                <span>Feline infectious peritonitis (FIP)</span>
            </div>
        </div>
        <div class="tanya-item" id="tanya3">
            <div class="tanya-details">
                <span>Diare</span>
            </div>
        </div>
        <div class="tanya-item" id="tanya4">
            <div class="tanya-details">
                <span>Feline calicivirus (FCV)</span>
            </div>
        </div>
        <div class="tanya-item" id="tanya5">
            <div class="tanya-details">
                <span>Kutu kucing</span>
            </div>
        </div>
        <div class="tanya-item" id="tanya6">
            <div class="tanya-details">
                <span>Feline panleukopenia virus (FPV)</span>
            </div>
        </div>
        <div class="tanya-item" id="tanya7">
            <div class="tanya-details">
                <span>Cacingan</span>
            </div>
        </div>
        <div class="tanya-item" id="tanya8">
            <div class="tanya-details">
                <span>Konjungtivitis atau infeksi mata</span>
            </div>
        </div>
    </div>

    <div class="chat-tanya-container">
        <div class="tanya-header">
            <span>&nbsp;&nbsp;&nbsp;Pilih Kasus &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="https://cdn-icons-png.flaticon.com/512/5547/5547439.png" alt="tanya Image" class="tanya-header-image">
        </div>

        <div class="tanya-messages" id="chatMessages">
        </div>

        <div class="tanya-input">
            <textarea id="messageInput" placeholder="Ketuk untuk mengetik.."></textarea>
            <button id="sendButton" onclick="sendMessage()"><i class="fas fa-arrow-right"></i></button>
        </div>
    </div>
</div>

    <script>
        function sendMessage() {
    const messageInput = document.getElementById('messageInput').value;
    if (messageInput.trim() !== '') {
        const chatMessages = document.getElementById('chatMessages');
        const sentMessage = document.createElement('div');
        sentMessage.className = 'sent-message';
        sentMessage.textContent = messageInput;
        chatMessages.appendChild(sentMessage);
        document.getElementById('messageInput').value = '';
        sentMessage.style.display = 'block';
        }   
    }

    document.querySelector('.tanya-list').addEventListener('click', function (event) {
        var tanyaItem = event.target.closest('.tanya-item');

        if (tanyaItem) {
         var name = tanyaItem.querySelector('.tanya-details span').innerText;
            var imageSrc = tanyaItem.getAttribute('data-image');

            updateChatHeader(name, imageSrc);
        }
    });

    function updateChatHeader(name, imageSrc) {
    var tanyaHeaderImage = document.querySelector('.tanya-header-image');
    var tanyaHeaderText = document.querySelector('.tanya-header span');

    if (imageSrc) {
        tanyaHeaderImage.src = imageSrc;
        tanyaHeaderText.innerText = name;
    }
    }
    document.getElementById('tanya1').addEventListener('click', function (event) {
        event.preventDefault();
        updateChatHeader('Scabies', 'https://image.popbela.com/content-images/post/20231030/sf-freelance-shutterstock-0d322ffcc0f0a15691a5b5f144ebcc5a.jpeg?width=1600&format=webp&w=1600');
    });
    document.getElementById('tanya2').addEventListener('click', function (event) {
        event.preventDefault();
        updateChatHeader('Feline infectious peritonitis (FIP)', 'https://images.ctfassets.net/u4vv676b8z52/5wlrSyQb7yKcVBrN7MAbLq/cdb13093d01ddb35407e89265a7d36ba/fip-cats-678x446.gif?fm=jpg&q=80');
    });
    document.getElementById('tanya3').addEventListener('click', function (event) {
        event.preventDefault();
        updateChatHeader('Diare', 'https://blog.sukapets.com/wp-content/uploads/2021/06/kucing-muntah-kuning.jpg');
    });
    document.getElementById('tanya4').addEventListener('click', function (event) {
        event.preventDefault();
        updateChatHeader('Feline calicivirus (FCV)', 'https://aerapyanimalhealth.com/wp-content/uploads/2020/06/Eye-discharge-feline-calicivirus.jpg');
    });
    document.getElementById('tanya5').addEventListener('click', function (event) {
        event.preventDefault();
        updateChatHeader('Kutu kucing', 'https://o-cdn-cas.sirclocdn.com/parenting/images/0001_shutterstock_1410873128.width-800.format-webp.webp');
    });
    document.getElementById('tanya6').addEventListener('click', function (event) {
        event.preventDefault();
        updateChatHeader('Feline panleukopenia virus (FPV)', 'https://www.abcdcatsvets.org/wp-content/uploads/2022/09/01-04-FPL-dehydrated-cat-%C2%A9Diane-Addie-1024x834-1.jpg');
    });
    document.getElementById('tanya7').addEventListener('click', function (event) {
        event.preventDefault();
        updateChatHeader('Cacingan', 'https://qph.cf2.quoracdn.net/main-qimg-f749281be3127d6d5d1296e683fd1747-lq');
    });
    document.getElementById('tanya8').addEventListener('click', function (event) {
        event.preventDefault();
        updateChatHeader('Konjungtivitis atau infeksi mata', 'https://www.faunafella.com/wp-content/uploads/2022/09/Obat-Sakit-Mata-Kucing-Tradisional-dan-Cara-Mengatasinya-800x500_c.jpg');
    });
    </script>


@endsection