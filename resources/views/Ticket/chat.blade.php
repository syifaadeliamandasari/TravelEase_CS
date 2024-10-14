    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"/>
        <title>Ticket</title>
        <link href="{{ asset('css/chat.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <nav class="sidebar">
                <div class="menu_content">
                    <div class="sidebar-2">
                        <a href="{{ route('tickets.index') }}" class="status-card">
                            <i class="bx bx-chevron-left icons"></i>
                        </a>
                        <i class="bx bx-star icon"></i>
                        <h1 class="teks5">Semuanya Tiket (02)</h1>
                        <i class="bx bx-down-arrow iconss"></i>
                    </div>
                    <!-- Card Section -->
                    <div class="card">
                        <div class="card-header">
                            <h1 class="batal">Pembatalan Pesanan</h1>
                            <span class="author">Zulkifli Hartanto</span>
                            <div class="icon4">
                                <i class="bx bx-user"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="status open">Open</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h1 class="batal">Pembatalan Pesanan</h1>
                            <span class="author">Zulkifli Hartanto</span>
                            <div class="icon4">
                                <i class="bx bx-user"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="status open">Open</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="header-content">
            <i class='bx bx-message-rounded-check icons1'></i>
            <h1 class="title">Pembatalan Pesanan</h1>
            <span class="nama">Zulkifli Hartanto</span>
            <span class="hinga">-</span>
            <span class="date">Dibuat pada tanggal 12 Agustus 2024</span>
        </div>
        <button class="status1">Open</button>

        <div class="tab-navigation">
            <a href="#" class="tab active">Percakapan (5)</a>
            <a href="#" class="tab">Detail</a>
            <a href="#" class="tab">Riwayat</a>
        </div>

        <div class="chat-container">
            <div class="date-container">
                <hr class="date-divider">
                <span class="date-text">Jan, 19 Sep</span>
                <hr class="date-divider">
            </div>

            <!-- Chat Bubble Section -->
            <div class="bubbleWrapper own">
                <div class="inlineContainer1">
                    <img class="inlineIcon" src="{{ asset('assets/chatcs.png') }}">
                    <span class="chatBubble">
                        Halo, saya Meliana Putri! Saya di sini untuk membantu Anda dalam perjalanan Anda dengan aplikasi TravelEase. Sebagai customer service, saya siap memberikan informasi, menjawab pertanyaan, dan membantu menyelesaikan masalah yang mungkin Anda hadapi selama perjalanan.<br><br>
                        Apakah Anda memerlukan bantuan untuk memesan tiket, mengubah jadwal, atau mencari rekomendasi destinasi? Jangan ragu untuk bertanya, dan saya akan memastikan Anda mendapatkan informasi dan dukungan yang Anda butuhkan.<br><br>
                        Selamat berpergian!
                    </span>

                </div>
                <span class="other1">08:55</span>
            </div>
            <div class="bubbleWrapper sender">
                <div class="inlineContainer">
                    <div class="icon5">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="chatBubble">Apakah saya bisa membatalkan pesanan yang sudah saya beli 1 minggu yang lalu?!</div>
                </div>
                <span class="other">08:41</span>
            </div>
            <div class="bubbleWrapper own">
                <div class="inlineContainer1">
                    <img class="inlineIcon" src="{{ asset('assets/chatcs.png') }}">
                    <span class="chatBubble">
                        Untuk menentukan apakah Anda dapat membatalkan pesanan Anda, saya memerlukan beberapa informasi tambahan tentang pesanan Anda. Mohon berikan detail berikut:<br><br>
                        <strong>Nomor Pemesanan:</strong> Nomor pemesanan atau tiket yang terkait dengan pembelian Anda.<br>
                        <strong>Tanggal Pembelian:</strong> Tanggal Anda melakukan pembelian tiket tersebut.<br>
                        <strong>Tanggal Perjalanan:</strong> Tanggal keberangkatan yang tertera pada tiket.<br>
                        <strong>Nama Lengkap dan Email:</strong> Nama lengkap dan alamat email yang digunakan saat melakukan pemesanan.<br><br>
                        Dengan informasi ini, saya dapat memeriksa kebijakan pembatalan untuk pesanan Anda dan memberikan solusi yang sesuai. Silakan berikan detail tersebut, dan saya akan segera membantu Anda!
                    </span>
                </div>
                <span class="other1">09:00</span>
            </div>
            <!-- Input Message Section -->
            <div class="message-input-container">
                <input type="text" class="message-input" placeholder="Ketik pesan...">
                <button class="send-button">Kirim</button>
            </div>
        </div>
    </body>
    </html>
