<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="https://time2hack.com/favicon.png" type="image/png">
  <link rel="icon" href="https://time2hack.com/favicon.png" type="image/png">
  <title>Time to Hack: Simple Login with Firebase Web API</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <style type="text/css">
    header h1 {
  display: inline-block;
  margin: 10px 0;
}
header + hr {
  margin: 10px 0;
}
#contacts p, 
#contacts p.lead{
  margin: 0;
}
.userAuth {
  display: block;
  margin: 20px 0 0;
}
.modal-header:last-child{
  border-bottom: 0;
}
.card {
  display: inline-block;
  margin: 1em;
  max-width: calc(25% - 2em);
}
#contacts {
  margin-left: -1em;
  margin-right: -1em;
  display: flex;
  flex-wrap: wrap;
}
.user-info {
  display: inline-block;
  margin: 0 0.5em;
}
.user-info img{
  display: inline-block;
  max-width: 2em;
}

.auth-true .authenticated,
.auth-false .unauthenticated {
  display: block;
}
.auth-true .unauthenticated,
.auth-false .authenticated {
  display: none;
}

  </style>
</head>
<body class="auth-false">
  <div class="container">
    <header class="clearfix">
      <h1>Contact Store Application</h1>
      <div class="userAuth unauthenticated pull-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">Register</button>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Login</button>
      </div>
      <div class="userAuth authenticated pull-right">
        <span class="user-info">
          <img src="./user.svg" alt="User" class="rounded-circle">
        </span>
        <button type="button" class="btn btn-success" id="logout">Logout</button>
      </div>
    </header>
    <hr/>
    <main class="authenticated">
      <center>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addContactModal">Add Contact</button>
      </center>
      <div id="contacts"></div>
    </main>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div><iframe src="//time2hack.com/ads.html" frameborder=0 width="100%" class="embed-responsive-item" align="center"></iframe></div>
    </div>
    <div class="col-md-6">
      <div><iframe src="//time2hack.com/ads.html" frameborder=0 width="100%" class="embed-responsive-item" align="center"></iframe></div>
    </div>
  </div>
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="Register" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="registerForm" method="POST">
          <div class="modal-header">
            <h4 class="modal-title" id="registerModalLabel">Register</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="control-label">First Name:</label>
              <input type="text" class="form-control" id="registerFirstName">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="control-label">Last Name:</label>
              <input type="text" class="form-control" id="registerLastName">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="control-label">Email:</label>
              <input type="text" class="form-control" id="registerEmail">
            </div>
            <div class="form-group">
              <label for="message-text" class="control-label">Password:</label>
              <input type="password" class="form-control" id="registerPassword">
            </div>
            <div class="form-group">
              <label for="message-text" class="control-label">Confirm Password:</label>
              <input type="password" class="form-control" id="registerConfirmPassword">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="doRegister">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="loginForm" method="POST">
          <div class="modal-header">
            <h4 class="modal-title" id="loginModalLabel">Login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="control-label">Email:</label>
              <input type="text" class="form-control" id="loginEmail">
            </div>
            <div class="form-group">
              <label for="message-text" class="control-label">Password:</label>
              <input type="password" class="form-control" id="loginPassword">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="doLogin">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="Add Contact" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" id="contactForm" name="contactForm">
          <div class="modal-header">
            <h4 class="modal-title" id="addContactModalLabel">Add Contact</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" required placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" required placeholder="Enter Email">
            </div>
            <h3>Location</h3>
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" class="form-control" id="city" placeholder="Enter City">
            </div>
            <div class="form-group">
              <label for="email">State</label>
              <input type="text" class="form-control" id="state" placeholder="Enter State">
            </div>
            <div class="form-group">
              <label for="zip">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="Enter Zip Code">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary addValue">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="Message" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="messageModalLabel">Message</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-footer">
          <div class="pre-auth">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <span class="">
              <button type="submit" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#registerModal">Register</button>
              <button type="submit" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Login</button>
            </span>
          </div>
          <div class="post-auth"></div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="https://www.gstatic.com/firebasejs/4.3.1/firebase.js"></script>

  <!-- Contacts Store JavaScript -->
  <script type="text/javascript">
    $(document).ready(function(){
  //initialize the firebase app
  var config = {
    apiKey: "AIzaSyC3RiJ96JhSeN3hvbA2H0qSx0wKrxrFsK8",
    authDomain: "testing-e0918.firebaseapp.com",
    databaseURL: "https://testing-e0918.firebaseio.com/",
    projectId: "testing-e0918",
    storageBucket: "testing-e0918.appspot.com",
    messagingSenderId: "153503845242",
  };
  firebase.initializeApp(config);
  var database = firebase.database();

    var lastIndex = 0;

  //create firebase references
  //var Auth = firebase.auth(); 
  var dbRef = firebase.database();
  var contactsRef = dbRef.ref('registrasi/')
  var usersRef = dbRef.ref('users/')
  var auth = null;

  //Register
  $('#registerForm').on('submit', function ( e ) {
    e.preventDefault();
    $('#registerModal').modal('hide');
    $('#messageModalLabel').html(spanText('<i class="fa fa-cog fa-spin"></i>', ['center', 'info']));
    $('#messageModal').modal('show');
    var data = {
      email: $('#registerEmail').val(), //get the email from Form
      firstName: $('#registerFirstName').val(), // get firstName
      lastName: $('#registerLastName').val(), // get lastName
    };
    var passwords = {
      password : $('#registerPassword').val(), //get the pass from Form
      cPassword : $('#registerConfirmPassword').val(), //get the confirmPass from Form
    }
    if( data.email != '' && passwords.password != ''  && passwords.cPassword != '' ){
      if( passwords.password == passwords.cPassword ){
        //create the user
        
        firebase.auth()
          .createUserWithEmailAndPassword(data.email, passwords.password)
          .then(function(user) {
            return user.updateProfile({
              displayName: data.firstName + ' ' + data.lastName
            })
          })
          .then(function(user){
            //now user is needed to be logged in to save data
            auth = user;
            //now saving the profile data
            usersRef.child(user.uid).set(data)
              .then(function(){
                console.log("User Information Saved:", user.uid);
              })
            $('#messageModalLabel').html(spanText('Success!', ['center', 'success']))
            
            $('#messageModal').modal('hide');
          })
          .catch(function(error){
            console.log("Error creating user:", error);
            $('#messageModalLabel').html(spanText('ERROR: '+error.code, ['danger']))
          });
      } else {
        //password and confirm password didn't match
        $('#messageModalLabel').html(spanText("ERROR: Passwords didn't match", ['danger']))
      }
    }  
  });

  //Login
  $('#loginForm').on('submit', function (e) {
    e.preventDefault();
    $('#loginModal').modal('hide');
    $('#messageModalLabel').html(spanText('<i class="fa fa-cog fa-spin"></i>', ['center', 'info']));
    $('#messageModal').modal('show');

    if( $('#loginEmail').val() != '' && $('#loginPassword').val() != '' ){
      //login the user
      var data = {
        email: $('#loginEmail').val(),
        password: $('#loginPassword').val()
      };
      firebase.database().ref('registrasi/'+ userID)
        .then(function(registrasi) {
          lastIndex = userID;
          $('#messageModalLabel').html(spanText('Success!', ['center', 'success']))
          $('#messageModal').modal('hide');
        })
        .catch(function(error) {
          console.log("Login Failed!", error);
          $('#messageModalLabel').html(spanText('ERROR: '+error.code, ['danger']))
        });
    }
  });

  $('#logout').on('click', function(e) {
    e.preventDefault();
    firebase.auth().signOut()
  });

  //save contact
  $('#contactForm').on('submit', function( event ) {  
    event.preventDefault();
    if( auth != null ){
      if( $('#name').val() != '' || $('#email').val() != '' ){
        contactsRef.child(auth.uid)
          .push({
            name: $('#name').val(),
            email: $('#email').val(),
            location: {
              city: $('#city').val(),
              state: $('#state').val(),
              zip: $('#zip').val()
            }
          })
          document.contactForm.reset();
      } else {
        alert('Please fill at-lease name or email!');
      }
    } else {
      //inform user to login
    }
  });

  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      auth = user;
      $('body').removeClass('auth-false').addClass('auth-true');
      usersRef.child(user.uid).once('value').then(function (data) {
        var info = data.val();
        if(user.photoUrl) {
          $('.user-info img').show();
          $('.user-info img').attr('src', user.photoUrl);
          $('.user-info .user-name').hide();
        } else if(user.displayName) {
          $('.user-info img').hide();
          $('.user-info').append('<span class="user-name">'+user.displayName+'</span>');
        } else if(info.firstName) {
          $('.user-info img').hide();
          $('.user-info').append('<span class="user-name">'+info.firstName+'</span>');
        }
      });
      contactsRef.child(user.uid).on('child_added', onChildAdd);
    } else {
      // No user is signed in.
      $('body').removeClass('auth-true').addClass('auth-false');
      auth && contactsRef.child(auth.uid).off('child_added', onChildAdd);
      $('#contacts').html('');
      auth = null;
    }
  });
});

function onChildAdd (snap) {
  $('#contacts').append(contactHtmlFromObject(snap.key, snap.val()));
}
 
//prepare contact object's HTML
function contactHtmlFromObject(key, contact){
  return '<div class="card contact" style="width: 18rem;" id="'+key+'">'
    + '<div class="card-body">'
      + '<h5 class="card-title">'+contact.name+'</h5>'
      + '<h6 class="card-subtitle mb-2 text-muted">'+contact.email+'</h6>'
      + '<p class="card-text" title="' + contact.location.zip+'">'
        + contact.location.city + ', '
        + contact.location.state
      + '</p>'
      // + '<a href="#" class="card-link">Card link</a>'
      // + '<a href="#" class="card-link">Another link</a>'
    + '</div>'
  + '</div>';
}

function spanText(textStr, textClasses) {
  var classNames = textClasses.map(c => 'text-'+c).join(' ');
  return '<span class="'+classNames+'">'+ textStr + '</span>';
}


  </script>
</body>
</html>
