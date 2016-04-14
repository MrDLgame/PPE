<?php

class RangeOption
{

    private $data = array();
    private $config = array();
    private $chercher;

    public function __construct($data, $config, $chercher)
    {
        $this->data = $data;
        $this->config = $config;
        $this->chercher = $chercher;
    }

    // Retourner une liste d'option dans l'ordre voulu
    public function toString()
    {
        $chaine = '';

        foreach($this->data as $key => $value)
        {
            if ($value[$this->config[$this->config["correspondance"]]] == $this->chercher)
            {
                $chaine .= '<option value="' . $value[$this->config["value"]] . '" selected>' . $value[$this->config["name"]] . '</option>' . "\n";
            }
            else
            {
                $chaine .= '<option value="' . $value[$this->config["value"]] . '">' . $value[$this->config["name"]] . '</option>';
            }
        }
        return $chaine;
    }
}

?>