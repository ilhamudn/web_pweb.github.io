<div class="container">
    <a href="<?=base_url('kontenweb/index')?>" class="btn btn-success mt-3"> Tambah Data</a>
        <div class="card card-body mt-3">
            <h4>Data Mahasiswa</h4>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Kota Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                    </tr>
            </thead>
            <tbody>
            <?php $i=1 ; foreach($mahasiswa as $mhs):?>
                <tr>
                    <th scope="row"><?=$i++?></th> 
                    <td><?=$mhs['nama']?></td>               
                    <td><?=$mhs['jkelamin']?></td>               
                    <td><?=$mhs['tgl_lahir']?></td>               
                    <td><?=$mhs['kotalahir']?></td>               
                    <td><?=$mhs['Alamat']?></td> 
                    <td>
                    <a href="<?=base_url('kontenweb/deleteData')?>/<?=$mhs['id_mhs']?>" class="btn btn-danger btn-sm" onclick="return confirm('are you sure?')">Delete</a>
                        <button type="button" href="<?=base_url('kontenweb/editData');?>"class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editDataModal<?=$mhs['id_mhs']?>">Edit</button>
                    </td>              
                </tr>
            <?php endforeach?>
            </tbody>
            </table>
        </div>
</div>

<?php foreach($mahasiswa as $edit):?>
<div class="modal fade" id="editDataModal<?=$edit['id_mhs']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('kontenweb/editData')?>" method="post">

            
            <div class="form-group">
                <label for="">Nama</label>
                <input type="hidden" name="id_mhs" class="form-control" value="<?= $edit['id_mhs']?>">
                <input type="text" name="nama" class="form-control" value="<?= $edit["nama"]?>">
            </div>

            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <select name="jkelamin" id="" class="form-control">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" value="<?= $edit['tgl_lahir']?>">
            </div>

            <div class="form-group">
                <label for="">Kota Lahir</label>
                <input type="text" name="kotalahir" class="form-control" value="<?= $edit["kotalahir"]?>">
            </div>

            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="Alamat" class="form-control" value="<?= $edit["Alamat"]?>">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach?>