<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {
    var $validate = 
        array(
            'nazwisko'=> array('rule' => 'notBlank',
                'message' =>'To pole nie może być puste!'),
            'etat' => array('rule' => 'notBlank',
                'message' =>'To pole nie może być puste!'),
            'placa_pod' => array('rule' => array('range', 0, 2000),
            'message' =>'Wprowadź wartość z zakresu 0-2000',
        ));
}
