
         <!--footer-->
         <div class="footer">
                    <p><b>copyright &copy; 2018 by Angel Ria Purnamasari. All rights reserved | Design by Angel.</b></p>
                    <p><b>Photo by Fancycraves on Unsplash.</b></p>
        </div>
            <!--//footer-->
  <script>
  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>
    <script>
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
    </script>
  <script src="public/js/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script src="public/js/popper.min.js" charset="utf-8"></script>
  <script src="public/js/bootstrap.min.js" charset="utf-8"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>