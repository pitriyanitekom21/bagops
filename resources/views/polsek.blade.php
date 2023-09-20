
@extends('layouts.app')
@section('title')
@section('content')
<center>
<form action="{{ url('submit') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="form-group text-left">
                        <label>Alamat Polsek</label>
                        <select class="form-control" name="alamat_polsek">
                            <option value="polsek cikole">Polsek Cikole</option>
                            <option value="polsek citamiang">Polsek Citamiang</option>
                            <option value="polsek warudoyong">Polsek Warudoyong</option>
                            <option value="polsek gunungpuyuh">Polsek Gunungpuyuh</option>
                            <option value="polsek baros">Polsek Baros</option>
                            <option value="polsek ciberem">Polsek Ciberem</option>
                            <option value="polsek sukalarang">Polsek Sukalarang</option>
                            <option value="polsek cireunghas">Polsek Cireunghas</option>
                            <option value="polsek kebonpedes">Polsek Kebonpedes</option>
                            <option value="polsek lembursitu">Polsek Lembursitu</option>
                            <option value="polsek sukabumi">Polsek Sukabumi</option>
                            <option value="polsek sukaraja">Polsek Sukaraja</option>
                            <option value="polsek gunungguruh">Polsek Gunungguruh</option>
                            <option value="polsek cisaat">Polsek Cisaat</option>
                            <option value="polsek kadudampit">Polsek Kadudampit</option>
                        </select>
                    </div>
                    <div class="form-group text-left">
                        <label>Bulan</label>
                         <select class="form-control" name="bulan">
                            <option value="januari">Januari</option>
                            <option value="februari">Februari</option>
                            <option value="maret">Maret</option>
                            <option value="april">April</option>
                            <option value="mei">Mei</option>
                            <option value="juni">Juni</option>
                            <option value="juli">Juli</option>
                            <option value="agustus">Agustus</option>
                            <option value="september">September</option>
                            <option value="oktober">Oktober</option>
                            <option value="november">November</option>
                            <option value="desember">Desember</option>
                        </select>
                    </div>
                   <div class="form-grup text-left">
                    <label >Dokumen</label>
                    <input type="file" class="form-control" name="dokumen" value="{{ old('dokumen') }}">

                    @error('dokumen')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $massage }}</strong>
                    </span>
                        
                    @enderror
                   </div>
                   <br>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                        <button class="btn btn-dark" type="submit"> Submit </button>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>
</div>
</center>
@endsection

{{--  --}}