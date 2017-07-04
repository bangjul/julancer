<?php
if(isset($_POST['btnHapusJob'])){
      $servername = "localhost";
      $username = "root";
      $password = "";
      // Create connection
      $conn = mysql_connect($servername, $username, $password);
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysql_connect_error());
      }
      mysql_select_db('oilancer');

      $id_job = $_POST['id2'];
      
      $queri= "delete from user where id = $id_job" ;
      if (mysql_query($queri, $conn)) {
          echo "<script>alert('Delete successfully')</script>"; 
      } else {
          echo "Error deleting record: " . mysql_error($conn);
          
      }

  }

  elseif(isset($_POST['btnEditJob'])){    

      $servername = "localhost";
      $username = "root";
      $password = "";
      // Create connection
      $conn = mysql_connect($servername, $username, $password);
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysql_connect_error());
      }
      mysql_select_db('oilancer');

      $namalengkap=$_POST['namalengkap'];
      $industri=$_POST['industri'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $nomortelepon=$_POST['nomortelepon'];
      $deskripsi=$_POST['deskripsi'];
      $id_client = $_POST['id'];
      
      $queri="UPDATE user SET nama_lengkap = '$namalengkap', industri = '$industri', email = '$email', password = '$password' , nomor_telepon = '$nomortelepon' , deskripsi = '$deskripsi' WHERE id = $id_client" ;
      if (mysql_query($queri, $conn)) {
          echo "<script>alert('Update successfully')</script>"; 
      } else {
          echo "Error updating record: " . mysql_error($conn);
      }

  } 
?>
<button class="ui blue button" onclick="tambah()"><i class="add user icon"></i>Tambah Client</button>
<table class="ui selectable celled table">
  <thead >
    <tr>
      <th class="one wide">No</th>
      <th class="one wide">ID</th>
      <th class="two wide">Nama Perusahaan</th>
      <th class="two wide">Email</th>
      <th class="two wide">Nomor Telepon</th>
      <th class="two wide">Industri</th>
      <th class="four wide">Deskripsi</th>
      <th class="two wide">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = mysql_connect($servername, $username, $password);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysql_connect_error());
  }
  mysql_select_db('oilancer');
  	$queri="Select * From user where rule = 2 ";
    $hasil=mysql_query($queri);
    if (!$hasil) {
	  die("Error running $queri: " . mysql_error());
	}
    $i=1;
  	while ($data = mysql_fetch_array($hasil)){
  		echo "<tr>";
  		echo "<td>".$i."</td>";
  		echo "<td>".$data['id']."</td>";
  		echo "<td>".$data['nama_lengkap']."</td>";
  		echo "<td>".$data['email']."</td>";
  		echo "<td>".$data['nomor_telepon']."</td>";
  		echo "<td>".$data['industri']."</td>";
  		echo "<td>".$data['deskripsi']."</td>";
  		echo "<td>
			  		<button class='ui green button' onclick='edit(".$data['id'].")'>
			  			<i class='write icon'></i>
			  		</button>
			  		<button class='ui red button' onclick='hapus(".$data['id'].")'>
			  			<i class='archive icon'></i>
			  		</button>
  			</td>";
  		echo "</tr>";
  		$i++;
  	}
  ?>
        
  </tbody>
</table>

<!-- modal insert client-->
<div class="ui modal" id="modalTambah">
<i class="close icon"></i>
	<div style="margin-left: 30px; margin-right: 30px; margin-top: 30px">
	    <h2>Tambah Client</h2>        
        <form class="ui form" method="post" action="?p=insert_register_client" enctype = "multipart/form-data">
            <div class="field">
              <label>Nama Industri</label>
              <input type="text" name="namalengkap" placeholder="Nama Industri" required>
            </div>
                    

            <div class="field">
                <label>Industri</label>
                <select class="ui fluid dropdown" name="industri" required>
                  <option value="">Pilih Industri</option>
                      <option value="Akuntansi dan keuangan">Akuntansi dan keuangan</option>
                      <option value="Arsitektur">Arsitektur</option>
                      <option value="Fasion">Fasion</option>
                      <option value="Fotografi">Fotografi</option>
                      <option value="Industri">Industri</option>
                      <option value="Internet">Internet</option>
                      <option value="Kedokteran dan Farmasi">Kedokteran dan Farmasi</option>
                      <option value="Konsultan">Konsultan</option>
                      <option value="Olahraga">Olahraga</option>
                      <option value="Politik">Politik</option>
                      <option value="Lain-lain">Lain-lain</option>
                </select>
            </div>

            <div class="two fields">
              <div class="field">
                <label>Email</label>
                <input type="email" placeholder="contoh@mail.com" name="email" required>
              </div>
              <div class="field">
                <label>Password</label>
                <input type="password" placeholder="password" name="password" required>
              </div>
            </div>
            <div class="field">
              <label>Nomor Telepon</label>
              <input type="text" name="nomortelepon" placeholder="08*********" required>
            </div>

            <input class="ui grey" type="file" name="fileToUpload">Foto Profile</input>
              <br><br>

            <div class="field">
              <label>Deskripsi Perusahaan</label>
              <textarea style="margin-top: 0px; margin-bottom: 0px; height: 176px;" name="deskripsi" required></textarea>
            </div>
            <div class="field">
              
                <label>Dengan klik Daftar, Anda menyetujui Syarat dan Ketentuan yang berlaku</label>
              
            </div>
            <button class="ui fluid yellow button" type="submit" value="submit">Tambah</button>
            <br>
        </form>
    </div> 
