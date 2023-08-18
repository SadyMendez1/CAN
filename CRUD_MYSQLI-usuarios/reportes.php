<?php
        require('pdf/fpdf.php');

        class PDF extends FPDF{

            // CABECERA DE PÁGINA

            function Header(){

                //logo
                $this->Cell(-200);
                $this->Image('IMG/img.jpg',0,-10,220);

                //letra
                $this->Ln(10);
                $this->SetFont('Arial','B',10);

                $this->Cell(-200);
            }

            function Footer(){

                $this->SetFillColor(20.05,19);
                $this->Rect(0,270,220,30,'F');
                $this->SetY(-20); //sube las letras
                $this->SetFont('Arial','',10);
                
                $this->SetX(90);
                $this->Write(5,'Sady Mendez - 2023');
                $this->Ln();
            }
        }
         
        $pdf=new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Arial','',10);

        $pdf->SetY(70);
        $pdf->SetX(5);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFillColor(79,59,120);
        $pdf->Cell(50,9, 'Nombre',0,0,'C',1);
        $pdf->Cell(50,9, 'Correo',0,0,'C',1);
        $pdf->Cell(50,9, 'Usuario',0,0,'C',1);
        $pdf->Cell(50,9, 'Contraseña',0,0,'C',1);
        $pdf->Cell(50,9, 'Rol',0,1,'C',1);

        include('Config/Conexion.php');
        require('Config/Conexion.php');

        $sql = "SELECT * FROM usuario";
        $resultado = mysqli_query($link, $sql);

        $pdf->SetTextColor(0,0,0);
        $pdf->SetFillColor(240,245,255);

        while($row = $resultado->fetch_assoc()){
            $pdf->SetX(5);
            
            // $pdf->Cell(50,9, $row['nombre'].' '.$row['apellido'],0,0,'C',1*hover azulcito*);

            $pdf->Cell(50,9, $row['nombre'].' '.$row['apellido'],0,0,'C',1);
            $pdf->Cell(50,9, $row['correo'],0,0,'C',1);
            $pdf->Cell(50,9, $row['usuario'],0,0,'C',1);
            $pdf->Cell(50,9, $row['pass'],0,0,'C',1);
            $pdf->Cell(50,9, $row['rol'],0,1,'C',1);
    
        }

        $pdf->Output();
?>