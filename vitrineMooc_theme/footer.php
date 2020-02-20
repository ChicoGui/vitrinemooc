<?php wp_footer(); ?>
<footer>
  <div class="container">
    <div class="row">

      <div class="col-md-4 site-map">
        <h5 class="titulo-rodape"> Cursos Abertos</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="https://mooc.cefor.ifes.edu.br/moodle/mod/simplecertificate/verify.php">Validar Certificado</a></li>
          <!--li class="list-group-item"><a href="">Perguntas Frequentes</a></li-->
          <li class="list-group-item"><a href="https://proen.ifes.edu.br/images/stories/Instru%C3%A7%C3%A3o_Normativa_n%C2%BA_02-2019_Cursos_MOOC.pdf">Termos de Uso</a></li>
          <li class="list-group-item"><a href="https://mooc.cefor.ifes.edu.br/suporte">Suporte</a></li>

        </ul>
      </div>

      <div class="col-md-4 site-map">
        <h5 class="titulo-rodape">Institucional</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="http://ifes.edu.br" target="new">O Ifes</a></li>
          <li class="list-group-item"><a href="http://cefor.ifes.edu.br" target="new">O Cefor</a></li>
          <li class="list-group-item"><a href="http://conhecimento.cefor.ifes.edu.br" target="new">Base de Conhecimento</a></li>
        </ul>
      </div>

      <div class="col-md-4">
        
        <a class="logo-cefor-footer" href="http://cefor.ifes.edu.br"><img src="images/logo_ifes_cefor.svg" alt="Cefor ifes"> </a>
        
      </div>

    </div>

  </div>



</footer>
 
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   
    <script>
		// Select all links with hashes
		$('a[href*="#"]')
		  // Remove links that don't actually link to anything
		  .not('[href="#"]')
		  .not('[href="#0"]')
		  .click(function(event) {
		    // On-page links
		    if (
		      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		      && 
		      location.hostname == this.hostname
		    ) {
		      // Figure out element to scroll to
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		      // Does a scroll target exist?
		      if (target.length) {
		        // Only prevent default if animation is actually gonna happen
		        event.preventDefault();
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 300, function() {
		          // Callback after animation
		          // Must change focus!
		          var $target = $(target);
		          $target.focus();
		          if ($target.is(":focus")) { // // Checando se "target" está focado.
		            return false;
		          } else {
		            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		            $target.focus(); // Set focus again
		          };
		        });
		      }
		    }
		  });

		</script>


    <script>
      
        $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
        });
    </script>

    <script>

    	jQuery(document).ready(function($) {
	    $(document).on("click", ".upload_image_button", function() {

	        jQuery.data(document.body, 'prevElement', $(this).prev());

	        window.send_to_editor = function(html) {
	            var imgurl = jQuery('img',html).attr('src');
	            var inputText = jQuery.data(document.body, 'prevElement');

	            if(inputText != undefined && inputText != '')
	            {
	                inputText.val(imgurl);
	            }

	            tb_remove();
	        };

	        tb_show('', 'media-upload.php?type=image&TB_iframe=true');
	        return false;
	    });
	});
</script>

     



  </body>
</html>