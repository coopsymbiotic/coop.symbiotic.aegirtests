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
   *
  public function disable() {
    CRM_Core_DAO::executeQuery('UPDATE foo SET is_active = 0 WHERE bar = "whiz"');
  }

}
