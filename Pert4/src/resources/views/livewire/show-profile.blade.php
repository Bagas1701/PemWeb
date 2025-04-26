<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Profile</title>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .profile-card {
      border-radius: 30px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .rounded-circle {
      border: 4px solid #0d6efd;
    }
    .btn-outline-primary {
      border-radius: 60px;
      padding: 10px 30px;
    }
    .card-body p {
      color: #444;
    }
    .progress-bar {
      background-color: #0d6efd;
    }
    .list-group-item a {
      text-decoration: none;
      color: #0d6efd;
    }
    .list-group-item a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<main class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card profile-card text-center mb-4">
        <div class="card-body">
          <img src="https://github.com/Bagas1701/PemWeb/blob/main/Pert2/coding/latihan/assets/profile%20saya.jpeg?raw=true"
            class="rounded-circle img-fluid mb-3" style="width: 200px;" alt="Foto Profil" />
          <h4 class="fw-bold">BAGAS YOAS SIBAGARIANG</h4>
          <p class="text-muted mb-1">Fakultas Ilmu Komputer</p>
          <p class="text-muted">Teknik Informatika</p>
          <div class="d-flex justify-content-center gap-2 mt-3">
            <button class="btn btn-outline-primary">Jakarta</button>
            <button class="btn btn-outline-primary">01 January 2024</button>
          </div>
        </div>
      </div>

      <!-- ABOUT ME -->
      <div class="card profile-card mb-4">
        <div class="card-body">
          <h5 class="text-center fw-semibold mb-3">ABOUT ME</h5>
          <p class="font-italic mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut aspernatur optio, a beatae fuga qui vel necessitatibus ullam facilis.</p>
          <p class="font-italic mb-2">Reprehenderit error sapiente soluta autem et doloribus illo est, vero voluptatibus.</p>
          <p class="font-italic mb-0">Aut aspernatur optio, a beatae fuga qui vel necessitatibus ullam facilis.</p>
        </div>
      </div>

      <!-- LINKS -->
      <div class="card profile-card mb-4">
        <div class="card-body p-0">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <a href="https://sso.esaunggul.ac.id" target="_blank"><i class="fa fa-globe me-2"></i>My Website</a>
            </li>
            <li class="list-group-item">
              <a href="https://instagram.com/bagas_17_yoas" target="_blank"><i class="fab fa-instagram me-2"></i>My Instagram</a>
            </li>
            <li class="list-group-item">
              <a href="https://github.com/bagas1701" target="_blank"><i class="fab fa-github me-2"></i>My GitHub</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- SKILLS -->
      <div class="card profile-card">
        <div class="card-body">
          <h5 class="fw-semibold mb-3">My Skills</h5>
          <p class="mb-1">HTML</p>
          <div class="progress rounded mb-3" style="height: 8px;">
            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="mb-1">CSS</p>
          <div class="progress rounded mb-2" style="height: 8px;">
            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>

<!-- Bootstrap JS + Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-H4rM9N9lz+I6fv2mfAKtv3RcvhlozNHikC5LB2cCJjKytXmA2GsEoqZxKqLq8f1L" crossorigin="anonymous"></script>

</body>
</html>
