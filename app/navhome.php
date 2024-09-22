<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top" id="nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="quote.php">
            <img src="../img/iconlogo.png" alt="logo1" height="40px">
            <img src="../img/textlogo.png" alt="logo2" height="30px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto nav-underline">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="rating.php">Well-being Rating</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="chart.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="aboutus.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="userprofile.php">Account Info</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link border border-danger text-danger rounded text-center" href="#" id="signOutLink">Sign out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="signoutpopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fs-5" id="exampleModalLabel">Confirm Sign Out</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         Are you sure you want to sign out?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="font-size: 0.8rem;" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" style="font-size: 0.8rem;" id="confirmSignOut">Sign Out</button>
      </div>
    </div>
  </div>
</div>

<script src="../js/jquery-3.7.1.min.js"></script>
<script src="../js/signout.js"></script>
