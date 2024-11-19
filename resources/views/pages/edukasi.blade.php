<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edukasi Style Bonsai</title>
    <link rel="stylesheet" href="{{ asset('css/edukasi.css') }}">
</head>
<body>

<header>
    <div class="header-container">
        <div class="logo-container">
            <img src="images/logo.jpg" alt="Logo" class="logo">
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('sistem-penilaian') }}">Sistem Penilaian</a></li>
                <li><a href="{{ route('edukasi') }}">Edukasi</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav>
    </div>
</header>

<section>
    <h2>Macam-Macam Style Bonsai</h2>
    <div class="styles">
        <!-- Style 1 -->
        <div class="style">
            <img src="/images/formal.jpg" alt="Formal Upright">
            <div>
                <h3>Style Formal(Chokkan)</h3>
                <p>Gaya ini memiliki batang yang lurus ke atas dengan cabang yang simetris dan merata.</p>
            </div>
        </div>
        <!-- Style 2 -->
        <div class="style">
            <img src="/images/informal.jpg" alt="Informal Upright">
            <div>
                <h3>Style Informal(Moyogi)</h3>
                <p>Batang bonsai melengkung alami dengan cabang yang tersebar acak, memberikan kesan alami.</p>
            </div>
        </div>
        <!-- Style 3 -->
        <div class="style">
            <img src="/images/slanting.jpg" alt="Slanting">
            <div>
                <h3>Style Slanting</h3>
                <p>Bonsai tumbuh miring dengan batang yang condong ke satu sisi, menciptakan kesan angin yang kuat.</p>
            </div>
        </div>
        <!-- Style 4 -->
        <div class="style">
            <img src="/images/cascade.jpg" alt="Cascade">
            <div>
                <h3>Style Cascade</h3>
                <p>Batang dan cabang menjuntai ke bawah, menyerupai pohon yang tumbuh di tebing curam.</p>
            </div>
        </div>
        <!-- Style 5 -->
        <div class="style">
            <img src="/images/semicascade.jpg" alt="Semi Cascade">
            <div>
                <h3>Style Semi Cascade (Han-Kengai)</h3>
                <p>Batang dan cabang menjuntai sebagian, memberikan kesan lembut dan elegan.</p>
            </div>
        </div>
        <!-- Style 6 -->
        <div class="style">
            <img src="/images/bunjin.jpg" alt="Literati">
            <div>
                <h3>Stle Bunjin</h3>
                <p>Batang panjang dengan sedikit cabang dan daun, menggambarkan keanggunan minimalis.</p>
            </div>
        </div>
    </div>
</section>

<section id="qa-section">
    <h2>Tanya dan Jawab tentang Style Bonsai</h2>
    <div id="chatbox"></div>
    <form id="chat-form" onsubmit="submitQuestion(event)">
        <input type="text" id="user-input" placeholder="Tulis pertanyaan Anda di sini..." required>
        <button type="submit">Kirim Pertanyaan</button>
    </form>
</section>

<!-- <section id="qa-section">
    <h2> Tanya Jawab Edukasi Disini</h2>
    <div id="chatbox"></div>
    <form id="chat-from" onsubmit="submitQuestion(event)">
        <input type="text" id="user-input" placehplder="Beriakan pertanyaan kepada saya..." required>
        <button type="submit">Kirimkan Pertanyaannya</button>
    </form>
</section> -->

<footer>
    <p>&copy; 2024 Kontes Bonsai. Semua hak dilindungi.</p>
</footer>

<script>
    async function addMessage(text, sender = 'bot') {
        const chatbox = document.getElementById("chatbox");
        const message = document.createElement("div");
        message.classList.add("message", sender);

        const messageText = document.createElement("div");
        messageText.classList.add("text");
        messageText.innerText = text;

        message.appendChild(messageText);
        chatbox.appendChild(message);
        chatbox.scrollTop = chatbox.scrollHeight;
    }

    // async function addMessage(text, sender = 'bot'){
    //     conts chatbox = document.getElementById("chatbox");
    //     conts message = document.createElement("div");
    //     message.classList.add("message", sender);
    //     const message Text = document.createElement("div");
    //     messageText.classList.add("text");
    //     messageText.innerText = text;
    //     message.appendChild(messageText);
    //     chatbox.appendChild(message);
    //     chatbox.scrollTop = chatbox.scrollHeight;
    // }

    async function fetchAnswer(question) {
        const apiUrl = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key=AIzaSyBpVCMi1X6CSIl7Ia7t5Rp-DIGXFWCbcug"; // Sesuaikan URL ini dengan endpoint API Gemini yang benar
        const response = await fetch(apiUrl, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ question })
        });
        const data = await response.json();
        return data.answer || "Halo.";
    }

    async function submitQuestion(event) {
        event.preventDefault();
        const input = document.getElementById("user-input");
        const question = input.value;
        if (question) {
            addMessage(question, 'user');
            const answer = await fetchAnswer(question);
            addMessage(answer, 'bot');
            input.value = "";
        }
    // async funcion submitQuestion(tools){
    //     tools.preventDefault();
    //     const input = document.getElemetById("user-input");
    //     const question = input.valuye;
    //     if (question) {
    //         addMessage(question, 'user');
    //         conts answer = await fetchAnswer(question);
    //         adsMessage(answer, 'chatbot');
    //         input.value = "........";
    //     }
    // }
    }
    addMessage("Selamat datang! Silahkan bertanya disini tentang style bonsai.");
</script>

</body>
</html>
