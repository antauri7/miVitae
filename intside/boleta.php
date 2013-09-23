<?php
	require('../fpdf.php');

	class PDF extends FPDF
	{		
		//Cabecera de página
		function Header() {
			$anchoC1 = 100;
    		$this->Image('../images/logo_bueno.png',25,4,27);
			
			$matricula2 = $_COOKIE['recusuario'];
			$recBase = $_COOKIE['recuBase'];
			
			$link = mysql_connect('localhost','root','');
            mysql_select_db($recBase, $link);
			$query="select * from calificacion where matricula='$matricula2'";
            $resultado = mysql_query($query);
			$result = mysql_fetch_assoc($resultado);
			$matricula = $result['matricula'];
			$periodo = $result['periodo'];
			
			if( mysql_num_rows($res) > 0 ) :
    	  		list($matricula, $periodo) = 
    	  		mysql_fetch_array($res);
    	  	else :
    	  		echo "<script>alert('No hay registro del alumno'); history.go(-1)</script>";
    	  		exit;
    	    endif;
			
    	    $this->SetFont('Arial','B',15);
			//Color del texto en gris
    		$this->SetTextColor(128);
			$this->Cell($anchoC1);
    	    $this->Cell('70',5,"Universidad Tecnologica del Valle del Mezquital",0,0,'C');
			$this->Ln(15);
			$this->SetFont('Arial','B',12);
			$this->SetTextColor(1);
			$this->Cell($anchoC1);
			$this->Cell('70',5,'BOLETA DE CALIFICACIONES',0,0,'C');
			//$this->SetFont('Arial','B',12);
			$this->Ln();
			$this->SetFont('Arial','',8);
			$this->Cell($anchoC1);
			$this->Cell(70,5,"PERIODO: $periodo",0,0,'C');
			$this->Ln(15);
			$this->SetFont('Arial','B',10);
			//$anchoPro = 30;
			/*$this->Cell(47);
			$this->Cell(92,7,"CARRERA: $carrera",0,0,'L');*/
			//$this->Cell(140);
			$this->Cell(83,7,"MATRICULA: $matricula",0,0,'L');
			$this->Ln();
			/*$this->Cell(47);
			$this->Cell(92,7,"GRUPO: $grupo",0,0,'L');*/
			//$this->Cell(125);
			$this->Cell(83,7,"NOMBRE: $matricula",0,0,'L');
			$this->Ln(20);
	//$this->Ln();
	$this->Cell(5);
	//Encabezado de la Lista
	$this->SetFont('Arial','B',10);
	$this->SetFillColor(180, 180, 180);
	$this->Cell(18);
	$this->Cell(110,12,"ASIGNATURA",1,0,'C',true);
	$this->Cell(25,12,"No.UNIDADES",1,0,'C',true);
	
	$x1 = $this->GetX();			$y1 = $this->GetY() + 7;
	$this->Cell(56,7,"UNIDADES",1,0,'C',true);	
	$this->MultiCell(26,6,"PROMEDIO   ASIGNATURA",1,0,'C',true);	
	
	$this->SetXY($x1,$y1);		$this->SetFont('Arial','B',9);
	$this->Cell(8,5,"1",1,0,'C',true);			
	$this->Cell(8,5,"2",1,0,'C',true);			
	$this->Cell(8,5,"3",1,0,'C',true);
	$this->Cell(8,5,"4",1,0,'C',true);			
	$this->Cell(8,5,"5",1,0,'C',true);			
	$this->Cell(8,5,"6",1,0,'C',true);
	$this->Cell(8,5,"7",1,0,'C',true);
		
	$this->Ln();
			
		mssql_free_result($res);
		mssql_close($cnn);
	}
		
	function Footer() {
			$this->SetY(-30);
    		$this->SetFont('Arial','I',9);
    		//$this->SetTextColor(128);
    		$this->Cell(0,10,"Antauri Escolares",0,0,'C');

			//Posición a 1,5 cm del final
   			 $this->SetY(-15);
   			 //Arial itálica 8
    		$this->SetFont('Arial','I',8);
    		//Color del texto en gris
    		$this->SetTextColor(128);
    		//Numeracion, Fecha y Hora Actual
			setlocale(LC_TIME, 'Spanish');
    		$fechaHoy = strftime('%d de %B de %Y',strtotime( date('Y-m-d, g:i a') ));
			$horaActual =  date('g:i a') ;
			$this->Cell(0,10,"$fechaHoy - $horaActual",0,0,'C');
	}
}