</div>

<!-- modal hapus-->
<div class="ui modal"  id="modal_hapus_job"">

    <div class="header">
      Delete Your Job
    </div>
    <form method="post" style=" min-height: 80px;"  enctype = "multipart/form-data">
      <div class="content">
      <br>
        <p style="margin-left: 20px;">Are you sure you want to delete this client?</p>

        <input type="text" placeholder="" id="id2" name="id2" hidden>

      </div>  
      <div  style="text-align: right; margin-right: 20px; margin-bottom: 20px">
        <button class="ui negative button">
          No
        </button>
        <button class="ui positive button" type="submit" value="submit" name="btnHapusJob">
          Yes
        </button>
      </div>
    </form>
  </div>  

<!-- modal edit client-->
<div class="ui modal" id="modalEdit">
<i class="close icon"></i>
	<div style="margin-left: 30px; margin-right: 30px; margin-top: 30px">
	    <h2>Tambah Client</h2>        
        <form class="ui form" method="post" action="">
            <div class="field">
              <label>Nama Industri</label>
              <input type="text" name="namalengkap" placeholder="Nama Industri" required>
            </div>
                    

            <div class="field">
                <label>Industri</label>
                <select class="ui fluid dropdown" name="industri" required>
                  <option value="">Pilih Industri</option>
                      <option value="Akuntansi dan keuangan">Akuntansi dan keuangan</option>
                      <option value="Arsitektur">Arsitektur</option>
                      <option value="Fasion">Fasion</option>
                      <option value="Fotografi">Fotografi</option>
                      <option value="Industri">Industri</option>
                      <option value="Internet">Internet</option>
                      <option value="Kedokteran dan Farmasi">Kedokteran dan Farmasi</option>
                      <option value="Konsultan">Konsultan</option>
                      <option value="Olahraga">Olahraga</option>
                      <option value="Politik">Politik</option>
                      <option value="Lain-lain">Lain-lain</option>
                </select>
            </div>

            <div class="two fields">
              <div class="field">
                <label>Email</label>
                <input type="email" placeholder="contoh@mail.com" name="email" required>
              </div>
              <div class="field">
                <label>Password</label>
                <input type="password" placeholder="password" name="password" required>
              </div>
            </div>
            <div class="field">
              <label>Nomor Telepon</label>
              <input type="text" name="nomortelepon" placeholder="08*********" required>
            </div>
            <input type="text" placeholder="" name="id" id="id" hidden>
              <br>

            <div class="field">
              <label>Deskripsi Perusahaan</label>
              <textarea style="margin-top: 0px; margin-bottom: 0px; height: 176px;" name="deskripsi" required></textarea>
            </div>
            <div class="field">
              
            </div>
            <button class="ui fluid yellow button" type="submit" value="submit" name="btnEditJob">Edit</button>
            <br>
        </form>
    </div> 
</div>              

<script type="text/javascript">

  function tambah(){
    $('#modalTambah')
      .modal('show')
    ;
  }

  function edit(id){
    const job_id = document.getElementById("job_id");
    document.getElementById("id").value = ""+id;

    $('#modalEdit')
      .modal('show')
    ;
  }

  function hapus(id){
    const job_id = document.getElementById("job_id");
    document.getElementById("id2").value = ""+id;

    $('#modal_hapus_job')
      .modal('show')
    ;
    
  }


</script>

<script>
$('.special.cards .image').dimmer({
  on: 'hover'
});
</script>