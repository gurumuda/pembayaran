<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

function tgl_indo($tanggal)
{
	$th = substr($tanggal, 0, 4);
	$bln = substr($tanggal, 5, 2);
	$tgl = substr($tanggal, 8, 2);

	return $tgl.' - '.$bln.' - '.$th;
}

function bulan($bln)
{
	if ($bln == '01') {
		return 'Januari';
	} elseif ($bln == '02') {
		return 'Februari';
	} elseif ($bln == '03') {
		return 'Maret';
	} elseif ($bln == '04') {
		return 'April';
	} elseif ($bln == '05') {
		return 'Mei';
	} elseif ($bln == '06') {
		return 'Juni';
	} elseif ($bln == '07') {
		return 'Juli';
	} elseif ($bln == '08') {
		return 'Agustus';
	} elseif ($bln == '09') {
		return 'September';
	} elseif ($bln == '10') {
		return 'Oktober';
	} elseif ($bln == '11') {
		return 'November';
	} elseif ($bln == '12') {
		return 'Desember';
	}
	
}