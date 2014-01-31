<div id="container">
    <div>

        <h1>Bonjour <?= $this->session->userdata('login')?></h1>

        <?php echo form_open('appli_c/deconnexion'); ?>
        <input class="bouton" type="submit" value="Deconnexion" />
        <?php echo form_close(); ?>
	</div>
</div>