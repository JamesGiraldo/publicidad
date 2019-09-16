<?php
    include 'plantilla.php';
    require 'conex.php';

    $query = "SELECT * FROM t_producto";
    $resultado = $mysqli->query($query);

    $pdf=new FPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFillColor(232,232,232);
    $pdf->SetFont('Arial','B',16);
  	$pdf->Cell(40,10,'CODIGO',1,0,'C',1);
  	$pdf->Cell(40,10,'NOMBRE',1,0,'C',1);
    $pdf->Cell(50,10,'DESCRIPCION',1,0,'C',1);
  	$pdf->Cell(40,10,'PRECIO',1,1,'C',1);

  	$pdf->SetFont('Arial','',10);
    while($row = $resultado->fetch_assoc())
  	{
  		$pdf->Cell(40,8,($row['PRO_ID']),1,0,'C');
  		$pdf->Cell(40,8,$row['PRO_NOMBRE'],1,0,'C');
      $pdf->Cell(50,8,($row['PRO_DESCRIPCION']),1,0,'C');
  		$pdf->Cell(40,8,($row['PRO_PRECIO']),1,1,'C');
  	}
    $pdf->Output();
?>
