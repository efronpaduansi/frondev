<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Frondev | Backend Developer</title>
    <?php include 'templates/style.php'; ?>
  </head>

  <body>
   
    <!-- Navbar -->
     <?php include 'templates/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h1 class="typewriter">
              Penulis Kode,<span id="typing-text"></span>
            </h1>
            <p>Backend Developer, Bekerja dengan PHP, C# dan Java.</p>
            <a href="#contact" class="btn btn-warning btn-lg me-2"
              >Kontak Saya</a
            >
            <a href="#portfolio" class="btn btn-outline-light btn-lg"
              >Lihat Portfolio</a
            >
          </div>
          <div class="col-md-6 text-center">
            <img
              src="assets/img/hero.jpg"
              alt="Hero Image"
              class="img-fluid rounded-circle"
            />
          </div>
        </div>
      </div>
    </section>
    <div class="wave">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#008081"
          fill-opacity="1"
          d="M0,128L60,128C120,128,240,128,360,144C480,160,600,192,720,218.7C840,245,960,267,1080,261.3C1200,256,1320,224,1380,208L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
        ></path>
      </svg>
    </div>

    <!-- Features Section with Wave -->
    <section id="features" class="py-5">
      <div class="container text-center">
        <h2 class="mb-4">Proyek</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 100%">
              <img
                src="assets/img/default-card-img.jpg"
                class="card-img-top"
                alt="thumbnail"
              />
              <div class="card-body">
                <h5 class="card-title">PPDB Online</h5>
                <p class="card-text">
                  Sistem PPDB Online berbasis web yang dibangun menggunakan
                  Laravel 8 & MySQL.
                </p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 100%">
              <img
                src="assets/img/default-card-img.jpg"
                class="card-img-top"
                alt="thumbnail"
              />
              <div class="card-body">
                <h5 class="card-title">SIPARIS</h5>
                <p class="card-text">
                  Sistem pemesanan paket wisata berbasis web dibangun dengan
                  Laravel 10 & MySQL.
                </p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 100%">
              <img
                src="assets/img/default-card-img.jpg"
                class="card-img-top"
                alt="thumbnail"
              />
              <div class="card-body">
                <h5 class="card-title">Robot WA</h5>
                <p class="card-text">
                  Sistem pengiriman pesan WhatsApp terintegrasi dengan WA API.
                  Memudahkan perusahaan menjangkau customer seperti mengirim
                  faktur dll.
                </p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-4">Kontak Saya</h2>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Masukan Nama"
                />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Masukan Email"
                />
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea
                  class="form-control"
                  id="message"
                  rows="4"
                  placeholder="Tulis Pesan"
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
   <?php include 'templates/footer.php'; ?>

   <?php include 'templates/script.php'; ?>
    <script>
      const typingText = document.getElementById("typing-text");
      const texts = ["Blog", "Pecinta Kopi"];
      let i = 0;
      let textIndex = 0;
      let currentText = "";
      let isDeleting = false;
      let typingSpeed = 150;
      let deletingSpeed = 75;
      let pauseAfterTyping = 2000;
      let pauseAfterDeleting = 500;

      function type() {
        const fullText = texts[textIndex];

        if (isDeleting) {
          currentText = fullText.substring(0, i--);
        } else {
          currentText = fullText.substring(0, i++);
        }

        typingText.textContent = currentText;

        if (!isDeleting && i === fullText.length) {
          setTimeout(() => (isDeleting = true), pauseAfterTyping);
        } else if (isDeleting && i === 0) {
          textIndex = (textIndex + 1) % texts.length;
          isDeleting = false;
          setTimeout(type, pauseAfterDeleting);
        }

        const speed = isDeleting ? deletingSpeed : typingSpeed;
        if (!isDeleting || i > 0) {
          setTimeout(type, speed);
        }
      }

      type();
    </script>
  </body>
</html>
