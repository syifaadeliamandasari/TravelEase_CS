<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Dashboard CS</title>
    <link href="{{ asset('css/dashboardcs.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="sidebar">
        <div class="menu_content">
            <ul class="menu_items">
                <div class="logo_item">
                    <span class="icon1">
                        <i class="bx bx-compass"></i>
                    </span>
                    <h1 class="teks2">TravelEase</h1>
                </div>
                <br /><br /><br />
                <li class="item">
                    <div href="#" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class="bx bx-home-alt"></i>
                        </span>
                        <span class="navlink">Dashboard</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </div>
                </li>
                <li class="item">
                    <a href="{{ route('tickets.index') }}" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <img src="{{ asset('assets/ticket.png') }}" alt="Ticketing" style="width: 24px; height: 24px;">
                        </span>
                        <span class="navlink">Ticketing</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="main_container">
        <div class="text_container">
            <div class="teks">Dashboard Customer Service</div>
        </div>
        <div class="navbar_content">
            <i class="bx bx-bell"></i>
            <div class="user_profile">
                <span class="icon3">
                    <i class="bx bx-user"></i>
                </span>
                <span class="user_name">Guest</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-container">
            <h3 class="bookk">Total User</h3>
            <h5 class="bookk">12</h5>
        </div>
        <i class='bx bx-group user-icon'></i>
    </div>
    <div class="container1">
        <div class="text-container">
            <h3 class="laporan_terpending">Laporan Terpending</h3>
            <h5 class="laporan_terpending">1</h5>
        </div>
        <i class='bx bx-time user-icon'></i>
    </div>
    <div class="container2">
        <div class="text-container">
            <h3 class="laporan_selesai">Laporan Terselesaikan</h3>
            <h5 class="laporan_selesai">42</h5>
        </div>
        <i class='bx bx-check user-icon'></i>
    </div>
    <div class="chart_report_wrapper">
        <div class="chart_container">
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        </div>
        <div class="container5">
            <h1>Laporan Dalam Antrean</h1>
            <br>
            <div class="report-item">
                <div class="icon">Z</div>
                <div class="report-details">
                    <p class="report-title">Dugaan Penipuan dari ...</p>
                    <span class="report-date">15 September 2024 08:29</span>
                </div>
                <button class="btn">Ambil Laporan</button>
            </div>
            <hr>
            <div class="report-item">
                <div class="icon">Z</div>
                <div class="report-details">
                    <p class="report-title">Dugaan Penipuan dari ...</p>
                    <span class="report-date">15 September 2024 08:29</span>
                </div>
                <button class="btn">Ambil Laporan</button>
            </div>
            <hr>
            <div class="report-item">
                <div class="icon">Z</div>
                <div class="report-details">
                    <p class="report-title">Dugaan Penipuan dari ...</p>
                    <span class="report-date">15 September 2024 08:29</span>
                </div>
                <button class="btn">Ambil Laporan</button>
            </div>
            <hr>
            <div class="report-item">
                <div class="icon">Z</div>
                <div class="report-details">
                    <p class="report-title">Dugaan Penipuan dari ...</p>
                    <span class="report-date">15 September 2024 08:29</span>
                </div>
                <button class="btn">Ambil Laporan</button>
            </div>
        </div>
    </div>
    <script>
        const xValues = ["Refund", "Pemesanan", "Pembayaran", "Destinasi", "Cek Fakta"];
        const yValues = [55, 49, 44, 24, 15];
        const barColors = ["green", "red", "orange", "purple", "brown"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: { display: false },
                title: {
                    display: true,
                    text: "LAPORAN CHART 1 MONTH"
                }
            }
        });
    </script>
</body>
</html>
