 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Jadwal Asesment
        <small>Jadwal Asesment</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class =" fa fa-users"></i>Data User</li>
      </ol>
    </section>
    <div class="box box-primary">
    <div class ="box-header">
    <button class="btn btn-primary"><i class="fa fa-user-plus"></i> Tambah User</button>
    </div>
    <div class="box-body">

  <table datatable="ng" dt-columns="dtColumns"dt-options="dtOptions"class="table table-bordered table-striped">
  <thead>
  <th><input type="checkbox" ng-click="checkall()"></th>
  <th>Nama </th>
  <th>Email</th>
  <th>User </th>
  <th>Service Charge</th>
  <th>Action</th>
  </thead>
  <tbody>
  <tr ng-repeat="item in harga">
  <td> <input type="checkbox"  checklist-model="user.hapusharga" checklist-value="item._id" role></td>
  <td>{{item.nama}}</td>
  <td>{{item.pembayaran}}</td>
  <td>{{item.harga}}</td>
  <td>{{item.service}}</td>
  <td><button class="btn btn-success" data-toggle="modal" ng-click="edit(item)"data-target="#myModal1"><i class="fa fa-edit"></i></button></td>
  </tr>
  </tbody>
  </table>
    </div>
    </div>