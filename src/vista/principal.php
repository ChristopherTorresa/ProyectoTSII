<?php
include "sesion_iniciar.php";
?>
<?php include "superior.php"?>
<table width=100% border=0>
	<tr>
		<td width=16%>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-3 col-md-2 sidebar">
						<ul class="nav nav-sidebar">
                <?php include  "menu.php"?>
                </ul>

					</div>

				</div>
			</div>

		</td>
		<td width=80%><iframe frameborder="0" name="principal" height="600px" width=100%></iframe>

		</td>
	</tr>
</table>

<script>
    $(document).ready( function() {

        $('ul.nav > li').click(function (e) {
            $('ul.nav > li').removeClass('active');
            $(this).addClass('active');         
        });

       
    });

</script>



</body>
</html>