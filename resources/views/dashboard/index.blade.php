@extends('componen.app')
@section('isi')
<div class=" sm:ml-64 bg-white rounded-t-xl h-screen">
   <div class="p-4  rounded-lg dark:border-gray-700 mt-16 md:mt-0">
      <h1 class="text-2xl text-emerald-700 font-bold  px-3 py-3 border-b">Dashboard</h1>
      <div class="relative overflow-x-auto sm:rounded-lg mt-10">
         <h1 class="text-xl text-gray-700 font-bold ps-3 pb-3">Data Pengunjung Berdasarkan Divisi</h1>
         <div class="grid grid-cols-2 p-3">
            <div class="col-span-1 shadow-md border rounded-md">
               <canvas id="myChart"></canvas>
            </div>
         </div>
      </div>
   </div>
</div>  
@endsection

@section('js')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-to-image"></script>

<script>
   // Get the canvas element
   var ctx = document.getElementById('myChart');
 
   // Define your data
   var data = {
     labels: ['Tata Usaha', 'ISDHTL', 'PKH'],
     datasets: [{
       label: 'Jumlah Data Berdasarkan Divisi',
       backgroundColor: [
         'rgba(255, 99, 132, 0.2)',
         'rgba(54, 162, 235, 0.2)',
         'rgba(153, 102, 255, 0.2)',
     
       ],
       borderColor: [
         'rgb(255, 99, 132)',
         'rgb(54, 162, 235)',
         'rgb(153, 102, 255)',
       ],
       borderWidth: 1,
       data: [{{ $tatausaha }}, {{ $isdhtl }}, {{ $pkh }}],
     }]
   };
 
   // Configure the options
   var options = {
     scales: {
       y: {
         beginAtZero: true
       }
     }
   };
 
   // Create the chart
   var myChart = new Chart(ctx, {
     type: 'bar',
     data: data,
     options: options
   });
  // Fungsi untuk menyimpan grafik sebagai JPG
  function saveChartAsJPG() {
     Chart.toImage(myChart, 'image/jpeg', 1.0).then(function (dataUrl) {
       var link = document.createElement('a');
       link.href = dataUrl;
       link.download = 'chart.jpg';
       link.click();
     });
   }
   
 </script>

 
 

@endsection