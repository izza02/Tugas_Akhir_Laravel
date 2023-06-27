@extends('layouts.master')

@section('content')
<div class="container">
<h1>Edit Data Pasien</h1>

<form action="/pasien/{{$pasien->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
                <label for="exampleInputEmail" class="form-label"> NO</label>
                <input type="text" name="no" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" value="{{$pasien->no}}">   
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label"> NOMOR RM</label>
                <input type="text" name="nomor_rm" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" value="{{$pasien->nomor_rm}}">   
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label"> NAMA PASIEN</label>
                <input type="text" name="nama_pasien" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" value="{{$pasien->nama_pasien}}">   
            </div>
            
             <select class="form-select" name="jenis_kelamin">
                 <option value="">Pilih Jenis Kelamin</option>
                 <option value="L" @if($pasien->jenis_kelamin == "L") selected @endif> Laki-Laki</option>
                 <option value="P" @if($pasien->jenis_kelamin == "P") selected @endif>Perempuan</option>
            </select> <br>
           
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label"> ALAMAT </label>
                <textarea class="form-control" name="alamat" rows="10"> {{$pasien->alamat}}</textarea><br>
            </div>
            <input type="submit" name="submit" class="btn btn-info" value="Update">

</form>
</div>

@endsection