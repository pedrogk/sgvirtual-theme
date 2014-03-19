<?php
/**
 * @file
 * Theme setting callbacks for the Responsive Green theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 */
function sgvirtual_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['sgvirtual_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Responsive Green Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['sgvirtual_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs', 'sgvirtual'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );
  $form['sgvirtual_settings']['social'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social Icon'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['sgvirtual_settings']['social']['display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Social Icon'),
    '#default_value' => theme_get_setting('display', 'sgvirtual'),
    '#description'   => t("Check this option to show Social Icon. Uncheck to hide."),
  );
  $form['sgvirtual_settings']['social']['twitter'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter URL'),
    '#default_value' => theme_get_setting('twitter', 'sgvirtual'),
    '#description' => t("Enter your Twitter Profile URL. example:: http://www.xyz.com"),
  );
  $form['sgvirtual_settings']['social']['facebook'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook URL'),
    '#default_value' => theme_get_setting('facebook', 'sgvirtual'),
    '#description'   => t("Enter your Facebook Profile URL. example:: http://www.xyz.com"),
  );
  $form['sgvirtual_settings']['social']['linkedin'] = array(
    '#type' => 'textfield',
    '#title' => t('LinkedIn URL'),
    '#default_value' => theme_get_setting('linkedin', 'sgvirtual'),
    '#description'   => t("Enter your LinkedIn Profile URL. example:: http://www.xyz.com"),
  );
}
