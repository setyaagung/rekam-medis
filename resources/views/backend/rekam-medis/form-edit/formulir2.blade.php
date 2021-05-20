<div class="form-group">
    <label for="">Denyut Nadi (x/menit)</label>
    <input type="text" class="form-control" name="denyut_nadi" value="{{ $pf->denyut_nadi}}">
</div>
<div class="form-group">
    <label for="">Pernapasan (x/menit)</label>
    <input type="text" class="form-control" name="pernapasan" value="{{ $pf->pernapasan}}">
</div>
<div class="form-group">
    <label for="">Suhu Badan (Celcius)</label>
    <input type="number" class="form-control" name="suhu_badan"  value="{{ $pf->suhu_badan}}">
</div>
<div class="form-group">
    <label for="">Kepala dan Leher</label>
    <select name="kepala_leher" class="form-control" required>
        <option value="normal" {{ $pf->kepala_leher == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pf->kepala_leher == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Dada</label>
    <select name="dada" class="form-control" required>
        <option value="normal" {{ $pf->dada == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pf->dada == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Jantung</label>
    <select name="jantung" class="form-control" required>
        <option value="normal" {{ $pf->jantung == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pf->jantung == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Paru - Paru</label>
    <select name="paru" class="form-control" required>
        <option value="normal" {{ $pf->par == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pf->paru == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Perut</label>
    <select name="perut" class="form-control" required>
        <option value="normal" {{ $pf->perut == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pf->perut == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Hati</label>
    <select name="hati" class="form-control" required>
        <option value="normal" {{ $pf->hati == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pf->hati == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Limpa</label>
    <select name="limpa" class="form-control" required>
        <option value="normal" {{ $pf->limpa == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pf->limpa == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Anggota Gerak</label>
    <select name="gerak" class="form-control" required>
        <option value="normal" {{ $pf->gerak == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pf->gerak == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
<div class="form-group">
    <label for="">Pemeriksaan Fisik Lainnya</label>
    <select name="fisik_lain" class="form-control" required>
        <option value="normal" {{ $pf->fisik_lain == 'normal' ? 'selected':''}}>Normal</option>
        <option value="tidak normal" {{ $pf->fisik_lain == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
    </select>
</div>
