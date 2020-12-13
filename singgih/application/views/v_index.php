<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Terminal</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
</head>
<body>
    <nav class="navbar navbar-dark bg-secondary navbar-expand-lg">
		<div class="navbar-brand">Tugas</div>

		<div class="navbar-nav">
            <a href="<?= site_url('Dcontroller/tambah'); ?>" class="nav-link">Tambah Data</a>
			<a href="<?= site_url('Dcontroller/index')?>" class="nav-link">Home</a>
			
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link">Lalu Singgih</a>

		</div>
	</nav>
    <div class="alert alert-warning text-center mt-4">
		Data Transportasi
	</div>
    
    <div class="container">
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Jurusan</th>
                    <th>Kelas</th>
                    <th>Isi</th>
                    <th>aksi</th>
                </tr>
            
            </thead>
            <?php
            $no = 1;
            foreach ($isi as $item){
            ?>
            <tbody>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?= $item->id_37; ?></td>
                    <td><?= $item->kolom_jurusan; ?></td>
                    <td><?= $item->kolom_kelas; ?></td>
                    <td><?= $item->kolom_isi; ?></td>
                    <td>
                        <a href="" class="btn btn-info btn-sm btn-dark">Edit</a>
						<a href="" class="btn btn-info  btn-sm btn-primary">Hapus</a>
					</td>
                    
                    
                </tr>

                <?php
                }
                ?>
            </tbody>
        
        </table>
    
    </div>
</body>
</html>