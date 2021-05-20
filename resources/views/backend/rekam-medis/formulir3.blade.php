    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan THT*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Hidung</label>
        <select name="hidung" class="form-control" required>
            <option value="normal" {{ old('hidung') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('hidung') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Telinga</label>
        <select name="telinga" class="form-control" required>
            <option value="normal" {{ old('telinga') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('telinga') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Tenggorokan</label>
        <select name="tenggorokan" class="form-control" required>
            <option value="normal" {{ old('tenggorokan') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('tenggorokan') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Audiogram Kiri</label>
        <select name="audiogram_kiri" class="form-control" required>
            <option value="normal" {{ old('audiogram_kiri') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('audiogram_kiri') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Audiogram Kanan</label>
        <select name="audiogram_kanan" class="form-control" required>
            <option value="normal" {{ old('audiogram_kanan') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('audiogram_kanan') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Pemeriksaan THT Lainnya</label>
        <select name="tht_lain" class="form-control" required>
            << value="normal" {{ old('tht_lain') == 'normal' ? 'selected':''}}>Normal</>
            <option value="tidak normal" {{ old('tht_lain') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Catatan Kemampuan Pendengaran Memenuhi Standar SCTW A-1/9</label>
        <textarea name="catatan_pendengaran" class="form-control" rows="3">{{ old('catatan_pendengaran')}}</textarea>
        <span class="text-secondary" style="font-size: 14px"><i>*hanya diisi jika ada catatan khusus maksimal 40 karakter</i></span>
    </div>
    <div class="form-group">
        <label for="">Catatan Kemampuan Pendengaran Tanpa Alat Bantu</label>
        <textarea name="catatan_pendengaran_tanpa_alat" class="form-control" rows="3">{{ old('catatan_pendengaran_tanpa_alat')}}</textarea>
        <span class="text-secondary" style="font-size: 14px"><i>*hanya diisi jika ada catatan khusus maksimal 40 karakter</i></span>
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Mata*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Jarak Pandang Mata Kanan Tanpa Kacamata (OD)</label>
        <input type="text" class="form-control" name="jarak_mata_kanan_tanpa_kacamata">
    </div>
    <div class="form-group">
        <label for="">Jarak Pandang Mata Kiri Tanpa Kacamata (OS)</label>
        <input type="text" class="form-control" name="jarak_mata_kiri_tanpa_kacamata">
    </div>
    <div class="form-group">
        <label for="">Jarak Pandang Mata Kanan Dengan Kacamata (OD)</label>
        <input type="text" class="form-control" name="jarak_mata_kanan_dengan_kacamata">
    </div>
    <div class="form-group">
        <label for="">Jarak Pandang Mata Kiri Dengan Kacamata (OS)</label>
        <input type="text" class="form-control" name="jarak_mata_kiri_dengan_kacamata">
    </div>
    <div class="form-group">
        <label for="">Buta Warna</label>
        <select name="buta_warna" class="form-control" required>
            <option value="negatif">Negatif</option>
            <option value="positif">Positif</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Normal Colour Test</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="normal_colour_test" value="ISHIHARA BOOK 38 PLATE">
            <label class="form-check-label">ISHIHARA BOOK 38 PLATE</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="normal_colour_test" value="LANTERN">
            <label class="form-check-label">LANTERN</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="normal_colour_test" value="FARNSWORTH D15">
            <label class="form-check-label">FARNSWORTH D15</label>
        </div>
    </div>
    <div class="form-group">
        <label for="">Lapang Pandang</label>
        <select name="lapang_pandang" class="form-control" required>
            <option value="normal">Normal</option>
            <option value="tidak normal">Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Pemeriksaan Mata Lain - lain</label>
        <input type="text" class="form-control" name="pemeriksaan_mata_lain">
    </div>
    <div class="form-group">
        <label for="">Catatan Kemampuan Penglihatan Memenuhi Standar SCTW A-1/9</label>
        <textarea name="catatan_penglihatan" class="form-control" rows="3"></textarea>
        <span class="text-secondary" style="font-size: 14px"><i>*hanya diisi jika ada catatan khusus maksimal 40 karakter</i></span>
    </div>
    <div class="form-group">
        <label for="">Apakah Kacamata atau Lensa Kontak Diperlukan Untuk Standar Penglihatan ?</label>
        <select name="lapang_pandang" class="form-control" required>
            <option value="tidak perlu">Tidak Perlu</option>
            <option value="perlu">Perlu</option>
        </select>
    </div>
