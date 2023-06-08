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
    <div class="col-4">
      <a class="btn btn-primary" href="{{ url('dashboard/member/create') }}" role="button"><i class="mdi mdi-plus-circle-outline"></i> Tambah Member</a>
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
                <th>action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($members as $members) 
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $members->name }}</td>
              <td>{{ $members->email }}</td>
              <td>{{ $members->gender }}</td>
              <td>{{ $members->status }}</td>
              <td>{{ $members->address }}</td>
              <td>
                <a class="btn btn-success" >View</a>
                <a class="btn btn-warning" >Edit</a>
                <form action="{{ url('/dashboard/member/destroy',$members->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn sm" onclick="if(!confirm('Anda Yakin Hapus Data Member ?')) {return false}"
                  >Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection