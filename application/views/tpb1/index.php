
  <div class="col-auto">
      <a href="<?php echo base_url(); ?>tpb1/filter" class="btn btn-primary mb-2">Filter</a>
  </div>

        <table class="table table-bordered" cellspacing ="0" >

    <thead>
        <tr>
        <th scope="col">Nomor</th>
        <th scope="col">Nomor Aju</th>
        <th scope="col">Tanggal Daftar</th>
        <th scope='col'>Nomor PEB</th>
        <th scope='col'>Kode PEB</th>
        <th scope='col'>CIF</th>
        <th scope="col">Harga penyerahan</th>
        <th scope="col">Detail</th>
        </tr>
    </thead>
    <?php $i = 1; ?>
    <?php foreach($data3 as $row) : ?>
    
    <tbody>
        <tr right-align>
        <td scope="row"><?php echo $i; ?></td>
        <td><?php echo $row["NOMOR_AJU"] ?></td>
        <td><?php $tanggal = new DateTime($row['TANGGAL_DAFTAR']);
            echo $tanggal->format('d-m-Y'); ?></td>
        <td><?php echo $row["NOMOR_DAFTAR"] ?></td>
        <td><?php echo $row["KODE_DOKUMEN_PABEAN"] ?></td>
        <td align="right"><?php $cif = $row["CIF"];
            echo number_format($cif,2); ?></td>
        <td align="right"><?php $harga = $row["HARGA_PENYERAHAN"];
            echo number_format($harga,0);?></td>
        <td><a href="">detail</a> </td>    
        </tr>
    </tbody>
    <?php $i ++; ?>
    <?php endforeach ; ?>
    </table>
 
