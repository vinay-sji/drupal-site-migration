<?php

namespace Drupal\user_info_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class UserInfoForm extends FormBase {

    public function getFormId(){
        return 'user_info_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state){

        $form['user_first_name'] = [
            '#type' => 'textfield',
            '#required' => TRUE,
            '#title' => $this->t('First Name: '),
        ];

        $form['user_last_name'] = [
            '#type' => 'textfield',
            '#required' => TRUE,
            '#title' => $this->t('Last Name: '),
        ];

        $form['user_age'] = [
            '#type' => 'number',
            '#required' => TRUE,
            '#attributes' => array('min' => '7','max' => '150'),
            '#title' => $this->t('Age: '),
        ];

        $form['user_place_of_birth'] = [
            '#type' => 'textfield',
            '#required' => TRUE,
            '#title' => $this->t('Place of Birth: '),
        ];

        $form['user_favourite_number'] = [
            '#type' => 'number',
            '#required' => TRUE,
            '#title' => $this->t('Favourite Number: '),
        ];

        $form['user_school_college'] = [
            '#type' => 'textfield',
            '#required' => TRUE,
            '#title' => $this->t('School/College: '),
        ];

        $form['actions'] = array('#type' => 'actions');
        $form['actions']['add_user_info'] = array(
            '#type' => 'submit',
            '#value' => t('Display Info'),
        );

        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
        if(!ctype_alpha($form_state->getValue('user_first_name'))){
            $form_state->setErrorByName('user_first_name', $this->t('Please enter a valid name'));
        }

        if(!ctype_alpha($form_state->getValue('user_last_name'))){
            $form_state->setErrorByName('user_last_name', $this->t('Please enter a valid name'));
        }

        if(!ctype_alpha($form_state->getValue('user_place_of_birth'))){
            $form_state->setErrorByName('user_place_of_birth', $this->t('Please enter a valid Place of Birth'));
        }
    }

    public function submitForm(array &$form, FormStateInterface $form_state){

        $user_first_name = $form_state->getValue('user_first_name');
        $user_last_name = $form_state->getValue('user_last_name');
        $user_age = $form_state->getValue('user_age');
        $user_place_of_birth = $form_state->getValue('user_place_of_birth');
        $user_school_college = $form_state->getValue('user_school_college');
        $user_favourite_number = $form_state->getValue('user_favourite_number');
        
        drupal_set_message('Your User Info : ');
        drupal_set_message('Name : ' . $user_first_name . ' ' . $user_last_name);
        drupal_set_message('Age : ' . $user_age);
        drupal_set_message('Place of Birth : ' . $user_place_of_birth);
        drupal_set_message('Favourite Number : ' . $user_favourite_number);
        drupal_set_message('School/College : ' . $user_school_college);      


    }

}

?>