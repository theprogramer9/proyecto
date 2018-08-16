
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="index.html"><img src="images/logo2.png" alt=" " /><h3>CARNES FRIAS</h3></a>
		<ul>
			<li>123 ejemplo</li>
			<li>Guadalajara Jalisco.</li>
			<li><a href="mailto:info@example.com">info@example.com</a></li>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Informacion</h4> 
			<ul>
				<li><a href="contact.html">Contactanos</a></li>
				<li><a href="icons.html">Web Icons</a></li>
				
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Tienda</h4> 
			<ul>
				<li><a href="jewellery.html">Carne de Res</a></li>
				<li><a href="cosmetics.html">Carne de Cerdo</a></li>
				<li><a href="Shoes.html">Pollo</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>Mi Cuenta</h4> 
			<ul>
				
				<li><a href="login.php">Login</a></li>
				<li><a href="register.html">Registrar</a></li>
				<li><a href="payment.html">Tipo de Pagos</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2018 Carnes Frias . 
	</div>
</div>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  

