<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Services - BhatBhatte</title>
     <?php include 'links.php' ?>
    <script>
        function populate(s1,s2){
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            s2.innerHTML = "";
            if(s1.value == "TVS"){
                var optionArray = ["Select Model|Select Model","RTR 160 4V|RTR 160 4V","RTR 200 4V|RTR 200 4V","Ntorq|Ntorq"];
            } else if(s1.value == "KTM"){
                var optionArray = ["Select Model|Select Model","Duke 200|Duke 200","Duke 250|Duke 250","Duke 390|Duke 390"];
            } else if(s1.value == "Bajaj"){
                var optionArray = ["Select Model|Select Model","NS 200|NS 200","Dominar 200|Dominar 200"];
            }else if(s1.value == "Honda"){
                var optionArray = ["Select Model|Select Model","Hornet|Hornet","Shine|Shine","Dio|Dio"];
            }else if(s1.value == "Yamaha"){
                var optionArray = ["Select Model|Select Model","R15 V3|R15 V3","FZ V2|FZ V2","MT-15|MT-15"];
            }
        
            for(var option in optionArray){
                var pair = optionArray[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                s2.options.add(newOption);
            }
        }
        </script>    
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-dark clean-navbar" data-aos="fade-down" data-aos-duration="250">
        <div class="container"><a class="text-center" href="Front_page.php" style="color: rgb(243,245,247);width: 20px;height: 30px;padding: -30px;"><br>BHATBHATTE<br><br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ml-auto"></ul><a href="Front_page.php" style="margin: 5px;padding: 3px;">HOME</a><a href="login.php" style="margin: 5px;padding: 3px;">Sign In</a><a href="login.php" style="margin: 5px;padding: 3px;">Book Now!!!</a>
            </div>
        </div>
    </nav>
    <main class="page service-page">
        <section class="clean-block clean-services dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Service Page</h2>
    
                </div>
                <div class="row">
                    <div class="col">
                        <div class="clean-block add-on newsletter-sign-up blue">
                            <h2>Enter your vehicle details</h2>
                           
<select name="" id="">
	<option value="">Location</option>
<option value="">Kathmandu</option>
<option value="">Lalitpur</option>
<option value="">Bhaktapur</option>
</select>

<select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
  <option value="">Brand</option>
  <option value="TVS">TVS</option>
  <option value="KTM">KTM</option>
  <option value="Bajaj">Bajaj</option>
  <option value="Honda">Honda</option>
  <option value="Yamaha">Yamaha</option>
</select>

<select id="slct2" name="slct2">
    <option value="">Select Model</option>
</select>
<input type="button" value="Request<s">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="clean-block add-on social-icons">
            <div class="icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    
</body>

</html>