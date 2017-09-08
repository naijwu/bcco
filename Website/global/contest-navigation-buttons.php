<!-- Contest Navigation Buttons -->
<div class="row" style="margin-top: 10px;">
    <!-- Previous Question Button -->
    <div class="col-sm-3">
        <input type="submit" class="btn btn-default" name="next" value="Previous" id="pre" <? if($question_to_display == 0) { echo("disabled"); }?>>
    </div>
    <!-- End Previous Question Button -->

    <!-- Next Question Button -->
    <div class="col-sm-3 offset-6">
        <?php
          if( isset($_POST["is_editing"]) ) {
            // The review screen is showing this question so the user can change his/her answer.
            echo('<style>#pre { display: none; }</style>
            <input type="submit" class="btn btn-default" style="float:right;cursor:pointer;" name="next" value="Save">');
          } else {
            if( $question_to_display == ($_SESSION["total_number_of_questions"] - 1) ) {
              echo '<input type="submit" class="btn btn-default" style="float:right;cursor:pointer;" name="next" value="Finish">';
            } else {
              echo '<input type="submit" class="btn btn-default" style="float:right;cursor:pointer;" name="next" value="Next">';
            }
          }

         ?>

    </div>
    <!-- End Next Question Button -->
</div>
<!-- End Contest Navigation Buttons -->
