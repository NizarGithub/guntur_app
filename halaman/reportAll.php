<?php

date_default_timezone_set('Asia/Jakarta');
/**
 * @author Achmad maulana
 * @website 
 * @email http://a.maulana@devan.co.id
 */
require('fpdf.php');
date_default_timezone_set('Asia/Jakarta');

class FPDF_AutoWrapTable extends FPDF {

    private $data = array();
    private $options = array(
        'filename' => '',
        'destinationfile' => '',
        'paper_size' => 'A4',
        'orientation' => 'L'
    );

    function __construct($data = array(), $options = array()) {
        parent::__construct();
        $this->data = $data;
        $this->options = $options;
    }

    public function rptDetailData() {
        //
        $border = 0;
        $this->AddPage();
        $this->SetAutoPageBreak(true, 60);
        $this->AliasNbPages();
        $left = 10;

        //header
        $this->SetFont("Times", "B", 11);

        $this->SetX($left);
        $this->Cell(0, 10, 'LAPORAN DATA MENARA TELEKOMUNIKASI', 0, 1, 'C');
        $this->Ln(10);

        $h = 20;
        $left = 10;
        $top = 60;
        #tableheader
        $this->SetFont("Times", "B", 9);
        $this->SetFillColor(200, 200, 200);
        $left = $this->GetX();
        $this->Cell(30, $h, 'No', 1, 0, 'L', true);
        $this->SetX($left += 30);
        $this->Cell(110, $h, 'Id Site', 1, 0, 'L', true);
        $this->SetX($left += 110);
        $this->Cell(120, $h, 'Provider', 1, 0, 'L', true);
        $this->SetX($left += 120);
        $this->Cell(100, $h, 'Tinggi Menara', 1, 0, 'L', true);
        $this->SetX($left += 100);
        $this->Cell(100, $h, 'Latitude', 1, 0, 'L', true);
        $this->SetX($left += 100);
        $this->Cell(100, $h, 'Longitude', 1, 0, 'L', true);
        $this->SetX($left += 100);
        $this->Cell(220, $h, 'Alamat', 1, 0, 'L', true);
        //$this->SetX($left += 150); $this->Cell(160, $h, 'Ket', 1, 1, 'C',true);
        $this->Ln(20);

        $this->SetFont('Arial', '', 9);
        $this->SetWidths(array(30, 110, 120, 100, 100, 100, 220));
        $this->SetAligns(array('L', 'L', 'L', 'L', 'L', 'L'));
        $no = 1;
        $this->SetFillColor(255);
        foreach ($this->data as $baris) {
            $this->Row(
                    array($no++,
                        $baris['id_site'],
                        $baris['pemilik_menara'],
                        $baris['tinggi'],
                        $baris['latitude'],
                        $baris['longitude'],
                        $baris['alamat']
            ));
        }
    }

    public function printPDF() {

        if ($this->options['paper_size'] == "F4") {
            $a = 8.3 * 72; //1 inch = 72 pt
            $b = 13.0 * 72;
            $this->FPDF($this->options['orientation'], "pt", array($a, $b));
        } else {
            $this->FPDF($this->options['orientation'], "pt", $this->options['paper_size']);
        }

        $this->SetAutoPageBreak(false);
        $this->AliasNbPages();
        $this->SetFont("helvetica", "B", 9);
        //$this->AddPage();

        $this->rptDetailData();

        $this->Output($this->options['filename'], $this->options['destinationfile']);
    }

    private $widths;
    private $aligns;

    function SetWidths($w) {
        //Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a) {
        //Set the array of column alignments
        $this->aligns = $a;
    }

    function Row($data) {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 16 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border
            $this->Rect($x, $y, $w, $h);
            //Print the text
            $this->MultiCell($w, 10, $data[$i], 0, $a);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h) {
        //If the height h would cause an overflow, add a new page immediately
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt) {
        //Computes the number of lines a MultiCell of width w will take
        $cw = &$this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', $txt);
        $nb = strlen($s);
        if ($nb > 0 and $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l+=$cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }

}

//end of class
#koneksi ke database (disederhanakan)
mysql_connect("localhost", "root", "devan");
mysql_select_db("bekasi");
//$pemilik = $_POST['pemilik'];
#ambil data dari DB dan masukkan ke array
$data = array();
//$query = "select * from site_view where pemilik_menara ='" . $pemilik . "' ";
$query = "select * from report_list_site ";
$sql = mysql_query($query);
while ($row = mysql_fetch_assoc($sql)) {
    array_push($data, $row);
}

//pilihan
$options = array(
    'filename' => 'Laporan Menara Telekomunikasi.pdf', //nama file penyimpanan, kosongkan jika output ke browser
    'destinationfile' => 'D', //I=inline browser (default), F=local file, D=download
    'paper_size' => 'A4', //paper size: F4, A3, A4, A5, Letter, Legal
    'orientation' => 'L' //orientation: P=portrait, L=landscape
);

$tabel = new FPDF_AutoWrapTable($data, $options);
$tabel->printPDF();
?>