<div class="form-group">
    <label for="">LED</label>
    <input type="text" class="form-control" name="led" value="{{ $lab->led}}">
</div>
<div class="form-group">
    <label for="">HB</label>
    <input type="text" class="form-control" name="hb" value="{{ $lab->hb}}">
</div>
<div class="form-group">
    <label for="">Lekosit (Leucocyte)</label>
    <input type="text" class="form-control" name="lekosit" value="{{ $lab->lekosit}}">
</div>
<div class="form-group">
    <label for="">Hitung Jenis</label>
    <input type="text" class="form-control" name="hitung_jenis" value="{{ $lab->hitung_jenis}}">
</div>
<div class="form-group">
    <label for="">Trombosite</label>
    <input type="text" class="form-control" name="trombosite" value="{{ $lab->trombosite}}">
</div>
<div class="form-group">
    <label for="">Gula Darah</label>
    <input type="text" class="form-control" name="gula_darah" value="{{ $lab->gula_darah}}">
</div>
<div class="form-group">
    <label for="">N</label>
    <input type="text" class="form-control" name="n" value="{{ $lab->n}}">
</div>
<div class="form-group">
    <label for="">PP</label>
    <input type="text" class="form-control" name="pp" value="{{ $lab->pp}}">
</div>
<div class="form-group">
    <label for="">VDRL</label>
    <input type="text" class="form-control" name="vdrl" value="{{ $lab->vdrl}}">
</div>
<div class="form-group">
    <label for="">SGOT</label>
    <input type="text" class="form-control" name="sgot" value="{{ $lab->sgot}}">
</div>
<div class="form-group">
    <label for="">SGPT</label>
    <input type="text" class="form-control" name="sgpt" value="{{ $lab->sgpt}}">
</div>
<div class="form-group">
    <label for="">Kreatinin</label>
    <input type="text" class="form-control" name="kreatinin" value="{{ $lab->kreatinin}}">
</div>
<div class="form-group">
    <label for="">Ureum</label>
    <input type="text" class="form-control" name="ureum" value="{{ $lab->ureum}}">
</div>
<div class="form-group">
    <label for="">Kolesterol</label>
    <input type="text" class="form-control" name="kolesterol" value="{{ $lab->kolesterol}}">
</div>
<div class="form-group">
    <label for="">Trigiliserid</label>
    <input type="text" class="form-control" name="trigiliserid" value="{{ $lab->trigiliserid}}">
</div>
<div class="form-group">
    <label for="">Uric Acid</label>
    <input type="text" class="form-control" name="uric_acid" value="{{ $lab->uric_acid}}">
</div>
<div class="form-group">
    <label for="">HBsAg</label>
    <input type="text" class="form-control" name="hbsag" value="{{ $lab->hbsag}}">
</div>
<div class="form-group">
    <label for="">HBeAg</label>
    <input type="text" class="form-control" name="hbeag" value="{{ $lab->hbeag}}">
</div>
<div class="form-group">
    <label for="">Temuan Laboratorium</label>
    <select name="temuan_lab" class="form-control" required>
        <option value="normal" {{ $lab->temuan_lab == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $lab->temuan_lab == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Gambarkan Kelainan</label>
    <textarea name="gambar_kelainan" class="form-control" rows="3">{{ $lab->gambar_kelainan}}</textarea>
    <span class="text-secondary" style="font-size: 14px"><i>Maksimal 40 karakter</i></span>
</div>
