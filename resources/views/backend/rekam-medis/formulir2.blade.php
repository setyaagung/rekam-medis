    <div class="form-group">
        <label for="">Denyut Nadi (x/menit)</label>
        <input type="text" class="form-control" name="denyut_nadi" value="{{ old('denyut_nadi')}}">
    </div>
    <div class="form-group">
        <label for="">Pernapasan (x/menit)</label>
        <input type="text" class="form-control" name="pernapasan" value="{{ old('pernapasan')}}">
    </div>
    <div class="form-group">
        <label for="">Suhu Badan (Celcius)</label>
        <input type="number" class="form-control" name="suhu_badan"  value="{{ old('suhu_badan')}}">
    </div>
    <div class="form-group">
        <label for="">Kepala dan Leher</label>
        <select name="kepala_leher" class="form-control" required>
            <option value="normal" {{ old('kepala_leher') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('kepala_leher') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Dada</label>
        <select name="dada" class="form-control" required>
            <option value="normal" {{ old('dada') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('dada') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Jantung</label>
        <select name="jantung" class="form-control" required>
            <option value="normal" {{ old('jantung') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('jantung') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Paru - Paru</label>
        <select name="paru" class="form-control" required>
            <option value="normal" {{ old('paru') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('paru') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Perut</label>
        <select name="perut" class="form-control" required>
            <option value="normal" {{ old('perut') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('perut') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Hati</label>
        <select name="hati" class="form-control" required>
            <option value="normal" {{ old('hati') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('hati') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Limpa</label>
        <select name="limpa" class="form-control" required>
            <option value="normal" {{ old('limpa') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('limpa') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Anggota Gerak</label>
        <select name="gerak" class="form-control" required>
            <option value="normal" {{ old('gerak') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('gerak') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Pemeriksaan Fisik Lainnya</label>
        <select name="fisik_lain" class="form-control" required>
            <option value="normal" {{ old('fisik_lain') == 'normal' ? 'selected':''}}>Normal</option>
            <option value="tidak normal" {{ old('fisik_lain') == 'tidak normal' ? 'selected':''}}>Tidak Normal</option>
        </select>
    </div>
