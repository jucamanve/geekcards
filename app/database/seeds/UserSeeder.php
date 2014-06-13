<?php

class UserSeeder extends Seeder {

	/**
	 * Run users seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		// $hashed = Hash::make('secreto');

		DB::table('users')->insert(array(
			// array('name'=>'Apartaco1', 'country' => 'Venezuela', 'state'=>'DF', 'city'=>'Caracas', 'address'=>'Lugar 1', 'description'=>'Esta es la desc.', 'night_price'=>'47', 'month_price'=>'67' ),
			// array('name'=>'Apartaco2', 'country' => 'Venezuela', 'state'=>'DF', 'city'=>'Caracas', 'address'=>'Lugar 2', 'description'=>'Esta es la desc.', 'night_price'=>'47', 'month_price'=>'67' ),
			// array('name'=>'Apartaco3', 'country' => 'Venezuela', 'state'=>'DF', 'city'=>'Caracas', 'address'=>'Lugar 3', 'description'=>'Esta es la desc.', 'night_price'=>'47', 'month_price'=>'67' ),
			// array('name'=>'Apartaco4', 'country' => 'Venezuela', 'state'=>'DF', 'city'=>'Caracas', 'address'=>'Lugar 4', 'description'=>'Esta es la desc.', 'night_price'=>'47', 'month_price'=>'67' ),
			// array('name'=>'Apartaco5', 'country' => 'Venezuela', 'state'=>'DF', 'city'=>'Caracas', 'address'=>'Lugar 5', 'description'=>'Esta es la desc.', 'night_price'=>'47', 'month_price'=>'67' ),
			// array('name'=>'Apartaco6', 'country' => 'Venezuela', 'state'=>'DF', 'city'=>'Caracas', 'address'=>'Lugar 6', 'description'=>'Esta es la desc.', 'night_price'=>'47', 'month_price'=>'67' ),


			array(	'name'=>'Edificio Santos Andrade Departamento 2',
					'country' => 'Ecuador',
					'state'=>'Pichincha',
					'city'=>'Quito',
					'address'=>'La Granja',
					'description'=>'Espectacular departamento de 138mts con dos amplias habitaciones, 3 baños completos, estudio WIFI, sala comedor y cocina completamente amoblados, ubicado en el centro norte de la ciudad a pocos minutos del casco colonial, La Mariscal y los principales centros comerciales de Quito.',
					'max_guests'=>'5',
					'rooms'=>'2',
					'bathrooms'=>'3',
					'parking_places'=>'1',
					'night_price'=>'75',
					'month_price'=>'1687' ),
			array(	'name'=>'Edificio Santos Andrade Departamento 3',
					'country' => 'Ecuador',
					'state'=>'Pichincha',
					'city'=>'Quito',
					'address'=>'La Granja',
					'description'=>'Espectacular departamento de 138mts2 con dos amplias habitaciones, 3 baños completos y estudio, WIFI, sala comedor y cocina completamente amoblados, techos altos con madera vista, ubicado en el centro norte de la ciudad a pocos minutos del casco colonial, el Hospital Metropolitano, La Mariscal y los principales centros comerciales de Quito.',
					'max_guests'=>'5',
					'rooms'=>'2',
					'bathrooms'=>'3',
					'parking_places'=>'1',
					'night_price'=>'75',
					'month_price'=>'1687' ),
			array(	'name'=>'La Casa del Parque - Dpto. 7B',
					'country' => 'Ecuador',
					'state'=>'Pichincha',
					'city'=>'Quito',
					'address'=>'Calle Roca y Av. 6 de Diciembre',
					'description'=>'Depto ubicado en calle ROCA y Av. 6 DE DICIEMBRE, amplio, 2 habitaciones, 2 baños completos, sala, comedor, garaje y guardianía 24 horas. Wi-fi, TV cable y telefono. Ideal hasta 5 personas',
					'max_guests'=>'5',
					'rooms'=>'2',
					'bathrooms'=>'2',
					'parking_places'=>'1',
					'night_price'=>'75',
					'month_price'=>'1687' ),
			array(	'name'=>'Torre Kytzia - Suite 504',
					'country' => 'Ecuador',
					'state'=>'Pichincha',
					'city'=>'Quito',
					'address'=>'La Mariscal',
					'description'=>'Hermosa suite completamente amoblada ubicada en el sector de La Mariscal, a pocos pasos de los principales atractivos de la ciudad, facil acceso, servicio de internet inalambrico, línea telefónica y televisión por cable.',
					'max_guests'=>'3',
					'rooms'=>'1',
					'bathrooms'=>'1',
					'parking_places'=>'1',
					'night_price'=>'65',
					'month_price'=>'1460' ),
			array(	'name'=>'Torres Seis - Dpto A-9',
					'country' => 'Ecuador',
					'state'=>'Pichincha',
					'city'=>'Quito',
					'address'=>'Calle Jeronimo Carrion y 6 de Diciembre',
					'description'=>'Departamento ubicado en la JERONIMO CARRION y 6 DE DICIEMBRE, amplio 3 habitaciones, 2 baños completos, sala, comedor, garaje y guardianía 24 horas. Adicional cuenta en sus áreas sociales con 3 salas de video juegos (WII, PLAY STATION 3 Y XBOX 360), futbolín, ping pong y billar, además de un área húmeda con sauna, turco y jacuzzi y gym.',
					'max_guests'=>'6',
					'rooms'=>'3',
					'bathrooms'=>'2',
					'parking_places'=>'1',
					'night_price'=>'85',
					'month_price'=>'1910' ),
			array(	'name'=>'Torre Seis - Dpto B-11',
					'country' => 'Ecuador',
					'state'=>'Pichincha',
					'city'=>'Quito',
					'address'=>'Calle Jeronimo Carrion y 6 de Diciembre',
					'description'=>'Flamante departamento ubicado en calle Jeronimo Carrion y Av. 6 de diciembre, amplio 2 habitaciones, 2 baños completos, sala, comedor, garaje y guardianía 24 horas. Adicional cuenta en sus áreas sociales con 3 salas de video juegos (WII, PLAY STATION 3 Y XBOX 360), futbolín, ping pong y billar, además de un área húmeda con sauna, turco y jacuzzi y gym.',
					'max_guests'=>'6',
					'rooms'=>'2',
					'bathrooms'=>'2',
					'parking_places'=>'1',
					'night_price'=>'85',
					'month_price'=>'1910' ),
			array(	'name'=>'Torre Seis - Dpto C-10',
					'country' => 'Ecuador',
					'state'=>'Pichincha',
					'city'=>'Quito',
					'address'=>'Calle Jeronimo Carrion y 6 de Diciembre',
					'description'=>'Flamante departamento ubicado en calle Jeronimo Carrion y Av. 6 de diciembre, amplio 2 habitaciones, 2 baños completos, sala, comedor, garaje y guardianía 24 horas. Adicional cuenta en sus áreas sociales con 3 salas de video juegos (WII, PLAY STATION 3 Y XBOX 360), futbolín, ping pong y billar, además de un área húmeda con sauna, turco y jacuzzi y gym.',
					'max_guests'=>'6',
					'rooms'=>'2',
					'bathrooms'=>'2',
					'parking_places'=>'1',
					'night_price'=>'85',
					'month_price'=>'1910' ),

		));

		// $user = User::create(
		// 						array(	'username' => 'philipbrown',
		// 								'email' => 'phil@ipbrown.com',
		// 								'password' => $hashed)
		// 					);
		// $user = User::create(
		// 						array(	'username' => 'barfoo',
		// 								'email' => 'foo@bar.com',
		// 								'password' => $hashed)
		// 					);
		// $user = User::create(
		// 						array(	'username' => 'Jucaman',
		// 								'email' => 'jucaman@gmail.com',
		// 								'password' => $hashed)
		// 					);
	}

}