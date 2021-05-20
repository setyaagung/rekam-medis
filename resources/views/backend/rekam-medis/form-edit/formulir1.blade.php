<div class="form-group">
    <label for="">Nama Taruna</label>
    <select class="form-control taruna" name="id_taruna" style="width: 100%;" required>
        <option value=""></option>
        @foreach ($tarunas as $taruna)
            <option value="{{ $taruna->id_taruna}}" {{ $rm->id_taruna == $taruna->id_taruna ? 'selected':''}}>{{ $taruna->nama_taruna}} - {{ $taruna->nit}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Nama Dokter Pemeriksa</label>
    <select class="form-control dokter" name="id_dokter" style="width: 100%;" required>
        <option value=""></option>
        @foreach ($dokters as $dokter)
            <option value="{{ $dokter->id_dokter}}" {{ $rm->id_dokter == $dokter->id_dokter ? 'selected':''}}>{{ $dokter->nama_dokter}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Nomor Catatan Rekam Medis</label>
    <input type="text" class="form-control" name="no_rm" value="{{ $rm->no_rm}}" required>
</div>
<div class="form-group">
    <label for="">Sertifikasi Untuk</label>
    <select class="form-control sertifikasi" name="id_sertifikat" style="width: 100%;" required>
        <option value=""></option>
        @foreach ($sertifikats as $sertifikat)
            <option value="{{ $sertifikat->id_sertifikat}}" {{ $rm->id_sertifikat == $sertifikat->id_sertifikat ? 'selected':''}}>{{ strtoupper($sertifikat->nama_sertifikat)}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Jabatan</label>
    <select class="form-control jabatan" name="id_jabatan" style="width: 100%;" required>
        <option value=""></option>
        @foreach ($jabatans as $jabatan)
            <option value="{{ $jabatan->id_jabatan}}" {{ $rm->id_jabatan == $jabatan->id_jabatan ? 'selected':''}}>{{ strtoupper($jabatan->nama_jabatan)}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Tanggal Ujian</label>
    @if ($rm->tanggal_ujian == null)
    <input type="date" class="form-control" name="tanggal_ujian">
    @else
        <input type="date" class="form-control" name="tanggal_ujian" value="{{ date('Y-m-d',strtotime($rm->tanggal_ujian))}}">
    @endif
    <span class="text-secondary" style="font-size: 14px"><i>NB: Untuk data rekam medis yang akan dilengkapi kembali atau pelaut membutuhkan tindakan medis lanjutan, silahkan pilih opsi kedua</i></span>
</div>
<div class="form-group">
    <label for="">Masa Berlaku</label>
    <input type="date" class="form-control" name="masa_berlaku" value="{{ date('Y-m-d',strtotime($rm->masa_berlaku))}}" required>
</div>
<div class="form-group">
    <label for="">Anamnese</label>
    <textarea name="anamnese" class="form-control" name="anamnese" rows="3">{{ $rm->anamnese}}</textarea>
</div>
<div class="form-group">
    <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Fisik*</i></u></b></h4>
</div>
<div class="form-group">
    <label for="">Berat Badan (kg)</label>
    <input type="number" class="form-control" name="berat_badan" value="{{ $pf->berat_badan}}">
</div>
<div class="form-group">
    <label for="">Tinggi Badan (cm)</label>
    <input type="number" class="form-control" name="tinggi_badan" value="{{ $pf->tinggi_badan}}">
</div>
<div class="form-group">
    <label for="">Tekanan Darah (mm/Hg)</label>
    <input type="text" class="form-control" name="tekanan_darah" value="{{ $pf->tekanan_darah}}">
</div>
