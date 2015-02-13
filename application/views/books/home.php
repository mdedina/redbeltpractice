<!DOCTYPE>
<!-- 
This page needs:
	- Name of current user
	- An array of recent reviews. Review has:
		- Book id and title
		- Rating
		- User (reviewer)
		- Content
		- create_at
	- An array of all books. Book has:
		- id
		- title
 -->
<html>
<head>
	<style type="text/css">
	.review_box{
		overflow: auto;
		border: solid silver 1px;
		
	}
	</style>
</head>
<body>
	<div class="nav">
		<a href="/books/add_book_review">Add Book and Review</a>
		<a href="/users/logout">Logout</a>
	</div>
	<h1>Welcome, <?=$this->session->userdata('user_alias')?>!</h1>

	<div class="recent_reviews">
		<h2>Recent Book Reviews:</h2>

		<!-- TODO Iterate on recent reviews with PHP -->
		<div class="review">
			<a href="books/book/1">This is Book 1</a>
			<p>Rating: 3</p>
			<p>
				<a href="users/user/1">Jerry</a> 
				says: 
				Very inpirational. Lorem ipsum summa cum laude dominus sanctus ava Maria.
			</p>
		</div>
		<div class="review">
			<a href="books/book/2">This is Book 2</a>
			<p>Rating: 3</p>
			<p>
				<a href="users/user/3">Sally</a> 
				says: 
				Very inpirational. Lorem ipsum summa cum laude dominus sanctus ava Maria.
			</p>
		</div>
	</div>

	<div class="other_books">
		<h2>Other books with reviews:</h2>
		<div class="review_box">
			<!-- TODO Iterate on books with PHP -->
			<p><a href="books/book/1">Haryy Pottter</a></p>
			<p><a href="books/book/1">Mister Cottter</a></p>
		</div>
	</div>

</body>
</html>