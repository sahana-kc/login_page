<style>
    .dropdown-menu {
        position: absolute !important;
        left:-100px;
    }
    </style>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="assets\images\logo\vvt_full_logo.png" height="50">
    </a>
    
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="avatarPanelToggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="assets/images/webimages/avatar.png" class="rounded-circle" width="30" height="30">
                </a>
                <div class="dropdown-menu" aria-labelledby="avatarPanelToggle">
                <a class="dropdown-item" href="#">Dashboard</a>
                <a class="dropdown-item" href="server.php?operation_type=logout">Logout</a>
                </div>
            </li>

        </ul>
    
</nav>