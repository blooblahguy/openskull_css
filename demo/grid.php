<div class="bg-secondary pad2 padt0" id="grid">
	<div class="container-fluid">
		<h1>Grid / Layout</h1>
		<p class="em text-muted">12-columns and 3 media breakpoints.</p>
	</div>
</div>
<div class="section">
	<div class="container-fluid">
		<h2 class="title">The Basics</h2>
		<h3 class="subtitle">Columns are automatically spaced, no matter how many are in the container.</h3>
		<ul>
			<li>Columns are placed inside of a <strong>.row</strong> or a <strong>.columns</strong> container. From there, column classes are all prefixed with <strong>.os</strong>. This is just to give the framework its own namespace, without interfering with classes you or other libraries may use.</li>
			<li>Columns are spaced automatically based on the gutter class of the parent. By default, columns are spaced by <strong>0.75rem;</strong> but adding <strong>.g0, .g1, .g2, .g3</strong> to the container will change the gutter.</li>
			<li>Many CSS libraries offer 4 or more breakpoints, but an increasingly small fraction of websites actually use these additional fringe breakpoints. Breakpoints prefixes are <strong>.os-sm-{x}</strong>, <strong>.os-md-{x}</strong>, and <strong>.os-lg-{x}</strong></li>
		</ul>
		
		<pre class="prettyprint"><code target=".grid612"></code></pre>
		<div class="bord pad2 margb2 bordt0">
			<div class="grid612">
				<div class="row g1">
					<div class="os">
						<div class="bg-grey pad20"></div>
					</div>
					<div class="os">
						<div class="bg-grey pad20"></div>
					</div>
					<div class="os">
						<div class="bg-grey pad20"></div>
					</div>
					<div class="clear"></div>
					<div class="os">
						<div class="bg-grey pad20"></div>
					</div>
					<div class="os">
						<div class="bg-grey pad20"></div>
					</div>
					<div class="os">
						<div class="bg-grey pad20"></div>
					</div>
					<div class="os">
						<div class="bg-grey pad20"></div>
					</div>
					<div class="os">
						<div class="bg-grey pad20"></div>
					</div>
				</div>
			</div>
		</div>


		<h2 id="grid_widths">Variable Width</h2>
		<p class="subtitle">You can size specific columns with number affixes.</p>
		<pre class="prettyprint"><code target=".grid611"></code></pre>
		<div class="bord pad2 margb2 bordt0">
			<div class="grid611">
				<div class="row g2">
					<div class="os-6">
						<div class="bg-primary pad2"></div>
					</div>
					<div class="os-1">
						<div class="bg-grey height100"></div>
					</div>
					<div class="os">
						<div class="bg-grey height100"></div>
					</div>
				</div>
			</div>
		</div>


		<h2 id="grid_offsets">Offsets</h2>
		<p class="subtitle">Place elements inside a grid with an offset</p>
		<pre class="prettyprint"><code target=".gridoffsets"></code></pre>
		<div class="bord pad2 margb2 bordt0">
			<div class="gridoffsets">
				<div class="row g1">
					<div class="os-6 offset-3">
						<div class="bg-primary pad2"></div>
					</div>
					<div class="clear"></div>
					<div class="os-4 offset-1">
						<div class="bg-grey pad2"></div>
					</div>
					<div class="os-4 offset-2">
						<div class="bg-grey pad2"></div>
					</div>
				</div>
			</div>
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