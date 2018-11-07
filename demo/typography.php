<div class="bg-black pad2">
	<div class="container">
		<h1>Typography</h1>
		<p class="text-muted">Easy to read, consistent content is the most important part of every website.</p>
	</div>
</div>
<div class="section">
	<div class="container">
		<div class="typography">
			<h1>Heading 1</h1>
			<p>This is just some regular text. We can use <kbd>strong</kbd>, <kbd>.strong</kbd>, or <kbd>b</kbd> tags to go <strong>bold</strong>.</p>
			<p>But we can also use <kbd>em</kbd>, <kbd>.em</kbd>, or <kbd>i</kbd> tags to go <em>italic</em>.</p>
				
			<div class="text-center">
				<h2>Heading 2</h2>
				<p>We've contained all of this text in a <kbd>.text-center</kbd> div.</p>
				<p>Truncate long text to a line with <kbd>.ellipsis[n]</kbd>. Up to 6 lines.</p>
				<div class="row g1 content-middle">
					<div class="os-md-4 os-12"><div class="pad2 bg-primary"><div class="ellipsis">This text is way too long for it's container. We can keep going but it will be limited by it's <kbd>.ellipsis</kbd> lines count</div></div></div>
					<div class="os-md-4 os-6"><div class="pad2 bg-primary"><div class="ellipsis2">This text is way too long for it's container. We can keep going but it will be limited by it's <kbd>.ellipsis</kbd> lines count</div></div></div>
					<div class="os-md-4 os-6"><div class="pad2 bg-primary"><div class="ellipsis3">This text is way too long for it's container. We can keep going but it will be limited by it's <kbd>.ellipsis</kbd> lines count. Eventually we'll just run out of space and it will trail off.</div></div></div>
				</div>
			</div>
			<hr>
			<div class="text-right">
				<h3>Heading 3</h3>
				<p>We've contained all of this text in a <kbd>.text-right</kbd> div.</p>
				<p>We can use <kbd>u</kbd>, or <kbd>.underline</kbd> tags to go <u>underline</u>.</p>
				<p>We can use <kbd>s</kbd>, or <kbd>.strike</kbd> tags to go <s>strikethrough</s>.</p>
				<p>We can use <kbd>.font-extralight</kbd> to go <span class="font-extralight">extralight</span> if our font face supports it.</p>
				<p>We can use <kbd>.font-light</kbd> to go <span class="font-light">light</span> if our font face supports it.</p>
				<p>We can use <kbd>.font-normal</kbd> to go <span class="font-normal">normal</span>.</p>
				<p>We can use <kbd>.font-light</kbd> to go <span class="font-bold">bold</span> if our font face supports it.</p>
				<p>We can use <kbd>.font-extrabold</kbd> to go <span class="font-extrabold">extrabold</span> if our font face supports it.</p>
			</div>
			<hr>
			<h4>Heading 4</h4>
			<p>There are also helpers like <kbd>.caps</kbd> to go <span class="caps">capslock</span>.</p>
			<ul class="nolist">
				<li>Here we have a bullet-less <kbd>ul</kbd> list by adding <kbd>.nolist</kbd></li>
				<li>Or YOU CAN TAKE TEXT THAT COMES IN UPPERCASE <span class="text-lower">AND MAKE IT LOWERCASE</span> using <kbd>.text-lower</kbd>.</li>
				<li>Want to capitalize instead? Use <kbd>.capitalize</kbd> to <span class="capitalize">automatically capitalize all words inside of the container.</span></li>
			</ul>
			<hr>
			<h5>Heading 5</h5>
			<div class="text-justify">
				<p>Justify text with <kbd>.text-justify</kbd></p>
				<p>Lorem isum dolar sit amet isum dolar sit amet lorem alur dolar sit amet lorem alur lorem isum dolar sit amet isum dolar sit amet lorem alur dolar sit amet sit amet sit amet lorem alurasd asdasdasd Lorem isum dolar sit amet isum dolar sit amet lorem alur dolar sit amet lorem alur Lorem isum dolar sit amet isum dolar sit amet lorem alur dolar sit amet lorem alur</p>
			</div>
			<hr>
			<h6>Heading 6</h6>
			<p>But of course you can denote your text with all kinds of inline helpers:</p>
			<ul>
				<li><kbd>kbd</kbd> creates <kbd>keyboard annoatations</kbd></li>
				<li><kbd>sup</kbd> makes <sup>super</sup></li>
				<li><kbd>small</kbd> makes <small>your text smaller</small></li>
				<li><kbd>mark</kbd> helps <mark>highlight text</mark></li>
				<li><kbd>sub</kbd> makes <sub>subtext</sub></li>
				<li><kbd>.mute</kbd> calms the text (or element) you apply it to down <span class="muted">Making it have a lower opacity</span></li>
			</ul>


			<h3>Blockquotes</h3>
			<blockquote>
				<p>Blockquotes are simplified, and embeddable. Just use the <kbd>blockquote</kbd> tag as you would normally.</p>
				<blockquote>
					<p>An embedded blockquote can be useful for comments or forums where users quote one another.</p>
					<blockquote>
						<p>This is inception and this user is quoting a quote of a quote.</p>
						<blockquote><p>This is inception and this user is quoting a quote of a quote.</p></blockquote>
					</blockquote>
					
				</blockquote>
				<blockquote>Maybe someone else already answered this question?.</blockquote>
			</blockquote>
			<cite>– Cite the <em>Author</em> with <kbd>cite</kbd></cite>
		</div>
		<br>
		<div class="bg-black pad1 margt2 mono">Typeography Source Code: </div>
		<pre><code style="max-height: 400px;" class="scrolly" target=".typography"></code></pre>
		<br>

		<p>Suffice it to say that the point of the typography section in openskull is so that you don't have to think about it whatsoever. Just do what you always do, this should format the intended way.</p>
		<p class="message-info">You can always change spacing and sizing variables inside of the _variables.scss. When starting a project you should only have to do this once so that you can get straight to building. </p>
	</div>
</div>