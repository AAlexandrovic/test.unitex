<?php

function sqlConnect ()
{
  return mysqli_connect('localhost', 'root', '', 'test-local');
}
