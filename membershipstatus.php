<?php

require_once 'membershipstatus.civix.php';

function membershipstatus_civicrm_searchTasks( $objectName, &$tasks ) {
  if ($objectName == 'membership') {
    $taskFound = FALSE;

    // see if the task is already in the list
    foreach ($tasks as $task) {
      if ($task['class'] == 'CRM_Membershipstatus_Task_ChangeStatus') {
        $taskFound = TRUE;
        break;
      }
    }

    // if not found, add the task
    if (!$taskFound) {
      $tasks[] = array(
        'class' => 'CRM_Membershipstatus_Task_ChangeStatus',
        'title' => ts('Update PICUM membership status and create contribution'),
        'result' => FALSE,
      );
    }
  }

}
  /**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function membershipstatus_civicrm_config(&$config) {
  _membershipstatus_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function membershipstatus_civicrm_install() {
  _membershipstatus_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function membershipstatus_civicrm_uninstall() {
  _membershipstatus_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function membershipstatus_civicrm_enable() {
  _membershipstatus_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function membershipstatus_civicrm_disable() {
  _membershipstatus_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function membershipstatus_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _membershipstatus_civix_civicrm_upgrade($op, $queue);
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *

 // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function membershipstatus_civicrm_navigationMenu(&$menu) {
  _membershipstatus_civix_insert_navigation_menu($menu, NULL, array(
    'label' => ts('The Page', array('domain' => 'org.picum.membershipstatus')),
    'name' => 'the_page',
    'url' => 'civicrm/the-page',
    'permission' => 'access CiviReport,access CiviContribute',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _membershipstatus_civix_navigationMenu($menu);
} // */

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function membershipstatus_civicrm_postInstall() {
  _membershipstatus_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function membershipstatus_civicrm_entityTypes(&$entityTypes) {
  _membershipstatus_civix_civicrm_entityTypes($entityTypes);
}
