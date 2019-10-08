<!DOCTYPE html>
<HTML lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Data Design</title>
	<link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>
	<div class="wrapper">
		<h2>Persona:</h2>
		<p>BobMcHateseverything, a 32 year old male living in his mother’s basement, with above average computing skills. He’s extremely opinionated about everything, claims to love technology but only uses Windows and despises Apple products. He uses Reddit to flex his opinions, argue with everyone, and correct their typos. Bob has been balding since the ripe age of 12, and due to this he has never known the love of a woman. From his unhealthy habits he has become seat-ridden at his computer, his cat can't stand the stench of his body odor, and his mother has given up on trying to get him to socialize with real people. The neglect he gives towards his personal hygiene and care for his health has pushed away everyone and everything around him. Due to his personal insecurities he's failed to find sympathy for any living thing, and has expresses this through spite towards every user of the Reddit community. </p>
		<h2>User Story:</h2>
		<p>“As a Reddit user, I want to downvote every post that disagrees with me.”</p>
		<h2>Use Case/Interaction</h2>
		<p>u/BobMcHatesEverything has been arguing in the comment section of a popular computer related subreddit, however everyone is vehemently disagreeing with his opinions.u/BobMcHatesEverything feels the need to downvote every single post that doesn’t share his perspective to show the other users just how wrong they are.
			<br><br>
			<em>Precondition:</em> u/BobMcHatesEverything received a reply he doesn’t like.
			<br>
			<em>Postcondition:</em> The other users feel bad about being incorrect.
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
		<div class="center">
			<img src="./bob.gif" id="bobimage" alt="This is bob">
		</div>
	</div>
</body>

<?php
?>