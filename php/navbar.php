<nav class="navbar navbar-expand-lg" style="background-color: #594346;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="pic/logo.PNG" width="70px" height="70px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: #F9EFF1;">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #F9EFF1;">
            Shop
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="lip.php">Lips</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="face.php">Face</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="tools.php">Tools</a></li>
          </ul>
        </li>
        <?php if(isset($_SESSION['admin'])) { ?>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #F9EFF1;">
            Dashboard
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="stock.php">Stock</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="order.php">Order</a></li>
          </ul>
        </li>
        <?php } ?>
      </ul>
      <form class="d-flex">
        <?php if(isset($_SESSION['admin'])) { ?>
          <div class="me-2 mt-2" style="color: #F9EFF1;">Admin : <?= $_SESSION['admin']; ?></div>
          <a href="index.php?logout=0" class="btn btn-danger me-2">Logout</a>
        <?php } else { ?>
          <a class="btn btn" style="background-color: #F9EFF1; color: #594346;" href="login.php">Login</a>
        <?php } ?>
      </form>
    </div>
  </div>
</nav>