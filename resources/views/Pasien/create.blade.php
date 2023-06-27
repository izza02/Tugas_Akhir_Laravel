@extends('layouts.master')

@section('content')

    <div class="container">
    <h1>Create Pasien</h1>

         <form action="/pasien/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label"> NO</label>
                <input type="text" name="no" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">   
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label"> NOMOR RM</label>
                <input type="text" name="nomor_rm" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">   
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label"> NAMA PASIEN</label>
                <input type="text" name="nama_pasien" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">   
            </div>
            
            <select class="form-select" name="jenis_kelamin">
                 <option value="">Pilih Jenis Kelamin</option>
                 <option value="L">Laki-Laki</option>
                 <option value="P">Perempuan</option>
            </select> <br>
           
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label"> ALAMAT </label>
                <textarea class="form-control" name="alamat" rows="10"></textarea><br>
            </div>
            <input type="submit" name="submit" class="btn btn-info" value="save">

        </form>
    </div>
    
@endsection   