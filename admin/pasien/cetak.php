
<?php
include "../../koneksi/koneksi.php";

function tgl_indo($tgl) {
    $tanggal = substr($tgl, 8, 2);
    $bulan = substr($tgl, 5, 2);
    $tahun = substr($tgl, 0, 4);
    return $tanggal."/".$bulan."/".$tahun;
}

?>
    <div class="box">
        
    <h1>Pasien</h1>
            
       
        <div class="page has-sidebar-left height-full">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <?php
                                $id = $_GET['id'];
                                echo 'Pasien ID :  ';
                                echo $id;
                            ?>
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce">
            <div class="container-fluid my-3">
                <div class="row">
                    <div class="col-md-8 center">
                        <div class="card shadow-sm">
                            <div class="card-body b-b">
                                <h4>Detail Pasien</h4>
                                <form class="form-material">
                                    <!-- Input -->
                                    <div class="body">
                                        <?php
                                        $sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien WHERE id_pasien = '$id'") or die (mysqli_error($con));
                                        $data = mysqli_fetch_array($sql_pasien);
                                        ?>
                                        <h6>Nama Pasien</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['nama_pasien']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Marga</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['marga']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Alamat</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['alamat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <h6>Desa</h6> <?=$data['kelurahan']?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <h6>Kecamatan</h6> <?=$data['kecamatan']?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <h6>Kota</h6> <?=$data['kota']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <h6>Provinsi</h6> <?=$data['provinsi']?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <h6>Kode Pos</h6> <?=$data['kode_pos']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Email</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['email']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>No.Telepon Rumah</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['no_telprumah']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>No.Ponsel</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['no_hp']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Lahir</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['tempat_lahir']?>, <?=tgl_indo($data['tgl_lahir'])?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Jenis Kelamin</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['jenis_kelamin']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Agama</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['agama']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Golongan Darah</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['golongan_darah']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Status Pasien</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['status_pasien']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Jenis Pasien</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['jenis_pasien']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h4>Kontak Darurat</h4>
                                        <h6>Nama</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['nama_darurat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Alamat Darurat</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['alamat_darurat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Hubungan</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['hubungan_darurat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>No.Telepon Rumah</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['no_telprumah_darurat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>No.Ponsel</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['no_hp_darurat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Sumber Informasi</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['sumber_informasi']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        </div>
        
        <script>
           $(document).ready(function() {
            $('#pasien').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": "pasien_data.php",
                 scrollY : '250px',
                dom : 'Bfrtip',
                // buttons : [
                //     {
                //         extend : 'pdf',
                //         orientation : 'potrait',
                //         pageSize : 'Legal',
                //         title : 'Data Pasien',
                //         download : 'open'
                //     },
                //     'csv', 'excel', 'print', 'copy'
                // ], 
                columnDefs : [
                    {
                        // "searchable" : false,
                        // "orderable" : false,
                        "targets" : 5,
                        "render" : function(data, type, row) {
                            var btn = "<center><a href=\"edit.php?id="+data+"\" class=\"btn btn-warning btn-xs\"><i class=\"glyphicon glyphicon-edit\"></i></a> <a href=\"del.php?id="+data+"\" onclick=\"return confirm('Yakin Ingin Hapus?')\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-trash\"></i></a></center>";
                            return btn;
                        }
                    }
                ]
            });
           });
            

        </script>
       <script>
		window.print();
	</script>

    </div>
    
