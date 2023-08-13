<?php
helper('form');
?>
<div class="container-fluid p-3 mb-2">
	<table class="table table-striped">
	<th>Deck Name</th>
	<th>Card Count</th>
	<th>Deck Link</th>
	  <?php
	  foreach ($deckList as $value) {
		echo "<tr>";
		echo "<td>" . $value['deckname'] . "</td>";
		echo "<td>" . $value['cardcount'] . "</td>";
		echo "<td>&nbsp;</td>";
		echo "</tr>";
	}
	  ?>
	</table>
</div>
<div class="modal fade" id="<?php if($mode == "Deck") { echo "addDeckModal"; } else if ($mode == "Card") {	echo "addCardModal"; } ?>" tabindex="-1" aria-labelledby="<?php if($mode == "Deck") { echo "addDeckModalLabel"; }  else  if ($mode == "Card") { echo "addCardModalLabel"; } ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Deck</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
			echo form_open('/Deckmanager/addDeck');
		?>
          <div class="mb-3">
            <label for="deck-name" class="col-form-label">Deck Name</label>
            <input type="text" class="form-control" id="deck-name" name="deck-name">
          </div>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" value="Submit" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
		<?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>