    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Spirometri*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Pemeriksaan Spirometri</label>
        <select name="spirometri" class="form-control" required>
            <option value="normal" {{ old('spirometri') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('spirometri') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Elektro Kardiografi (EKG)*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Istirahat</label>
        <input type="text" class="form-control" name="istirahat" value="{{ old('istirahat')}}">
    </div>
    <div class="form-group">
        <label for="">MST</label>
        <input type="text" class="form-control" name="mst" value="{{ old('mst')}}">
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Radiologis / Rontgen*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Thorax</label>
        <input type="text" class="form-control" name="thorax" value="{{ old('thorax')}}">
    </div>
    <div class="form-group">
        <label for="">Tulang Panjang (Hanya Untuk Penyelam dan Rescue Tim)</label>
        <input type="text" class="form-control" name="tulang_panjang" value="{{ old('tulang_panjang')}}">
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Psikologis / Psikiatri*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Pemeriksaan Psikologis / Psikiatri</label>
        <select name="psikologis" class="form-control" required>
            <option value="normal" {{ old('psikologis') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('psikologis') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Tes Toleransi Oksigen*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Tes Toleransi Oksigen</label>
        <input type="text" class="form-control" name="toleransi_oksigen" value="{{ old('toleransi_oksigen')}}">
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Lain*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for=""><i>Speech (Deck/Navigational Officer and Radio Officer)</i></label>
        <br>
        <label for="">Apakah Cara Bicara Tidak Terganggu Untuk Komunikasi Suara Normal</label>
        <select name="cara_bicara_tidak_terganggu" class="form-control" required>
            <option value="ya" {{ old('cara_bicara_tidak_terganggu') == 'ya' ? 'selected':''}}>Ya</option>
            <option value="tidak" {{ old('cara_bicara_tidak_terganggu') == 'tidak' ? 'selected':''}}>Tidak</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Pemohon Kemungkinan Menderita Penyakit Akibat Pekerjaan Di Laut atau
            Penyakit yang Membahayakan Orang Lain Di Kapal
        </label>
        <select name="menderita_penyakit" class="form-control" required>
            <option value="tidak" {{ old('menderita_penyakit') == 'tidak' ? 'selected':''}}>Tidak</option>
            <option value="ya" {{ old('menderita_penyakit') == 'ya' ? 'selected':''}}>Ya</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Deskripsi</label>
        <textarea name="deskripsi_menderita_penyakit" class="form-control" rows="3">{{ old('deskripsi_cara_bicara')}}</textarea>
        <span class="text-secondary" style="font-size: 14px"><i>Maksimal 65 karakter</i></span>
    </div>
    <div class="form-group">
        <label for="">Mengonsumsi Obat - Obatan tanpa Resep Dokter atau dengan Resep Dokter</label>
        <select name="mengonsumsi_obat" class="form-control" required>
            <option value="tidak" {{ old('mengonsumsi_obat') == 'tidak' ? 'selected':''}}>Tidak</option>
            <option value="ya" {{ old('mengonsumsi_obat') == 'ya' ? 'selected':''}}>Ya</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Deskripsi</label>
        <textarea name="deskripsi_tanpa_obat" class="form-control" rows="3">{{ old('deskripsi_tanpa_obat')}}</textarea>
        <span class="text-secondary" style="font-size: 14px"><i>Maksimal 65 karakter</i></span>
    </div>
    <div class="form-group">
        <label for="">Sehat Untuk Melaksanakan Tugas Jaga</label>
        <select name="sehat_untuk_jaga" class="form-control" required>
            <option value="ya" {{ old('sehat_untuk_jaga') == 'ya' ? 'selected':''}}>Ya</option>
            <option value="tidak" {{ old('sehat_untuk_jaga') == 'tidak' ? 'selected':''}}>Tidak</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Deskripsi</label>
        <textarea name="deskripsi_sehat" class="form-control" rows="3">{{ old('deskripsi_sehat')}}</textarea>
        <span class="text-secondary" style="font-size: 14px"><i>Maksimal 65 karakter</i></span>
    </div>
    <div class="form-group">
        <label for="">Catatan Tidak Memiliki Keterbatasan dan Masalah Kesehatan</label>
        <textarea name="catatan_kesehatan" class="form-control" rows="3">{{ old('catatan_kesehatan')}}</textarea>
        <span class="text-secondary" style="font-size: 14px"><i>Hanya Diisi jika ada catatan khusus, Maksimal 40 karakter</i></span>
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Kesimpulan*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Kesimpulan</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kesimpulan" value="SEHAT, Tidak Ada Batasan Pekerjaan" {{ old('kesimpulan') == 'SEHAT, Tidak Ada Batasan Pekerjaan' ? 'checked':''}}>
            <label class="form-check-label">SEHAT, Tidak Ada Batasan Pekerjaan <i>(fit for unrestricted sea service)</i></label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kesimpulan" value="SEHAT, Tidak Ada Batasan Pekerjaan Tetapi Memerlukan Pengawasan Medis" {{ old('kesimpulan') == 'SEHAT, Tidak Ada Batasan Pekerjaan Tetapi Memerlukan Pengawasan Medis' ? 'checked':''}}>
            <label class="form-check-label">SEHAT, Tidak Ada Batasan Pekerjaan Tetapi Memerlukan Pengawasan Medis <i>(fit for unrestricted sea service, subject to medical surveilance)</i></label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kesimpulan" value="SEHAT, Dengan Batasan Pekerjaan" {{ old('kesimpulan') == 'SEHAT, Dengan Batasan Pekerjaan' ? 'checked':''}}>
            <label class="form-check-label">SEHAT, Dengan Batasan Pekerjaan <i>(fit for sea service with restrictions)</i></label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kesimpulan" value="TIDAK SEHAT, Sementara" {{ old('kesimpulan') == 'TIDAK SEHAT, Sementara' ? 'checked':''}}>
            <label class="form-check-label">TIDAK SEHAT, Sementara <i>(temporarily unfit for sea service)</i></label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kesimpulan" value="TIDAK SEHAT, Permanen" {{ old('kesimpulan') == 'TIDAK SEHAT, Permanen' ? 'checked':''}}>
            <label class="form-check-label">TIDAK SEHAT, Permanen <i>(permanently unfit for sea service)</i></label>
        </div>
    </div>
    <div class="form-group">
        <label for="">Remarks</label>
        <textarea name="remarks" class="form-control" rows="3">{{ old('remarks')}}</textarea>
        <span class="text-secondary" style="font-size: 14px"><i>Ditampilkan Pada Lembar Status Kesehatan, Maksimal 150 Karakter</i></span>
    </div>
    <div class="form-group">
        <label for="">Catatan Hasil Rujukan</label>
        <textarea name="hasil_rujukan" class="form-control" rows="3">{{ old('hasil_rujukan')}}</textarea>
    </div>
