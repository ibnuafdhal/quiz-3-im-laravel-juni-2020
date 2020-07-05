@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="ml-3 mt3">
            <h3>Detail Artikel : </h3>
            <table class="table table-bordered">
                <tr>
                    <td class="font-weight-bold">Judul Artikel</td>
                    <td>:</td>
                    <td>{{ $artikel->judul }} </td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Isi Artikel</td>
                    <td>:</td>
                    <td>{{ $artikel->isi_pertanyaan }} </td>
                </tr>
                <!-- <tr>
                    <td class="font-weight-bold">Tanggal Di Buat</td>
                    <td>:</td>
                    <td>//{{\Carbon\Carbon::parse($artikel->created_at)->format('d F Y/H:i')}}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Tanggal Di Edit</td>
                    <td>:</td>
                    <td>//{{\Carbon\Carbon::parse($artikel->updated_at)->format('d F Y/H:i')}} </td>
                </tr> -->
            </table>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="ml-3 mt-3">
            <h4>Daftar Jawaban</h4>
            <!--  -->
        </div>
    </div>
</div>
@endsection