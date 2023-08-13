<?php
helper('form');
?>
<div class="container-fluid p-3 mb-2">
	<table class="table table-striped">
	<th>Card Name</th>
	<th>Card Question</th>
	<th>Card Answer</th>
	<th>Edit Card</th>
	<th>Delete Card</th>
	  <?php
	  foreach ($cardList as $value) {
		echo "<tr>";
		echo "<td>" . $value['cardname'] . "</td>";
		echo "<td>" . $value['cardquestion'] . "</td>";
		echo "<td>" . $value['answertext'] . "</td>";
		echo "<td>Edit Card</td>";
		echo "<td>Delete Card</td>";
		echo "</tr>";
	}
	  ?>
	</table>
</div>
<div class="modal fade" id="addCardModal" tabindex="-1" aria-labelledby="addCardModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Card</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
			echo form_open('/Cardmanager/addCard');
		?>
          <div class="md-3">
		  <select class="form-select" aria-label="Default select example" id="deckName" name="deckName">
		  <?php
				for($i = 0; $i < count($deckList); $i++)
				{
					echo "<option value=\"" . $deckList[$i]['deckid'] . "\">" . $deckList[$i]['deckname'] . "</option>";
				}
			?>
		   </select>
		  </div>
		  <div class="mb-3">
            <label for="card-name" class="col-form-label">Card Name</label>
            <input type="text" class="form-control" id="card-name" name="card-name">
          </div>
		  <div class="mb-3">
            <label for="card-question" class="col-form-label">Question</label>
            <input type="text" class="form-control" id="card-question" name="card-question">
          </div>
		  <div class="mb-3">
            <label for="card-answer" class="col-form-label">Answer</label>
            <input type="text" class="form-control" id="card-answer" name="card-answer">
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