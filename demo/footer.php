		
		</div> <!-- .main_content -->
		<div class="footer_outer pad1 bg-dark">
			<div class="footer container em muted text-right">
				&copy; <? echo Date("Y"); ?> all rights reserverd &bull; <a href="http://www.gladelynch.com" target="_blank">Glade Lynch</a>
			</div>
		</div>
	</div> <!-- .wrapper -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/cash/5.0.0/cash.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script>
		// this trims extra whitespace and stuff inside of code prettify
		$("code").each(function() { 
			var target = $(this).attr("target")

			var html
			if (target) {
				html = $(target).html()
			} else {
				html = $(this).html()
			}

			// undent code to base line
			var lines = html.split('\n');
			var tabs
			$.each(lines, function() {
				tabs = (this.match(/\t/g) || []).length;
				if (tabs > 0) {
					return;
				}
			})
			tabs += 1
			var exp = '\n';
			var test = '';
			for ( i = 1; i <= tabs; i++) {
				exp += '\t'
				test += 't';
			}
			exp = new RegExp(exp, "gi")			
		
			html = html.replace(exp, "\n").trim()

			if (/<[a-z/][\s\S]*>/i.test(html)) {
				$(this).text(html) // .text auto trims
			} else {
				$(this).html(html) // .text auto trims
			}
		}); 
	</script>

	<script src="/dist/openskull.js"></script>
	<script src="/demo/prettify.js"></script>
	<script> hljs.initHighlightingOnLoad();</script>
</body>
</html>