
      <!-- <a href= "#" class = "btn btn-success mt-4">Tambah Data</a> -->
<!-- 
      <div class="container">
      <table class="table mt-4">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Kargo</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $take = mysqli_query($db, "SELECT * FROM Orders");
            WHILE($data = mysqli_fetch_array($take)){
            ?>
            <tr>
            <td><?= $data ['OrderID'] ?> </td>
            <td><?= $data ['OrderDate'] ?> </td>
            <td><?= $data ['Freight'] ?> </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
      </div> -->
<!-- 
      <div class="container">
        <table class="table mt-4">
          <thread>
            <tr>
              <th scope="col">ID supplier</th>
              <th scope="col">Nama perusahaan</th>
              <th scope="col">No hp</th>
            </tr>
          </thread>
          <tbody>
            <?php
            $ambil = mysqli_query($db, "SELECT * FROM shippers");
            while($data = mysqli_fetch_array($ambil)){
              ?>
            <tr>
              <td><?= $data ['ShipperID'] ?> </td>
              <td><?= $data ['CompanyName'] ?> </td>
              <td><?= $data ['Phone'] ?> </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
      </div>
      
      <div class="container">
        <table class="table mt-4">
          <thread>
            <tr>
              <th scope="col">Nama Depan</th>
              <th scope="col">Nama Belakang</th>
              <th scope="col">Tujuan</th>
            </tr>
          </thread>
          <tbody>
            <?php
            $take = mysqli_query($db, "SELECT *
            FROM employees JOIN orders
            ON employees.EmployeeID = orders.EmployeeID
            WHERE orders.ShipCountry = 'france' ");
            while($data = mysqli_fetch_array($take)){
              ?>
            <tr>
              <td><?= $data ['FirstName'] ?> </td>
              <td><?= $data ['LastName'] ?> </td>
              <td><?= $data ['ShipCountry'] ?> </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
      </div> -->
      
      
kalimat setelah tambah data
      <?php
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jurusan = $_POST['jurusan'];

    $query = mysqli_query ($db, "INSERT INTO mahasiswa(nama, nim, tgl_lahir, jurusan) VALUES('$nama', $nim, '$tgl_lahir', '$jurusan')");
    if($query){
      echo 'Data Berhasil Ditambahkan <a href="index.php">Balek</a>';
    }else{
      echo 'Gagal Ditambahkan';
    }
  }
?>