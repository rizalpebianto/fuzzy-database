<footer  class="mt-4 py-4 bg-light text-black-70">
  <div class="container text-center">
    <small>Copyright &copy Rizal Pebianto</small>
  </div>
</footer>

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>

<script type="text/javascript">
	
function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheckUmur");
  // Get the output text
  var text = document.getElementById("inputState");

  var checkBox1 = document.getElementById("myCheckRokok");
  // Get the output text
  var text1 = document.getElementById("inputStateRokok");

  var checkBox2 = document.getElementById("myCheckBiaya");
  // Get the output text
  var text2 = document.getElementById("inputStateBiaya");  

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }

  if (checkBox1.checked == true){
    text1.style.display = "block";
  } else {
    text1.style.display = "none";
  }

  if (checkBox2.checked == true){
    text2.style.display = "block";
  } else {
    text2.style.display = "none";
  }
}


</script>

</body>
</html>