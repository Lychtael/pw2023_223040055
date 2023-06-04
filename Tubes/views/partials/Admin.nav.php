<nav class="navbar shadow p-3 mb-5 bg-body-tertiar">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="Admin.php">Etheirys Admin page</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header shadow ">
                <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">The Etheirys</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Admin.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="AdminNews.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            News
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="AdminNews.php">View All News</a></li>
                            <li><a class="dropdown-item" href="AddNews.php">Add News</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Users
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Admin.User.View.php">Show Users</a></li>
                            <li><a class="dropdown-item" href="AddUser.php">Register New Users</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a href="" class="btn btn-danger">Log Out</a>
            </div>
        </div>
    </div>
</nav>