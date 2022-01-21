<body class="bg-light">
    <div class="container mt-5">
        <div class="card card-body border-info col-6 mx-auto">
            <form action="<?=base_url('kontenweb/addData')?>" method="post">
                <h4 class="text-center">Biodata Siswa</h4>
                <div class="form-group">
                    <div class="row my-3">
                        <div class="col-md-3 my-auto">
                            Nama
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-3 my-auto">
                            Jenis Kelamin
                        </div>
                        <div class="col-md-9 my-auto">
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jkelamin" id="inlineRadio1" value="Pria">
                            <label class="form-check-label" for="inlineRadio1">Pria</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jkelamin" id="inlineRadio2" value="Wanita">
                            <label class="form-check-label" for="inlineRadio2">Wanita</label>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-3 my-auto">
                            Tanggal Lahir
                        </div>
                        <div class="col-md-9">
                            <input type="date" name="tgl_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-3 my-auto">
                            Kota Lahir
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="kotalahir"class="form-control">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-3 my-auto">
                            Alamat
                        </div>
                        <div class="col-md-9">
                            <textarea name="Alamat" style="width:inherit;height:100px"></textarea>
                        </div>
                    </div>
                        <button class="btn btn-success float-right">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</body>