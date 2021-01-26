<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ChartModel;

class Chart extends Controller {
    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index()
    {
        $chart_model = new ChartModel();

        $data['DPTDTAT_3'] = $chart_model->getDPTDTAT(3);
        $data['DPTDTAT_9'] = $chart_model->getDPTDTAT(9);
        $data['DPTDTAT_10'] = $chart_model->getDPTDTAT(10);
        $data['DPTUSAG_3'] = $chart_model->getDPTUSAG(3);
        $data['DPTUSAG_9'] = $chart_model->getDPTUSAG(9);
        $data['DPTUSAG_10'] = $chart_model->getDPTUSAG(10);
        $data['DPTHWT_3'] = $chart_model->getDPTHWT(3);
        $data['DPTHWT_9'] = $chart_model->getDPTHWT(9);
        $data['DPTHWT_10'] = $chart_model->getDPTHWT(10);
//        $data['NGWC'] = $chart_model->getNGWC();
        $data['TIME_'] = $chart_model->getTIME();
        $data['XTitle'] = $chart_model->getXTitle();

        echo view('chart', $data);
    }
}