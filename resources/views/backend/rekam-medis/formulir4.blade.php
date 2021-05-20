    <div class="form-group">
        <label for="">Pemohon Terbebas dari Infeksi Visual Rongga Mulut atau Gusi</label>
        <select name="infeksi_visual_mulut_gusi" class="form-control" required>
            <option value="tidak" {{ old('infeksi_visual_mulut_gusi') == 'tidak' ? 'selected':''}}>Tidak</option>
            <option value="ya" {{ old('infeksi_visual_mulut_gusi') == 'ya' ? 'selected':''}}>Ya</option>
        </select>
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Gigi*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Rencana Pencabutan</label>
        <input type="text" class="form-control" name="rencana_pencabutan" value="{{ old('rencana_pencabutan')}}">
    </div>
    <div class="form-group">
        <label for="">Rencana Penambalan</label>
        <input type="text" class="form-control" name="rencana_penambalan" value="{{ old('rencana_penambalan')}}">
    </div>
    <div class="form-group">
        <label for="">Rencana Pembersihan Karang Gigi</label>
        <input type="text" class="form-control" name="rencana_pembersihan_karang_gigi" value="{{ old('rencana_pembersihan_karang_gigi')}}">
    </div>
    <div class="form-group">
        <label for="">Rencana Pembuatan Gigi Palsu</label>
        <input type="text" class="form-control" name="rencana_pembuatan_gigi_palsu" value="{{ old('rencana_pembuatan_gigi_palsu')}}">
    </div>
    <div class="form-group">
        <label for="">Pemeriksaan Gigi Lainnya</label>
        <input type="text" class="form-control" name="gigi_lain" value="{{ old('gigi_lain')}}">
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Alat Kelamin Luar*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Pemeriksaan Alat Kelamin Luar</label>
        <input type="text" class="form-control" name="kelamin_luar" value="{{ old('kelamin_luar')}}">
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Pemeriksaan Kandungan*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Pemeriksaan Kandungan</label>
        <input type="text" class="form-control" name="kandungan" value="{{ old('kandungan')}}">
    </div>
    <div class="form-group">
        <h4 class="font-weight-bold text-primary"><b><u><i>Laboratorium*</i></u></b></h4>
    </div>
    <div class="form-group">
        <label for="">Urine - Albumin</label>
        <input type="text" class="form-control" name="urine_albumin" value="{{ old('urine_albumin')}}">
    </div>
    <div class="form-group">
        <label for="">Urine - Reduksi</label>
        <input type="text" class="form-control" name="urine_reduksi" value="{{ old('urine_reduksi')}}">
    </div>
    <div class="form-group">
        <label for="">Urine - Bilirubin</label>
        <input type="text" class="form-control" name="urine_bilirubin" value="{{ old('urine_bilirubin')}}">
    </div>
    <div class="form-group">
        <label for="">Urine - Sedimen</label>
        <input type="text" class="form-control" name="urine_sedimen" value="{{ old('urine_sedimen')}}">
    </div>
    <div class="form-group">
        <label for="">Urine - Tes Kehamilan</label>
        <input type="text" class="form-control" name="urine_kehamilan" value="{{ old('urine_kehamilan')}}">
    </div>
    <div class="form-group">
        <label for="">Urine - PH</label>
        <input type="text" class="form-control" name="urine_ph" value="{{ old('urine_ph')}}">
    </div>
    <div class="form-group">
        <label for="">Urine - BJ(Berat Jenis)</label>
        <input type="text" class="form-control" name="urine_bj" value="{{ old('urine_bj')}}">
    </div>
    <div class="form-group">
        <label for="">Urine - Lekosite</label>
        <input type="text" class="form-control" name="urine_lekosite" value="{{ old('urine_lekosite')}}">
    </div>
