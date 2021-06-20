<!DOCTYPE html>
<html lang="en">
  <?php
require "layout/head.php";
require "include/conn.php";
require "W.php";
require "R.php";
?>

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
          <h3>Rangking</h3>
        </div>
        <div class="page-content">
          <section class="row">
            <div class="col-12">
              <div class="card">

                <div class="card-header">
                  <h4 class="card-title">Tabel Nilai berdasarkan rangking nilai terbesar</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <p class="card-text">
                    Nilai preferensi (P) merupakan penjumlahan dari perkalian matriks ternormalisasi R dengan vektor bobot W.</p>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                    <caption>
    Nilai Preferensi (P)
  </caption>
  <tr>
    <th>No</th>
    <th>Alternatif</th>
    <th>Hasil</th>
  </tr>
  <?php
$sql = 'SELECT id_alternative,name FROM saw_alternatives';
// var_dump($sql);
$result = $db->query($sql);
// var_dump($result);
// die();
$P = array();
$m = count($W);
$no = 0;
$tampung = array();

$nilai =0;

foreach ($R as $i => $r) {
  for ($j = 0; $j < $m; $j++) {
      $hasil = $P[$i] = (isset($P[$i]) ? $P[$i] : 0) + $r[$j] * $W[$j];
      
    }
array_push($tampung,$hasil);
};
// rsort($tampung);

$lastResults = array();

foreach ($result as $index => $res) {
  // echo json_encode($res['name']);
  foreach($tampung as $index_tampung => $tam){
    if($index_tampung === $index ){
      // echo $tam;
      $temp = [
        'name' => $res['name'],
        'nilai' => $tam
      ];
      array_push($lastResults,$temp);
      $temp = '';
    }
    
  }
}

$final = usort($lastResults['nilai'], function($a, $b){return strcmp($a->nilai, $b->nilai);});
// echo $final; 

foreach ($lastResults as $key => $lr) {
  echo "<tr class='center'>
    <td>" . (++$no) . "</td>";
  echo "<td>{$lr['name']}</td>";
  echo "<td>{$lr['nilai']}</td>";
}

// while ($lastResults > 0) {
  
// };

  

  echo    "</tr>";
?>
                    </table>
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
