<div class="container-fluid">
  <div class="row">
    <div class='col-md-8'>
      <canvas id="myChart"></canvas>
    </div>
    <div class="row col-md-4">

        <div class="col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="http://localhost/sip/admin/data_user"><div>Jumlah buku yang di pinam</div></a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">43</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-journal-whills fa-2x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="http://localhost/sip/admin/data_user"><div>Banyak Anggota</div></a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">43</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-journal-whills fa-2x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="http://localhost/sip/admin/data_user"><div>Banyak Anggota</div></a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">43</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-journal-whills fa-2x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
  $favorite_data = json_encode($favorite); // Mengonversi data PHP menjadi JSON
?>

<script>
  var favoriteData = <?php echo $favorite_data; ?>;
  var titles = [];
  var jumlahs = [];

  // Loop melalui setiap objek dalam array favoriteData
  for (var i = 0; i < favoriteData.length; i++) {
      // Mengakses judul dan jumlah dari setiap objek
      var title = favoriteData[i].title;
      var jumlah = favoriteData[i].jumlah;

      // Menambahkan judul dan jumlah ke dalam array terpisah
      titles.push(title);
      jumlahs.push(jumlah);
  }

  const ctx = document.getElementById('myChart');

  const chart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: titles,
      datasets: [{
        label: '10 buku favorit',
        data: jumlahs,
      }],
    },
    options: {
      indexAxis: 'y', // <-- here
      responsive: true
  }
});

//   new Chart(ctx, {
//     type: 'bar',
//     data: {
//       labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
//       datasets: [{
//         label: '# of Votes',
//         data: [12, 19, 3, 5, 2, 3],
//         borderWidth: 1
//       }]
//     },
//     options: {
//       scales: {
//         y: {
//           beginAtZero: true
//         }
//       }
//     }
//   });

//   const config = {
//     type: 'bar',
//     data,
//     options: {
//       indexAxis: 'y',
//   }
// };
</script>
