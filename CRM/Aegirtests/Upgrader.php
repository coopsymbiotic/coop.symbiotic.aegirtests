<?php

/**
 * Collection of upgrade steps.
 */
class CRM_Aegirtests_Upgrader extends CRM_Aegirtests_Upgrader_Base {

  // By convention, functions that look like "function upgrade_NNNN()" are
  // upgrade tasks. They are executed in order (like Drupal's hook_update_N).

  /**
   * Install hook.
   */
  public function install() {
    CRM_Aegirtests_BAO_Utils::enableIatsExtension();
    CRM_Aegirtests_BAO_Utils::createTestContributions();

    // This must be done at the end, otherwise we need to reset
    // the lcMessage variables etc (not very documented/supported).
    CRM_Aegirtests_BAO_Utils::enableMultiLingual();
  }

  /**
   * Uninstall hook.
   */
  public function uninstall() {
  }

  /**
   * Enable hook.
   */
  public function enable() {
  }

  /**
   * Example: Run a simple query when a module is disabled.
   */
  public function disable() {
  }

}
