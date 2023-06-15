@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
<div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-book"></i>
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
    <div class="card">
        <div class="card-body">
            <h3>Tambah Member</h3><br />
            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- form validasi -->
            <form class="forms-sample" action="{{ url('/dashboard/member/update',$member->id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group row">
                    <label for="title" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Name" value="{{ $member->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isbn" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Email" value="{{ $member->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_0" type="radio" class="custom-control-input"
                                value="Pria" {{ $member->gender == 'Pria' ? 'checked' : ''}}>
                            <label for="gender_0" class="custom-control-label">Pria</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_1" type="radio" class="custom-control-input"
                                value="Wanita" {{ $member->gender == 'Wanita' ? 'checked' : ''}}>
                            <label for="gender_1" class="custom-control-label">Wanita</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok" class="col-sm-4 col-form-label">Status</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="status" name="status"
                            placeholder="Status" value="{{ $member->status }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok" class="col-sm-4 col-form-label">Address</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="address" name="address"
                            placeholder="Address" value="{{ $member->address }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <button type="reset" class="btn btn-light">Reset</button>
            </form>
        </div>
    </div>
</div>
@endsection