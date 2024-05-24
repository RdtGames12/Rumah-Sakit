
<?php
include "../../koneksi/koneksi.php";
?>
    <div class="box">
        
    <h1>Poliklinik</h1>
            
       
    <div class="page has-sidebar-left height-full">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <?php
                            $id = $_GET['id'];
                            echo 'Klinik ID :  ';
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
                                <h4>Detail Klinik</h4>
                                <form class="form-material">
                                    <!-- Input -->
                                    <div class="body">
                                        <?php
                                        $sql_klinik = mysqli_query($con, "SELECT * FROM tb_klinik WHERE id_klinik = '$id'") or die (mysqli_error($con));
                                        $data = mysqli_fetch_array($sql_klinik);
                                        ?>
                                        <h6>Nama klinik</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['nama_klinik']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Alamat</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['alamat_klinik']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Jadwal</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Senin</span> : <?=$data['senin']?>
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Selasa</span> : <?=$data['selasa']?>
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Rabu</span> : <?=$data['rabu']?>
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Kamis</span> : <?=$data['kamis']?>
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Jumat</span> : <?=$data['jumat']?>
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Sabtu</span> : <?=$data['sabtu']?>
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Minggu</span> : <?=$data['minggu']?>
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