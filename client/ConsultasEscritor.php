<?php

class EscritoresVo
{
    private $service = 'http://localhost:8989/PumpkinPiesServer/webresources/escritor/';

    public function retornarDatos()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->service);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        $data = json_decode( file_get_contents($this->service), true );
        
        curl_close($ch);

        return $data;
    }

    public function retornarDato($id)
    {
        $urlvo = $this->service . $id;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $urlvo);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        $data = json_decode( file_get_contents($urlvo), true );
        // var_dump($data);
        // for ($i=0; $i < sizeof($data); $i++) { 
        //     foreach ($data[$i] as $key => $value) {
        //     echo "$key => $value <br>";
        //     }
        //     echo "<br><br>";
        // }

        curl_close($ch);

        return $data;
    }

    public function modEscritor($data) 
    {
        $url = $this->service;
        $data_json = json_encode($data);

        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response  = curl_exec($ch);
            curl_close($ch);
            return "Exito";
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function createEscritor($data)
    {
        $url = $this->service;
        $data_json = json_encode($data);

        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response  = curl_exec($ch);
            curl_close($ch);
            return "Exito";
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function deleteEscritor($data)
    {
        $url = $this->service;
        $data_json = json_encode($data);

        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response  = curl_exec($ch);
            curl_close($ch);
            return "Exito";
        } catch (\Throwable $th) {
            return $th;
        }
    }
}


?>