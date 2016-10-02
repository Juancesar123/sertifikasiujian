 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Jadwal Asesment
        <small>Jadwal Asesment</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class =" fa fa-users"></i>Data jadwal assessment</li>
      </ol>
    </section>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input Jadwal</h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label>Nama Jadwal</label>
      <input type="text" class="form-control" ng-model="jadwal">
      </div>
       <div class="form-group">
      <label>Tanggal</label>
      <input type="text" class="form-control" ng-model="tanggal">
      </div>
       <div class="form-group">
      <label>Tanggal Akhir</label>
      <input type="text" class="form-control" ng-model="tanggalakhir">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" ng-click="simpan()"><i class="fa fa-send"></i> Kirim</button>
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
        <h4 class="modal-title">Ubah Data Jadwal</h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label>Nama Jadwal</label>
      <input type="text" class="form-control" ng-model="jadwal">
      </div>
       <div class="form-group">
      <label>Tanggal</label>
      <input type="date" class="form-control" ng-model="tanggal">
      </div>
       <div class="form-group">
      <label>Tanggal Akhir</label>
      <input type="date" class="form-control" ng-model="tanggalakhir">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" ng-click="actionedit()"><i class="fa fa-send"></i> Kirim</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

    <div class="box box-primary">
    <div class ="box-header">
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i> Tambah Jadwal</button>
    <button class="btn btn-danger" ng-click="hapus()"><i class="fa fa-trash"></i> Hapus Jadwal</button>
    </div>
    <div class="box-body">

  <table datatable="ng" dt-columns="dtColumns" dt-options="dtOptions" class="table table-bordered table-striped">
  <thead>
  <th><input type="checkbox" ng-click="checkall()"></th>
  <th>Jadwal </th>
  <th>Tanggal</th>
  <th>Tanggal Akhir</th>
  <th>Persyaratan</th>
  <th>Action</th>
  </thead>
  <tbody>
  <tr ng-repeat="item in jadwalasesment">
  <td> <input type="checkbox"  checklist-model="user.hapusjadwalasesment" checklist-value="item.id" role></td>
  <td>{{item.nama}}</td>
  <td>{{item.tanggal}}</td>
  <td>{{item.tanggal_akhir}}</td>
  <td>{{item.persyaratan}}</td>
  <td><button class="btn btn-success" data-toggle="modal" ng-click="edit(item)"data-target="#myModal1"><i class="fa fa-edit"></i></button></td>
  </tr>
  </tbody>
  </table>
    </div>
    </div>