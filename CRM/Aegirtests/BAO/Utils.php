<?php

class CRM_Aegirtests_BAO_Utils {

  /**
   * Enable CiviCRM multi-lingual.
   */
  public static function enableMultiLingual() {
    civicrm_api3('Setting', 'create', [
      'lcMessages' => 'en_US',
      'languageLimit' => [
        'en_US' => 1,
      ],
    ]);

    CRM_Core_I18n_Schema::makeMultilingual('en_US');
  }

  /**
   * Enable the iATS payments extension.
   */
  public static function enableIatsExtension() {
    $result = civicrm_api3('PaymentProcessorType', 'getsingle', [
      'class_name' => 'Payment_iATSService',
      'return' => 1,
    ]);

    civicrm_api3('PaymentProcessor', 'create', [
      'name' => 'iATS',
      'payment_processor_type_id' => $result['id'],
      'class_name' => 'Payment_iATSService',
      'is_recur' => 0,
      'domain_id' => 1,
    ]);
  }

  /**
   * Create a few contributions linked to iATS.
   */
  public static function createTestContributions() {
    // FIXME: yolo-assuming IDs since testing on blank CiviCRM site.
    for ($i = 0; $i < 5; $i++) {
      civicrm_api3('Contribution', 'create', [
        'total_amount' => $i,
        'contact_id' => 1,
        'financial_type_id' => 1,
        'payment_processor' => 1,
      ]);
    }
  }

}
