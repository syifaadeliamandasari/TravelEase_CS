<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"/>
    <link href='https://unpkg.com/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Ticket</title>
    <link href="{{ asset('css/ticket.css') }}" rel="stylesheet">
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
                    <a href="{{ route('dashboard.index') }}" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class="bx bx-home-alt"></i>
                        </span>
                        <span class="navlink">Dashboard</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </a>
                </li>
                <li class="item">
                    <div href="#" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <img src="{{ asset('assets/ticket.png') }}" alt="Ticketing" style="width: 24px; height: 24px;" />
                        </span>
                        <span class="navlink">Ticketing</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="header">
        <div class="title">
            <i class="bx bx-star icon"></i>
            <h5>Semuanya Tiket (02)</h5>
            <span class="icon-down">
                <i class="bx bx-down-arrow"></i>
            </span>
        </div>
        <div class="user-options">
            <div class="mt-3 inputs">
                <i class="fa fa-search"></i>
                <input type="text" class="form-control " placeholder="Search Tasks...">

            </div>
            <i class="bx bx-bell"></i>
            <div class="user_profile">
                <span class="icon3">
                    <i class="bx bx-user"></i>
                </span>
                <span class="user_name">Guest</span>
            </div>
        </div>
    </div>

    <div class="content">
        <a href="{{ route('chat.index') }}" class="status-card">
            <div class="icon-container">
                <div class="icon">
                    <i class='bx bx-message-rounded-check'></i>
                </div>
            </div>
            <div class="details">
                <h3 class="pesanan">Pembatalan Pesanan</h3>
                <p>Zulkifli Hartanto</p>
            </div>
            <div class="status-with-circle">
                <div class="status">
                    <span class="status-label">Closed</span>
                    <span class="icon-down">
                        <i class="bx bx-down-arrow"></i>
                    </span>
                </div>
                <div class="icon4">
                    <i class="bx bx-user"></i>
                </div>
            </div>
        </a>
    </div>

    <div class="content1">
        <div class="status-card">
            <div class="icon-container">
                <div class="icon">
                    <i class='bx bx-message-rounded-dots'></i>
                </div>
            </div>
            <div class="details">
                <h3 class="pesanan">Refund Tiket</h3>
                <p>Zulkifli Hartanto</p>
            </div>
            <div class="status-with-circle">
                <div class="status1">
                    <span class="status-label">On Hold</span>
                    <span class="icon-down">
                        <i class="bx bx-down-arrow"></i>
                    </span>
                </div>
                <div class="icon4">
                    <i class="bx bx-user"></i>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
