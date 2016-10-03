 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
        <small>Data User</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class =" fa fa-users"></i>Data User</li>
      </ol>
    </section>
    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input Data User</h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label>Nama Depan</label>
      <input type="text" class="form-control" ng-model="firstname">
      </div>
      <div class="form-group">
      <label>Nama Belakang</label>
      <input type="text" class="form-control" ng-model="lastname">
      </div>
      <div class="form-group">
      <label>Email</label>
      <input type="text" class="form-control" ng-model="email">
      </div>
      <div class="form-group">
      <label>Password</label>
      <input type="text" class="form-control" ng-model="password">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" ng-click="simpan()"><i class="fa fa-send"></i> Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <div class="box box-primary">
    <div class ="box-header">
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i> Tambah User</button>
    <button class="btn btn-danger" ng-click="hapus()"><i class="fa fa-trash"></i> Hapus User</button>
    </div>
    <div class="box-body">

  <table datatable="ng" dt-columns="dtColumns"dt-options="dtOptions"class="table table-bordered table-striped">
  <thead>
  <th><input type="checkbox" ng-click="checkall()"></th>
  <th>Nama </th>
  <th>Email</th>
  <th>Nama Depan </th>
  <th>Nama belakang</th>
  <th>Action</th>
  </thead>
  <tbody>
  <tr ng-repeat="item in datauser">
  <td> <input type="checkbox"  checklist-model="user.hapusdatauser" checklist-value="item.id" role></td>
  <td>{{item.username}}</td>
  <td>{{item.email}}</td>
  <td>{{item.first_name}}</td>
  <td>{{item.last_name}}</td>
  <td><button class="btn btn-success" data-toggle="modal" ng-click="edit(item)"data-target="#myModal1"><i class="fa fa-edit"></i></button></td>
  </tr>
  </tbody>
  </table>
    </div>
    </div>