@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Daftar Member
    </h3>
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav>
  </div>
  
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Daftar Member Tersedia</h4>
          <div class="table-responsive">
            <table class="table text-uppercase table-bordered">
              <thead class="table-success">
            <tr class="table-primary">
                <th>no</th>
                <th>nama</th>
                <th>email</th>
                <th>gender</th>              
                <th>status</th>
                <th>Address</th>
                <th>Data dibuat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $member->id }}</td>
              <td>{{ $member->name }}</td>
              <td>{{ $member->email }}</td>
              <td>{{ $member->gender }}</td>
              <td>{{ $member->status }}</td>
              <td>{{ $member->address }}</td>  
              <td>{{ $member->created_at }}</td>    
            </tr>
          </tbody>
        </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection