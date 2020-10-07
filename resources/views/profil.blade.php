<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{('admin/style.css')}}">
    <!-- Sweet Alert JavaScript 
    <script src="../js/sweetalert2.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Nunito Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <title>Profile | Firebase Auth</title>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-lg-10 col-md-10 offset-lg-1 offset-md-1 bg-white shadow my-5 border border-primary">
                <div class="row">
                    <div class="col-lg-6 col-md-6 p-4 bg-primary divCover">
                        <img src="../images/firebase_logo.png" alt="Firebase cover image">
                    </div>
                    <div class="col-lg-6 col-md-6 p-lg-5 p-md-5 px-3 py-4 text-dark">
                        <div id="profileSection">
                            <div class="col-12 col-12 mb-3 text-center">
                                <img id="userAvatar" src="../images/avatar.png" alt="avatar icon" >
                            </div>
                            <div class="col-12 col-12 mb-4 text-center">
                                <span class="h3" id="userPfFullName">Name</span>
                                <span class="h3" id="userPfSurname">surname</span>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-4 text-center">
                                <div class="row">
                                    <div class="col-2 offset-3 border-right">
                                        <a id="userPfFb" href="#" target="_blank">
                                            <i class="fab fa-facebook-f text-primary"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 border-right">
                                        <a id="userPfTw" href="#" target="_blank">
                                            <i class="fab fa-twitter text-primary"></i>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a id="userPfGp" href="#" target="_blank">
                                            <i class="fab fa-google-plus-g text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-4 text-center">
                                <p id="userPfBio">Profile biography</p>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="button" class="btn btn-outline-primary btn-block text-uppercase mb-3" onclick="showEditProfileForm()">
                                Edit Profile<small></small></button>
                                <button type="button" class="btn btn-outline-secondary text-uppercase" onclick="signOut()">
                                Sign Out<small></small></button>
                            </div>
                        </div>
                        <div id="editProfileForm">
                            <h2 class="h2 text-center text-dark mb-3">Edit Profile</h2>
                            <div class="form-group">
                                <label for="userFullName">Name<span class="text-danger ml-1">*</span></label>
                                <input type="text" class="form-control" id="userFullName" onblur="checkUserFullName()" placeholder="Firma Adı">
                            </div>
                            <div class="form-group">
                                <label for="userSurname">Surname<span class="text-danger ml-1">*</span></label>
                                <input type="text" class="form-control" id="userSurname" onblur="checkUserSurname()" placeholder="Firma Faliyet Alanı">
                                <small id="userSurnameError" class="form-text text-danger">Please fill the field.</small>
                            </div>
                            <div class="form-group">
                                <label for="userFacebook">Facebook</label>
                                <input type="text" class="form-control" id="userFacebook" placeholder="https://www.facebook.com/">
                            </div>
                            <div class="form-group">
                                <label for="userTwitter">Twitter</label>
                                <input type="text" class="form-control" id="userTwitter" placeholder="https://www.twitter.com/">
                            </div>
                            <div class="form-group">
                                <label for="userGooglePlus">Google Plus</label>
                                <input type="text" class="form-control" id="userGooglePlus" placeholder="https://plus.google.com/">
                            </div>
                            <div class="form-group">
                                <label for="userBio">Biography<span class="text-danger ml-1">*</span></label>
                                <textarea class="form-control" id="userBio" rows="4" onblur="checkUserBio()"></textarea>
                             </div>
                            <button type="button" class="btn btn-outline-primary btn-block text-uppercase mb-3" onclick="saveProfile()">Save</button>
                            <button type="button" class="btn btn-outline-secondary btn-block text-uppercase" onclick="hideEditProfileForm()">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

   <!-- Firebase -->
    

<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyC3RiJ96JhSeN3hvbA2H0qSx0wKrxrFsK8",
    authDomain: "testing-e0918.firebaseapp.com",
    databaseURL: "https://testing-e0918.firebaseio.com/",
    projectId: "testing-e0918",
    storageBucket: "testing-e0918.appspot.com",
    messagingSenderId: "153503845242",
    appId: "1:153503845242:web:143dca7a1a3f0dd55b64c3"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
    
    <!-- Custom JavaScript -->
    <script src="{{('admin/app.js')}}"></script>
</body>
</html>