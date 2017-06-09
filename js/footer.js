	const btnLoginH = document.getElementById("btnLoginHeader");
	const btnRegisterH = document.getElementById("btnRegisterHeader");
	const btnLogoutH = document.getElementById("btnLogoutHeader");

	firebase.auth().onAuthStateChanged(function(user) {
	  if (user) {
	    // User is signed in.
	    console.log(user);
		btnLoginH.style.display = "none";
		btnRegisterH.style.display = "none";
		btnLogoutH.style.display = "block";
	  } else {
	    // No user is signed in.
	    console.log('not logged in');
		btnLoginH.style.display = "block";
		btnRegisterH.style.display = "block";
		btnLogoutH.style.display = "none";
	  }
	});

	btnLogoutH.addEventListener('click', e => {
		firebase.auth().signOut().then(function() {
		  // Sign-out successful.
		}).catch(function(error) {
		  // An error happened.
		});
	});