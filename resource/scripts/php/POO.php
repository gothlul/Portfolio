<?php

    require_once '../../database/connection.php';

    class Remetente{
        public $nameRMT;
        public $telRMT;
        public $cargoRMT;
        public $compRMT;

        public function __construct($nome, $tel, $cargo, $comp){
            $this->nameRMT = $nome;
            $this->telRMT = $tel;
            $this->cargoRMT = $cargo;
            $this->compRMT = $comp; //empresa
        }
    }

    class ClickUp{
        public $teamId;     //id do grupo do clicup
        public $token;      //token para o envio da task
        public $listId;     //id da lista onde a task será adicionada
        public $query;      //parametros enviados à API por HTTP

        public $nameTask;   //nome da nova task
        public $tagList;    //array com todas as tags incluíudas na nova task
        public $prazo;      //tempo para conclusão da task (em dias)

        public $client;

        public function __construct($teamId, $token, $listId){
            $this->teamId = $teamId;
            $this->token = $token;
            $this->listId = $listId;
            $this->query = array(
                "custom_task_ids" => "true",
                "team_id" => "$this->teamId"
            );
        }
        
        public function addTask($name, array $tags, $days, Remetente $client){
            $this->nameTask = $name;
            $this->tagList = $tags;
            $this->prazo = 86400000*$days;
            $this->client = $client;


            $newTask = array(
                "name" => "$this->nameTask",
                "description" => "Formulário enviado por ".$this->client->nameRMT.", ".$this->client->cargoRMT." na empresa ".$this->client->compRMT.". O número de telefone informado para contato é: ".$this->client->telRMT,
                "assignees" => array(183),
                "tags" => $this->tagList,
                "status" => "",
                "priority" => 3,
                "due_date" => microtime(true) * 1000 + $this->prazo,
                "due_date_time" => false,
                "time_estimate" => $this->prazo,
                "start_date" => microtime(true) * 1000,
                "start_date_time" => false,
                "notify_all" => true,
                "check_required_custom_fields" => true
            );

            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_HTTPHEADER => ["Authorization: ".$this->token."", "Content-Type: application/json"],
                CURLOPT_POSTFIELDS => json_encode($newTask),
                CURLOPT_PORT => "",
                CURLOPT_URL => "https://api.clickup.com/api/v2/list/".$this->listId."/task?".http_build_query($this->query),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "POST",
            ]);

            $resp = curl_exec($curl);
            $erro = curl_error($curl);

            curl_close($curl);

        }
    }


?>