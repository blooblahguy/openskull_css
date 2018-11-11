		
		</div> <!-- .main_content -->
		<div class="footer_outer pad1 bg-black">
			<div class="footer container em muted text-right">
				&copy; <? echo Date("Y"); ?> all rights reserverd &bull; <a href="http://www.gladelynch.com" target="_blank">Glade Lynch</a>
			</div>
		</div>
	</div> <!-- .wrapper -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
			// var test = '';
			for ( i = 1; i <= tabs; i++) {
				exp += '\t'
				// test += 't';
			}
			exp = new RegExp(exp, "gi")
			// console.log(target, lines.length, tabs, test)
			
			
			// $(this).text(html)
			$(this).text(html.replace(exp, "\n").trim()) // .text auto trims
		}); 
	</script>

	<script src="/openskull.js"></script>
	<script src="/demo/prettify.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>