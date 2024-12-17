<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal Ujian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 py-5">
        <h1>Jadwal Ujian</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Kode Ujian</th>
                    <th scope="col">Tanggal Ujian</th>
                    <th scope="col">Jam Mulai</th>
                    <th scope="col">Nama Matakuliah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $jadwalujians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwalujian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($jadwalujian->kodeujian); ?></td>
                        <td><?php echo e($jadwalujian->tanggalujian); ?></td>
                        <td><?php echo e($jadwalujian->jammulai); ?></td>
                        <td><?php echo e($jadwalujian->namamatakuliah); ?></td>
                        <td>
                            <a href="/editdata/<?php echo e($jadwalujian->kodeujian); ?>" class="btn btn-warning">Edit Data</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <a href="/tambahdata" class="btn btn-primary">Tambah Data</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\jadwalujian_app\resources\views/jadwalujian.blade.php ENDPATH**/ ?>