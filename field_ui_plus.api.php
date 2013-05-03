<?php

/**
 * @file
 * Hook descriptions.
 */

/**
 * Supply data for display, based on a field instance settings.
 *
 * Return an array of valid render elements. e.g.
 *
 * array(
 *   'element_1' => array(
 *     '#type' => 'html_tag',
 *     '#tag' => 'div',
 *     '#value' => 'string to be displayed, e.g. "Required".',
 *     '#attributes' => array(
 *       '#class' => array('some-useful-class'),
 *     ),
 *     '#weight' => 0,
 *   ),
 *   'element_2' => ...
 * )
 *
 * @param array $instance
 *   A field instance array.
 * @param array $field
 *   A field definition array.
 *
 * @return array
 *   An arra of render elements for display.
 */
function hook_field_ui_plus_instance_data($instance, $field) {
  $data = array();
  // Is this field instance required?
  if (!empty($instance['required'])) {
    // Add a renderable array for this configuration information.
    $data['required'] = array(
      '#type' => 'html_tag',
      '#tag' => 'div',
      '#value' => t('Required'),
      '#attributes' => array(
        'class' => array('field-ui-plus-data-required'),
      ),
      '#weight' => 0,
    );
  }
  return $data;
}
