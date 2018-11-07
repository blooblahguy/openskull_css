<div class="bg-primary pady2">
	<div class="container">
		<h1>Grid / Layout</h1>
		<p class="text-muted">12-columns and 3 media breakpoints.</p>
	</div>
</div>
<div class="section">
	<div class="container">
		<h2 class="title">The Basics</h2>
		<h4>Columns are automatically spaced and affixes change widths.</h4>
		<ul>
			<li><strong>Structure:</strong>Columns are placed inside of a <kbd>.row</kbd>. From there, column classes are all prefixed with <kbd>.os</kbd>. <kbd>os[-n]</kbd> applies to all device sizes.</li>
			<li><strong>Spacing: </strong>Columns are spaced automatically based on the gutter class of the <kbd>.row</kbd> parent. By default, row columns are not spaced, but adding <kbd>.g0</kbd>, <kbd>.g1</kbd>, <kbd>.g2</kbd>, or <kbd>.g3</kbd> to the container will change the gutter size.</li>
			<li><strong>Breakpoints: </strong>Many CSS libraries offer 4 or more breakpoints, but an increasingly small fraction of websites actually use these additional fringe breakpoints. We offer only 3 to keep things simple: 
				<ul class="padb0">
					<li><kbd>.os[-n]</kbd> - For all viewport sizes, but with lowest precedence</li>
					<li><kbd>.os-md[-n]</kbd> - For medium viewport sizes (think "medium and up") ~768px</li>
					<li><kbd>.os-lg[-n]</kbd> - For large viewport sizes (think "large and up") ~1024px</li>
				</ul>
			</li>
		</ul>
		
		<pre class="prettyprint"><code target=".grid612"></code></pre>
		<div class="bord pad2 margb2">
			<div class="grid612">
				<div class="row g1">
					<div class="os"><div class="bg-grey pad1"></div></div>
					<div class="os"><div class="bg-grey pad1"></div></div>
					<div class="os-2"><div class="bg-primary pad1"></div></div>
					<div class="clear"></div>
					<div class="os-5"><div class="bg-primary pad1"></div></div>
					<div class="os"><div class="bg-grey pad1"></div></div>
					<div class="os"><div class="bg-grey pad1"></div></div>
				</div>
			</div>
		</div>


		<h2 id="grid_offsets">Offsets</h2>
		<div class="message-success">
			<p>Good news! We don't do offsets. It's deprecated on a mobile-first web and you can accomplish the same with empty columns or with flexbox content alignments.</p>
			<p>Check out the positioning helpers below for more information</p>
		</div>

		<h2 id="grid_positioning">Flex Positioning</h2>
		<p>You can align objects within a .row by simple adding the correct class to them. There are aliases available to make things a little easier.</p> 
		<ul>
			<li>To align an element first or top, add <strong>.self-start</strong> or <strong>self.top</strong></li>
			<li>To align an element center or middle, add <strong>.self-center</strong> or <strong>self.middle</strong></li>
			<li>To align an element last or bottom, add <strong>.self-end</strong> or <strong>self.bottom</strong></li>
		</ul>
		<pre class="prettyprint"><code target=".gridpositioning"></code></pre>
		<div class="bord pad2 margb2 bordt0">
			<div class="gridpositioning">
				<div class="row g1" style="height: 200px">
					<div class="os self-start pad2 border bg-grey"></div>
					<div class="os self-center pad2 border bg-grey"></div>
					<div class="os self-end pad2 border bg-grey"></div>
				</div>
			</div>
		</div>

		<h2 id="grid_responsive">Responsive</h2>
	</div>
</div>