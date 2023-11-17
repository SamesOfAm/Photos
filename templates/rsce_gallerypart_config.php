<?php
return array(
  'label' => array('Tedes-Galerie', 'Fotogalerie für die Tedeshochzeit'),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'type' => array(
      'label' => array('Art', 'Ausrichtung der Bilder'),
      'inputType' => 'select',
      'options' => array('Großes Bild links', 'Großes Bild rechts')
    ),
    'bigImage' => array(
      'label' => array('Großes Bild', ''),
      'inputType' => 'fileTree',
      'eval' => array('filesOnly' => true)
    ),
    'bigImageText' => array(
      'label' => array('Text für Großes Bild', 'Optionaler Text zum großen Bild'),
      'inputType' => 'text'
    ),
    'smallImages' => array(
      'label' => array('Kleine Bilder', 'Rechts auf "Neues Element" klicken'),
      'inputType' => 'list',
      'fields' => array(
        'file' => array(
          'label' => array('URL', 'Die URL, auf die verlinkt werden soll'),
          'inputType' => 'fileTree',
          'eval' => array('filesOnly' => true)
        ),
        'text' => array(
          'label' => array('Text', 'Optionaler Text zum Bild'),
          'inputType' => 'text'
        )
      )
    ),
  ),
);
