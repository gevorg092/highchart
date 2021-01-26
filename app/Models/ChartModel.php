<?php namespace App\Models;

use CodeIgniter\Model;

class ChartModel extends Model
{
    protected $table = 'chartdata';

    public function getJsonData($data, $key){
        $result = array();

        for ($i=0; $i<count($data); $i++) {
            if ($key === 'TIME')
                array_push($result, ($data[$i][$key]));
            else
                array_push($result, intval($data[$i][$key]));
        }

        if ($key === 'NGWC')
            return json_encode($result);
        else
            return ($result);
    }

    public function getDPTDTAT($key) {
        $data = $this->select('DPTDTAT')
            ->where('NGWC', $key)
            ->orderBy('START_', 'ASC')
            ->findAll();

        return $this->getJsonData($data, "DPTDTAT");
    }

    public function getDPTUSAG($key) {
        $data = $this->select('DPTUSAG')
            ->where('NGWC', $key)
            ->orderBy('START_', 'ASC')
            ->findAll();

        return $this->getJsonData($data, "DPTUSAG");
    }

    public function getDPTHWT($key) {
        $data = $this->select('DPTHWT')
            ->where('NGWC', $key)
            ->orderBy('START_', 'ASC')
            ->findAll();

        return $this->getJsonData($data, "DPTHWT");
    }

    public function getNGWC() {
        $data = $this->select('NGWC')
            ->orderBy('START_', 'ASC')
            ->findAll();

        return $this->getJsonData($data, "NGWC");
    }

    public function getTIME() {
        $data = $this->select('TIME')
            ->orderBy('START_', 'ASC')
            ->groupBy('TIME')
            ->findAll();

        return $this->getJsonData($data, "TIME");
    }

    public function getXTitle() {
        $data = $this->select('START_')
            ->orderBy('START_', 'ASC')
            ->findAll(1);
        $min = $data[0]['START_'];

        $data = $this->select('START_')
            ->orderBy('START_', 'DESC')
            ->findAll(1);
        $max = $data[0]['START_'];

        return ($min . ' ~ ' . $max);
    }

    public function getTypeNGWC() {
        $data = $this->select('NGWC')
            ->groupBy('NGWC')
            ->findAll();

        return $this->getJsonData($data, "NGWC");
    }
}