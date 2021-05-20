    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Spirometri*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Pemeriksaan Spirometri</label>
        <select name="spirometri" class="form-control" required>
            <option value="normal">Normal</option>
            <option value="tidak normal">Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Elektro Kardiografi (EKG)*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Istirahat</label>
        <input type="text" class="form-control" name="istirahat">
    </div>
    <div class="form-group">
        <label for="">MST</label>
        <input type="text" class="form-control" name="mst">
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Radiologis / Rontgen*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Thorax</label>
        <input type="text" class="form-control" name="thorax">
    </div>
    <div class="form-group">
        <label for="">Tulang Panjang (Hanya Untuk Penyelam dan Rescue Tim)</label>
        <input type="text" class="form-control" name="tulang_panjang">
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Psikologis / Psikiatri*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Pemeriksaan Psikologis / Psikiatri</label>
        <select name="psikologis" class="form-control" required>
            <option value="normal">Normal</option>
            <option value="tidak normal">Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Tes Toleransi Oksigen*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Tes Toleransi Oksigen</label>
        <input type="text" class="form-control" name="toleransi_oksigen">
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Lain*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for=""><i>Speech (Deck/Navigational Officer and Radio Officer)</i></label>
        <br>
        <label for="">Apakah Cara Bicara Tidak Terganggu Untuk Komunikasi Suara Normal</label>
        <select name="cara_bicara_tidak_terganggu" class="form-control" required>
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Pemohon kemungkinan menderita penyakit akibat pekerjaan di laut atau
            penyakit yang membahayakan orang lain di kapal
        </label>
        <select name="cara_bicara_tidak_terganggu" class="form-control" required>
            <option value="tidak">Tidak</option>
            <option value="ya">Ya</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Deskripsi</label>
        <textarea name="deskirpsi_cara_bicara" class="form-control" rows="3"></textarea>
        <span class="text-secondary" style="font-size: 14px"><i>Maksimal 65 karakter</i></span>
    </div>
    <div class="form-group">
        <label for="">Sehat Untuk Melaksanakan Tugas Jaga</label>
        <select name="sehat_untuk_jaga" class="form-control" required>
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Deskripsi</label>
        <textarea name="deskirpsi_sehat" class="form-control" rows="3"></textarea>
        <span class="text-secondary" style="font-size: 14px"><i>Maksimal 65 karakter</i></span>
    </div>
    <div class="form-group">
        <label for="">Catatan Tidak Memiliki Keterbatasan dan Masalah Kesehatan</label>
        <textarea name="catatan_kesehatan" class="form-control" rows="3"></textarea>
        <span class="text-secondary" style="font-size: 14px"><i>Hanya Diisi jika ada catatan khusus, Maksimal 40 karakter</i></span>
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Kesimpulan*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Kesimpulan</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kesimpulan" value="SEHAT, Tidak Ada Batasan Pekerjaan">
            <label class="form-check-label">SEHAT, Tidak Ada Batasan Pekerjaan <i>(fit for unrestricted sea service)</i></label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kesimpulan" value="SEHAT, Tidak Ada Batasan Pekerjaan Tetapi Memerlukan Pengawasan Medis">
            <label class="form-check-label">SEHAT, Tidak Ada Batasan Pekerjaan Tetapi Memerlukan Pengawasan Medis <i>(fit for unrestricted sea service, subject to medical surveilance)</i></label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kesimpulan" value="SEHAT, Dengan Batasan Pekerjaan">
            <label class="form-check-label">SEHAT, Dengan Batasan Pekerjaan <i>(fit for sea service with restrictions)</i></label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kesimpulan" value="TIDAK SEHAT, Sementara">
            <label class="form-check-label">TIDAK SEHAT, Sementara <i>(temporarily unfit for sea service)</i></label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="kesimpulan" value="TIDAK SEHAT, Permanen">
            <label class="form-check-label">TIDAK SEHAT, Permanen <i>(permanently unfit for sea service)</i></label>
        </div>
    </div>
    <div class="form-group">
        <label for="">Remarks</label>
        <textarea name="remarks" class="form-control" rows="3"></textarea>
        <span class="text-secondary" style="font-size: 14px"><i>Ditampilkan Pada Lembar Status Kesehatan, Maksimal 150 Karakter</i></span>
    </div>
    <div class="form-group">
        <label for="">Catatan Hasil Rujukan</label>
        <textarea name="hasil_rujukan" class="form-control" rows="3"></textarea>
    </div>
