<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i>  Form Masuk Halaman Input Nilai
    </div>

    <form method="post" action="<?php echo base_url('administrator/nilai/input_nilai_aksi') ?>">

    <div class="form-group">
        <label>Tahun Akademik (Semester)</label>
        <?php 

            $query = $this->db->query('SELECT id_thn_akad, semester, CONCAT (tahun_akademik,"/") AS ta_semester FROM tahun_akademik');
            $dropdowns = $query->result();
            foreach($dropdowns as $dropdown)
            {
                if($dropdown->semester === 1)
                {
                    $tampilSemester = "Ganjil";
                }else{
                    $tampilSemester = "Genap";
                }

                $dropDownList[$dropdown->id_thn_akad] = $dropdown->ta_semester ." ".$tampilSemester;
            }
            echo form_dropdown('id_thn_akad', $dropDownList,'','class="form-control"');
        ?>
    </div>

    <div class="form-group">
        <label>Kode Matakuliah</label>
        <input type="text" name="kode_matakuliah" class="form-control" placeholder="Masukkan Kode Mata Kuliah">
    </div>

    <button type="submit" class="btn btn-primary">Proses</button>

    </form>
</div>