<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
        <label for="nisn" class="form-label">NISN:</label>
        <input type="text" class="form-control" id="nisn" name="nisn" required>
    </div>
    <div class="mb-3">
        <label for="kelas" class="form-label">Kelas:</label>
        <input type="text" class="form-control" id="kelas" name="kelas" required>
    </div>
    <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan:</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
    </div>
    <div class="mb-3">
        <label for="tahun_ajaran" class="form-label">Tahun Ajaran:</label>
        <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>