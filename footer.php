<style>
.footer {
    padding:13px;
    text-align:center;
    width:100%;
    clear:both;
    color:white;
    font-size:18px;
    background:#007bff;
}
</style>
<div class="footer">
    Copyright &copy; RipLabs - LoginPage with PHP Native
</div>
<!-- Load JS Bootstrap & Icon -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/all.min.js"></script>
<script>
function showpass() {
  $('#password').get(0).type='text';
  $('#showpass').css('display','none');
  $('#hidepass').css('display','');
}
function hidepass() {
  $('#password').get(0).type='password';
  $('#showpass').css('display','');
  $('#hidepass').css('display','none');
}
</script>
</body>
</html>