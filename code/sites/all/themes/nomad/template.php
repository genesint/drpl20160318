<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function nomad_theme()
{
    $items = array();

    $items['user_login'] = array(
        'render element' => 'form',
        #'path' => drupal_get_path('theme', 'nomad') . '/templates',
        'template' => 'user-login',
        'preprocess functions' => array(
            'nomad_preprocess_user_login'
        ),
    );
    $items['user_register_form'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'nomad') . '/templates',
        'template' => 'user-register-form',
        'preprocess functions' => array(
            'nomad_preprocess_user_register_form'
        ),
    );
    $items['user_pass'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'nomad') . '/templates',
        'template' => 'user-pass',
        'preprocess functions' => array(
            'nomad_preprocess_user_pass'
        ),
    );
    return $items;
}

function nomad_preprocess_user_login(&$vars)
{
    $vars['intro_text'] = t('Welcome to the nomad advertising briefing 24/7 platform');
}

function nomad_preprocess_user_register_form(&$vars)
{
    $vars['intro_text'] = t('This is my super awesome reg form');
}

function nomad_preprocess_user_pass(&$vars)
{
    $vars['intro_text'] = t('This is my super awesome request new password form');
}

function nomad_textfield($variables)
{
    $element = $variables['element'];
    $element['#attributes']['type'] = 'text';
    element_set_attributes($element, array(
        'id',
        'name',
        'value',
        'size',
        'maxlength',
    ));
    _form_set_class($element, array('form-text'));

    $output = '<input' . drupal_attributes($element['#attributes']) . ' />';
    if ($element['#name'] == 'name') {
        $prefix0 = '<div class="input-group margin-bottom-sm"><span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>';
        $suffix0 = "</div>";
        $output = $prefix0 . $output . $suffix0;
    }
    $extra = '';
    if ($element['#autocomplete_path'] && !empty($element['#autocomplete_input'])) {
        drupal_add_library('system', 'drupal.autocomplete');
        $element['#attributes']['class'][] = 'form-autocomplete';

        $attributes = array();
        $attributes['type'] = 'hidden';
        $attributes['id'] = $element['#autocomplete_input']['#id'];
        $attributes['value'] = $element['#autocomplete_input']['#url_value'];
        $attributes['disabled'] = 'disabled';
        $attributes['class'][] = 'autocomplete';
        // Uses icon for autocomplete "throbber".
        if ($icon = _bootstrap_icon('refresh')) {
            $output = '<div class="input-group">' . $output . '<span class="input-group-addon">' . $icon . '</span></div>';
        } // Fallback to using core's throbber.
        else {
            $output = '<div class="input-group">' . $output . '<span class="input-group-addon">';
            // The throbber's background image must be set here because sites may not
            // be at the root of the domain (ie: /) and this value cannot be set via
            // CSS.
            $output .= '<span class="autocomplete-throbber" style="background-image:url(' . url('misc/throbber.gif') . ')"></span>';
            $output .= '</span></div>';
        }
        $extra = '<input' . drupal_attributes($attributes) . ' />';
    }

    return $output . $extra;
}

function nomad_password($variables)
{
    $element = $variables['element'];
    $element['#attributes']['type'] = 'password';
    element_set_attributes($element, array('id', 'name', 'size', 'maxlength'));
    _form_set_class($element, array('form-text', 'form-control'));

    $output = '<input' . drupal_attributes($element['#attributes']) . ' />';

    if ($element['#name'] == 'pass') {
        $prefix1 = '<div class="input-group margin-bottom-sm"><span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>';
        $suffix1 = "</div>";
        $output = $prefix1 . $output . $suffix1;
    }
    return $output;
}