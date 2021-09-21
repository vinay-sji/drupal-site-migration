<?php


$settings['hash_salt'] = 'Mn_9UTVaqvBxlCebt2fgYx7dTXKQEY4TDZcsQ-XYEoxVhuKKOg8ILkkNgFcfTlz8x4k5tOeg8g';

$databases['default']['default'] = array (
  'database' => 'drupal_site_migration',
  'username' => 'root',
  'password' => '',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$settings['update_free_access'] = FALSE;
ini_set('memory_limit', '-1');
$settings['trusted_host_patterns'] = array(
 '^drupal-site-migration\.sj$',
 '^.+\.drupal-site-migration\.sj$',
);

$settings['container_yamls'][] = 'sites/default/services.yml';
$settings['file_temp_path'] = 'sites/default/files/tmp';
$config['system.file']['path']['temporary'] = 'sites/default/files/tmp';
$config['preprocess_css'] = FALSE;
$config['preprocess_js'] = FALSE;
$config['system.performance']['css']['preprocess'] = 0;
$config['system.performance']['js']['preprocess'] = 0;
$config['advagg.settings']['enable'] = FALSE;