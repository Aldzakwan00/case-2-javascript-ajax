// Variabel
var cardUsername = document.getElementById('cardUsername');
var cardContainer = document.getElementById('cardContainer');
var usernameInput = document.getElementById('username');
var pesanInput = document.getElementById('isi-chat');
var submitButton = document.getElementById('buttonSubmit');
var sendButton = document.getElementById('send');
var gantiUsername = document.getElementById('ganti-username');
var usernameSet = false;

// kode program Javascript yang mengimplementasikan fitur show/hide jendela chat
document.getElementById('pesanButton').addEventListener('click', (e) => {
    if (!usernameSet) {
        cardUsername.classList.toggle('hidden');
    } else {
        cardContainer.classList.toggle('hidden');
    }
});

//Ganti Username
gantiUsername.addEventListener('click', (e) => {
    cardContainer.classList.add('hidden');
    cardUsername.classList.remove('hidden');
    usernameSet = false;
});

//kode program Javascript yang mengimplementasikan fitur request data chat menggunakan AJAX.
function tampilkanPesan() {
    fetch('chat-server.php')
        .then(response => {
            return response.json();
        })
        .then(data => {
            let pesanTampilan = ''; 

            data.forEach(pesan => {
                // kode program Javascript yang mengimplementasikan fitur pengiriman data chat (username dan pesan) menggunakan AJAX.
                if (pesan.username === usernameInput.value) {
                    pesanTampilan += `<div class="chat-pengguna p-2">
                                            <div class='pesan-baris'>
                                                <strong>You</strong><br>
                                                ${pesan.pesan} <br>
                                                <div class='hour mt-2'>${pesan.tanggal}</div>
                                            </div>
                                        </div>`;
                } else {
                    pesanTampilan += `<div class="chat-other p-2">
                                            <div class='pesan-baris'>
                                                <strong>${pesan.username}</strong><br>
                                                ${pesan.pesan} <br>
                                                <div class='hour mt-2'>${pesan.tanggal}</div>
                                            </div>
                                        </div>`; 
                }
            });

            document.getElementById('chat-box').innerHTML = pesanTampilan;
        });

    setTimeout(tampilkanPesan, 2000); 
}

submitButton.addEventListener('click', (e) => {
    var user = usernameInput.value;
    if (user) {
        cardUsername.classList.add('hidden');
        cardContainer.classList.remove('hidden');
        usernameSet = true;
    } else {
        alert('Masukkan username terlebih dahulu.');
    }
});


// Kode program Javascript yang mengimplementasikan fitur pengiriman data chat (username dan pesan) menggunakan AJAX.
sendButton.addEventListener('click', (e) => {
    var user = usernameInput.value;
    var pesan = pesanInput.value;
    if (pesan !== '') {
        fetch('chat-server.php', {
            method: 'post',
            headers: {
                "Content-Type": 'application/x-www-form-urlencoded'
            },
            body: `user=${user}&pesan=${pesan}`
        });

        pesanInput.value = '';
    }
});




tampilkanPesan();
