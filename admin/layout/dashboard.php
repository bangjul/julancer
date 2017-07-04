			
	 <div class="ui container">
		  <div class="ui special cards">
			  
			  <div class="ui centered card">
			    <div class="blurring dimmable image">
			      <div class="ui dimmer">
			        <div class="content">
			          <div class="center">
			            <a href="?p=dataclient"><div class="ui primary button" >Detail</div></a>
			          </div>
			        </div>
			      </div>
			      <img src="<?= $rootdir ?>public/images/client.png">
			    </div>
			    <div class="content">
			      <a class="header">Data Client</a>
			    </div>
			    <div class="extra content">
			      <a>
			        <i class="users icon"></i>
			        2 Members
			      </a>
			    </div>
			  </div>

			  <div class="ui centered card">
			    <div class="blurring dimmable image">
			      <div class="ui inverted dimmer">
			        <div class="content">
			          <div class="center">
			            <a href="?p=datafreelance"><div class="ui primary button" >Detail</div></a>
			          </div>
			        </div>
			      </div>
			      <img src="<?= $rootdir ?>public/images/freelancer.png">
			    </div>
			    <div class="content">
			      <a class="header">Data Freelance</a>
			    </div>
			    <div class="extra content">
			      <a>
			        <i class="users icon"></i>
			        2 Members
			      </a>
			    </div>
			  </div>

			  <div class="ui centered card">
			    <div class="blurring dimmable image">
			      <div class="ui inverted dimmer">
			        <div class="content">
			          <div class="center">
			            <a href="?p=datapekerjaan"><div class="ui primary button" >Detail</div></a>
			          </div>
			        </div>
			      </div>
			      <img src="<?= $rootdir ?>public/images/jobs.jpg">
			    </div>
			    <div class="content">
			      <a class="header">Data Pekerjaan</a>
			    </div>
			    <div class="extra content">
			      <a>
			        <i class="users icon"></i>
			        2 Members
			      </a>
			    </div>
			  </div>
		</div>
	</div>



<script>
$('.special.cards .image').dimmer({
  on: 'hover'
});
</script>