@extends('layouts.app')

@section('content')

		<div class="banner agileits w3layouts">
			<img src="images/banner.jpg" alt="Agileits W3layouts">
			<h1 class="wow agileits w3layouts fadeInDown">Reservas</h1>
		</div>


	<div class="location agileits w3layouts">
		<div class="container">

			<div class="col-md-6 col-sm-6 agileits w3layouts location-grids location-grids-1 wow slideInLeft">
				<h3>Donde estamos</h3>
				<p>Para venir a Can Planes de Bcn, Granollers etc., toma la C17 dirección Vic. <br>C-17 SALIDA GARRIGA NORTE Satis</p>
			</div>

			<div class="col-md-6 col-sm-6 agileits w3layouts location-grids location-grids-2 wow slideInRight">
				<img src="images/CanCruz-mapa-fake.png" alt="Mapa de acceso a carretera">
			</div>
			<div class="clearfix"></div>

		</div>
	</div>





        <div class="reg agileits w3layouts" id="booking">
            <div class="container">

                <div class="register agileits w3layouts">
                    <form action="{{Route('client.store')}}" method="POST">

                        @CSRF

                        <h2>Reserva tu estancia</h2>


                        <div class="dates wow  agileits w3layoutsslideInLeft">
                            <div class="dates agileits w3layouts">
                                <h4>Nombre</h4>
                                <div>
                                    <input type="text" class="form-control agileits w3layouts slideInLeft" name="first_name" required="">
                                </div>
                                <h4>Apellidos</h4>
                                <div>
                                    <input type="text" class="form-control agileits w3layouts slideInLeft" name="last_name"  required="">
                                </div>
                                <h4>Email</h4>
                                <div>
                                    <input type="email" class="form-control agileits w3layouts slideInLeft" name="email"  required="">
                                </div>
                            </div>
                            <h4>Móvil</h4>
                            <div>
                                <input type="text" class="form-control agileits w3layouts slideInLeft" name="phone_number"  required="">
                            </div>
                            <h4>Comentario</h4>
                            <div>
                                <input type="text" class="form-control agileits w3layouts slideInLeft" name="comments"   required="">
                            </div>

                        </div>
                </div>

                <div class="members wow agileits w3layouts slideInLeft">
                    <div class="guests agileits w3layouts">
                        <h4>Huéspedes</h4>
                        <div class="dropdown-button agileits w3layouts">
                            <select class="dropdown agileits w3layouts" id="guests" name="guests" tabindex="10" data-settings='{"wrapperClass":"flat"}'>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>

                            </select>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>

                <div class="suite wow slideInLeft agileits w3layouts">
                    <div class="dropdown-button agileits w3layouts">

                        <h4>Habitaciones</h4>
                        <select onchange="mostrarSugerencia(this.value)" class="dropdown agileits w3layouts" name="room_id" tabindex="10" data-settings='{"wrapperClass":"flat"}'>

                            <option value="none">Elige</option>
                            <option value="Suite PUIGRACIÓS">Suite PUIGRACIÓS</option>
                            <option value="Suite SANT CRISTÒFOL">Suite SANT CRISTÒFOL</option>
                            <option value="Suite ROCACENTELLA">Suite ROCACENTELLA</option>
                        </select>
                    </div>
                </div>

                <div class="book-pag wow agileits w3layouts slideInLeft">
                    <h4>Seleccionar estancia</h4>
                    <div class="book-pag-frm1 agileits w3layouts wow slideInLeft">
                        <label>Fecha de entrada</label>
                        <input class="date agileits w3layouts" id="datepicker1" type="date" name="check_in_date"  value="Entrada" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                    </div>
                    <div class="book-pag-frm2 wow agileits w3layouts slideInLeft">
                        <label>Fecha de salida</label>
                        <input class="date agileits w3layouts" id="datepicker2" type="date" name="check_out_date"  value="Salida" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                    </div>
                    <div class="clearfix"></div>
                </div>


                <div class="food wow agileits w3layouts slideInLeft">
                    <h4>Extras</h4>
                    <div class="radio-btns agileits w3layouts">
                        <div>
                            <input id="pet" class="w3-radio" type="checkbox" name="pet" value="1">
                            <label class="w3-validate">Mascota</label>
                        </div>
                        <div>
                            <input id="breakfast" class="w3-radio" type="checkbox" name="breakfast" value="1">
                            <label class="w3-validate">Desayuno</label>
                        </div>
                    </div>
                </div>
                <div class="prices  agileits w3layoutsslideInLeft">
                    <div class="prices agileits w3layouts">
                        <h4>Precio Total</h4>
                        <div>

                            <input type="text" class="form-control agileits w3layouts slideInLeft" name="total_price" >
                        </div>
                    </div>
                </div>


                <div class="submit wow agileits w3layouts slideInLeft">
                <!--<a class="popup-with-zoom-anim agileits w3layouts" href="{{ url('/') }}">Reservar ahora</a>-->
                    <input type="submit" value="Reservar" class="popup-with-zoom-anim agileits w3layouts">
                </div>

                </form>

                <!-- Popup-Box -->
                <!--<div id="popup">
                    <div id="small-dialog" class="mfp-hide agileits w3layouts">
                        <div class="pop_up agileits w3layouts">
                            <div class="payment-online-form-left agileits w3layouts">
                                <form>
                                    <h4><span class="shipping agileits w3layouts"> </span>Customer Details</h4>
                                    <ul class="agileits w3layouts">
                                        <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"></li>
                                        <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
                                    </ul>
                                    <ul class="agileits w3layouts">
                                        <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
                                        <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                    <h4 class="paymenthead agileits w3layouts"><span class="payment agileits w3layouts"></span>Payment Details</h4>
                                    <div class="clearfix"></div>
                                    <ul class="payment-type agileits w3layouts">
                                        <li class="agileits w3layouts"><span class="col_checkbox agileits w3layouts">
                                                <input id="3" class="css-checkbox1 agileits w3layouts" type="checkbox">
                                                <label for="3" class="css-label1 agileits w3layouts"></label>
                                                <a class="visa agileits w3layouts" href="#"></a>
                                            </span>
                                        </li>
                                        <li class="agileits w3layouts">
                                            <span class="col_checkbox agileits w3layouts">
                                                <input id="4" class="css-checkbox2 agileits w3layouts" type="checkbox">
                                                <label for="4" class="css-label2 agileits w3layouts"></label>
                                                <a class="paypal agileits w3layouts" href="#"></a>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="agileits w3layouts">
                                        <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
                                        <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
                                    </ul>
                                    <ul class="agileits w3layouts">
                                        <li class="agileits w3layouts"><input required="" class="text-box-light hasDatepicker agileits w3layouts" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
                                        <li class="agileits w3layouts"><input required="" class="text-box-dark agileits w3layouts" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
                                    </ul>
                                    <ul class="payment-sendbtns agileits w3layouts">
                                        <li class="agileits w3layouts"><input type="reset" value="Reset"></li>
                                        <li class="agileits w3layouts"><input type="submit" value="Process Payment" class="order"></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button title="Close (Esc)" type="button" class="mfp-close agileits w3layouts">×</button>-->
                <!-- //Popup-Box -->

			</div>

		</div>
	</div>

@endsection


