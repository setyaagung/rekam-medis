<div class="form-group">
    <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Spirometri*</i></u></b></h4>
</div>
<div class="form-group">
    <label for="">Pemeriksaan Spirometri</label>
    <select name="spirometri" class="form-control" required>
        <option value="normal" {{ $pu->spirometri == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pu->spirometri == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Elektro Kardiografi (EKG)*</i></u></b></h4>
</div>
<div class="form-group">
    <label for="">Istirahat</label>
    <input type="text" class="form-control" name="istirahat" value="{{ $pu->istirahat}}">
</div>
<div class="form-group">
    <label for="">MST</label>
    <input type="text" class="form-control" name="mst" value="{{ $pu->mst}}">
</div>
<div class="form-group">
    <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Radiologis / Rontgen*</i></u></b></h4>
</div>
<div class="form-group">
    <label for="">Thorax</label>
    <input type="text" class="form-control" name="thorax" value="{{ $pu->thorax}}">
</div>
<div class="form-group">
    <label for="">Tulang Panjang (Hanya Untuk Penyelam dan Rescue Tim)</label>
    <input type="text" class="form-control" name="tulang_panjang" value="{{ $pu->tulang_panjang}}">
</div>
<div class="form-group">
    <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Psikologis / Psikiatri*</i></u></b></h4>
</div>
<div class="form-group">
    <label for="">Pemeriksaan Psikologis / Psikiatri</label>
    <select name="psikologis" class="form-control" required>
        <option value="normal" {{ $pu->psikologis == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pu->psikologis == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <h4 class="font-weight-bold text-primary"><b><u><i>Tes Toleransi Oksigen*</i></u></b></h4>
</div>
<div class="form-group">
    <label for="">Tes Toleransi Oksigen</label>
    <input type="text" class="form-control" name="toleransi_oksigen" value="{{ $pu->toleransi_oksigen}}">
</div>
<div class="form-group">
    <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Lain*</i></u></b></h4>
</div>
<div class="form-group">
    <label for=""><i>Speech (Deck/Navigational Officer and Radio Officer)</i></label>
    <br>
    <label for="">Apakah Cara Bicara Tidak Terganggu Untuk Komunikasi Suara Normal</label>
    <select name="cara_bicara_tidak_terganggu" class="form-control" required>
        <option value="ya" {{ $pu->cara_bicara_tidak_terganggu == 'ya' ? 'selected':''}}>Ya</option>
        <option value="tidak" {{ $pu->cara_bicara_tidak_terganggu == 'tidak' ? 'selected':''}}>Tidak</option>
    </select>
</div>
<div class="form-group">
    <label for="">Pemohon Kemungkinan Menderita Penyakit Akibat Pekerjaan Di Laut atau
        Penyakit yang Membahayakan Orang Lain Di Kapal
    </label>
    <select name="menderita_penyakit" class="form-control" required>
        <option value="tidak" {{ $pu->menderita_penyakit == 'tidak' ? 'selected':''}}>Tidak</option>
        <option value="ya" {{ $pu->menderita_penyakit == 'ya' ? 'selected':''}}>Ya</option>
    </select>
</div>
<div class="form-group">
    <label for="">Deskripsi</label>
    <textarea name="deskripsi_menderita_penyakit" class="form-control" rows="3">{{ $pu->deskripsi_cara_bicara}}</textarea>
    <span class="text-secondary" style="font-size: 14px"><i>Maksimal 65 karakter</i></span>
</div>
<div class="form-group">
    <label for="">Mengonsumsi Obat - Obatan tanpa Resep Dokter atau dengan Resep Dokter</label>
    <select name="mengonsumsi_obat" class="form-control" required>
        <option value="tidak" {{ $pu->mengonsumsi_obat == 'tidak' ? 'selected':''}}>Tidak</option>
        <option value="ya" {{ $pu->mengonsumsi_obat == 'ya' ? 'selected':''}}>Ya</option>
    </select>
</div>
<div class="form-group">
    <label for="">Deskripsi</label>
    <textarea name="deskripsi_tanpa_obat" class="form-control" rows="3">{{ $pu->deskripsi_tanpa_obat}}</textarea>
    <span class="text-secondary" style="font-size: 14px"><i>Maksimal 65 karakter</i></span>
</div>
<div class="form-group">
    <label for="">Sehat Untuk Melaksanakan Tugas Jaga</label>
    <select name="sehat_untuk_jaga" class="form-control" required>
        <option value="ya" {{ $pu->sehat_untuk_jaga == 'ya' ? 'selected':''}}>Ya</option>
        <option value="tidak" {{ $pu->sehat_untuk_jaga == 'tidak' ? 'selected':''}}>Tidak</option>
    </select>
</div>
<div class="form-group">
    <label for="">Deskripsi</label>
    <textarea name="deskripsi_sehat" class="form-control" rows="3">{{ $pu->deskripsi_sehat}}</textarea>
    <span class="text-secondary" style="font-size: 14px"><i>Maksimal 65 karakter</i></span>
</div>
<div class="form-group">
    <label for="">Catatan Tidak Memiliki Keterbatasan dan Masalah Kesehatan</label>
    <textarea name="catatan_kesehatan" class="form-control" rows="3">{{ $pu->catatan_kesehatan}}</textarea>
    <span class="text-secondary" style="font-size: 14px"><i>Hanya Diisi jika ada catatan khusus, Maksimal 40 karakter</i></span>
</div>
<div class="form-group">
    <h4 class="font-weight-bold text-primary"><b><u><i>Kesimpulan*</i></u></b></h4>
</div>
<div class="form-group">
    <label for="">Kesimpulan</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="kesimpulan" value="SEHAT, Tidak Ada Batasan Pekerjaan" {{ $pu->kesimpulan == 'SEHAT, Tidak Ada Batasan Pekerjaan' ? 'checked':''}}>
        <label class="form-check-label">SEHAT, Tidak Ada Batasan Pekerjaan <i>(fit for unrestricted sea service)</i></label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="kesimpulan" value="SEHAT, Tidak Ada Batasan Pekerjaan Tetapi Memerlukan Pengawasan Medis" {{ $pu->kesimpulan == 'SEHAT, Tidak Ada Batasan Pekerjaan Tetapi Memerlukan Pengawasan Medis' ? 'checked':''}}>
        <label class="form-check-label">SEHAT, Tidak Ada Batasan Pekerjaan Tetapi Memerlukan Pengawasan Medis <i>(fit for unrestricted sea service, subject to medical surveilance)</i></label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="kesimpulan" value="SEHAT, Dengan Batasan Pekerjaan" {{ $pu->kesimpulan == 'SEHAT, Dengan Batasan Pekerjaan' ? 'checked':''}}>
        <label class="form-check-label">SEHAT, Dengan Batasan Pekerjaan <i>(fit for sea service with restrictions)</i></label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="kesimpulan" value="TIDAK SEHAT, Sementara" {{ $pu->kesimpulan == 'TIDAK SEHAT, Sementara' ? 'checked':''}}>
        <label class="form-check-label">TIDAK SEHAT, Sementara <i>(temporarily unfit for sea service)</i></label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="kesimpulan" value="TIDAK SEHAT, Permanen" {{ $pu->kesimpulan == 'TIDAK SEHAT, Permanen' ? 'checked':''}}>
        <label class="form-check-label">TIDAK SEHAT, Permanen <i>(permanently unfit for sea service)</i></label>
    </div>
</div>
<div class="form-group">
    <label for="">Remarks</label>
    <textarea name="remarks" class="form-control" rows="3">{{ $pu->remarks}}</textarea>
    <span class="text-secondary" style="font-size: 14px"><i>Ditampilkan Pada Lembar Status Kesehatan, Maksimal 150 Karakter</i></span>
</div>
<div class="form-group">
    <label for="">Catatan Hasil Rujukan</label>
    <textarea name="hasil_rujukan" class="form-control" rows="3">{{ $pu->hasil_rujukan}}</textarea>
</div>
