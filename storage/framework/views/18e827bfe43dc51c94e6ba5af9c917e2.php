<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 pt-5">
        <h1>Tambah Data</h1>
        <form method="POST" action="/updatejadwalujian">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="kodeujian" value="<?php echo e($jadwalujian->kodeujian); ?>">
            <div class="mb-3">
                <label for="tanggalujian" class="form-label">Tanggal Ujian</label>
                <input type="date" class="form-control" id="tanggalujian" name="tanggalujian"
                    value="<?php echo e($jadwalujian->tanggalujian); ?>">
            </div>
            <div class="mb-3">
                <label for="jammulai" class="form-label">Jam Mulai</label>
                <input type="number" class="form-control" id="jammulai" name="jammulai" required autocomplete="off"
                    value="<?php echo e($jadwalujian->jammulai); ?>">
            </div>
            <div class="mb-3">
                <label for="namamatakuliah" class="form-label">Nama Matakuliah</label>
                <input type="text" class="form-control" id="namamatakuliah" name="namamatakuliah" required
                    autocomplete="off" value="<?php echo e($jadwalujian->namamatakuliah); ?>">
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
            <a href="/" class="btn btn-danger">BATAL</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\jadwalujian_app\resources\views/editdata.blade.php ENDPATH**/ ?>