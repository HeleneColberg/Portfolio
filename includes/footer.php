
<div class="container-fluid ">
    <div class="row row-cols-6 ">
        <!-- Gilleleje isen-->
        <div class="col bg-yp1 ">

        </div>
        <!-- Chokolate Club-->
        <div class="col bg-yp2">

        </div>

        <!-- Studieby Slagelse -->
        <div class="col bg-yp3 ">

        </div>

        <!-- logo design og personlige projekter-->
        <div class="col bg-yp4 ">

        </div>

        <!-- Jobs -->
        <div class="col bg-yp5 ">

        </div>

        <div class="col bg-pup p-1 p-md-3">

        </div>

    </div>
</div>



<div class="container-fluid text-center bg-dark mt-5 mb-3 text-light text-myYellow">
    <div class="row row-cols-md-3 ">
        <a href="#">
            <div class="col text-myYellow text-center"><i class="fa-brands fa-github"></i></div>
        </a>
        <a href="#">
            <div class="col text-myYellow text-center"><i class="fa-brands fa-linkedin"></i></div>
        </a>
        <a href="#">
            <div class="col text-myYellow text-center"><i class="fa-brands fa-instagram"></i></div>
        </a>

    </div>
    <div class="col-12">Copyright © Helene Colberg</div>
</div>

<script>
    (function() {
        var face =document.querySelector('.face');
             var kaossel =document.querySelector('.kaossel');

        var chaosBtn = document.querySelector('.chaos-btn');
        chaosBtn.addEventListener('click', function() {
            document.body.classList.toggle('chaos');
                face.classList.toggle('hide');
                kaossel.classList.toggle('hide');

        });
    })()
</script>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>