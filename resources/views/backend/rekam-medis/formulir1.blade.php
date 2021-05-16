<div class="form-group">
    <label for="">Nama Taruna</label>
    <select class="form-control taruna" name="id_taruna" style="width: 100%;" required>
        <option value=""></option>
        @foreach ($tarunas as $taruna)
            <option value="{{ $taruna->id_taruna}}">{{ $taruna->nama_taruna}} - {{ $taruna->nit}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Nama Dokter Pemeriksa</label>
    <select class="form-control dokter" name="id_dokter" style="width: 100%;" required>
        <option value=""></option>
        @foreach ($dokters as $dokter)
            <option value="{{ $dokter->id_dokter}}">{{ $dokter->nama_dokter}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Nomor Catatan Rekam Medis</label>
    <input type="text" class="form-control" name="no_rekam_medis" value="{{ old('no_rekam_medis')}}" required>
</div>
<div class="form-group">
    <label for="">Sertifikasi Untuk</label>
    <select class="form-control" name="id_sertifikasi" required>
        <option value=""></option>
    </select>
</div>
<div class="form-group">
    <label for="">Jabatan</label>
    <select class="form-control" name="id_jabatan" required>
        <option value=""></option>
    </select>
</div>
<div class="form-group">
    <label for="">Tanggal Ujian</label>
    <input type="date" class="form-control" name="tanggal_ujian">
    <span class="text-secondary" style="font-size: 14px">NB: Untuk data rekam medis yang akan dilengkapi kembali atau pelaut membutuhkan tindakan medis lanjutan, silahkan pilih opsi kedua</span>
</div>
<div class="form-group">
    <label for="">Masa Berlaku</label>
    <input type="date" class="form-control" name="masa_berlaku">
</div>
<div class="form-group">
    <label for="">Anamnese</label>
    <textarea name="anamnese" class="form-control" name="anamnese" rows="3"></textarea>
</div>
<div class="form-group">
    <label for="">Berat Badan (kg)</label>
    <input type="number" class="form-control" name="berat_badan">
</div>
<div class="form-group">
    <label for="">Tinggi Badan (cm)</label>
    <input type="number" class="form-control" name="tinggi_badan">
</div>
<div class="form-group">
    <label for="">Tekanan Darah (mm/Hg)</label>
    <input type="text" class="form-control" name="tekanan_darah">
</div>
