<HTML>
<HEAD>
<TITLE>Provisional Results</TITLE>

<style type="text/css">

</style>
<script type="text/javascript"
    src="jquery-1.10.1.min.js"></script>
<script>
//refreshing the results display page
    $(document).ready(
            function() {
                setInterval(function() {
                    $('#show').load("results.php");
                }, 1000);
            });
</script>

</HEAD>
<BODY>
    <div id="show" align="center"></div>
</BODY>
</HTML>