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
        $data['NGWC'] = $chart_model->getTypeNGWC();
        $data['TIME_'] = $chart_model->getTIME();
        $data['XTitle'] = $chart_model->getXTitle();

        $type = json_decode($data['NGWC']);
        $series = array();

        for ($i=0; $i<count($type); $i++) {
            $data['DPTDTAT_' . $type[$i]] = $chart_model->getDatas('DPTDTAT', intval($type[$i]));
            $serie = array(
                'name' => 'DPTDTAT_' . $type[$i],
                'data' => $data['DPTDTAT_' . $type[$i]],
            );
            array_push($series, $serie);

            $data['DPTUSAG_' . $type[$i]] = $chart_model->getDatas('DPTUSAG', intval($type[$i]));
            $serie = array(
                'name' => 'DPTUSAG_' . $type[$i],
                'data' => $data['DPTUSAG_' . $type[$i]],
            );
            array_push($series, $serie);

            $data['DPTHWT_' . $type[$i]] = $chart_model->getDatas('DPTHWT', intval($type[$i]));
            $serie = array(
                'name' => 'DPTHWT_' . $type[$i],
                'data' => $data['DPTHWT_' . $type[$i]],
            );
            array_push($series, $serie);
        }

        $data['series'] = json_encode($series);

        echo view('chart', $data);
    }
}