@extends('layouts.app')

@section('title', 'Data Jadwal Piket Agustus')

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Jadwal Piket Agustus</h4>
            </div>
            @php
            $no = 1;
            @endphp
            <div class="card-body">
                @if (session('success'))
                <div id="success-alert" class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped" id="table1">
                        @csrf
                            <tr style="background-color: black; color: white;">
                                <th>NO</th>
                                <th>Alamat Polsek</th>
                                <th>Bulan</th>
                                <th>Dokumen</th>
                                <th>Hapus</th>
                            </tr>
                        
                        <tbody>
                            @if ($dataagustus)
                            @foreach ($dataagustus as $pitri)
                            <tr class="table-danger">
                                <td>{{ $no++ }}</td>
                                <td>{{ $pitri->alamat_polsek }}</td>
                                <td>{{ $pitri->bulan }}</td>
                                <td>
                                    <a href="{{ asset('storage/' . $pitri->dokumen) }}" download>
                                        <button class="btn btn-warning" type="button">Download</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ url('deleteAg/'.$pitri->idpengajuan) }}" style="text-decoration:none" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
