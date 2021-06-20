<!DOCTYPE html>
<html lang="en">
    <?php require "layout/head.php";?>

    <body>
        <div id="app">
            <?php require "layout/sidebar.php";?>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                <div class="page-heading">
                    <h3>Dashboard</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Sistem Pendukung Keputusan StudyClub TI Terbaik</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Sistem pendukung keputusan ini digunakan untuk menentukkan Study Club terbaik pada prodi Teknik Informatika. <br>
                                            Untuk metode yang digunakan pada sistem pendukung keputusan ini menggunakan metode SAW (Simple Additive Weighting).<br><br>
                                        </p>
                                        <hr>
                                        <p class="card-text">
                                            Langkah penggunaan sistem pendukung keputusan ini sebagai berikut :
                                        </p>
                                        <ol type="1">
                                            <li>Menginputkan study club apa saja yang ada pada prodi Teknik Informatika pada menu alternatif.</i>
                                            <li>Menginputkan kriteria apa saja yang dipertimbangan untuk menjadi pertimbangan serta bobot nilainya.</li>
                                            <li>Membuat matriks keputusan berdasarkan kriteria(Ci), kemudian melakukan
                                                normalisasi matriks berdasarkan persamaan yang disesuaikan dengan jenis
                                                atribut (atribut keuntungan ataupun atribut biaya) sehingga diperoleh
                                                matriks ternormalisasi R.</li>
                                            <li>Hasil akhir diperoleh dari proses perankingan yaitu penjumlahan dari
                                                perkalian matriks ternormalisasi R dengan vektor bobot sehingga
                                                diperoleh nilai terbesar yang dipilih sebagai alternatif terbaik
                                                (Ai)sebagai solusi</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php require "layout/footer.php";?>
            </div>
        </div>
        <?php require "layout/js.php";?>
    </body>

</html>