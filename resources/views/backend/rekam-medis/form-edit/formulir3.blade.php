<div class="form-group">
    <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan THT*</i></u></b></h4>
</div>
<div class="form-group">
    <label for="">Hidung</label>
    <select name="hidung" class="form-control" required>
        <option value="normal" {{ $pt->hidung == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pt->hidung == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Telinga</label>
    <select name="telinga" class="form-control" required>
        <option value="normal" {{ $pt->telinga == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pt->telinga == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Tenggorokan</label>
    <select name="tenggorokan" class="form-control" required>
        <option value="normal" {{ $pt->tenggorokan == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pt->tenggorokan == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Audiogram Kiri</label>
    <select name="audiogram_kiri" class="form-control" required>
        <option value="normal" {{ $pt->audiogram_kiri == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pt->audiogram_kiri == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Audiogram Kanan</label>
    <select name="audiogram_kanan" class="form-control" required>
        <option value="normal" {{ $pt->audiogram_kanan == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pt->audiogram_kanan == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Pemeriksaan THT Lainnya</label>
    <select name="tht_lain" class="form-control" required>
        <option value="normal" {{ $pt->tht_lain == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pt->tht_lain == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Catatan Kemampuan Pendengaran Memenuhi Standar SCTW A-1/9</label>
    <textarea name="catatan_pendengaran" class="form-control" rows="3">{{ $pt->catatan_pendengaran}}</textarea>
    <span class="text-secondary" style="font-size: 14px"><i>*hanya diisi jika ada catatan khusus maksimal 40 karakter</i></span>
</div>
<div class="form-group">
    <label for="">Catatan Kemampuan Pendengaran Tanpa Alat Bantu</label>
    <textarea name="catatan_pendengaran_tanpa_alat" class="form-control" rows="3">{{ $pt->catatan_pendengaran_tanpa_alat}}</textarea>
    <span class="text-secondary" style="font-size: 14px"><i>*hanya diisi jika ada catatan khusus maksimal 40 karakter</i></span>
</div>
<div class="form-group">
    <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Mata*</i></u></b></h4>
</div>
<div class="form-group">
    <label for="">Jarak Pandang Mata Kanan Tanpa Kacamata (OD)</label>
    <input type="text" class="form-control" name="jarak_mata_kanan_tanpa_kacamata" value="{{ $pm->jarak_mata_kanan_tanpa_kacamata}}">
</div>
<div class="form-group">
    <label for="">Jarak Pandang Mata Kiri Tanpa Kacamata (OS)</label>
    <input type="text" class="form-control" name="jarak_mata_kiri_tanpa_kacamata" value="{{ $pm->jarak_mata_kiri_tanpa_kacamata}}">
</div>
<div class="form-group">
    <label for="">Jarak Pandang Mata Kanan Dengan Kacamata (OD)</label>
    <input type="text" class="form-control" name="jarak_mata_kanan_dengan_kacamata" value="{{ $pm->jarak_mata_kanan_dengan_kacamata}}">
</div>
<div class="form-group">
    <label for="">Jarak Pandang Mata Kiri Dengan Kacamata (OS)</label>
    <input type="text" class="form-control" name="jarak_mata_kiri_dengan_kacamata" value="{{ $pm->jarak_mata_kiri_dengan_kacamata}}">
</div>
<div class="form-group">
    <label for="">Buta Warna</label>
    <select name="buta_warna" class="form-control" required>
        <option value="negatif" {{ $pm->buta_warna == 'negatif' ? 'selected':''}}>Negatif</option>
        <option value="positif" {{ $pm->buta_warna == 'positif' ? 'selected':''}}>Positif</option>
    </select>
</div>
<div class="form-group">
    <label for="">Normal Colour Test</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="normal_colour_test" value="ISHIHARA BOOK 38 PLATE" {{ $pm->normal_colour_test == 'ISHIHARA BOOK 38 PLATE' ? 'checked':''}}>
        <label class="form-check-label">ISHIHARA BOOK 38 PLATE</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="normal_colour_test" value="LANTERN" {{ $pm->normal_colour_test == 'LANTERN' ? 'checked':''}}>
        <label class="form-check-label">LANTERN</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="normal_colour_test" value="FARNSWORTH D15" {{ $pm->normal_colour_test == 'FARNSWORTH D15' ? 'checked':''}}>
        <label class="form-check-label">FARNSWORTH D15</label>
    </div>
</div>
<div class="form-group">
    <label for="">Lapang Pandang</label>
    <select name="lapang_pandang" class="form-control" required>
        <option value="normal" {{ $pm->lapang_pandang == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pm->lapang_pandang == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Pemeriksaan Mata Lain - lain</label>
    <input type="text" class="form-control" name="mata_lain" value="{{ $pm->mata_lain}}">
</div>
<div class="form-group">
    <label for="">Catatan Kemampuan Penglihatan Memenuhi Standar SCTW A-1/9</label>
    <textarea name="catatan_penglihatan" class="form-control" rows="3">{{ $pm->catatan_penglihatan}}</textarea>
    <span class="text-secondary" style="font-size: 14px"><i>*hanya diisi jika ada catatan khusus maksimal 40 karakter</i></span>
</div>
<div class="form-group">
    <label for="">Apakah Kacamata atau Lensa Kontak Diperlukan Untuk Standar Penglihatan ?</label>
    <select name="alat_bantu_penglihatan" class="form-control" required>
        <option value="tidak perlu" {{ $pm->alat_bantu_penglihatan == 'tidak perlu' ? 'selected':''}}>Tidak Perlu</option>
        <option value="perlu" {{ $pm->alat_bantu_penglihatan == 'perlu' ? 'selected':''}}>Perlu</option>
    </select>
</div>
