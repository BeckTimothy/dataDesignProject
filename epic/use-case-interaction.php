<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Use Case/Interaction Flow</title>
	<link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body class="center">
<div>
	<h2>Use Case/Interaction: Downvoting</h2>
	<p>u/BobMcHatesEverything has been arguing in the comment section of a popular computer related subreddit, however everyone is vehemently disagreeing with his opinions.u/BobMcHatesEverything feels the need to downvote every single post that doesn’t share his perspective to show the other users just how wrong they are.
		<br><br>
		<em>Precondition:</em> u/BobMcHatesEverything received a reply he doesn’t like.
		<br>
		<em>Postcondition:</em> The other users' posts have been downvoted for being wrong.
	</p>
	<div class="center">
		<ul>
			<li>Bob receives a reply to one of his comments, in his inbox, disagreeing with his opinion about Mac computers.</li>
			<li>He immediately clicks the downvote icon, to put the opposing user in his rightful place.</li>
			<li>The website changes the karma of the other user’s reply from 1 to 0</li>
			<li>Bob then clicks reply, prompting him with an input field to type a reply.</li>
			<li>Bob crafts a colorful message about how his opinion is correct and everyone else is wrong.</li>
			<li>Clicking the reply button again, his comment reply is displayed below the other user’s comment.</li>
			<li>The opposing user has been dealt with accordingly.</li>
		</ul>
	</div>
	<p>
		<a href="./index.php" class="link">Back To Index</a>
	</p>
</div>
</body>
</html>
<?php
?>