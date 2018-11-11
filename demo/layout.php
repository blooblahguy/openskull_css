<div class="bg-secondary pady2">
	<div class="container">
		<h1>Layout</h1>
		<p class="text-muted">The single most tedius task in web development made easy.</p>
	</div>
</div>
<div class="section">
	<div class="container">
		<h3>Containers</h3>
		<p>If you don't contain your content then it will hit the screen edges of your mobile devices. There are 2 simple container classes for all cases.</p>
		<ul>
			<li>To contain & center with a max width use <kbd>.container</kbd></li>
			<li>To contain without a max width use <kbd>.container-fluid</kbd></li>
			<li>To give only vertical padding to your content use <kbd>.section</kbd></li>
		</ul>
		<p>These make automatically pad the sides of your content for smaller devices. You are free to focus on sub-layouts with everything inside of a container.</p>
		<pre><code target=".containerex"></code></pre>
	</div>
	<div class="containerex bord bordl0 bordr0 pady2 margy2">
		<div class="section bg-grey">
			<div class="container margb2">
				<div class="bg-primary pad1">.container</div>
			</div>
			<div class="container-fluid">
				<div class="bg-primary pad1">.container-fluid</div>
			</div>
		</div>
	</div>
	<div class="container">
		
		
		<h3>Spacing Helpers</h3>
		<p>When building a layout, it's incredible important to be able to control spacing. This is where the <kbd>.pad[n]</kbd> and <kbd>marg[n]</kbd> helpers come in.</p>

		<div class="row g1">
			<div class="os-12 os-md-6">
				<h4>Paddings</h4>
				<p>To control the padding of an element use <kbd>.pad[0-4]</kbd> for variable padding.</p>
				<ul>
					<li>Top side only: <kbd>padt[0-1]</kbd></li>
					<li>Right side only: <kbd>padr[0-1]</kbd></li>
					<li>Bottom side only: <kbd>padb[0-1]</kbd></li>
					<li>Left side only: <kbd>padl[0-1]</kbd></li>
					<li>Both top &amp; bottom side: <kbd>pady[0-1]</kbd></li>
					<li>Both left &amp; right side: <kbd>padx[0-1]</kbd></li>
				</ul>
			</div>
			<div class="os os-md-6">
				<h4>Margin</h4>
				<p>To control the margin of an element use <kbd>.marg[0-4]</kbd> for variable margin.</p>
				<ul>
					<li>Top side only: <kbd>margt[0-1]</kbd></li>
					<li>Right side only: <kbd>margr[0-1]</kbd></li>
					<li>Bottom side only: <kbd>margb[0-1]</kbd></li>
					<li>Left side only: <kbd>margl[0-1]</kbd></li>
					<li>Both top &amp; bottom side: <kbd>margy[0-1]</kbd></li>
					<li>Both left &amp; right side: <kbd>margx[0-1]</kbd></li>
				</ul>
			</div>
		</div>
		
		<pre><code target=".spacinghelpers"></code></pre>
		<div class="spacinghelpers bord pad2 margb2">
			<div class="row">
				<div class="os-min padr2 bg-primary"><div class="bg-grey" style="width: 140px; height: 100%;"></div></div>
				<div class="os pad4">
					<p>Super padded text content</p>
					<p>Next to an image or resource</p>
				</div>
			</div>
		</div>

		<h3>Visibility Helpers</h3>
		<p>When building for mobile, sometimes you just can't show the same content as desktop without dramatically changing the HTML. This is where visibility classes come in.</p>
		<ul>
			<li>To hide an element on a device size use <kbd>.hidden[-size]</kbd> ex. <kbd>.hidden-lg</kbd></li>
			<li>To show an element on a device size use <kbd>.display[-size]</kbd> ex. <kbd>.display-lg</kbd></li>
			<li>To show an element with a display property other than block use <kbd>.display[-size]-inline-block</kbd> or <kbd>.display[-size]-inline</kbd></li>
		</ul>
		<pre><code target=".visiblityhelpers"></code></pre>
		<div class="visiblityhelpers bord pad2 margb2">
			<div class="row g1">
				<div class="os-12 os-md hidden display-lg"><div class="bg-primary pad1">Display on large only</div></div>
				<div class="os-12 os-md hidden display-md"><div class="bg-secondary pad1">Display on medium and above</div></div>
				<div class="os-12 os-md hidden hidden-lg display-md"><div class="bg-secondary pad1">Display on medium only</div></div>
				<div class="os-12 os-md hidden-lg"><div class="bg-secondary pad1">Display on medium and below</div></div>
				<div class="os-12 os-md hidden-md"><div class="bg-dark pad1">Display on small only</div></div>
			</div>
		</div>
	</div>
</div>