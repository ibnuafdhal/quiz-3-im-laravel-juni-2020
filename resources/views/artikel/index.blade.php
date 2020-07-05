@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>List Artikel</h4>
        <a href="{{url('artikel/create')}}" class="btn btn-primary" title="tambah pertanyaan">Buat Artikel</a>
    </div>
    <div class="card-body">
        <table id="datatable" class="table table-bordered table-striped">
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artikel as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->judul}}</td>
                    <td>{{$data->isi}}</td>
                    <td>
                          <div class="d-flex justify-content-center">
                              <!-- <a href="{{url('jawaban/'.$data->id.'/jawab')}}" class="btn btn-warning btn-sm rounded-pill mx-2" title="jawab pertanyaan"><i class="fa fa-plus"></i></a>-->
                              <a href="{{url('artikel/'.$data->id)}}" class="btn btn-success btn-sm rounded-pill mx-2" title="lihat jawaban"><i class="fa fa-eye"></i></a> 
                              <a href="/artikel/{{$data->id}}" class="btn btn-success btn-sm rounded-pill mx-2" title="Detail">Detail</a>
                              
                          </div>
                      </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection
<script src="{{asset('/js/swal.min.js')}}"></script>
@push('scripts')

<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>

@endpush