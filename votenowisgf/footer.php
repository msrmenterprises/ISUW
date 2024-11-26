<footer style="text-align: center;background: #e27618;color: #FFF;padding: 10px;display: inline-grid;    width: 100%;">
<p>For more information on ISGF Innovation Awards 2022, Please click <a href ="http://www.isgw.in/innovation-awards-2022/" target="_blank">here</a></p>
</footer>
</body>
<script type="text/javascript">
function votenow1(project_cate, project){
	//alert("called");
	//localStorage.setItem("nomination_category", txt);
	document.cookie = "project_category="+project_cate;
	document.cookie = "nominee="+project;
	window.location.href="<?php echo $url; ?>"
}
</script>
</html>