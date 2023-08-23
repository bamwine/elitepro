  ons.ready(function(){
  console.log(window.device);
  });
  
  
  const login2 = () => {
  const email = document.querySelector('#email').value;
  const passwd = document.querySelector('#passwd').value;

  if (email === '' && passwd === '') {
    const navigator = document.querySelector('#navigator');
    navigator.pushPage('home.html');
	 
  }// else {
   // ons.notification.alert('Wrong username/password combination');
  //}
}

  const goregister2 = () => {
  
  const navigator = document.querySelector('#navigator');
    navigator.pushPage('register.html');
	
}

  const gologin2 = () => {
  
  const navigator = document.querySelector('#navigator');
    navigator.pushPage('login.html');
}



