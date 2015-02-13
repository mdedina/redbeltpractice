<!DOCTYPE html>
<!-- 
	Required:
		Title and author
		Array of all reviews
			rating, content, authorname, authorid
		current userid
 -->
<html>
<head>
	<meta charset="UTF=8">
	<title>Book</title>
	<style type="text/css">
		.review{
			border-top: solid silver 1px;
		}
	</style>
</head>
<body>
	<div class="nav">
		<a href="books/home">Home</a>
		<a href="users/logout">Logout</a>
	</div>

	<h1>The Current Book</h1>
	<h3>Author: Veronica Roth</h3>

	<div class="reviews">
		<h2>Reviews:</h2>
		<!-- PHP repeat for each review -->
		<div class="review">
			<p>Rating: *****</p>
			<p><a href="users/user/1">Shirley</a> says:
				<!-- PHP contents of the review -->
				ipsum lorem
			</p>
			<p>
				<span class="date">Posted on October 31, 2014</span>
				<!-- PHP only if current userid matches review userid -->
				<a href="books/delete_post/1">Delete this review</a>
			</p>
		</div>
		<div class="review">
			<p>Rating: *****</p>
			<p><a href="users/user/1">Shirley</a> says:
				<!-- PHP contents of the review -->
				ipsum lorem
			</p>
			<p class="date">Posted on October 31, 2014</p>
		</div>
	</div>

	<div class="add_review">
		<form>
			<label for="content">Add a review:</label>
			<p><textarea name="content"></textarea></p>
			<p>
				<label for="rating">Rating:</label>
				<select name="rating">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
				stars.
			</p>
			<p>
				<input type="submit" value="Add Book and Review">
			</p>
		</form>

</body>
</html>