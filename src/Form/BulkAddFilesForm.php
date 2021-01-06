<?php

namespace Drupal\bulk_add_files\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class BulkAddFilesForm extends FormBase
{

  /**
   * {@inheritdoc}
   */
  public function getFormId()
  {
    return 'bulk_add_files_form';
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  }

  public function buildForm(array $form, \Drupal\Core\Form\FormStateInterface $form_state) {
    $form = [];

    $form['path_to_files'] = array(
      '#type' => 'textfield',
      '#title' => $this
        ->t('Path to files to add'),
      '#default_value' => '/Users/jason/Sites/drupal-migrate/sites/default/files/migrated', // '/var/www/your-drupal-site/sites/default/files/migrated'
      '#size' => 60,
      '#maxlength' => 128,
      '#required' => TRUE,
    );

    $form['add'] = [
      '#type' => 'submit',
      '#value' => t('Add files'),
      '#weight' => 3,
      '#submit' => [
        'bulk_add_files_do'
      ],
      '#attributes' => [
        'onclick' => 'if(!confirm("Add files in the path to media? This operation may take a long time.\n\nAre you sure?")){return false;}'
      ],
    ];

    return $form;
  }


}