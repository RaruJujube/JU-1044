<?php include "header.php"; ?>

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Member Registration</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                        <li class="active">Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->   

  <section class="container">
        <div class="col-lg-12">
    <form role="form" action='' method="POST">
        <div class="span12 block">
        <div class="span5">
            Name Here :
            <input type="text" class="input-block-level" id="" name="" placeholder="" class="form-control">
            <span class="errorMessage" id="error"></span>
            Name Here :
            <input type="text" class="input-block-level" id="" name="" placeholder="" class="form-control">
            <span class="errorMessage" id="error"></span>
            Name Here :
            <input type="text" class="input-block-level" id="" name="" placeholder="" class="form-control">
            <span class="errorMessage" id="error"></span>
            Name Here :
            <input type="text" class="input-block-level" id="" name="" placeholder="" class="form-control">
            <span class="errorMessage" id="error"></span>
            Name Here :
            <input type="text" class="input-block-level" id="" name="" placeholder="" class="form-control">
            <span class="errorMessage" id="error"></span>
        </div>
        <div class="span5">
            Name Here :
            <input type="text" class="input-block-level" id="" name="" placeholder="" class="form-control">
            <span class="errorMessage" id="error"></span>
            Name Here :
            <input type="text" class="input-block-level" id="" name="" placeholder="" class="form-control">
            <span class="errorMessage" id="error"></span>
            Name Here :
            <input type="text" class="input-block-level" id="" name="" placeholder="" class="form-control">
            <span class="errorMessage" id="error"></span>
            Name Here :
            <input type="text" class="input-block-level" id="" name="" placeholder="" class="form-control">
            <span class="errorMessage" id="error"></span>
            Name Here :
            <input type="text" class="input-block-level" id="" name="" placeholder="" class="form-control">
            <span class="errorMessage" id="error"></span>
        </div>
            <button class=" span10 btn btn-success btn-large btn-block">Register</button>
        </div>
            
    </form>
      </div>
  </section>
  <!-- /#registration-page -->



<?php include "footer.php"; ?>
<!--Scripts here-->


<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->



</body>
</html>