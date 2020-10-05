<?php include "inc/header.php"; ?>

<style>
    #bootstrap:hover, #uikit {
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto text-center pt-5">
            <h1>Simple PHP Login System</h1>
            <p class="lead">Select your preferred CSS framework below</p>
            <div class="row mx-auto pt-3">
                <div class="col-md-1"></div>
                <div class="col-md-5"><a id="bootstrap" class="btn btn-block btn-outline-secondary" href="/bootstrap/">Bootstrap</a></div>
                <div class="col-md-5"><a id="uikit" class="btn btn-block btn-outline-secondary" href="/uikit/">UIKIT</a></div>
            </div>


        </div>
    </div>
</div>


<?php include "inc/footer.php"; ?>

<script>
    $(document).ready(function() {
        $('#bootstrap').hover(
            function () {
                $(this).html("View Demo");
            },
            function () {
                $(this).html("Bootstrap");
            }
        );
        $('#uikit').hover(
            function () {
                $(this).html("View Demo");
            },
            function () {
                $(this).html("UIKIT");
            }
        );
    });
</script>
