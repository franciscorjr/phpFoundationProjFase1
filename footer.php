<?php if (isset($_SESSION["logado"]) and $_SESSION["logado"] == 1) { ?>
    <!-- Modal -->
    <div class="modal fade" id="myModalEditor" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <form class="form-horizontal" method="POST" action="salvaAlteracao">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Alterar conteúdo da página</h4>
                    </div>
                    <div class="modal-body">
                        <textarea cols="80" id="editor1" name="editor1" rows="10"><?php echo $conteudo; ?></textarea>
                        <input type="hidden"  name="pagina" value="<?php echo $arquivo_destino; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Salvar Alterações</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- Editor On-Line-->
    <script>
        CKEDITOR.replace('editor1', {
            fullPage: true,
            extraPlugins: 'docprops',
            // Disable content filtering because if you use full page mode, you probably
            // want to  freely enter any HTML content in source mode without any limitations.
            allowedContent: true,
            height: 320
        });
    </script>
<?php } ?>
<!-- Site footer -->
<footer class="footer">
    <p>&copy; Todos os direitos reservados - <?php echo pegaInfoData('Y'); ?> - Meu Site Simples em PHP</p>
</footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>