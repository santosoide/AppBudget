@extends('layouts.default')
@section('title','Data User')
@section('content')
<div class="row" ng-app="myApp">
    <ul>
        <button type="button" class="btn btn-sm btn-default" ui-sref="list">List</button>
        <button type="button" class="btn btn-sm btn-default" ui-sref="tambah">Tambah</button>
        <button type="button" class="btn btn-sm btn-default" ui-sref="edit">Edit</button>
    </ul>
    <div ui-view class="col-md-8"></div>
</div>
@stop
@section('scripts')
<script src="app/user/route.js"></script>
<script src="app/user/controllers/UserListCtrl.js"></script>
<script src="app/user/controllers/UserAddCtrl.js"></script>
<script src="app/user/controllers/UserEditCtrl.js"></script>
@stop