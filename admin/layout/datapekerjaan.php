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
      
      $queri= "delete from pekerjaan where id = $id_job" ;
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

      $kategori=$_POST['kategori'];
      $id_client=$_POST['id_client'];
      $judul_job=$_POST['judul-job'];
      $deskripsi=$_POST['deskripsi'];
      $gaji=$_POST['gaji'];
      $tanggal_berahir=$_POST['tanggal_berahir'];
      $link=$_POST['link'];
      $id_pekerjaan = $_POST['id'];
      
      $queri="UPDATE pekerjaan SET id_user = '$id_client', kategori = '$kategori', judul = '$judul_job' , keterangan = '$deskripsi', gaji = '$gaji', tanggal_berahir = '$tanggal_berahir'  WHERE id = $id_pekerjaan" ;
      if (mysql_query($queri, $conn)) {
          echo "<script>alert('Update successfully')</script>"; 
      } else {
          echo "Error updating record: " . mysql_error($conn);
      }

  } 
?>


<button class="ui blue button" onclick="tambah()"><i class="add user icon"></i>Tambah Pekerjaan</button>
<table class="ui selectable celled table">
  <thead >
    <tr>
      <th class="one wide">No</th>
      <th class="one wide">ID</th>
      <th class="one wide">Id Client</th>
      <th class="two wide">Judul</th>
      <th class="one wide">Kategori</th>
      <th class="three wide">Keterangan</th>
      <th class="one wide">Gaji</th>
      <th class="one wide">Tanggal Upload</th>
      <th class="one wide">Tanggal Berahir</th>
      <th class="two wide">Link</th>
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
  	$queri="Select * From pekerjaan";
    $hasil=mysql_query($queri);
    if (!$hasil) {
	  die("Error running $queri: " . mysql_error());
	}
    $i=1;
  	while ($data = mysql_fetch_array($hasil)){
  		echo "<tr>";
  		echo "<td>".$i."</td>";
  		echo "<td>".$data['id']."</td>";
  		echo "<td>".$data['id_user']."</td>";
  		echo "<td>".$data['judul']."</td>";
  		echo "<td>".$data['kategori']."</td>";
      echo "<td>".$data['keterangan']."</td>";
      echo "<td>".$data['gaji']."</td>";
      echo "<td>".$data['tanggal_upload']."</td>";
      echo "<td>".$data['tanggal_berahir']."</td>";
      echo "<td>".$data['link']."</td>";
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

<!-- modal insert freelance-->
<div class="ui modal" id="modalTambah">
<i class="close icon"></i>
	<div style="margin-left: 30px; margin-right: 30px; margin-top: 30px; margin-bottom: 30px">
	    <h2>Tambah Pekerjaan</h2>        
      <form class="ui form" method="post" action="?p=insert_job" enctype = "multipart/form-data">

           <div class="field">
                <label>Pilih kategori</label>
                <select class="ui fluid dropdown" name="kategori" required>
                  <option value="">kategori</option>
                      <option value="Website Development">Website Development</option>
                      <option value="CEO Marketing">CEO Marketing</option>
                      <option value="Mobile App">Mobile App</option>
                      <option value="Design dan Multimedia">Design dan Multimedia</option>
                      <option value="Data Entri">Data Entri</option>
                      <option value="Writing">Writing</option>
                </select>
              </div>

            <div class="field">
              <label>Id Client</label>
              <input type="text" name="id_client" placeholder=" " required>
            </div>
            <div class="field">
              <label>Pekerjaan Apa yang Anda Butuhkan?</label>
              <input type="text" name="judul-job" placeholder=" " required>
            </div>
            <div class="field">
              <label>Jelaskan Kebutuhan Anda Secara Lengkap</label>
              <textarea style="margin-top: 0px; margin-bottom: 0px; height: 176px;" name="deskripsi" required></textarea>
            </div>

            <input class="ui grey" type="file" name="fileToUpload">upload file</input>
            <br>
            <a>misal : logo / profile perusahaan</a>
            
           
            <br><br>
            <div class="ui fluid labeled input">
              <div class="ui label">
                <i class="yellow dollar icon"></i>
              </div>
              <input type="text" placeholder="Gaji" name="gaji" required>
              <div class="ui basic label">.00</div>
            </div>
            <br>
            <label>Kapan lamaran ini ditutup</label>
            <div class="ui fluid labeled input">
                <div class="ui label">
                  <i class="yellow calendar icon"></i>
                </div>
                <input type="date" name="tanggal_berahir" required>
            </div>
            <br>
            <div class="field">
              <label>Link Resmi</label>
              <input type="text" name="link" placeholder="http://www.oilancer.com" required>
            </div>
            <br>

            <button class="ui fluid yellow button" type="submit" value="submit">Submit Job</button>
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
        <p style="margin-left: 20px;">Are you sure you want to delete your job?</p>

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

<!-- modal edit pekerjaan-->
<div class="ui modal" id="modalEdit">
<i class="close icon"></i>
  <div style="margin-left: 30px; margin-right: 30px; margin-top: 30px; margin-bottom: 30px">
      <h2>Tambah Pekerjaan</h2>        
        <form class="ui form" method="post" action="">
            <div class="field">
              <label>Pilih kategori</label>
                <select class="ui fluid dropdown" name="kategori" required>
                  <option value="">kategori</option>
                      <option value="Website Development">Website Development</option>
                      <option value="CEO Marketing">CEO Marketing</option>
                      <option value="Mobile App">Mobile App</option>
                      <option value="Design dan Multimedia">Design dan Multimedia</option>
                      <option value="Data Entri">Data Entri</option>
                      <option value="Writing">Writing</option>
                </select>
              </div>
              <div class="field">
              <label>Id Client</label>
              <input type="text" name="id_client" placeholder=" " required>
            </div>
            <div class="field">
              <label>Pekerjaan Apa yang Anda Butuhkan?</label>
              <input type="text" name="judul-job" placeholder=" " required>
            </div>
            <div class="field">
              <label>Jelaskan Kebutuhan Anda Secara Lengkap</label>
              <textarea style="margin-top: 0px; margin-bottom: 0px; height: 176px;" name="deskripsi" required></textarea>
            </div>
            <div class="ui fluid labeled input">
              <div class="ui label">
                <i class="yellow dollar icon"></i>
              </div>
              <input type="text" placeholder="Gaji" name="gaji" required>
              <div class="ui basic label">.00</div>
            </div>
            <br>
            <label>Kapan lamaran ini ditutup</label>
            <div class="ui fluid labeled input">
                <div class="ui label">
                  <i class="yellow calendar icon"></i>
                </div>
                <input type="date" name="tanggal_berahir" required>
            </div>
            <br>
            <div class="field">
              <label>Link Resmi</label>
              <input type="text" name="link" placeholder="http://www.oilancer.com" required>
            </div>
            <br>
            <input type="text" placeholder="" name="id" id="id" hidden>

            <button class="ui fluid yellow button" type="submit" value="submit" name="btnEditJob">Edit</button>
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