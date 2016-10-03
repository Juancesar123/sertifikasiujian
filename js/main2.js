
var mainApp = angular.module("mainApp", ['ngRoute','datatables','checklist-model','ngResource']);
 mainApp.config(function($routeProvider) {
    $routeProvider
      .when('/datauser', {
        templateUrl:"data_user",
        controller:'datauser'
    	}).when('/anggotaassesi', {
        templateUrl:"anggotaassesi",
        controller:'anggotaassesi'
      })
      .when('/jadwalasesment', {
        templateUrl:"jadwalasesment",
        controller:'jadwalasesment'
      })
 });


 mainApp.factory('socket', ['$rootScope', function($rootScope) {
   var socket = io.connect();

   return {
     on: function(eventName, callback){
       socket.on(eventName, callback);
     },
     emit: function(eventName, data) {
       socket.emit(eventName, data);
     }
   };
 }]);
mainApp.controller('datauser',function($scope,$http,DTColumnBuilder,DTOptionsBuilder){
  $scope.dtOptions = DTOptionsBuilder.newOptions()

    .withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false)
      $scope.disabled = false;
  $scope.getdata=function(){
    $http.get("lihat_data_user").success(function(data){
      $scope.datauser= data
    })
  }
  $scope.getdata();
 $scope.user={
  hapusdatauser:[]
 }
 $scope.simpan = function(){
  var firstname = $scope.firstname;
  var lastname = $scope.lastname;
  var email = $scope.email;
  var password = $scope.password;
  $http.post("simpan_data_user",{firstname:firstname,lastname:lastname,email:email,password:password}).success(function(){
    alert("data sukses di simpan");
    $scope.getdata();
  })
 }
 $scope.hapus = function(){
  var id = $scope.user;
  $http.post("hapus_data_user",{id:id}).success(function(){
    alert("data sukses di hapus");
    $scope.getdata();
  })
 }
})

mainApp.controller('anggotaassesi',function($scope,$http,DTColumnBuilder,DTOptionsBuilder){
  $scope.dtOptions = DTOptionsBuilder.newOptions()

    .withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false)
      $scope.disabled = false;
  $scope.getdata=function(){
    $http.get("ambil_anggota_asesi").success(function(data){
      $scope.anggotaasesi= data
    })
  }
  $scope.getdata();
 $scope.kirim=function(){
  var nama = $scope.nama;
  var tempat = $scope.tempat;
  var tanggal = $scope.tanggal;
  var jenis = $scope.jenis;
  var kewarganegaraan = $scope.kewarganegaraan;
  var alamat = $scope.alamat;
  var telpon = $scope.telpon;
  var email = $scope.email;
  var pendidikan = $scope.pendidikan;
  var jurusan = $scope.jurusan;
  var tahunlulus = $scope.tahunlulus;
  $http.post
  ("insert_anggota_asesi",
  {
    nama:nama,
    tempat:tempat,
    tanggal:tanggal,
    jenis:jenis,
    kewarganegaraan:kewarganegaraan,
    alamat:alamat,
    telpon:telpon,
    email:email,
    pendidikan:pendidikan,
    jurusan:jurusan,
    tahunlulus:tahunlulus
  }).success(function(){
    alert("data sukses di simpan");
    $scope.getdata();
  })
 }
 $scope.edit=function(item){
  $scope.nama = item.nama;
  $scope.tempat = item.tempat_lahir;
  $scope.tanggal = item.tgl_lahir;
  $scope.jenis = item.jenis_kelamin;
  $scope.kewarganegaraan = item.kewarganegaraan;
  $scope.alamat = item.alamat;
  $scope.telpon = item.telp;
  $scope.email = item.email;
  $scope.pendidikan = item.pendidikan_terakhir;
  $scope.alamat = item.alamat;
  $scope.jurusan = item.jurusan;
  $scope.tahunlulus = item.tahun_lulus;
  $scope.id = item.id;
 }
 $scope.actionedit=function(){
  var nama = $scope.nama;
  var tempat = $scope.tempat;
  var tanggal = $scope.tanggal;
  var jenis = $scope.jenis;
  var kewarganegaraan = $scope.kewarganegaraan;
  var alamat = $scope.alamat;
  var telpon = $scope.telpon;
  var email = $scope.email;
  var pendidikan = $scope.pendidikan;
  var jurusan = $scope.jurusan;
  var tahunlulus = $scope.tahunlulus;
  var id = $scope.id;
  $http.post
  ("ubah_anggota_asesi",
  {
    id:id,
    nama:nama,
    tempat:tempat,
    tanggal:tanggal,
    jenis:jenis,
    kewarganegaraan:kewarganegaraan,
    alamat:alamat,
    telpon:telpon,
    email:email,
    pendidikan:pendidikan,
    jurusan:jurusan,
    tahunlulus:tahunlulus
  }).success(function(){
    alert("data sukses di ubah");
    $scope.getdata();
  })
 }
 $scope.user={
  hapusanggotaasesi:[]
 }
 $scope.hapus = function(){
  var id = $scope.user;
  $http.post("hapus_anggota_asesi",{id:id}).success(function(){
    alert("data sukses di hapus");
    $scope.getdata();
  })
 };

})
mainApp.controller('jadwalasesment',function($scope,$http,DTColumnBuilder,DTOptionsBuilder){
  $scope.dtOptions = DTOptionsBuilder.newOptions()

    .withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false)
      $scope.disabled = false;
  $scope.getdata=function(){
    $http.get("lihat_jadwal_asesment").success(function(data){
      $scope.jadwalasesment= data
    })
  }
  $scope.getdata();
 $scope.simpan=function(){
  var nama = $scope.jadwal;
  var tanggal = $scope.tanggal;
  var tanggalakhir = $scope.tanggalakhir;
  $http.post("simpan_jadwal_asesment",{nama:nama,tanggal:tanggal,tanggalakhir:tanggalakhir}).success(function(){
    alert("data sukses di simpan");
    $scope.getdata();
  })
 }
 $scope.edit = function(item){
  $scope.jadwal = item.nama;
  $scope.tanggal = item.tanggal;
  $scope.tanggalakhir = item.tanggal_akhir;
  $scope.id = item.id;
 }
 $scope.actionedit = function(){
  var nama = $scope.jadwal;
  var tanggal = $scope.tanggal;
  var tanggalakhir = $scope.tanggalakhir;
  var id = $scope.id;
  $http.post("ubah_jadwal_asesment",{id:id,nama:nama,tanggal:tanggal,tanggalakhir:tanggalakhir}).success(function(){
    alert("data sukses di ubah");
    $scope.getdata();
  })
 }
 $scope.user={
  hapusjadwalasesment:[]
 }
 $scope.hapus=function(){
  var id = $scope.user;
  $http.post("hapus_jadwal_asesment",{id:id}).success(function(){
    alert("data sukses di hapus");
    $scope.getdata();
  })
 }
})
