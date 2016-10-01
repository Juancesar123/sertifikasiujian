
    <section class="content-header">
      <h1>
        Data Anggota Asessi
        <small>Data Anggota Asessi</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class =" fa fa-users"></i>Data Assesi</li>
      </ol>
    </section>
    <!-- Content Header (Page header) -->
 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input Anggota Asessi</h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label>Nama Lengkap</label>
      <input type="text" class="form-control" ng-model="nama"> 
      </div>
      <div class="form-group">
      <label>Tempat Lahir</label>
      <input type="text" class="form-control" ng-model="tempat"> 
      </div>
      <div class="form-group">
      <label>Tanggal Lahir</label>
      <input type="date" class="form-control" ng-model="tanggal"> 
      </div>
      <div class="form-group">
      <label>Jenis Kelamin</label>
      <select class="form-control" ng-model="jenis">
          <option value="1">Laki-Laki</option>
          <option value="2">Perempuan</option>
      </select> 
      </div>
      <div class="form-group">
      <label>Kewarganegraan</label>
      <input type="text" class="form-control" ng-model="kewarganegaraan"> 
      </div>
      <div class="form-group">
      <label>Alamat</label>
      <textarea class="form-control" ng-model="alamat"></textarea> 
      </div>
      <div class="form-group">
      <label>Telpon </label>
      <input type="text" class="form-control" ng-model="telpon"> 
      </div>
      <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" ng-model="email"> 
      </div>
      <div class="form-group">
      <label>Pendidikan Terakhir</label>
      <input type="text" class="form-control" ng-model="pendidikan"> 
      </div>
      <div class="form-group">
      <label>Jurusan</label>
      <input type="text" class="form-control" ng-model="jurusan"> 
      </div>
      <div class="form-group">
      <label>Tahun Lulus</label>
      <input type="text" class="form-control" ng-model="tahunlulus"> 
      </div>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-primary" ng-click="kirim()"><i class="fa fa-send"></i>Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 <!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ubah Data Anggota Asessi</h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label>Nama Lengkap</label>
      <input type="text" class="form-control" ng-model="nama"> 
      </div>
      <div class="form-group">
      <label>Tempat Lahir</label>
      <input type="text" class="form-control" ng-model="tempat"> 
      </div>
      <div class="form-group">
      <label>Tanggal Lahir</label>
      <input type="date" class="form-control" ng-model="tanggal"> 
      </div>
      <div class="form-group">
      <label>Jenis Kelamin</label>
      <select class="form-control" ng-model="jenis">
          <option value="1">Laki-Laki</option>
          <option value="2">Perempuan</option>
      </select> 
      </div>
      <div class="form-group">
      <label>Kewarganegraan</label>
      <input type="text" class="form-control" ng-model="kewarganegaraan"> 
      </div>
      <div class="form-group">
      <label>Alamat</label>
      <textarea class="form-control" ng-model="alamat"></textarea> 
      </div>
      <div class="form-group">
      <label>Telpon </label>
      <input type="text" class="form-control" ng-model="telpon"> 
      </div>
      <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" ng-model="email"> 
      </div>
      <div class="form-group">
      <label>Pendidikan Terakhir</label>
      <input type="text" class="form-control" ng-model="pendidikan"> 
      </div>
      <div class="form-group">
      <label>Jurusan</label>
      <input type="text" class="form-control" ng-model="jurusan"> 
      </div>
      <div class="form-group">
      <label>Tahun Lulus</label>
      <input type="text" class="form-control" ng-model="tahunlulus"> 
      </div>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-success" ng-click="actionedit()"><i class="fa fa-send"></i>Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <div class="box box-primary">
    <div class ="box-header">
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i> Tambah Assesi</button>
    <button class="btn btn-danger" data-toggle="modal" ng-click="hapus()"><i class="fa fa-trash"></i> Hapus Assesi</button>
    </div>
    <div class="box-body">

  <table datatable="ng" dt-columns="dtColumns"dt-options="dtOptions"class="table table-bordered table-striped">
  <thead>
  <th><input type="checkbox" ng-click="checkall()"></th>
  <th>Nama Lengkap</th>
  <th>Tempat Lahir</th>
  <th>Tanggal Lahir </th>
  <th>Jenis Kelamin</th>
  <th>Kewarganegaraan</th>
  <th>Alamat</th>
  <th>Telepon</th>
  <th>Email</th>
  <th>Pendidikan Terakhir</th>
  <th>Jurusan</th>
  <th>Tahun Lulus</th>
  <th>Action</th>
  </thead>
  <tbody>
  <tr ng-repeat="item in anggotaasesi">
  <td> <input type="checkbox"  checklist-model="user.hapusanggotaasesi" checklist-value="item.id" role></td>
  <td>{{item.nama}}</td>
  <td>{{item.tempat_lahir}}</td>
  <td>{{item.tgl_lahir}}</td>
  <td>{{item.jenis_kelamin}}</td>
  <td>{{item.kewarganegaraan}}</td>
  <td>{{item.alamat}}</td>
  <td>{{item.telp}}</td>
  <td>{{item.email}}</td>
  <td>{{item.pendidikan_terakhir}}</td>
  <td>{{item.jurusan}}</td>
  <td>{{item.tahun_lulus}}</td>
  <td><button class="btn btn-success" data-toggle="modal" ng-click="edit(item)"data-target="#myModal1"><i class="fa fa-edit"></i></button></td>
  </tr>
  </tbody>
  </table>
    </div>
    </div>