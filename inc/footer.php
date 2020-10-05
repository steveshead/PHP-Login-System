<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php if(isset($_SESSION['user_id'])) : ?>
                    <span class="small" style="margin-top:5px;">Copyright &copy; Your Company.</span>
                    <span class="small float-right">Logged in as:  <?php echo $_SESSION['username']; ?></span>
                <?php else: ?>
                    <p class="small text-center mb-0" style="margin-top:5px;">Copyright &copy; Your Company.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer><!--/footer#page-footer-->

<!-- jQuery is required -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- UIkit JS -->
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>

<script src="/bootstrap/assets/js/main.js"></script>

</body>
</html>
