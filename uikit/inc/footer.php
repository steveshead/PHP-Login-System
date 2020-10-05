</div>
    <footer id="page-footer" class="uk-margin-top" uk-sticky>
        <div class="uk-padding-small uk-padding-remove-bottom">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <span class="uk-text-small uk-text-left" style="margin-top:5px;">Copyright &copy; Your Company.</span>
                <span class="uk-text-small uk-align-right">Logged in as:  <?php echo $_SESSION['username']; ?></span>
            <?php else: ?>
                <p class="uk-text-small uk-text-center" style="margin-top:5px;">Copyright &copy; Your Company.</p>
            <?php endif; ?>
        </div>
    </footer><!--/footer#page-footer-->

<!-- jQuery is required -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- UIkit JS -->
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>

<script src="/uikit/assets/js/main.js"></script>

</body>
</html>
