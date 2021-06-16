<?php
	/**
	* Permite obtener los datos de la base de datos y retornarlos
	* en modo json o array
	*/
	try {
		date_default_timezone_set('America/Caracas');
		// Se capturan las opciones por Post
		$opcion = (isset($_POST["opcion"])) ? $_POST["opcion"] : "";

		// id para los filtros en las consultas
		$idpara = (isset($_POST["idpara"])) ? $_POST["idpara"] : '';

		$fecha  = date("DD-MM-YYYY");
		$hora   = date("hh:i");

		// Se establece la conexion con la BBDD
		$params = parse_ini_file('dist/config.ini');

		if ($params === false) {
			throw new \Exception("Error reading database configuration file");
		}

		// connect to the postgresql database
		$conStr = sprintf("sqlsrv:Server=%s,%d;",
					$params['host_sql'],
					$params['port_sql']);

		$connec = new \PDO($conStr, $params['user_sql'], $params['password_sql']);

		$moneda = $params['moneda'];
		$simbolo = $params['simbolo'];

		$datos = [];
		switch ($opcion) {
			case 'hora_srv':
				echo json_encode('1¬' . $hora);
				break;

			case 'consultarpvp':
				$sql = "SELECT EA.codigo, EC.barra, EA.descripcion AS nombre, EA.precio1 AS base, EA.impuesto,
							(CASE WHEN GETDATE() BETWEEN EA.fechainicio AND EA.fechafinal THEN EA.preciooferta ELSE 0 END) AS oferta
						FROM BDES.dbo.ESARTICULOS EA
							INNER JOIN BDES.dbo.ESCodigos EC ON EC.escodigo = EA.codigo
						WHERE EC.barra = '$idpara'";

				// Se ejecuta la consulta en la BBDD
				$sql = $connec->query($sql);
				$row = $sql->fetch();

				// Se prepara el array para almacenar los datos obtenidos
				$precio = $row['base']   * ( 1 + ( $row['impuesto'] / 100 ) );
				$oferta = $row['oferta'] * ( 1 + ( $row['impuesto'] / 100 ) );
				if($row['oferta']>0) {
					$base   = $row['oferta']   * 1;
					$impto  = round($oferta  - $base, 2);
				} else {
					$base   = $row['base']   * 1;
					$impto  = round($precio  - $base, 2);
				}

				$datos[] = [
					'codigo' => $row['codigo'],
					'barra'  => $row['barra'],
					'nombre' => $row['nombre'],
					'dpto'   => $row['dpto'],
					'precio' => $simbolo . '. ' . number_format($precio, 2),
					'oferta' => $simbolo . '. ' . number_format($oferta, 2),
					'ahorro' => $simbolo . '. ' . number_format($precio - $oferta, 2),
					'ofert'  => $oferta,
					'desglo' => '(Base: ' . number_format($base, 2) . ') + (IVA: ' . number_format($impto, 2) . ')',
 				];

				// Se retornan los datos obtenidos
				echo json_encode($datos);
				break;

			default:
				# code...
				break;
		}

		// Se cierra la conexion
		$connec = null;

	} catch (PDOException $e) {
		echo "Error : " . $e->getMessage() . "<br/>";
		die();
	}
?>
