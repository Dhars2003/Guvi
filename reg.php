<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

</head>

<body>

<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
             
                <img src="b4.jpg" height="100" class="img-fluid" style="border-radius: 2rem 0 0 2rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Student Registration</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Fill The Details</h5>
                  <div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">First Name</label>
			  <input type="text"  class="form-control" id="exampleFormControlInput1" placeholder="Enter Firstname">
			</div>
                  <div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Middle Name</label>
			  <input type="text"  class="form-control" id="exampleFormControlInput1" placeholder="Enter Middlename">
			</div>
                  <div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Last Name</label>
			  <input type="text"  class="form-control" id="exampleFormControlInput1" placeholder="Enter Lastname">
			</div>
                  <div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Email address</label>
			  <input type="email" name="uname" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			</div>
		  <div class="mb-3">
				  <label for="exampleFormControlTextarea1" class="form-label">Password</label>
			          <input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="enter password">
                        </div>
                   <div class="mb-3">
				  <label for="exampleFormControlTextarea1" class="form-label">Confirm Password</label>
			          <input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="enter password">
                        </div>
                   <div class="mb-3">
				  <label for="exampleFormControlTextarea1" class="form-label">Date of Birth</label>
			          <input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="dd/mm/yyyy">
                        </div>
                  <div class="mb-3">
				  <label for="exampleFormControlTextarea1" class="form-label">Gender</label>
			          <input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="enter gender">
                        </div>
                 <div class="mb-3">
				  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
			          <input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="enter the Address">
                        </div>
                 <div class="mb-3">
				  <label for="exampleFormControlTextarea1" class="form-label">Phone Number</label>
			          <input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="123-456-7890">
                        </div>
                  <div class="pt-1 mb-3">
                    <button class="btn btn-dark btn-lg btn-block" type="button">Register</button>
                  </div>

                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(document).on('submit', '#reg', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_reg", true);


            $.ajax({
                type: "POST",
                url: "insert2.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#reg')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                       $('#user').load(location.href + " #user");

                    }else if(res.status == 500) {
						$('#errorMessage').addClass('d-none');
                        $('#reg')[0].reset();
                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                    }
                }
            });

        });	

</script>
</body>

</html>