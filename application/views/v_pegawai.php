<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Combo Box Codeigniter 3</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <form method="POST">
        <p>NIP<br/>
            <input type="text" name="nip"/>
        </p>
        <p>Nama<br/>
            <input type="text" name="nama"/>
        </p>
       
        <p>Jabatan<br/>
            <select name="jabatan" id="jabatan_id" class="form-control input-sm">
                <option value="">--Please-select---</option>
                <?php
                    foreach($jabatan as $data){ // Lakukan looping pada variabel jabatan dari controller
                        echo "<option value='".$data->jabatan_id."' >".$data->nama_jabatan."</option>";
                    }
                ?>
            </select>
        </p>
    </form>
</body>
</html>