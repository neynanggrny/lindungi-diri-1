@extends('layout.main')

@section('container')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam</th>
      <th scope="col">Lokasi Yang Dikunjungi</th>
      <th scope="col">Suhu Tubuh</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>7/28/2022</td>
      <td>06.30</td>
      <td>SMK Taruna Bhakti</td>
      <td>36,1</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>7/27/2022</td>
      <td>06.45</td>
      <td>SMK Taruna Bhakti</td>
      <td>37,2</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>7/26/2022</td>
      <td>06.32</td>
      <td>SMK Taruna Bhakti</td>
      <td>36</td>
    </tr>
  </tbody>
</table>

@endsection