//Creacion del objeto de la clase heredada
	if(isset($matricula2)) :
	$pdf=new PDF('L', 'mm', 'letter');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','',10);
	
	
	$per = $periodo;
	$matricula = $matricula2;
	
	$cnn = $link;
	$msgErr = '<div class="message" align=center>Error al intentar ejecutar la operaci&oacute;n.</div>';
	/* Consulta de promedios finales de cada unidad por asignatura*/
	$SQL="select materia, unidades, unidad1, unidad2, unidad3, unidad4, unidad5, unidad6, periodo from calificacion where matricula='$matricula'";
	
	$result = mysql_query( $SQL ) or die ($msgErr);
	
    //	$cont = 1;
	if( mysql_num_rows($result)>0):
		$style1 = "style='font-size:12px'";
		$style2 = "font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px;";
		$style3 = "font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; background-color:#CBDD93;";
		$cont = 0;
		$promFinal=0;
		/* Query para obtener el numero total de asignaturas*/
		$SQL2="SELECT materia, unidades, unidad1, unidad2, unidad3, unidad4, unidad5, unidad6, periodo from calificacion FROM calificacion WHERE matricula='$matricula'";
		$res = mysql_query( $SQL2 ) or die ($msgErr);
		list($numAs)=mysql_fetch_array($res);
		
		while(list($materia,$unidades,$u1,$u2,$u3,$u4,$u5,$u6)=mysql_fetch_array($result)):
			$prom=(($u1+$u2+$u3+$u4+$u5+$u6)/$unidades);
            $promedio = round($prom * 10) / 10;
			
    			//comienza la lista
    			$hC = 7;
    			$pdf->Cell(5);
    			$pdf->SetFont('Arial','',10);
    			$pdf->SetTextColor(0, 0, 0);
				$pdf->Cell(18);
    			//$pdf->Cell(10,$hC,$cont++,1,0,'C');
    			$pdf->Cell(110,$hC,"$materia",1,0,'L');
    			$pdf->Cell(25,$hC,"$uni",1,0,'C');
    			$pdf->Cell(8,$hC,"$u1",1,0,'C');
    			$pdf->Cell(8,$hC,"$u2",1,0,'C');
				$pdf->Cell(8,$hC,"$u3",1,0,'C');
    			$pdf->Cell(8,$hC,"$u4",1,0,'C');
				$pdf->Cell(8,$hC,"$u5",1,0,'C');
    			$pdf->Cell(8,$hC,"$u6",1,0,'C');
				$pdf->Cell(8,$hC,"$u7",1,0,'C');
				$pdf->Cell(26,$hC,"$promedio",1,0,'C');
				
				$promFinal=$promedio;
				//$pdf->Cell(26,$hC,"$promedio",1,0,'C');
				
				$pdf->Ln();
		endwhile;
		$pfin= round (($promFinal/$numAs)*10)/10;
		$pdf->Cell(100);
		$pdf->SetFont('Arial','I',10);
		$pdf->Cell(114,$hC,"PROMEDIO GENERAL DEL CUATRIMESTRE:",0,0,'R');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(26,$hC,"asd",1,0,'C');
	endif;
	mysql_close($cnn);
	$pdf->Output();
	else:
		echo "<script>alert('Faltan argumentos para este reporte')</script>";		
	endif;
?>