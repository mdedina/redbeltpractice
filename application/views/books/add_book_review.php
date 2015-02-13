<!DOCTYPE html>
<!-- 
	This form requires:
		- all current authors
 -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Add Book and Review</title>
</head>
<body>
	<div class="nav">
		<a href="books/home">Home</a>
		<a href="users/logout">Logout</a>
	</div>

	<h1>Add a new book title and a review:</h1>
	<form action="book/add_book_review_post" method="post">
		<p>
			<label for="title">Book Title:</label>
			<input name="title" type="text">
		</p>
		<p>
			<label>Author:</label>
		</p>
		<p>
			<label for="author_select">Choose from the list:</label>
			<select name="author_select">
				<!-- PHP iterate on all authors -->
				<option value="1">William Shakespeare</option>
				<option value="2">David King</option>
			</select>
		</p>
		<p>
			<label for="author">Or add a new author:</label>
			<input name="author" type="text">
		</p>
		<p>
			<label for="content">Review:</label>
			<textarea name="content"></textarea>
		</p>
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
