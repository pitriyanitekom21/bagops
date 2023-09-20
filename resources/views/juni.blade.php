@extends('layouts.app')
@section('title')
@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Jadwal Piket Juni</h4>
                    </div>
                    @php
                    $no = 1 ;
                    @endphp
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                        @csrf
                            @if (session('success'))
                            <div id="success-alert" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            {{-- <tr class="table-info"> --}}
                            <tr style="background-color: black; color: white;">
                                <th>NO</th>
                                <th>Alamat Polsek</th>
                                <th>Bulan</th>
                                <th>Dokumen</th>
                                <th>Hapus</th>
                            </tr>

                            {{-- </tr> --}}
                            @if ($datajuni)
                            @foreach ($datajuni as $pitri)
                            <tr class="table-danger">
                                <th>{{ $no++}}</th>
                                <th>{{ $pitri->alamat_polsek}}</th>
                                <th>{{ $pitri->bulan}}</th>
                                <th>
                                    <a href="{{ asset('storage/' . $pitri->dokumen) }}" download>
                                        <button class="btn btn-warning" type="button">Download</button>
                                    </a>
                                </th>
                                <th>
                                    <a href="{{url('deleteJun/'.$pitri -> idpengajuan)}}" style="text-decoration:none" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                </th>                           
                            </tr>
                            @endforeach
                            @endif
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection