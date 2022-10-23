<?php
if (file_exists('.env')) {
  $env_vars = file('.env');
  foreach($env_vars as $env_var) {
    echo $env_var;
    #echo str_replace('export ','',$env_var) . '\n';
    $env_var_pieces = explode('=', str_replace('export ','',$env_var));
    if (!defined($env_var_pieces[0])) {
      define($env_var_pieces[0], str_replace(PHP_EOL, '', $env_var_pieces[1]));
    }
  }
}
?>
