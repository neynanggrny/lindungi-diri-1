@extends('layout.main')

@section('container')

<div class="container">
    <div class="card" style="margin-top: 50px;">
        <div class="card-body">
            <form>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="user_name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Jam</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nik" class="col-sm-2 col-form-label">Lokasi Yang Dikunjungi</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="nik">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nik" class="col-sm-2 col-form-label">Suhu Tubuh</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="nik">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection