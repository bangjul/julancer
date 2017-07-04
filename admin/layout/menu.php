<div class="three wide column">
	<div class="ui vertical menu" style="min-height: 860px; width: 250px">
		<div class="ui items">
			<div class="ui item">
			  <div class="item">
			    <div class="ui tiny circular image">
			      	<img src="<?= $rootdir ?><?=$_SESSION['foto_profile']?>.png">
			    </div>
			      <a class="header" style="margin-left:10px;"><?= $_SESSION['login_session'] ?></a>
			  </div>
			</div>	
		</div>
		<div class="item">
		    <div class="ui input"><input type="text" placeholder="Search..."></div>
		</div>
		  

		  <a class="item" href="?p=dashboard">
		    <i class="dashboard layout icon"></i> Dashboard
		  </a>
		  <a class="item" href="?p=dataclient">
		    <i class="add user icon"></i> Data Client
		  </a>
		  <a class="item" href="?p=datafreelance">
		    <i class="add user icon" ></i> Data Freelance
		  </a>
		  <a class="item" href="?p=datapekerjaan">
		    <i class="pie chart icon" ></i>Data Lowongan Pekerjaan
		  </a>
		  <a class="item" href="<?= $rootdir?>/layout/logout.php">
		    <i class="sign out icon"></i>Sign Out
		  </a>
		  
	  
	</div>
</div>
