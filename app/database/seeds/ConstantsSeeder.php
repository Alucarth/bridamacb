<?php
class ConstantsSeeder extends Seeder
{
	public function run()
	{


        $master = new MasterDocument;
        $master->name ='Factura Normal';
	$master->javascript_web= 'class MYPDF extends TCPDF {
	public function Footer() {
        $this->SetY(-15);
        $this->SetFont(\'helvetica\', \'I\', 8, false);
		$imgdata = base64_decode(\'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\');
$imgdata2 = base64_decode(\'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Ai0AAAAQAAAAAQAAAAAAEnByaW50T3V0cHV0T3B0aW9ucwAAABcAAAAAQ3B0bmJvb2wAAAAAAENsYnJib29sAAAAAABSZ3NNYm9vbAAAAAAAQ3JuQ2Jvb2wAAAAAAENudENib29sAAAAAABMYmxzYm9vbAAAAAAATmd0dmJvb2wAAAAAAEVtbERib29sAAAAAABJbnRyYm9vbAAAAAAAQmNrZ09iamMAAAABAAAAAAAAUkdCQwAAAAMAAAAAUmQgIGRvdWJAb+AAAAAAAAAAAABHcm4gZG91YkBv4AAAAAAAAAAAAEJsICBkb3ViQG/gAAAAAAAAAAAAQnJkVFVudEYjUmx0AAAAAAAAAAAAAAAAQmxkIFVudEYjUmx0AAAAAAAAAAAAAAAAUnNsdFVudEYjUHhsQFIAAAAAAAAAAAAKdmVjdG9yRGF0YWJvb2wBAAAAAFBnUHNlbnVtAAAAAFBnUHMAAAAAUGdQQwAAAABMZWZ0VW50RiNSbHQAAAAAAAAAAAAAAABUb3AgVW50RiNSbHQAAAAAAAAAAAAAAABTY2wgVW50RiNQcmNAWQAAAAAAAAAAABBjcm9wV2hlblByaW50aW5nYm9vbAAAAAAOY3JvcFJlY3RCb3R0b21sb25nAAAAAAAAAAxjcm9wUmVjdExlZnRsb25nAAAAAAAAAA1jcm9wUmVjdFJpZ2h0bG9uZwAAAAAAAAALY3JvcFJlY3RUb3Bsb25nAAAAAAA4QklNA+0AAAAAABAASAAAAAEAAgBIAAAAAQACOEJJTQQmAAAAAAAOAAAAAAAAAAAAAD+AAAA4QklNBA0AAAAAAAQAAAAeOEJJTQQZAAAAAAAEAAAAHjhCSU0D8wAAAAAACQAAAAAAAAAAAQA4QklNJxAAAAAAAAoAAQAAAAAAAAACOEJJTQP1AAAAAABIAC9mZgABAGxmZgAGAAAAAAABAC9mZgABAKGZmgAGAAAAAAABADIAAAABAFoAAAAGAAAAAAABADUAAAABAC0AAAAGAAAAAAABOEJJTQP4AAAAAABwAAD/////////////////////////////A+gAAAAA/////////////////////////////wPoAAAAAP////////////////////////////8D6AAAAAD/////////////////////////////A+gAADhC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SUQ9IjZCRTBCQjM4RjFEMEM0RDdBMEY1OTNENjM3NEMxRkI1IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkEzNkU1OTU0OEY5NEU1MTFBQTNGQjkwMzM5NDY2NkM4IiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9IjZCRTBCQjM4RjFEMEM0RDdBMEY1OTNENjM3NEMxRkI1IiBkYzpmb3JtYXQ9ImltYWdlL2pwZWciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHhtcDpDcmVhdGVEYXRlPSIyMDE1LTExLTI2VDE5OjUwOjAxLTA0OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAxNS0xMS0yNlQxOTo1NTo0NC0wNDowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAxNS0xMS0yNlQxOTo1NTo0NC0wNDowMCI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOkEzNkU1OTU0OEY5NEU1MTFBQTNGQjkwMzM5NDY2NkM4IiBzdEV2dDp3aGVuPSIyMDE1LTExLTI2VDE5OjU1OjQ0LTA0OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD94cGFja2V0IGVuZD0idyI/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\');
		  $html = \'<hr><table border="0">
			<tr>
			<td align="center">Sistema de facturaci&oacute;n brindado por <a href="www.emizor.com">www.emizor.com</a></td>
			</tr>
			<tr>
			<td width="578" align="center">Pág \'.$this->getAliasNumPage().\'/\'.$this->getAliasNbPages().\'</td>
			</tr>
			</table>\';
        $this->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
		$this->Image(\'@\'.$imgdata, \'7\', \'158\', 4, 12, \'\', \'www.emizor.com\', \'T\', false, 300, \'\', false, false, 0, false, false, false);
		$this->Image(\'@\'.$imgdata2, \'145\', \'265\', 5, 8, \'\', \'www.emizor.com\', \'T\', false, 300, \'\', false, false, 0, false, false, false);
	}
}
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, \'UTF-8\', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor(\'ipxserver\');
$pdf->SetTitle(\'Factura\');
$pdf->SetSubject(\'Primera Factura\');
$pdf->SetKeywords(\'TCPDF, PDF, example, test, guide\');

// set margins
$pdf->SetMargins(15, 20, 15);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// borra la linea de arriba en el area del header
$pdf->setPrintHeader(false);
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set some language-dependent strings (optional)
if (@file_exists(\'/includes/tcpdf/examples/lang/spa.php\')) {
	require_once(\'/includes/tcpdf/examples/lang/spa.php\');
	$pdf->setLanguageArray($l);
}
$pdf->SetFont(\'helvetica\', \'B\' , 11);
$nit = $invoice->account_nit;
$nfac = $invoice->invoice_number;
$nauto = $invoice->number_autho;
$sfc = $invoice->sfc;

// add a page
$pdf->AddPage(\'P\', \'LETTER\');
//contenido del recuadro
$html = \'
	<table border="0" width="160">
	<tr>
		<td style="font-size:8px">NIT:</td>
		<td align="left" style="font-size:10px">: \'.$nit.\'</td>
	</tr>
	<tr>
		<td style="font-size:8px">AUTORIZACI&Oacute;N N&ordm;</td>
		<td align="left" style="font-size:10px">: \'.$nauto.\'</td>
	</tr>
	<tr>
		<td style="font-size:8px">FACTURA N&ordm;</td>
		<td align="left" style="font-size:10px">: \'.$nfac.\'</td>
	</tr>
	<tr><td></td></tr>
	<tr>
		<td align = "center" colspan="2">\'.$sfc.\'</td>
	</tr>
	</table>
\';
//imprime el contenido de la variable html
$pdf->writeHTMLCell($w=0, $h=0, $x=\'140\', $y=\'17\', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//dibuja un rectangulo
$pdf->SetLineStyle(array(\'width\' => 0.5, \'cap\' => \'butt\', \'join\' => \'miter\', \'dash\' => 0, \'color\' => array(0, 0, 0)));
$pdf->RoundedRect(138, 15, 61, 18, 2, \'1111\', null);
$imgdata = base64_decode($invoice->logo);
$pdf->Image(\'@\'.$imgdata, \'14\', \'10\', 50, 20, \'\', \'\', \'T\', false, 300, \'\', false, false, 0, false, false, false);
///title
$anchoDivFac = 480;
if($invoice->type_third==0)
{
    $factura = "FACTURA";
    $tercero ="";
}
else{
    $factura = "FACTURA POR TERCEROS";
    $tercero = $matriz->name;
	$anchoDivFac = 520;
}

$titleFactura=\'<table>
<tr>
<td align="rigth" width="\'.$anchoDivFac.\'"><font color="#333333">\'.$factura.\'</font></td>
</tr>
</table>\';
$pdf->SetFont(\'helvetica\', \'B\' , 20);
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'53\', $titleFactura, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$pdf->SetFont(\'helvetica\', \'B\' , 11);
//nombre de la empresa
$business = $invoice->account_name;
$unipersonal = $invoice->account_uniper;
$pdf->SetFont(\'helvetica\', \'B\', 12, false);
$NombreEmpresa = \'
    <p style="line-height: 150%">
        <font color="#333333">
            \'.$business.\'
        </font>
    </p>\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'10\', $y=\'31\', $NombreEmpresa, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$pdf->SetFont(\'helvetica\', \'B\', 8, false);
if($unipersonal!="")
    $pdf->writeHTMLCell($w=0, $h=0, $x=\'15\', $y=\'36\', \'De: \'.$unipersonal, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$pdf->writeHTMLCell($w=0, $h=0, $x=\'15\', $y=\'1\', $tercero, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
if($copia==1)
    $original = "COPIA";
else
$original = "ORIGINAL";


$pdf->SetFont(\'helvetica\', \'B\', 12);
    $original = \'
        <p style="line-height: 150% ">
            \'.$original.\'
        </p>\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'155\', $y=\'40\', $original, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//datos de la empresa
$casa = $matriz->name;
$dir_casa = $matriz->address1." - ".$matriz->address2;
$tel_casa = $matriz->work_phone;
$city_casa = $matriz->city." - Bolivia";
$city_casa0 = $matriz->city." - Bolivia";
if($matriz->city == $invoice->city && $invoice->branch_id != $matriz->id)
    $city_casa ="";
else
$city_casa = \'<tr>
        <td width="220" align="left">\'.$city_casa.\'</td>
        </tr>\';
        $pdf->SetFont(\'helvetica\', \'\', 7);

if($invoice->branch_id == $matriz->id || $branch_matriz == 0)
{
	$datoEmpresa = \'
    <table border = "0">
        <tr>
        <td width="250" align="left"><b>\'.$casa.\'</b></td>
        </tr>
        <tr>
        <td width="250" align="left">\'.$dir_casa.\' </td>
        </tr>
        <tr>
        <td width="250" align="left">Telfs: \'.$tel_casa.\'</td>
        </tr>
        \'.$city_casa0.\'
    </table>				\';
}
else{
	$sucursal = $invoice->branch_name;
	$direccion = $invoice->address1." - ".$invoice->address2;
	$ciudad = $invoice->city." - Bolivia";
	$telefonos =$invoice->phone;
	$datoEmpresa = \'
    <table border = "0">
        <tr>
        <td width="250" align="left"><b>\'.$casa.\'</b></td>
        </tr>
        <tr>
        <td width="250" align="left">\'.$dir_casa.\'</td>
        </tr>
        <tr>
        <td width="250" align="left">Telfs: \'.$tel_casa.\'</td>
        </tr>
        \'.$city_casa.\'
        <tr>
        <td width="250" align="left"><b>\'.$sucursal.\'</b></td>
        </tr>
        <tr>
        <td width="250" align="left">\'.$direccion.\'</td>
        </tr>
        <tr>
        <td width="250" align="left">Telfs: \'.$telefonos.\'</td>
        </tr>
        <tr>
        <td width="250" align="left">\'.$ciudad.\'</td>
        </tr>
    </table>				\';
}

$pdf->writeHTMLCell($w=0, $h=0, $x=\'15\', $y=\'40\', $datoEmpresa, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//actividad económica
$actividad=$invoice->economic_activity;
$pdf->SetFont(\'helvetica\', \'\', 10);
$actividadEmpresa = \'
    <table>
        <tr>
            <td align="center">\'.$actividad.\'</td>
        </tr>
    </table>\';

$pdf->writeHTMLCell($w=0, $h=0, $x=\'130\', $y=\'45\', $actividadEmpresa, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//TABLA datos del cliente

$pdf->SetFont(\'helvetica\', \'\', 11);

$meses = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$lenguage = \'es_ES.UTF-8\';
putenv("LANG=$lenguage");
setlocale(LC_ALL, $lenguage);

//$date =date("d/m/Y", strtotime($invoice->invoice_date));
//$date = DateTime::createFromFormat("d/m/Y", $date);
//$fecha=strftime("%d de %B de %Y",$date->getTimestamp());

$date = DateTime::createFromFormat("d/m/Y", $invoice->invoice_date);
if($date== null){
    $date = DateTime::createFromFormat("Y-m-d", $invoice->invoice_date);
    $fecha = strftime("%d de %B de %Y",$date->getTimestamp());
}
else
    $fecha = strftime("%d de %B de %Y",$date->getTimestamp());



$fecha= $invoice->state.", ".$fecha;
$senor = $invoice->client_name;
$nit = $invoice->client_nit;

$datosCliente = \'
<table cellpadding="2" border="0">
    <tr>
        <td width="300"><b>&nbsp;Lugar y fecha :</b>\'.$fecha.\'</td>
        <td width="220" align="right"><b>NIT/CI :</b>\'.$nit.\'</td>
    </tr>
    <tr>
        <td colspan="2"><b>&nbsp;Se&ntilde;or(es):</b> \'.$senor .\'</td>
    </tr>

</table>
\';
//$datosCliente="asdf";

$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'62\', $datosCliente, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//dibuja rectangulo datos del cliente
$pdf->SetLineStyle(array(\'width\' => 0.3, \'cap\' => \'butt\', \'join\' => \'miter\', \'dash\' => 0, \'color\' => array(0, 0, 0)));
$pdf->RoundedRect(16, 62, 184, 14, 1, \'1111\', null);
$textTitulos = "";
$textTitulos .= \'<p></p>
<table border="0.2" cellpadding="3" cellspacing="0">
    <thead>
        <tr>
         <td width="70" align="center" bgcolor="#E6DFDF"><font size="10"><b>CANTIDAD</b></font></td>
         <td width="240" align="center" bgcolor="#E6DFDF"><font size="10"><b>CONCEPTO</b></font></td>
         <td width="115" align="center" bgcolor="#E6DFDF"><font size="10"><b>PRECIO UNITARIO</b></font></td>
         <td width="97" align="center" bgcolor="#E6DFDF"><font size="10"><b>TOTAL</b></font></td>
        </tr>
    </thead>
</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, \'\', \'70\', $textTitulos, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//
$ini = 0;
$final = "";
$resto = $ini;
//for ($i=0;$i<=10;$i++)
//{
foreach ($products as $key => $product){
		$textContenido =\'
        <table border="0.2" cellpadding="3" cellspacing="0">
		<tr>
		<td width="70" align="center"><font size="10">\'.intval($product->qty).\'</font></td>
		<td width="240"><font size="10">\'.$product->notes.\'</font></td>
		<td width="115" align="right"><font size="10">\'.number_format((float)$product->cost, 2, \'.\', \',\').\'</font></td>
		<td width="97" align="right"><font size="10"> \'.number_format((float)($product->cost*$product->qty), 2, \'.\', \',\').\'</font></td>
		</tr>
         </table>
		\';
        $ini = $pdf->GetY(); //punto inicial antes de dibujar la siguiente fila

        if(($ini+$resto)>= 250.46944444444){

			$pdf->AddPage(\'P\', \'LETTER\');
            $pdf->writeHTMLCell($w=0, $h=0, \'\', \'\', $textContenido, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
        }
        else{
        $pdf->writeHTMLCell($w=0, $h=0, \'\', \'\', $textContenido, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
        $final = $pdf->GetY();  //punto hasta donde se dibujo la fila
        }
        $resto = $final-$ini; //diferencia entre $ini y $final para sacar el tamaño siguiente a dibujar
//}
}
$texPie = "";
$subtotal = number_format((float)$invoice->importe_total, 2, \'.\', \',\');
$descuento= number_format((float)($invoice->importe_total-$invoice->importe_neto), 2, \'.\', \',\');
$total = number_format((float)$invoice->importe_neto, 2, \'.\', \',\');
$fiscal="0";
$ice="0";


require_once(app_path().\'/includes/numberToString.php\');
$nts = new numberToString();
$num = explode(".", $invoice->importe_neto);
if(!isset($num[1]))
    $num[1]="00";
$literal= $nts->to_word($num[0]).substr($num[1],0,2);


$pdf->SetFont(\'helvetica\', \'\', 11);
		$texPie .=\'
		<table border="0.2" cellpadding="3" cellspacing="0">
            <tr>
                <td width="425" align="right"><b>SUBTOTAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                <td  width="97" align="right"><b>\'.$subtotal.\'</b></td>
            </tr>
            <tr>
                <td width="425"  align="right"><b>Descuentos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                <td width="97" align="right"><b>\'.$descuento.\'</b></td>
            </tr>
            <tr>
                <td width="425"  align="right"><b>TOTAL A PAGAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                <td width="97" align="right"><b>\'.$total.\'</b></td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:9px"><b>Son: </b>\'.$literal.\'/100 BOLIVIANOS.</td>
            </tr>
		</table>
		\';
        if ($pdf->GetY() >= \'210.6375\' ){

            $pdf->AddPage(\'P\', \'LETTER\');
        }

$pdf->writeHTMLCell($w=0, $h=0, \'\', \'\', $texPie, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//nota al cliente
$restoQr = 11;
$line=60;
if (!empty($invoice->public_notes)){
$nota = $invoice->public_notes;
$notaCliente = \'

		<table style="padding:0px 0px 0px 5px" border="0">
		<tr>
			<td style="line-height: \'.$line.\'%"> </td>
		</tr>
		<tr>
			<td width="88" align="right" style="font-size:9px;"><b>Nota al Cliente:</b></td>
			<td width="352" align="left" bgcolor="#F2F2F2" style="font-size:9px; border-left: 1px solid #000;">\'.$nota.\'</td>
		</tr>
		</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, \'\', \'\', $notaCliente, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$restoQr=$restoQr+10;
$line=100;
}
if (!empty($invoice->terms)){
$nota = $invoice->public_notes;
$terminos = $invoice->terms;
$termCliente = \'
		<table style="padding:0px 0px 0px 5px">
		<tr><td style="line-height: \'.$line.\'%"> </td></tr>
		<tr>
			<td width="88" align="right" style="font-size:9px"><b>Términos de Facturación: </b></td>
			<td width="352" align="left" bgcolor="#F2F2F2" style="font-size:9px; border-left: 1px solid #000; ">\'.$terminos.\'</td>
		</tr>
		</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, \'\', \'\', $termCliente, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$restoQr=$restoQr+11;
$line=50;
}

$control_code = $invoice->control_code;
$fecha_limite = date("d/m/Y", strtotime($invoice->deadline));
$fecha_limite = \DateTime::createFromFormat(\'Y-m-d\',$invoice->deadline);
if($fecha_limite== null)
    $fecha_limite = $invoice->deadline;
else
    $fecha_limite = $fecha_limite->format(\'d/m/Y\');

$law_gen="ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAIS, EL USO ILICITO DE ESTA SERA SANCIONADO DE ACUERDO A LEY";

$law=$invoice->law;
$datosFactura = \'
<table border="0" style="line-height: 160%">
	<tr><td style="line-height: \'.$line.\'%"> </td></tr>
    <tr>
        <td width="240" align="left"><b>C&Oacute;DIGO DE CONTROL :&nbsp;&nbsp;\'.$control_code.\'</b></td>
        <td width="210" align="left"><b>Fecha L&iacute;mite de Emisi&oacute;n : &nbsp;\'.$fecha_limite.\' </b></td>
    </tr>
    <tr>
        <td width="450" align="center" style="font-size:7px"><b>"\'.$law_gen.\'"</b></td>
    </tr>
    <tr>
        <td width="440" align="center" style="font-size:7px">"\'.$law.\'"</td>
    </tr>
</table>
\';
if ($pdf->GetY() >= \'226.6375\' ){
		$pdf->AddPage(\'P\', \'LETTER\');
		if(!empty($nota) && !empty($terminos)){
			$restoQr = $restoQr - 18;
		}
    }

$subtotal = number_format((float)$invoice->importe_total, 2, \'.\', \'\');
$descuento= number_format((float)($invoice->importe_total-$invoice->importe_neto), 2, \'.\', \'\');
$total = number_format((float)$invoice->importe_neto, 2, \'.\', \'\');
$pdf->writeHTMLCell($w=0, $h=0, \'\', \'\', $datosFactura, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

$date_qr = date("d/m/Y", strtotime($invoice->invoice_date));
$date_qr = \DateTime::createFromFormat(\'Y-m-d\',$invoice->invoice_date);
if($date_qr== null)
    $date_qr = $invoice->invoice_date;
else
    $date_qr = $date_qr->format(\'d/m/Y\');

if($descuento == \'0.00\')
    $descuento = 0;
$datosqr = $invoice->account_nit.\'|\'.$invoice->invoice_number.\'|\'.$invoice->number_autho.\'|\'.$date_qr.\'|\'.$total.\'|\'.$fiscal.\'|\'.$invoice->control_code.\'|\'.$invoice->client_nit.\'|\'.$ice.\'|0|0|\'.$descuento;
$pdf->write2DBarcode($datosqr, \'QRCODE,M\', \'175\',
$pdf->GetY()-$restoQr, 25, 25, \'\', \'N\');

//Close and output PDF document
$pdf->Output(\'factura.pdf\', \'I\');

die;';


//factura fiscal

$master->javascript_pos = ' $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, \'UTF-8\', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor(\'ipxserver\');
$pdf->SetTitle(\'Factura\');
$pdf->SetSubject(\'Primera Factura\');
$pdf->SetKeywords(\'TCPDF, PDF, example, test, guide\');
$pdf->SetMargins(0.5, 0.5, 0.5);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetFont(\'helvetica\', \'\' , 7);
$page_format = array(
    \'MediaBox\' => array (\'llx\' => 0, \'lly\' => 0, \'urx\' => 72, \'ury\' => 1000),
    \'Dur\' => 3,
);
$business = $invoice->account_name;
if($invoice->account_uniper !=\'\')
    $unipersonal = \'<tr><td align="center">De: \'.$invoice->account_uniper.\'</td></tr>\';
else
    $unipersonal="";
// Check the example n. 29 for viewer preferences
$pdf->AddPage(\'P\', $page_format, false, false);
$sucursal = $invoice->branch_name;
$direccion = $invoice->address1." - ".$invoice->address2;
$ciudad = $invoice->city." - Bolivia";
$telefonos =$invoice->phone;

$html = \'
<table>
	<tr>
		<td align="center" style="font-size:10px; "><b>\'.$business.\'</b></td>
	</tr>
        \'.$unipersonal.\'
        <tr>
		<td align="center">\'.$sucursal.\'</td>
	</tr><tr>
		<td align="center">\'.$direccion.\'</td>
	</tr><tr>
		<td align="center">Telefono: \'.$telefonos.\'</td>
	</tr><tr>
		<td align="center">\'.$ciudad.\'</td>
	</tr>
</table>
\';
//imprime el contenido de la variable html
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
if($copia==1)
    $original = "COPIA";
else
$original = "ORIGINAL";
$pdf->SetFont(\'times\', \'B\' , 10);
$fact = \'<br><br><table>
<tr>
	<td align="center">
		FACTURA
	</td>
</tr>
<tr>
	<td align="center">
		\'.$original.\'
	</td>
</tr>
</table>
\'
;
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $fact, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$lin = " ";

$pdf->SetFont(\'helvetica\', \' \' , 8);
for ($i=0;$i<72;$i++)$lin .= \'-\';

$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $lin, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//DATOS FACTURA
$pdf->SetFont(\'helvetica\', \' \' , 8);
$nitEmpresa = $invoice->account_nit;
$nfac = $invoice->invoice_number;
$nauto = $invoice->number_autho;

$datosfac = \'
	<table border="0">
		<tr>
			<td align="left">NIT : </td>
			<td align="left">\'.$nitEmpresa.\'</td>
		</tr>
		<tr>
			<td align="left">FACTURA No : </td>
			<td align="left">\'.$nfac.\'</td>
		</tr>
		<tr>
			<td align="left">AUTORIZACION No :   </td>
			<td align="left">\'.$nauto.\'</td>
		</tr>
	</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'10\', $y=\'\', $datosfac, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//linea
$pdf->SetFont(\'helvetica\', \' \' , 8);
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $lin, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//actividad economica
$pdf->SetFont(\'times\', \'B\' , 9);
$actividad=$invoice->economic_activity;
$acti = \'
	<table align="center">
		<tr>
			<td>ACTIVIDAD ECON&Oacute;MICA</td>
		</tr>
		<tr>
			<td>\'.$actividad.\'</td>
		</tr>
	</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $acti, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$pdf->SetFont(\'helvetica\', \'\' , 8);
$date = DateTime::createFromFormat("Y-m-d", $invoice->invoice_date);
if($date==null)
    $date = DateTime::createFromFormat("d/m/Y", $invoice->invoice_date);
$fecha = $date->format(\'d/m/Y\');
$senor = $invoice->client_name;
$nit = $invoice->client_nit;
$hora = $date->format(\'H:i:s\');

$datosCli = \'<br>
	<table border="1">
		<tr>
			<td align="left" width="40">Fecha : </td>
			<td align="left">\'.$fecha.\'</td>
			<td align="right" width="30">Hora : </td>
			<td align="left">\'.$hora.\'</td>
		</tr>
		<tr>
			<td align="left" width="40">NIT/CI : </td>
			<td align="left">\'.$nit.\'</td>
		</tr>
		<tr>
			<td align="left" width="40">Nombre :   </td>
			<td align="left">\'.$senor.\'</td>
		</tr>
	</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'9\', $y=\'\', $datosCli, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//tabla
$htmlTabla = \'
	<table border="1">
		<tr>
			<td align="center">Cantidad</td>
			<td align="center">Precio</td>
			<td align="center">Importe</td>
		</tr>
	</table>
<p style="line-height: 30%">
    </p>\';

$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlTabla, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);


foreach ($products as $key => $product){
	$htmlTabla2 = \'
		<table border="0">
			<tr>
				<td colspan="3">\'.$product->notes.\'</td>
			</tr>
			<tr>
				<td align="center">\'.intval($product->qty).\'</td>
				<td align="center">\'.number_format((float)$product->cost, 2, \'.\', \',\').\'</td>
				<td align="center">\'.number_format((float)($product->cost*$product->qty), 2, \'.\', \',\').\'</td>
			</tr>
		</table>
	\';
	$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlTabla2, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
}
//total
$total = number_format((float)$invoice->importe_neto, 2, \'.\', \',\');
$htmlTotal = \'<hr>
	<table>
		<tr>
			<td align="right" width="173"><b>TOTAL: Bs \'.$total.\'</b></td>
		</tr>
	</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlTotal, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//TOTALES
$ice = number_format((float)($invoice->importe_ice), 2, \'.\', \',\');
$descuento= number_format((float)($invoice->importe_total-$invoice->importe_neto), 2, \'.\', \',\');
$importeCreditoFiscal = number_format((float)($invoice->debito_fiscal), 2, \'.\', \',\');
$fiscal =$importeCreditoFiscal;
$montoPagar = number_format((float)$invoice->importe_neto, 2, \'.\', \',\');
require_once(app_path().\'/includes/numberToString.php\');
$nts = new numberToString();
$num = explode(".", $invoice->importe_neto);
if(!isset($num[1]))
    $num[1]="00";
$literal= $nts->to_word($num[0]).substr($num[1],0,2);



$htmlDatosExtra = \'
	<table>
		<tr>
			<td>ICE: \'.$ice.\'</td>
		</tr>
		<tr>
			<td>DESCUENTOS/BONIFICACION: \'.$descuento.\'</td>
		</tr>
		<tr>
			<td>IMPORTE BASE CREDITO FISCAL: \'.$importeCreditoFiscal.\'</td>
		</tr>
		<tr>
			<td>MONTO A PAGAR: Bs \'.$montoPagar.\'</td>
		</tr>
		<tr>
			<td>SON: \'.$literal.\'/100 BOLIVIANOS</td>
		</tr>
	</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlDatosExtra, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//linea
$pdf->SetFont(\'helvetica\', \' \' , 8);
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $lin, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//CODIGO DE CONTROL

$control_code = $invoice->control_code;
$fecha_limite = date("d/m/Y", strtotime($invoice->deadline));
$fecha_limite = \DateTime::createFromFormat(\'Y-m-d\',$invoice->deadline);
if($fecha_limite== null)
    $fecha_limite = $invoice->deadline;
else
    $fecha_limite = $fecha_limite->format(\'d/m/Y\');
$law_gen=\'"\'."ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAÍS, EL USO ILÍCITO DE ÉSTA SERÁ SANCIONADO DE ACUERDO A LEY".\'"\';
$law=$invoice->law;

 $htmlControl = \'
 	<table>
 		<tr>
 			<td>CODIGO DE CONTROL : \'.$control_code.\'</td>
 		</tr>
 		<tr>
 			<td>FECHA LÍMITE EMISIÓN : \'.$fecha_limite.\'</td>
 		</tr>

 	</table>
 	<br>

 \';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlControl, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//qr
$subtotal = number_format((float)$invoice->importe_total, 2, \'.\', \'\');
$descuento= number_format((float)($invoice->importe_total-$invoice->importe_neto), 2, \'.\', \'\');
$total = number_format((float)$invoice->importe_neto, 2, \'.\', \'\');
$date_qr = date("d/m/Y", strtotime($invoice->invoice_date));
$date_qr = \DateTime::createFromFormat(\'Y-m-d\',$invoice->invoice_date);
if($date_qr== null)
    $date_qr = $invoice->invoice_date;
else
    $date_qr = $date_qr->format(\'d/m/Y\');
if($descuento=="0.00")
    $descuento=0;
if($fiscal==0) $fiscal="0";
if($ice==0) $ice ="0";
if($descuento==0)$descuento="0";
$datosqr = $invoice->account_nit.\'|\'.$invoice->invoice_number.\'|\'.$invoice->number_autho.\'|\'.$date_qr.\'|\'.$total.\'|\'.$fiscal.\'|\'.$invoice->control_code.\'|\'.$invoice->client_nit.\'|\'.$ice.\'|0|0|\'.$descuento;
$pdf->write2DBarcode($datosqr, \'QRCODE,M\', \'24\', \'\' , 25, 25, \'\', \'N\');

$htmlLeyenda = \'<br><br>
		<table>
			<tr>
				<td align="center"><b>\'.$law_gen.\'</b></td>
			</tr>
		</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlLeyenda, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$pdf->SetFont(\'times\', \' \' , 9);
$emizor = \'<br><br>
		<table>
			<tr>
				<td align="center">www.emizor.com</td>
			</tr>
		</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $emizor, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

$y = $pdf->GetY();
$y2 = intval($y) + 8;
//////pdf adaptado a nuevo tamaÃ±o//////////////////////////////////////////////////////////////////
$page_format2 = array(
    \'MediaBox\' => array (\'llx\' => 0, \'lly\' => 0, \'urx\' => 72, \'ury\' => $y2),
    \'Dur\' => 3,
);
// add first page ---
$pdf2 = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, \'UTF-8\', false);
//Close and output PDF document
$pdf2->SetCreator(PDF_CREATOR);
$pdf2->SetAuthor(\'ipxserver\');
$pdf2->SetTitle(\'Factura\');
$pdf2->SetSubject(\'Primera Factura\');
$pdf2->SetKeywords(\'TCPDF, PDF, example, test, guide\');
// set margins
$pdf2->SetMargins(0.5, 0.5, 0.5);
// set auto page breaks
$pdf2->SetAutoPageBreak(TRUE, 0.5);
// borra la linea de arriba en el area del header
$pdf2->setPrintHeader(false);
$pdf2->setPrintFooter(false);
// set some language-dependent strings (optional)
if (@file_exists(\'/includes/tcpdf/examples/lang/spa.php\')) {
	require_once(\'/includes/tcpdf/examples/lang/spa.php\');
	$pdf->setLanguageArray($l);
}
$pdf2->SetFont(\'helvetica\', \'\' , 7);
// add second page ---
$pdf2->AddPage(\'P\', $page_format2, false, false);

$html = \'
<table>
	<tr>
		<td align="center" style="font-size:10px; "><b>\'.$business.\'</b></td>
	</tr>
        \'.$unipersonal.\'
        <tr>
		<td align="center">\'.$sucursal.\'</td>
	</tr><tr>
		<td align="center">\'.$direccion.\'</td>
	</tr><tr>
		<td align="center">Telefono: \'.$telefonos.\'</td>
	</tr><tr>
		<td align="center">\'.$ciudad.\'</td>
	</tr>
</table>
\';
//imprime el contenido de la variable html
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

$pdf2->SetFont(\'times\', \'B\' , 10);
$fact = \'<br><br><table>
<tr>
	<td align="center">
		FACTURA
	</td>
</tr>
<tr>
	<td align="center">
		\'.$original.\'
	</td>
</tr>
</table>
\'
;
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $fact, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$lin = " ";

$pdf2->SetFont(\'helvetica\', \' \' , 8);
for ($i=0;$i<72;$i++)
{
	$lin .= \'-\';

}
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $lin, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//DATOS FACTURA
$pdf2->SetFont(\'helvetica\', \' \' , 8);


$datosfac = \'
	<table border="0">
		<tr>
			<td align="left">NIT : </td>
			<td align="left">\'.$nitEmpresa.\'</td>
		</tr>
		<tr>
			<td align="left">FACTURA No : </td>
			<td align="left">\'.$nfac.\'</td>
		</tr>
		<tr>
			<td align="left">AUTORIZACION No :   </td>
			<td align="left">\'.$nauto.\'</td>
		</tr>
	</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'10\', $y=\'\', $datosfac, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//linea
$pdf2->SetFont(\'helvetica\', \' \' , 8);
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $lin, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//actividad economica
$pdf2->SetFont(\'times\', \'B\' , 9);

$acti = \'
	<table align="center">
		<tr>
			<td>ACTIVIDAD ECON&Oacute;MICA</td>
		</tr>
		<tr>
			<td>\'.$actividad.\'</td>
		</tr>
	</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $acti, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//datos cliente
$pdf2->SetFont(\'helvetica\', \'\' , 8);


$datosCli = \'<br>
	<table border="0">
		<tr>
			<td align="left" width="40">Fecha : </td>
			<td align="left">\'.$fecha.\'</td>
			<td align="right" width="30">Hora : </td>
			<td align="left">\'.$hora.\'</td>
		</tr>
		<tr>
			<td align="left" width="40">NIT/CI : </td>
			<td colspan="3" align="left">\'.$nit.\'</td>
		</tr>
		<tr>
			<td align="left" width="40">Nombre :   </td>
			<td colspan="3" align="left">\'.$senor.\'</td>
		</tr>
	</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'9\', $y=\'\', $datosCli, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//tabla
$htmlTabla = \'
	<table border="0">
		<tr>
			<td align="center">Cantidad</td>
			<td align="center">Precio</td>
			<td align="center">Subtotal</td>
		</tr>
	</table>
<p style="line-height: 30%">
    </p>\';

$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlTabla, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

foreach ($products as $key => $product){
	$htmlTabla2 = \'
		<table border="0">
			<tr>
				<td colspan="3">\'.$product->notes.\'</td>
			</tr>
			<tr>
				<td align="center">\'.intval($product->qty).\'</td>
				<td align="center">\'.number_format((float)$product->cost, 2, \'.\', \',\').\'</td>
				<td align="center">\'.number_format((float)($product->cost*$product->qty), 2, \'.\', \',\').\'</td>
			</tr>
		</table>
	\';
	$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlTabla2, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
}

//total
$htmlTotal = \'<hr>
	<table>
		<tr>
			<td align="right" width="173"><b>TOTAL: Bs \'.$total.\'</b></td>
		</tr>
	</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlTotal, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);




$htmlDatosExtra = \'
	<table>
		<tr>
			<td>ICE: \'.$ice.\'</td>
		</tr>
		<tr>
			<td>DESCUENTOS/BONIFICACIÓN: \'.$descuento.\'</td>
		</tr>
		<tr>
			<td>IMPORTE BASE CREDITO FISCAL: \'.$importeCreditoFiscal.\'</td>
		</tr>
		<tr>
			<td>MONTO A PAGAR: Bs \'.$montoPagar.\'</td>
		</tr>
		<tr>
			<td>SON: \'.$literal.\'/100 BOLIVIANOS</td>
		</tr>
	</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlDatosExtra, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//linea
$pdf2->SetFont(\'helvetica\', \' \' , 8);
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $lin, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);


//CODIGO DE CONTROL

 $htmlControl = \'
 	<table>
 		<tr>
 			<td><b>CÓDIGO DE CONTROL : \'.$control_code.\'</b></td>
 		</tr>
 		<tr>
 			<td><b>FECHA LÍMITE EMISIÓN : \'.$fecha_limite.\'</b></td>
 		</tr>
 	</table>
 	<br>

 \';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlControl, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//qr
$pdf2->write2DBarcode($datosqr, \'QRCODE,M\', \'24\', \'\' , 25, 25, \'\', \'N\');

$htmlLeyenda = \'<br><br>
		<table>
			<tr>
				<td align="center"><b>\'.$law_gen.\'</b></td>
			</tr>
		</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlLeyenda, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$pdf2->SetFont(\'times\', \' \' , 9);
$emizor = \'<br><br>
		<table>
			<tr>
				<td align="center">www.emizor.com</td>
			</tr>
		</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $emizor, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

$pdf2->Output(\'factura.pdf\', \'I\');
die();';



$master->save();



$master = new MasterDocument;
        $master->name ='Nota de Entrega';
	$master->javascript_web= 'class MYPDF extends TCPDF {
	public function Footer() {
        $this->SetY(-15);
        $this->SetFont(\'helvetica\', \'I\', 8, false);
		$logoEmizor = base64_decode(\'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\');
$emizorAvion = base64_decode(\'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Ai0AAAAQAAAAAQAAAAAAEnByaW50T3V0cHV0T3B0aW9ucwAAABcAAAAAQ3B0bmJvb2wAAAAAAENsYnJib29sAAAAAABSZ3NNYm9vbAAAAAAAQ3JuQ2Jvb2wAAAAAAENudENib29sAAAAAABMYmxzYm9vbAAAAAAATmd0dmJvb2wAAAAAAEVtbERib29sAAAAAABJbnRyYm9vbAAAAAAAQmNrZ09iamMAAAABAAAAAAAAUkdCQwAAAAMAAAAAUmQgIGRvdWJAb+AAAAAAAAAAAABHcm4gZG91YkBv4AAAAAAAAAAAAEJsICBkb3ViQG/gAAAAAAAAAAAAQnJkVFVudEYjUmx0AAAAAAAAAAAAAAAAQmxkIFVudEYjUmx0AAAAAAAAAAAAAAAAUnNsdFVudEYjUHhsQFIAAAAAAAAAAAAKdmVjdG9yRGF0YWJvb2wBAAAAAFBnUHNlbnVtAAAAAFBnUHMAAAAAUGdQQwAAAABMZWZ0VW50RiNSbHQAAAAAAAAAAAAAAABUb3AgVW50RiNSbHQAAAAAAAAAAAAAAABTY2wgVW50RiNQcmNAWQAAAAAAAAAAABBjcm9wV2hlblByaW50aW5nYm9vbAAAAAAOY3JvcFJlY3RCb3R0b21sb25nAAAAAAAAAAxjcm9wUmVjdExlZnRsb25nAAAAAAAAAA1jcm9wUmVjdFJpZ2h0bG9uZwAAAAAAAAALY3JvcFJlY3RUb3Bsb25nAAAAAAA4QklNA+0AAAAAABAASAAAAAEAAgBIAAAAAQACOEJJTQQmAAAAAAAOAAAAAAAAAAAAAD+AAAA4QklNBA0AAAAAAAQAAAAeOEJJTQQZAAAAAAAEAAAAHjhCSU0D8wAAAAAACQAAAAAAAAAAAQA4QklNJxAAAAAAAAoAAQAAAAAAAAACOEJJTQP1AAAAAABIAC9mZgABAGxmZgAGAAAAAAABAC9mZgABAKGZmgAGAAAAAAABADIAAAABAFoAAAAGAAAAAAABADUAAAABAC0AAAAGAAAAAAABOEJJTQP4AAAAAABwAAD/////////////////////////////A+gAAAAA/////////////////////////////wPoAAAAAP////////////////////////////8D6AAAAAD/////////////////////////////A+gAADhC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SUQ9IjZCRTBCQjM4RjFEMEM0RDdBMEY1OTNENjM3NEMxRkI1IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkEzNkU1OTU0OEY5NEU1MTFBQTNGQjkwMzM5NDY2NkM4IiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9IjZCRTBCQjM4RjFEMEM0RDdBMEY1OTNENjM3NEMxRkI1IiBkYzpmb3JtYXQ9ImltYWdlL2pwZWciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHhtcDpDcmVhdGVEYXRlPSIyMDE1LTExLTI2VDE5OjUwOjAxLTA0OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAxNS0xMS0yNlQxOTo1NTo0NC0wNDowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAxNS0xMS0yNlQxOTo1NTo0NC0wNDowMCI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOkEzNkU1OTU0OEY5NEU1MTFBQTNGQjkwMzM5NDY2NkM4IiBzdEV2dDp3aGVuPSIyMDE1LTExLTI2VDE5OjU1OjQ0LTA0OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD94cGFja2V0IGVuZD0idyI/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\');
		  $html = \'<hr><table border="0">
			<tr>
			<td align="center">Sistema de facturaci&oacute;n brindado por <a href="www.emizor.com">www.emizor.com</a></td>
			</tr>
			<tr>
			<td width="578" align="center">Pág \'.$this->getAliasNumPage().\'/\'.$this->getAliasNbPages().\'</td>
			</tr>
			</table>\';
        $this->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
		$this->Image(\'@\'.$logoEmizor, \'7\', \'128\', 4, 12, \'\', \'www.emizor.com\', \'T\', false, 300, \'\', false, false, 0, false, false, false);
		$this->Image(\'@\'.$emizorAvion, \'145\', \'265\', 5, 8, \'\', \'www.emizor.com\', \'T\', false, 300, \'\', false, false, 0, false, false, false);
	}
}
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, \'UTF-8\', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor(\'ipxserver\');
$pdf->SetTitle(\'Nota de Entrega\');
$pdf->SetSubject(\'Primera Nota\');
$pdf->SetKeywords(\'TCPDF, PDF, example, test, guide\');
// set margins
$pdf->SetMargins(15, 20, 15);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// borra la linea de arriba en el area del header
$pdf->setPrintHeader(false);
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set some language-dependent strings (optional)
if (@file_exists(\'/includes/tcpdf/examples/lang/spa.php\')) {
	require_once(\'/includes/tcpdf/examples/lang/spa.php\');
	$pdf->setLanguageArray($l);
}
$pdf->SetFont(\'helvetica\', \'B\' , 11);
$nit = $invoice->account_nit;
$nfac = $invoice->invoice_number;
$nauto = $invoice->number_autho;
$sfc = $invoice->sfc;

// add a page
$pdf->AddPage(\'P\', \'LETTER\');

$logoEmpresa = base64_decode($invoice->logo);
$pdf->Image(\'@\'.$logoEmpresa, \'14\', \'10\', 50, 20, \'\', \'\', \'T\', false, 300, \'\', false, false, 0, false, false, false);
///title

$titleFactura=\'<table>
<tr>
<td align="rigth"><font color="#333333">NOTA DE ENTREGA</font></td>
</tr>
</table>\';
$pdf->SetFont(\'helvetica\', \'B\' , 27);
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'10\', $titleFactura, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$pdf->SetFont(\'helvetica\', \'B\' , 11);
//nombre de la empresa
$business = $invoice->account_name;
$unipersonal = $invoice->account_uniper;
$pdf->SetFont(\'helvetica\', \'B\', 12, false);
$NombreEmpresa = \'
    <p style="line-height: 150%">
        <font color="#333333">
            \'.$business.\'
        </font>
    </p>\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'10\', $y=\'31\', $NombreEmpresa, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);




$pdf->SetFont(\'helvetica\', \'B\', 8, false);


//datos de la empresa
$casa = $matriz->name;
$dir_casa = $matriz->address1." - ".$matriz->address2;
$tel_casa = $matriz->work_phone;
$city_casa = $matriz->city." - Bolivia";
if($matriz->city == $invoice->city && $invoice->branch_id != $matriz->id)
    $city_casa ="";
else
$city_casa = \'<tr>
        <td width="220" align="left">\'.$city_casa.\'</td>
        </tr>\';
        $pdf->SetFont(\'helvetica\', \'\', 7);

if($invoice->branch_id == $matriz->id)
{
	$datoEmpresa = \'
    <table border = "0">
        <tr>
        <td width="250" align="left"><b>\'.$casa.\'</b></td>
        </tr>
        <tr>
        <td width="250" align="left">\'.$dir_casa.\' </td>
        </tr>
        <tr>
        <td width="250" align="left">Telfs: \'.$tel_casa.\'</td>
        </tr>
        \'.$city_casa.\'
    </table>				\';
}
else{
	$sucursal = $invoice->branch_name;
	$direccion = $invoice->address1." - ".$invoice->address2;
	$ciudad = $invoice->city." - Bolivia";
	$telefonos =$invoice->phone;
	$datoEmpresa = \'
    <table border = "0">
        <tr>
        <td width="250" align="left"><b>\'.$casa.\'</b></td>
        </tr>
        <tr>
        <td width="250" align="left">\'.$dir_casa.\'</td>
        </tr>
        <tr>
        <td width="250" align="left">Telfs: \'.$tel_casa.\'</td>
        </tr>
        \'.$city_casa.\'
        <tr>
        <td width="250" align="left"><b>\'.$sucursal.\'</b></td>
        </tr>
        <tr>
        <td width="250" align="left">\'.$direccion.\'</td>
        </tr>
        <tr>
        <td width="250" align="left">Telfs: \'.$telefonos.\'</td>
        </tr>
        <tr>
        <td width="250" align="left">\'.$ciudad.\'</td>
        </tr>
    </table>				\';
}

$pdf->writeHTMLCell($w=0, $h=0, $x=\'15\', $y=\'40\', $datoEmpresa, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//TABLA datos del cliente

$pdf->SetFont(\'helvetica\', \'\', 10);

$meses = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$lenguage = \'es_ES.UTF-8\';
putenv("LANG=$lenguage");
setlocale(LC_ALL, $lenguage);


$date = DateTime::createFromFormat("d/m/Y", $invoice->invoice_date);
if($date== null){
    $date = DateTime::createFromFormat("Y-m-d", $invoice->invoice_date);
    $fecha = strftime("%d de %B de %Y",$date->getTimestamp());
}
else
    $fecha = strftime("%d de %B de %Y",$date->getTimestamp());



//$fecha= $invoice->state.", ".$fecha;
$senor = $invoice->client_name;
$nit = $invoice->client_nit;
$numeroNota = $invoice->document_number;

$datosCliente = \'
<table cellpadding="2" border="0">
    <tr>
        <td  width="80" align="right"><b>&nbsp;Fecha :</b></td>
        <td width="135">\'.$fecha.\'</td>
    </tr>

    <tr>
        <td width="80" align="right"><b>Nº de Nota:</b></td>
        <td width="135">\'.$numeroNota.\'</td>
    </tr>
</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'121\', $y=\'32\', $datosCliente, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

$nameClient = \'
	<table border = "0">
	<tr>
        <td width="60" align="right"><b>Para:</b></td>
        <td width="90">&nbsp;\'.$senor .\'</td>
    </tr>
	</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'67\', $y=\'32\', $nameClient, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//preparado por

$pdf->SetFont(\'helvetica\', \'\', 9);
$nombreUsuario = $user->last_name." ".$user->first_name;
$rol = "Soporte Técnico";
$telefono = $user->phone;
$correo = $user->email;

$preparadoPor = \'
    <table border = "0">
        <tr>
        <td width="75" align="left"><b>Preparado por: </b></td>
        <td width="110" align="left">\'.$nombreUsuario.\'</td>
        </tr>
        <!--tr>
        <td width="75" align="left"> </td>
        <td width="110" align="left">\'.$rol.\'</td>
        </tr-->
        <tr>
        <td width="75" align="left"> </td>
        <td width="110" align="left">Telfs: \'.$telefono.\'</td>
        </tr>
        <tr>
        <td width="75" align="left"> </td>
        <td width="110" align="left">\'.$correo.\'</td>
        </tr>
    </table>\';

$pdf->writeHTMLCell($w=0, $h=0, $x=\'125\', $y=\'50\', $preparadoPor, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);





$textTitulos = "";
$textTitulos .= \'<p></p>
<table border="0.2" cellpadding="3" cellspacing="0">
    <thead>
        <tr>
         <td width="70" align="center" bgcolor="#E6DFDF"><font size="10"><b>CANTIDAD</b></font></td>
         <td width="240" align="center" bgcolor="#E6DFDF"><font size="10"><b>CONCEPTO</b></font></td>
         <td width="115" align="center" bgcolor="#E6DFDF"><font size="10"><b>PRECIO UNITARIO</b></font></td>
         <td width="97" align="center" bgcolor="#E6DFDF"><font size="10"><b>TOTAL</b></font></td>
        </tr>
    </thead>
</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, \'\', \'60\', $textTitulos, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//
$ini = 0;
$final = "";
$resto = $ini;
//for ($i=0;$i<=10;$i++)
//{
foreach ($products as $key => $product){
		$textContenido =\'
        <table border="0.2" cellpadding="3" cellspacing="0">
		<tr>
		<td width="70" align="center"><font size="10">\'.intval($product->qty).\'</font></td>
		<td width="240"><font size="10">\'.$product->notes.\'</font></td>
		<td width="115" align="right"><font size="10">\'.number_format((float)$product->cost, 2, \'.\', \',\').\'</font></td>
		<td width="97" align="right"><font size="10"> \'.number_format((float)($product->cost*$product->qty), 2, \'.\', \',\').\'</font></td>
		</tr>
         </table>
		\';
        $ini = $pdf->GetY(); //punto inicial antes de dibujar la siguiente fila

        if(($ini+$resto)>= 250.46944444444){

			$pdf->AddPage(\'P\', \'LETTER\');
            $pdf->writeHTMLCell($w=0, $h=0, \'\', \'\', $textContenido, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
        }
        else{
        $pdf->writeHTMLCell($w=0, $h=0, \'\', \'\', $textContenido, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
        $final = $pdf->GetY();  //punto hasta donde se dibujo la fila
        }
        $resto = $final-$ini; //diferencia entre $ini y $final para sacar el tamaño siguiente a dibujar
//}
}
$texPie = "";
$subtotal = number_format((float)$invoice->importe_total, 2, \'.\', \',\');
$descuento= number_format((float)($invoice->importe_total-$invoice->importe_neto), 2, \'.\', \',\');
$total = number_format((float)$invoice->importe_neto, 2, \'.\', \',\');
$fiscal="0";
$ice="0";


require_once(app_path().\'/includes/numberToString.php\');
$nts = new numberToString();
$num = explode(".", $invoice->importe_neto);
if(!isset($num[1]))
    $num[1]="00";
$literal= $nts->to_word($num[0]).substr($num[1],0,2);


$pdf->SetFont(\'helvetica\', \'\', 11);
		$texPie .=\'
		<table border="0.2" cellpadding="3" cellspacing="0">
            <tr>
                <td width="425" align="right"><b>SUBTOTAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                <td  width="97" align="right"><b>\'.$subtotal.\'</b></td>
            </tr>
            <tr>
                <td width="425"  align="right"><b>Descuentos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                <td width="97" align="right"><b>\'.$descuento.\'</b></td>
            </tr>
            <tr>
                <td width="425"  align="right"><b>TOTAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                <td width="97" align="right"><b>\'.$total.\'</b></td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:9px"><b>Son: </b>\'.$literal.\'/100 BOLIVIANOS.</td>
            </tr>
		</table>
		\';
        if ($pdf->GetY() >= \'210.6375\' ){

            $pdf->AddPage(\'P\', \'LETTER\');
        }

$pdf->writeHTMLCell($w=0, $h=0, \'\', \'\', $texPie, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//nota al cliente
$restoQr = 11;
$line=60;
if (!empty($invoice->public_notes)){
$nota = $invoice->public_notes;
$notaCliente = \'

		<table style="padding:0px 0px 0px 5px" border="0">
		<tr>
			<td style="line-height: \'.$line.\'%"> </td>
		</tr>
		<tr>
			<td width="88" align="right" style="font-size:9px;"><b>Nota al Cliente:</b></td>
			<td width="352" align="left" bgcolor="#F2F2F2" style="font-size:9px; border-left: 1px solid #000;">\'.$nota.\'</td>
		</tr>
		</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, \'\', \'\', $notaCliente, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$restoQr=$restoQr+10;
$line=100;
}

$restoQr=$restoQr+11;
$line=50;


$control_code = $invoice->control_code;
$fecha_limite = date("d/m/Y", strtotime($invoice->deadline));
$fecha_limite = \DateTime::createFromFormat(\'Y-m-d\',$invoice->deadline);
if($fecha_limite== null)
    $fecha_limite = $invoice->deadline;
else
    $fecha_limite = $fecha_limite->format(\'d/m/Y\');

$law_gen="ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAIS, EL USO ILICITO DE ESTA SERA SANCIONADO DE ACUERDO A LEY";

$law=$invoice->law;
//$usuario = "usuario";
$datosFactura = \'
<table border="0" style="line-height: 160%">
	<tr><td style="line-height: \'.$line.\'%"> </td></tr>
    <tr><td> </td></tr>
    <tr><td> </td></tr>
    <tr>
        <td width="262" align="center" style="font-size:9px"><b>Recibi Conforme</b></td>
        <td width="262" align="center" style="font-size:9px"><b>Entregue Conforme</b></td>
    </tr>
    <tr>
        <td width="262" align="center" style="font-size:9px"><b> </b></td>
        <td width="262" align="center" style="font-size:9px">\'.$nombreUsuario.\'</td>
    </tr>

</table>
\';
if ($pdf->GetY() >= \'226.6375\' ){
		$pdf->AddPage(\'P\', \'LETTER\');
		if(!empty($nota) && !empty($terminos)){
			$restoQr = $restoQr - 18;
		}
    }

$subtotal = number_format((float)$invoice->importe_total, 2, \'.\', \'\');
$descuento= number_format((float)($invoice->importe_total-$invoice->importe_neto), 2, \'.\', \'\');
$total = number_format((float)$invoice->importe_neto, 2, \'.\', \'\');
$pdf->writeHTMLCell($w=0, $h=0, \'\', \'\', $datosFactura, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//Close and output PDF document
$pdf->Output(\'factura.pdf\', \'I\');

die;';


//factura fiscal

$master->javascript_pos = ' $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, \'UTF-8\', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor(\'ipxserver\');
$pdf->SetTitle(\'Factura\');
$pdf->SetSubject(\'Primera Factura\');
$pdf->SetKeywords(\'TCPDF, PDF, example, test, guide\');
$pdf->SetMargins(0.5, 0.5, 0.5);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetFont(\'helvetica\', \'\' , 7);
$page_format = array(
    \'MediaBox\' => array (\'llx\' => 0, \'lly\' => 0, \'urx\' => 72, \'ury\' => 1000),
    \'Dur\' => 3,
);
$business = $invoice->account_name;
if($invoice->account_uniper !=\'\')
    $unipersonal = \'<tr><td align="center">De: \'.$invoice->account_uniper.\'</td></tr>\';
else
    $unipersonal="";
// Check the example n. 29 for viewer preferences
$pdf->AddPage(\'P\', $page_format, false, false);
$sucursal = $invoice->branch_name;
$direccion = $invoice->address1." - ".$invoice->address2;
$ciudad = $invoice->city." - Bolivia";
$telefonos =$invoice->phone;

$html = \'
<table>
	<tr>
		<td align="center" style="font-size:10px; "><b>\'.$business.\'</b></td>
	</tr>
        \'.$unipersonal.\'
        <tr>
		<td align="center">\'.$sucursal.\'</td>
	</tr><tr>
		<td align="center">\'.$direccion.\'</td>
	</tr><tr>
		<td align="center">Telefono: \'.$telefonos.\'</td>
	</tr><tr>
		<td align="center">\'.$ciudad.\'</td>
	</tr>
</table>
\';
//imprime el contenido de la variable html
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
if($copia==1)
    $original = "COPIA";
else
$original = "ORIGINAL";
$pdf->SetFont(\'times\', \'B\' , 10);
$fact = \'<br><br><table>
<tr>
	<td align="center">
		FACTURA
	</td>
</tr>
<tr>
	<td align="center">
		\'.$original.\'
	</td>
</tr>
</table>
\'
;
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $fact, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$lin = " ";

$pdf->SetFont(\'helvetica\', \' \' , 8);
for ($i=0;$i<72;$i++)$lin .= \'-\';

$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $lin, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//DATOS FACTURA
$pdf->SetFont(\'helvetica\', \' \' , 8);
$nitEmpresa = $invoice->account_nit;
$nfac = $invoice->invoice_number;
$nauto = $invoice->number_autho;

$datosfac = \'
	<table border="0">
		<tr>
			<td align="left">NIT : </td>
			<td align="left">\'.$nitEmpresa.\'</td>
		</tr>
		<tr>
			<td align="left">FACTURA No : </td>
			<td align="left">\'.$nfac.\'</td>
		</tr>
		<tr>
			<td align="left">AUTORIZACION No :   </td>
			<td align="left">\'.$nauto.\'</td>
		</tr>
	</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'10\', $y=\'\', $datosfac, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//linea
$pdf->SetFont(\'helvetica\', \' \' , 8);
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $lin, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//actividad economica
$pdf->SetFont(\'times\', \'B\' , 9);
$actividad=$invoice->economic_activity;
$acti = \'
	<table align="center">
		<tr>
			<td>ACTIVIDAD ECON&Oacute;MICA</td>
		</tr>
		<tr>
			<td>\'.$actividad.\'</td>
		</tr>
	</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $acti, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$pdf->SetFont(\'helvetica\', \'\' , 8);
$date = DateTime::createFromFormat("Y-m-d", $invoice->invoice_date);
if($date==null)
    $date = DateTime::createFromFormat("d/m/Y", $invoice->invoice_date);
$fecha = $date->format(\'d/m/Y\');
$senor = $invoice->client_name;
$nit = $invoice->client_nit;
$hora = $date->format(\'H:i:s\');

$datosCli = \'<br>
	<table border="1">
		<tr>
			<td align="left" width="40">Fecha : </td>
			<td align="left">\'.$fecha.\'</td>
			<td align="right" width="30">Hora : </td>
			<td align="left">\'.$hora.\'</td>
		</tr>
		<tr>
			<td align="left" width="40">NIT/CI : </td>
			<td align="left">\'.$nit.\'</td>
		</tr>
		<tr>
			<td align="left" width="40">Nombre :   </td>
			<td align="left">\'.$senor.\'</td>
		</tr>
	</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'9\', $y=\'\', $datosCli, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//tabla
$htmlTabla = \'
	<table border="1">
		<tr>
			<td align="center">Cantidad</td>
			<td align="center">Precio</td>
			<td align="center">Importe</td>
		</tr>
	</table>
<p style="line-height: 30%">
    </p>\';

$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlTabla, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);


foreach ($products as $key => $product){
	$htmlTabla2 = \'
		<table border="0">
			<tr>
				<td colspan="3">\'.$product->notes.\'</td>
			</tr>
			<tr>
				<td align="center">\'.intval($product->qty).\'</td>
				<td align="center">\'.number_format((float)$product->cost, 2, \'.\', \',\').\'</td>
				<td align="center">\'.number_format((float)($product->cost*$product->qty), 2, \'.\', \',\').\'</td>
			</tr>
		</table>
	\';
	$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlTabla2, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
}
//total
$total = number_format((float)$invoice->importe_neto, 2, \'.\', \',\');
$htmlTotal = \'<hr>
	<table>
		<tr>
			<td align="right" width="173"><b>TOTAL: Bs \'.$total.\'</b></td>
		</tr>
	</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlTotal, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//TOTALES
$ice = number_format((float)($invoice->importe_ice), 2, \'.\', \',\');
$descuento= number_format((float)($invoice->importe_total-$invoice->importe_neto), 2, \'.\', \',\');
$importeCreditoFiscal = number_format((float)($invoice->debito_fiscal), 2, \'.\', \',\');
$fiscal =$importeCreditoFiscal;
$montoPagar = number_format((float)$invoice->importe_neto, 2, \'.\', \',\');
require_once(app_path().\'/includes/numberToString.php\');
$nts = new numberToString();
$num = explode(".", $invoice->importe_neto);
if(!isset($num[1]))
    $num[1]="00";
$literal= $nts->to_word($num[0]).substr($num[1],0,2);



$htmlDatosExtra = \'
	<table>
		<tr>
			<td>ICE: \'.$ice.\'</td>
		</tr>
		<tr>
			<td>DESCUENTOS/BONIFICACION: \'.$descuento.\'</td>
		</tr>
		<tr>
			<td>IMPORTE BASE CREDITO FISCAL: \'.$importeCreditoFiscal.\'</td>
		</tr>
		<tr>
			<td>MONTO A PAGAR: Bs \'.$montoPagar.\'</td>
		</tr>
		<tr>
			<td>SON: \'.$literal.\'/100 BOLIVIANOS</td>
		</tr>
	</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlDatosExtra, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//linea
$pdf->SetFont(\'helvetica\', \' \' , 8);
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $lin, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//CODIGO DE CONTROL

$control_code = $invoice->control_code;
$fecha_limite = date("d/m/Y", strtotime($invoice->deadline));
$fecha_limite = \DateTime::createFromFormat(\'Y-m-d\',$invoice->deadline);
if($fecha_limite== null)
    $fecha_limite = $invoice->deadline;
else
    $fecha_limite = $fecha_limite->format(\'d/m/Y\');
$law_gen=\'"\'."ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAÍS, EL USO ILÍCITO DE ÉSTA SERÁ SANCIONADO DE ACUERDO A LEY".\'"\';
$law=$invoice->law;

 $htmlControl = \'
 	<table>
 		<tr>
 			<td>CODIGO DE CONTROL : \'.$control_code.\'</td>
 		</tr>
 		<tr>
 			<td>FECHA LÍMITE EMISIÓN : \'.$fecha_limite.\'</td>
 		</tr>

 	</table>
 	<br>

 \';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlControl, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//qr
$subtotal = number_format((float)$invoice->importe_total, 2, \'.\', \'\');
$descuento= number_format((float)($invoice->importe_total-$invoice->importe_neto), 2, \'.\', \'\');
$total = number_format((float)$invoice->importe_neto, 2, \'.\', \'\');
$date_qr = date("d/m/Y", strtotime($invoice->invoice_date));
$date_qr = \DateTime::createFromFormat(\'Y-m-d\',$invoice->invoice_date);
if($date_qr== null)
    $date_qr = $invoice->invoice_date;
else
    $date_qr = $date_qr->format(\'d/m/Y\');
if($descuento=="0.00")
    $descuento=0;
if($fiscal==0) $fiscal="0";
if($ice==0) $ice ="0";
if($descuento==0)$descuento="0";
$datosqr = $invoice->account_nit.\'|\'.$invoice->invoice_number.\'|\'.$invoice->number_autho.\'|\'.$date_qr.\'|\'.$total.\'|\'.$fiscal.\'|\'.$invoice->control_code.\'|\'.$invoice->client_nit.\'|\'.$ice.\'|0|0|\'.$descuento;
$pdf->write2DBarcode($datosqr, \'QRCODE,M\', \'24\', \'\' , 25, 25, \'\', \'N\');

$htmlLeyenda = \'<br><br>
		<table>
			<tr>
				<td align="center"><b>\'.$law_gen.\'</b></td>
			</tr>
		</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlLeyenda, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$pdf->SetFont(\'times\', \' \' , 9);
$emizor = \'<br><br>
		<table>
			<tr>
				<td align="center">www.emizor.com</td>
			</tr>
		</table>
\';
$pdf->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $emizor, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

$y = $pdf->GetY();
$y2 = intval($y) + 8;
//////pdf adaptado a nuevo tamaÃ±o//////////////////////////////////////////////////////////////////
$page_format2 = array(
    \'MediaBox\' => array (\'llx\' => 0, \'lly\' => 0, \'urx\' => 72, \'ury\' => $y2),
    \'Dur\' => 3,
);
// add first page ---
$pdf2 = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, \'UTF-8\', false);
//Close and output PDF document
$pdf2->SetCreator(PDF_CREATOR);
$pdf2->SetAuthor(\'ipxserver\');
$pdf2->SetTitle(\'Factura\');
$pdf2->SetSubject(\'Primera Factura\');
$pdf2->SetKeywords(\'TCPDF, PDF, example, test, guide\');
// set margins
$pdf2->SetMargins(0.5, 0.5, 0.5);
// set auto page breaks
$pdf2->SetAutoPageBreak(TRUE, 0.5);
// borra la linea de arriba en el area del header
$pdf2->setPrintHeader(false);
$pdf2->setPrintFooter(false);
// set some language-dependent strings (optional)
if (@file_exists(\'/includes/tcpdf/examples/lang/spa.php\')) {
	require_once(\'/includes/tcpdf/examples/lang/spa.php\');
	$pdf->setLanguageArray($l);
}
$pdf2->SetFont(\'helvetica\', \'\' , 7);
// add second page ---
$pdf2->AddPage(\'P\', $page_format2, false, false);

$html = \'
<table>
	<tr>
		<td align="center" style="font-size:10px; "><b>\'.$business.\'</b></td>
	</tr>
        \'.$unipersonal.\'
        <tr>
		<td align="center">\'.$sucursal.\'</td>
	</tr><tr>
		<td align="center">\'.$direccion.\'</td>
	</tr><tr>
		<td align="center">Telefono: \'.$telefonos.\'</td>
	</tr><tr>
		<td align="center">\'.$ciudad.\'</td>
	</tr>
</table>
\';
//imprime el contenido de la variable html
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

$pdf2->SetFont(\'times\', \'B\' , 10);
$fact = \'<br><br><table>
<tr>
	<td align="center">
		FACTURA
	</td>
</tr>
<tr>
	<td align="center">
		\'.$original.\'
	</td>
</tr>
</table>
\'
;
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $fact, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$lin = " ";

$pdf2->SetFont(\'helvetica\', \' \' , 8);
for ($i=0;$i<72;$i++)
{
	$lin .= \'-\';

}
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $lin, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//DATOS FACTURA
$pdf2->SetFont(\'helvetica\', \' \' , 8);


$datosfac = \'
	<table border="0">
		<tr>
			<td align="left">NIT : </td>
			<td align="left">\'.$nitEmpresa.\'</td>
		</tr>
		<tr>
			<td align="left">FACTURA No : </td>
			<td align="left">\'.$nfac.\'</td>
		</tr>
		<tr>
			<td align="left">AUTORIZACION No :   </td>
			<td align="left">\'.$nauto.\'</td>
		</tr>
	</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'10\', $y=\'\', $datosfac, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//linea
$pdf2->SetFont(\'helvetica\', \' \' , 8);
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $lin, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//actividad economica
$pdf2->SetFont(\'times\', \'B\' , 9);

$acti = \'
	<table align="center">
		<tr>
			<td>ACTIVIDAD ECON&Oacute;MICA</td>
		</tr>
		<tr>
			<td>\'.$actividad.\'</td>
		</tr>
	</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $acti, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
//datos cliente
$pdf2->SetFont(\'helvetica\', \'\' , 8);


$datosCli = \'<br>
	<table border="0">
		<tr>
			<td align="left" width="40">Fecha : </td>
			<td align="left">\'.$fecha.\'</td>
			<td align="right" width="30">Hora : </td>
			<td align="left">\'.$hora.\'</td>
		</tr>
		<tr>
			<td align="left" width="40">NIT/CI : </td>
			<td colspan="3" align="left">\'.$nit.\'</td>
		</tr>
		<tr>
			<td align="left" width="40">Nombre :   </td>
			<td colspan="3" align="left">\'.$senor.\'</td>
		</tr>
	</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'9\', $y=\'\', $datosCli, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//tabla
$htmlTabla = \'
	<table border="0">
		<tr>
			<td align="center">Cantidad</td>
			<td align="center">Precio</td>
			<td align="center">Subtotal</td>
		</tr>
	</table>
<p style="line-height: 30%">
    </p>\';

$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlTabla, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

foreach ($products as $key => $product){
	$htmlTabla2 = \'
		<table border="0">
			<tr>
				<td colspan="3">\'.$product->notes.\'</td>
			</tr>
			<tr>
				<td align="center">\'.intval($product->qty).\'</td>
				<td align="center">\'.number_format((float)$product->cost, 2, \'.\', \',\').\'</td>
				<td align="center">\'.number_format((float)($product->cost*$product->qty), 2, \'.\', \',\').\'</td>
			</tr>
		</table>
	\';
	$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlTabla2, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
}

//total
$htmlTotal = \'<hr>
	<table>
		<tr>
			<td align="right" width="173"><b>TOTAL: Bs \'.$total.\'</b></td>
		</tr>
	</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlTotal, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);




$htmlDatosExtra = \'
	<table>
		<tr>
			<td>ICE: \'.$ice.\'</td>
		</tr>
		<tr>
			<td>DESCUENTOS/BONIFICACIÓN: \'.$descuento.\'</td>
		</tr>
		<tr>
			<td>IMPORTE BASE CREDITO FISCAL: \'.$importeCreditoFiscal.\'</td>
		</tr>
		<tr>
			<td>MONTO A PAGAR: Bs \'.$montoPagar.\'</td>
		</tr>
		<tr>
			<td>SON: \'.$literal.\'/100 BOLIVIANOS</td>
		</tr>
	</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlDatosExtra, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//linea
$pdf2->SetFont(\'helvetica\', \' \' , 8);
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $lin, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);


//CODIGO DE CONTROL

 $htmlControl = \'
 	<table>
 		<tr>
 			<td><b>CÓDIGO DE CONTROL : \'.$control_code.\'</b></td>
 		</tr>
 		<tr>
 			<td><b>FECHA LÍMITE EMISIÓN : \'.$fecha_limite.\'</b></td>
 		</tr>
 	</table>
 	<br>

 \';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlControl, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

//qr
$pdf2->write2DBarcode($datosqr, \'QRCODE,M\', \'24\', \'\' , 25, 25, \'\', \'N\');

$htmlLeyenda = \'<br><br>
		<table>
			<tr>
				<td align="center"><b>\'.$law_gen.\'</b></td>
			</tr>
		</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $htmlLeyenda, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);
$pdf2->SetFont(\'times\', \' \' , 9);
$emizor = \'<br><br>
		<table>
			<tr>
				<td align="center">www.emizor.com</td>
			</tr>
		</table>
\';
$pdf2->writeHTMLCell($w=0, $h=0, $x=\'\', $y=\'\', $emizor, $border=0, $ln=1, $fill=0, $reseth=true, $align=\'left\', $autopadding=true);

$pdf2->Output(\'factura.pdf\', \'I\');
die();';
$master->save();



		PaymentType::create(array('name' => 'Efectivo'));
		PaymentType::create(array('name' => 'Crédito'));
		PaymentType::create(array('name' => 'Transferencia Bancaria'));
		PaymentType::create(array('name' => 'Cheque'));


		//Unidad::create(array('name' => 'unidad','is_int'=>true,));
		//Unidad::create(array('nombre' => 'decimal','is_int'=>false));

		InvoiceStatus::create(array('name' => 'Emitido'));
		InvoiceStatus::create(array('name' => 'Enviado'));
		InvoiceStatus::create(array('name' => 'Visto'));
		InvoiceStatus::create(array('name' => 'Parcial'));
		InvoiceStatus::create(array('name' => 'Pagado'));
		InvoiceStatus::create(array('name' => 'Anulado'));

		Frequency::create(array('name' => 'Mensual'));
		Frequency::create(array('name' => 'Trimestral'));
		Frequency::create(array('name' => 'Semestral'));
		Frequency::create(array('name' => 'Anual'));

		Currency::create(array('name' => 'Bolivianos', 'code' => 'BS', 'symbol' => 'Bs', 'precision' => '2', 'thousand_separator' => ',', 'decimal_separator' => '.'));


		DatetimeFormat::create(array('format' => 'd/M/Y g:i a', 'label' => '10/Mar/2013'));
		DatetimeFormat::create(array('format' => 'd-M-Yk g:i a', 'label' => '10-Mar-2013'));
		DatetimeFormat::create(array('format' => 'd/F/Y g:i a', 'label' => '10/March/2013'));
		DatetimeFormat::create(array('format' => 'd-F-Y g:i a', 'label' => '10-March-2013'));
		DatetimeFormat::create(array('format' => 'M j, Y g:i a', 'label' => 'Mar 10, 2013 6:15 pm'));
		DatetimeFormat::create(array('format' => 'F j, Y g:i a', 'label' => 'March 10, 2013 6:15 pm'));
		DatetimeFormat::create(array('format' => 'D M jS, Y g:ia', 'label' => 'Mon March 10th, 2013 6:15 pm'));

		DateFormat::create(array('format' => 'd/M/Y', 'picker_format' => 'dd/M/yyyy', 'label' => '10/Mar/2013'));
		DateFormat::create(array('format' => 'd-M-Y', 'picker_format' => 'dd-M-yyyy', 'label' => '10-Mar-2013'));
		DateFormat::create(array('format' => 'd/F/Y', 'picker_format' => 'dd/MM/yyyy', 'label' => '10/March/2013'));
		DateFormat::create(array('format' => 'd-F-Y', 'picker_format' => 'dd-MM-yyyy', 'label' => '10-March-2013'));
		DateFormat::create(array('format' => 'M j, Y', 'picker_format' => 'M d, yyyy', 'label' => 'Mar 10, 2013'));
		DateFormat::create(array('format' => 'F j, Y', 'picker_format' => 'MM d, yyyy', 'label' => 'March 10, 2013'));
		DateFormat::create(array('format' => 'D M j, Y', 'picker_format' => 'D MM d, yyyy', 'label' => 'Mon March 10, 2013'));
		/*
		d, dd: Numeric date, no leading zero and leading zero, respectively. Eg, 5, 05.
		D, DD: Abbreviated and full weekday names, respectively. Eg, Mon, Monday.
		m, mm: Numeric month, no leading zero and leading zero, respectively. Eg, 7, 07.
		M, MM: Abbreviated and full month names, respectively. Eg, Jan, January
		yy, yyyy: 2- and 4-digit years, respectively. Eg, 12, 2012.)
		*/

		$timezones = array(
		    'Pacific/Midway'       => "(GMT-11:00) Midway Island",
		    'US/Samoa'             => "(GMT-11:00) Samoa",
		    'US/Hawaii'            => "(GMT-10:00) Hawaii",
		    'US/Alaska'            => "(GMT-09:00) Alaska",
		    'US/Pacific'           => "(GMT-08:00) Pacific Time (US &amp; Canada)",
		    'America/Tijuana'      => "(GMT-08:00) Tijuana",
		    'US/Arizona'           => "(GMT-07:00) Arizona",
		    'US/Mountain'          => "(GMT-07:00) Mountain Time (US &amp; Canada)",
		    'America/Chihuahua'    => "(GMT-07:00) Chihuahua",
		    'America/Mazatlan'     => "(GMT-07:00) Mazatlan",
		    'America/Mexico_City'  => "(GMT-06:00) Mexico City",
		    'America/Monterrey'    => "(GMT-06:00) Monterrey",
		    'Canada/Saskatchewan'  => "(GMT-06:00) Saskatchewan",
		    'US/Central'           => "(GMT-06:00) Central Time (US &amp; Canada)",
		    'US/Eastern'           => "(GMT-05:00) Eastern Time (US &amp; Canada)",
		    'US/East-Indiana'      => "(GMT-05:00) Indiana (East)",
		    'America/Bogota'       => "(GMT-05:00) Bogota",
		    'America/Lima'         => "(GMT-05:00) Lima",
		    'America/Caracas'      => "(GMT-04:30) Caracas",
		    'Canada/Atlantic'      => "(GMT-04:00) Atlantic Time (Canada)",
		    'America/La_Paz'       => "(GMT-04:00) La Paz",
		    'America/Santiago'     => "(GMT-04:00) Santiago",
		    'Canada/Newfoundland'  => "(GMT-03:30) Newfoundland",
		    'America/Buenos_Aires' => "(GMT-03:00) Buenos Aires",
		    'Greenland'            => "(GMT-03:00) Greenland",
		    'Atlantic/Stanley'     => "(GMT-02:00) Stanley",
		    'Atlantic/Azores'      => "(GMT-01:00) Azores",
		    'Atlantic/Cape_Verde'  => "(GMT-01:00) Cape Verde Is.",
		    'Africa/Casablanca'    => "(GMT) Casablanca",
		    'Europe/Dublin'        => "(GMT) Dublin",
		    'Europe/Lisbon'        => "(GMT) Lisbon",
		    'Europe/London'        => "(GMT) London",
		    'Africa/Monrovia'      => "(GMT) Monrovia",
		    'Europe/Amsterdam'     => "(GMT+01:00) Amsterdam",
		    'Europe/Belgrade'      => "(GMT+01:00) Belgrade",
		    'Europe/Berlin'        => "(GMT+01:00) Berlin",
		    'Europe/Bratislava'    => "(GMT+01:00) Bratislava",
		    'Europe/Brussels'      => "(GMT+01:00) Brussels",
		    'Europe/Budapest'      => "(GMT+01:00) Budapest",
		    'Europe/Copenhagen'    => "(GMT+01:00) Copenhagen",
		    'Europe/Ljubljana'     => "(GMT+01:00) Ljubljana",
		    'Europe/Madrid'        => "(GMT+01:00) Madrid",
		    'Europe/Paris'         => "(GMT+01:00) Paris",
		    'Europe/Prague'        => "(GMT+01:00) Prague",
		    'Europe/Rome'          => "(GMT+01:00) Rome",
		    'Europe/Sarajevo'      => "(GMT+01:00) Sarajevo",
		    'Europe/Skopje'        => "(GMT+01:00) Skopje",
		    'Europe/Stockholm'     => "(GMT+01:00) Stockholm",
		    'Europe/Vienna'        => "(GMT+01:00) Vienna",
		    'Europe/Warsaw'        => "(GMT+01:00) Warsaw",
		    'Europe/Zagreb'        => "(GMT+01:00) Zagreb",
		    'Europe/Athens'        => "(GMT+02:00) Athens",
		    'Europe/Bucharest'     => "(GMT+02:00) Bucharest",
		    'Africa/Cairo'         => "(GMT+02:00) Cairo",
		    'Africa/Harare'        => "(GMT+02:00) Harare",
		    'Europe/Helsinki'      => "(GMT+02:00) Helsinki",
		    'Europe/Istanbul'      => "(GMT+02:00) Istanbul",
		    'Asia/Jerusalem'       => "(GMT+02:00) Jerusalem",
		    'Europe/Kiev'          => "(GMT+02:00) Kyiv",
		    'Europe/Minsk'         => "(GMT+02:00) Minsk",
		    'Europe/Riga'          => "(GMT+02:00) Riga",
		    'Europe/Sofia'         => "(GMT+02:00) Sofia",
		    'Europe/Tallinn'       => "(GMT+02:00) Tallinn",
		    'Europe/Vilnius'       => "(GMT+02:00) Vilnius",
		    'Asia/Baghdad'         => "(GMT+03:00) Baghdad",
		    'Asia/Kuwait'          => "(GMT+03:00) Kuwait",
		    'Africa/Nairobi'       => "(GMT+03:00) Nairobi",
		    'Asia/Riyadh'          => "(GMT+03:00) Riyadh",
		    'Asia/Tehran'          => "(GMT+03:30) Tehran",
		    'Europe/Moscow'        => "(GMT+04:00) Moscow",
		    'Asia/Baku'            => "(GMT+04:00) Baku",
		    'Europe/Volgograd'     => "(GMT+04:00) Volgograd",
		    'Asia/Muscat'          => "(GMT+04:00) Muscat",
		    'Asia/Tbilisi'         => "(GMT+04:00) Tbilisi",
		    'Asia/Yerevan'         => "(GMT+04:00) Yerevan",
		    'Asia/Kabul'           => "(GMT+04:30) Kabul",
		    'Asia/Karachi'         => "(GMT+05:00) Karachi",
		    'Asia/Tashkent'        => "(GMT+05:00) Tashkent",
		    'Asia/Kolkata'         => "(GMT+05:30) Kolkata",
		    'Asia/Kathmandu'       => "(GMT+05:45) Kathmandu",
		    'Asia/Yekaterinburg'   => "(GMT+06:00) Ekaterinburg",
		    'Asia/Almaty'          => "(GMT+06:00) Almaty",
		    'Asia/Dhaka'           => "(GMT+06:00) Dhaka",
		    'Asia/Novosibirsk'     => "(GMT+07:00) Novosibirsk",
		    'Asia/Bangkok'         => "(GMT+07:00) Bangkok",
		    'Asia/Jakarta'         => "(GMT+07:00) Jakarta",
		    'Asia/Krasnoyarsk'     => "(GMT+08:00) Krasnoyarsk",
		    'Asia/Chongqing'       => "(GMT+08:00) Chongqing",
		    'Asia/Hong_Kong'       => "(GMT+08:00) Hong Kong",
		    'Asia/Kuala_Lumpur'    => "(GMT+08:00) Kuala Lumpur",
		    'Australia/Perth'      => "(GMT+08:00) Perth",
		    'Asia/Singapore'       => "(GMT+08:00) Singapore",
		    'Asia/Taipei'          => "(GMT+08:00) Taipei",
		    'Asia/Ulaanbaatar'     => "(GMT+08:00) Ulaan Bataar",
		    'Asia/Urumqi'          => "(GMT+08:00) Urumqi",
		    'Asia/Irkutsk'         => "(GMT+09:00) Irkutsk",
		    'Asia/Seoul'           => "(GMT+09:00) Seoul",
		    'Asia/Tokyo'           => "(GMT+09:00) Tokyo",
		    'Australia/Adelaide'   => "(GMT+09:30) Adelaide",
		    'Australia/Darwin'     => "(GMT+09:30) Darwin",
		    'Asia/Yakutsk'         => "(GMT+10:00) Yakutsk",
		    'Australia/Brisbane'   => "(GMT+10:00) Brisbane",
		    'Australia/Canberra'   => "(GMT+10:00) Canberra",
		    'Pacific/Guam'         => "(GMT+10:00) Guam",
		    'Australia/Hobart'     => "(GMT+10:00) Hobart",
		    'Australia/Melbourne'  => "(GMT+10:00) Melbourne",
		    'Pacific/Port_Moresby' => "(GMT+10:00) Port Moresby",
		    'Australia/Sydney'     => "(GMT+10:00) Sydney",
		    'Asia/Vladivostok'     => "(GMT+11:00) Vladivostok",
		    'Asia/Magadan'         => "(GMT+12:00) Magadan",
		    'Pacific/Auckland'     => "(GMT+12:00) Auckland",
		    'Pacific/Fiji'         => "(GMT+12:00) Fiji",
		);

		foreach ($timezones as $name => $location) {
			Timezone::create(array('name'=>$name, 'location'=>$location));
		}

	}

}
