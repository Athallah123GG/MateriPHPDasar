<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Dasar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>



  <section class="container mt-5">

    <form action="backend/soal1.php" method="POST">

      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Alas</span>
        <input type="number" class="form-control" aria-label="Sizing example input" name="alas"
          aria-describedby="inputGroup-sizing-default">
      </div>

      <div class="input-group mb-3">

        <span class="input-group-text" id="inputGroup-sizing-default">Tinggi</span>
        <input type="number" class="form-control" aria-label="Sizing example input" name="tinggi"
          aria-describedby="inputGroup-sizing-default">
      </div>

      <button type="submit" class="btn btn-primary">Go</button>

    </form>

  </section>

  <!-- Soal 2 -->

  <section class="container mt-5">

    <form action="backend/soal2.php" method="POST">

      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Bilangan A</span>
        <input type="number" class="form-control" aria-label="Sizing example input" name="bilangana"
          aria-describedby="inputGroup-sizing-default">
      </div>

      <div class="input-group mb-3">

        <span class="input-group-text" id="inputGroup-sizing-default">Bilangan B</span>
        <input type="number" class="form-control" aria-label="Sizing example input" name="bilanganb"
          aria-describedby="inputGroup-sizing-default">
      </div>

      <button type="submit" class="btn btn-primary">Go</button>

    </form>

  </section>

  <!-- Soal 3 -->

  <section class="container mt-5">

    <form action="backend/soal3.php" method="POST">

      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">jari jari</span>
        <input type="number" class="form-control" aria-label="Sizing example input" name="jari"
          aria-describedby="inputGroup-sizing-default">
      </div>

      <!-- <div class="input-group mb-3">
          
          <span class="input-group-text" id="inputGroup-sizing-default">Bilangan B</span>
          <input type="number" class="form-control" aria-label="Sizing example input" name="bilanganb"
            aria-describedby="inputGroup-sizing-default">
        </div> -->

      <button type="submit" class="btn btn-primary">Go</button>

    </form>

  </section>

  <!-- Soal 4 -->
  <section class="container mt-5">

    <form action="backend/soal4.php" method="POST">

      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Keliling Lingkaran</span>
        <input type="number" class="form-control" aria-label="Sizing example input" name="jari"
          aria-describedby="inputGroup-sizing-default">
      </div>

      <button type="submit" class="btn btn-primary">Go</button>

    </form>

  </section>

  <!-- Soal 5 -->

  <section class="container mt-5">

    <form action="backend/soal5.php" method="POST">

      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Penjumlahan 1</span>
        <input type="number" class="form-control" aria-label="Sizing example input" name="penjumlahan1"
          aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Penjumlahan 2</span>
        <input type="number" class="form-control" aria-label="Sizing example input" name="penjumlahan2"
          aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Penjumlahan 3</span>
        <input type="number" class="form-control" aria-label="Sizing example input" name="penjumlahan3"
          aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Penjumlahan 4</span>
        <input type="number" class="form-control" aria-label="Sizing example input" name="penjumlahan4"
          aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Penjumlahan 5</span>
        <input type="number" class="form-control" aria-label="Sizing example input" name="penjumlahan5"
          aria-describedby="inputGroup-sizing-default">
      </div>


      <button type="submit" class="btn btn-primary">Go</button>

    </form>

  </section>

  <!-- Soal 6 -->
  <section class="container mt-5">

    <form action="backend/soal6.php" method="POST">
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Masukkan Bilangan Lima Digit</span>
        <input type="number" class="form-control" aria-label="Sizing example input" name="bilangan"
          aria-describedby="inputGroup-sizing-default" required>
      </div>
      <button type="submit" class="btn btn-primary">Go</button>
    </form>

  </section>

  <!-- Soal 7 -->
  <section class="container mt-5">

    <form action="backend/soal7.php" method="POST">
      <div class="input-group mb-3">
        <span class="input-group-text">Bilangan 1</span>
        <input type="number" class="form-control" name="bilangan1" required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">Bilangan 2</span>
        <input type="number" class="form-control" name="bilangan2" required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">Bilangan 3</span>
        <input type="number" class="form-control" name="bilangan3" required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">Bilangan 4</span>
        <input type="number" class="form-control" name="bilangan4" required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">Bilangan 5</span>
        <input type="number" class="form-control" name="bilangan5" required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">Bilangan 6</span>
        <input type="number" class="form-control" name="bilangan6" required>
      </div>
      <button type="submit" class="btn btn-primary">Periksa</button>
    </form>

  </section>

  <!-- Soal 8 -->
  <!-- Contoh Bilangan Prima 1,2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97 -->
  <section class="container mt-5">

    <form action="backend/soal8.php" method="POST">
      <div class="input-group mb-3">
        <span class="input-group-text">Menetukan Apakah Bilangan Prima atau Bukan</span>
        <input type="number" class="form-control" name="bilangan" required>
      </div>
      <button type="submit" class="btn btn-primary">Periksa</button>
    </form>

  </section>

  <!-- Soal 9 -->

  <section class="container mt-5">
    <form action="backend/soal9.php" method="POST">
      <div class="input-group mb-3">
        <span class="input-group-text">Menampilkan Hasil Bagi Sebuah Bilangan yang Habis Dibagi 6 tapi Tidak Habis Dibagi 5</span>
        <input type="number" class="form-control" name="bilangan" min="1" required>
      </div>
      <button type="submit" class="btn btn-primary">Periksa</button>
    </form>
  </section>

  <!-- Soal 9 -->

  <section class="container mt-5">
  <form action="backend/soal10.php" method="POST">
        <div class="input-group mb-3">
            <span class="input-group-text">Menampilkan Median dari Hasil Bagi Sebuah Bilangan yang Habis Dibagi 6 tapi Tidak Habis Dibagi 5</span>
            <input type="number" class="form-control" name="bilangan" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Periksa</button>
    </form>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>

</body>

</html>