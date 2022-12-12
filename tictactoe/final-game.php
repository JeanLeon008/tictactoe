<section class="container-game">

<?php
require_once 'header-sidebar.php';

?>
<article class="col col-game-spacing">
	<article class="subtitle-row">
		<h2>Playing game...</h2>
		<article class="alert-spacing">
			<article class="alert game-alert">You Win!!</article>
		</article>
		<figure class="container-photo circle img_tic o"></figure>
		<figure class="container-photo circle img_tic x"></figure>
		<h3 class="relative-pos-game">
			<span class="points"><span class="nameuser">Player: <span class="usermoves moves">3</span></span></span><span class="points"><span class="computer">Computer: <span class="computermoves moves">2</span></span></span>
		</h3>
	</article>
	<article class="container-row relative-pos-game">
		<article class="game">
			<article class="field"><button id="1" disabled class="btn img_tic o"></button></article>
			<article class="field"><button id="2" class="btn img_tic"></button></article>
			<article class="field"><button id="3" class="btn img_tic"></button></article>
			<article class="field"><button id="4" class="btn img_tic"></button></article>
			<article class="field"><button id="5" disabled class="btn img_tic o"></button></article>
			<article class="field"><button id="6" class="btn img_tic "></button></article>
			<article class="field"><button id="7" disabled class="btn img_tic x"></button></article>
			<article class="field"><button id="8" disabled class="btn img_tic x"></button></article>
			<article class="field"><button id="9" disabled class="btn img_tic o"></button></article>
		</article>
	</article>
	<article class="container-row center form">
		<article class="form-win">
			<form>
				<label for="nickname">Enter your Nickname </label>
				<input id="nickname" type="text" name="nickname" placeholder="Nickname">
				<input type="submit" name="" id="" class="" value="Submit">
			</form>
			<article class="alert-spacing-error">
				<article class="alert"><span class="underline">Message:</span> Enter your nickname !!</article>
			</article>
		</article>
		<br>
	</article>
	<div class="button-start">
		<a href="index.php?template=1"><button>START NEW GAME</button></a>
	</div>
</article>
</section>
