

   <div class="main">
	 <form method='post' action="faqupload.php" enctype="multipart/form-data">
    <table class='table full-width' >
        <div class="blue form-title center full-width"><h2>ADDING QUESTION AND ANSWER</h2></div>
     
		<tr>
					 <td class="label">Question</td>
					 <td><textarea name='question' class='text-area width90' placeholder='EX : Write a question' required></textarea> </td>
		</tr>

        <tr>
            <td class="label">Answer</td>
            <td><textarea name='answer' class='text-area width90' placeholder='EX : Write an answer' required></textarea></td>
        </tr>

					  </table>

            <button type="submit" class="btn btn-info" name="submit" id="btn-save">
    		    <i class="fa fa-home"></i> Save Question and Answer </button>




</form>
</div>
